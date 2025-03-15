<?php
 include(__DIR__ . '/../../database/db.php'); 
 include '../admin_header.php';
  ?>






<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>



    

     
<?php


// Fetch users
// $sql = "SELECT properties.*, users.name AS agent_name, users.email AS agent_email 
//         FROM properties 
//         JOIN users ON properties.agent_id = users.id 
//         WHERE properties.property_status = 0";




$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'guest';
$agent_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0; 

// Fetch properties based on user role
if ($role === 'admin') {
    $sql = "SELECT properties.*, users.* 
    FROM properties 
    JOIN users ON properties.agent_id = users.id
    WHERE properties.property_status = 0";
} elseif ($role === 'agent') {
    $sql = "SELECT * FROM properties WHERE agent_id = $agent_id AND property_status = 0"; 
} else {
    echo "Unauthorized access!";
    exit;
}

$result = $conn->query($sql);
?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">PROPERTIES</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <!-- <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Property List</h4>
                            <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addPropertyModal">
                                Add Property
                            </button>
                        </div>
                        <div class="mt-3">
                            <input type="text" id="searchName" class="form-control" placeholder="Search Property Name">
                            <input type="text" id="searchLocation" class="form-control mt-2" placeholder="Search Location">
                            <select id="searchStatus" class="form-control mt-2">
                                <option value="">All Status</option>
                                <option value="Available">Available</option>
                                <option value="Sold">Sold</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="property-table" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                    <?php if ($role === 'admin') { ?>
            <th>Agent Name</th>
        <?php } ?>
                                       
                                        <th>Property Image</th>
                                        <th>Property Name</th>
                                        <th>Price</th>
                                        <th>Location</th>
                                        <th>square_feet</th>
                                        <?php if ($role === 'admin') { ?>
            <th>Property Status</th>
        <?php } ?>
                                        <th>country</th>
                                        
                                        
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                        <?php if ($role === 'admin') { ?>
                                        <td><?= htmlspecialchars($row['name'] ?? '') ?></td>
                                        <?php } ?>



                                            <td>    <img src="<?= "../../assets/images/property/" . htmlspecialchars($row['property_img1'] ?? '') ?>" alt="Property Image" width="100">
                                            </td>

                                            <td><?= htmlspecialchars($row['property_name'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['price'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['location'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['square_feet'] ?? '') ?></td>

                                            <?php if ($role === 'admin') { ?>
                                            <td>
    <button class="btn btn-sm <?= $row['property_status'] == 0 ? 'btn-success' : 'btn-warning' ?> toggleStatus" 
        data-id="<?= $row['id'] ?>" 
        data-status="<?= $row['property_status'] ?>">
        <?= $row['property_status'] == 0 ? 'Approve' : 'Reject' ?>
    </button>
</td>
<?php } ?>

                                            <td><?= htmlspecialchars($row['country'] ?? '') ?></td>
                                            
                                            <td>
                                                <!-- <button class="btn btn-primary editProperty" data-id="<?= $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#editPropertyModal">
                                                    <i class="fa fa-edit"></i>
                                                </button> -->
                                                <button class="btn btn-danger deleteProperty" data-id="<?= $row['id'] ?>">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<script>
$(document).ready(function () {
    var table = $('#property-table').DataTable();
    
    $('#searchName').on('keyup', function () {
        table.column(1).search(this.value).draw();
    });
    
    $('#searchLocation').on('keyup', function () {
        table.column(3).search(this.value).draw();
    });
    
    $('#searchStatus').on('change', function () {
        table.column(5).search(this.value).draw();
    });
});
</script>


<script>
$(document).ready(function () {
    $(".toggleStatus").click(function () {
        var button = $(this);
        var propertyId = button.data("id");
        var currentStatus = button.data("status");

        $.ajax({
            url: "update_property_status.php",
            type: "POST",
            data: { property_id: propertyId, status: currentStatus },
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    button.data("status", response.new_status);
                    if (response.new_status == 1) {
                        button.removeClass("btn-success").addClass("btn-warning").text("Deactivate");
                    } else {
                        button.removeClass("btn-warning").addClass("btn-success").text("Activate");
                    }
                    Swal.fire("Success", "Property status updated!", "success");
                } else {
                    Swal.fire("Error", "Failed to update status!", "error");
                }
            }
        });
    });
});







    // DELETE PROPERTY
    $(document).on("click", ".deleteProperty", function() {
        var id = $(this).data("id");
        Swal.fire({
            title: "Are you sure?",
            text: "This property will be deleted permanently!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "delete_property.php",
                    data: { id: id },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: response,
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: 'Error deleting property.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }
        });
    });





</script>













<?php  include '../admin_footer.php'; ?>