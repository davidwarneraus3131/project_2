<?php
 include(__DIR__ . '/../../database/db.php'); 
 include '../admin_header.php';
  ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    

     

<?php
// Fetch users
$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM users WHERE role='user' AND (name LIKE '%$search%' OR email LIKE '%$search%' OR phone LIKE '%$search%')";
} else {
    $sql = "SELECT * FROM users WHERE role='user'";
}
$result = $conn->query($sql);
?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">USERS</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Users List</h4>
                            <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addUserModal">
    <i class="fa fa-plus"></i> Add User
</button>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="user-table" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>User Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <td><img src="<?= "../../assets/images/users/" . htmlspecialchars($row['user_img'] ?? '') ?>" alt="User Image" width="100"></td>
                                            <td><?= htmlspecialchars($row['name'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['email'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['phone'] ?? '') ?></td>
                                            <td><button class="btn btn-sm <?= $row['is_verified'] == 0 ? 'btn-warning' : 'btn-success' ?> toggleStatus" 
        data-id="<?= $row['id'] ?>" 
        data-status="<?= $row['is_verified'] ?>">
        <?= $row['is_verified'] == 0 ? ' Unverified' : ' Verified' ?>
    </button></td>
                                            <td>
                                            <button class="btn btn-primary viewUser" data-id="<?= $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#viewUserModal">
                        <i class="fa fa-eye"></i> 
                    </button>



                                                <button class="btn btn-primary editUser" data-id="<?= $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button class="btn btn-danger deleteUser" data-id="<?= $row['id'] ?>">
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

<!-- ADD USER MODAL -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="addUserForm">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Add User</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- EDIT USER MODAL -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="editUserForm">
                    <input type="hidden" name="id" id="editUserId">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="editUserName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="editUserEmail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" id="editUserPhone" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update User</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Viewing User Details -->
<div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewUserModalLabel">User Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="user-details">
                    <!-- User details will be injected here via JS -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- JS to Load User Details into Modal -->
<script>
    document.querySelectorAll('.viewUser').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-id');
            
            // Fetch user details using AJAX
            fetch('get_user_details.php?id=' + userId)
                .then(response => response.json())
                .then(data => {
                    const userDetails = `
                        <p><strong>Name:</strong> ${data.name}</p>
                        <p><strong>Email:</strong> ${data.email}</p>
                        <p><strong>Phone:</strong> ${data.phone}</p>
                        
                      
                    `;
                    document.getElementById('user-details').innerHTML = userDetails;
                })
                .catch(error => {
                    console.log('Error:', error);
                });
        });
    });
</script>

<script>
$(document).ready(function() {

    // ADD USER
    $("#addUserForm").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "add_user.php",
            data: $(this).serialize(),
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'User Added!',
                    text: response,
                    confirmButtonText: 'OK'
                }).then(() => {
                    $("#addUserModal").modal("hide");
                    location.reload();
                });
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Error adding user.',
                    confirmButtonText: 'Try Again'
                });
            }
        });
    });

    // EDIT USER - OPEN MODAL
    $(document).on("click", ".editUser", function() {
        var id = $(this).data("id");
        $.ajax({
            type: "GET",
            url: "get_user.php",
            data: { id: id },
            success: function(data) {
                var user = JSON.parse(data);
                $("#editUserId").val(user.id);
                $("#editUserName").val(user.name);
                $("#editUserEmail").val(user.email);
                $("#editUserPhone").val(user.phone);
                $("#editUserModal").modal("show");
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Error fetching user details.',
                    confirmButtonText: 'OK'
                });
            }
        });
    });

    // UPDATE USER
    $("#editUserForm").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "update_user.php",
            data: $(this).serialize(),
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'User Updated!',
                    text: response,
                    confirmButtonText: 'OK'
                }).then(() => {
                    $("#editUserModal").modal("hide");
                    location.reload();
                });
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Error updating user.',
                    confirmButtonText: 'Try Again'
                });
            }
        });
    });

    // DELETE USER
    $(document).on("click", ".deleteUser", function() {
        var id = $(this).data("id");
        Swal.fire({
            title: "Are you sure?",
            text: "This user will be deleted permanently!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "delete_user.php",
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
                            text: 'Error deleting user.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }
        });
    });

});




// TOGGLE  USER STATUS

$(document).ready(function () {
    $(".toggleStatus").click(function () {
        var button = $(this);
        var userId = button.data("id");
        var currentStatus = button.data("status");

        $.ajax({
            url: "update_user_status.php",
            type: "POST",
            data: { user_id: userId, status: currentStatus },
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    button.data("status", response.new_status);
                    if (response.new_status == 1) {
                        button.removeClass("btn-warning").addClass("btn-success").text("Verified");
                    } else {
                        
                        button.removeClass("btn-success").addClass("btn-warning").text("Unverified");
                    }
                    Swal.fire("Success", "User status updated!", "success");
                } else {
                    Swal.fire("Error", "Failed to update User status!", "error");
                }
            }
        });
    });
});


</script>








<?php  include '../admin_footer.php'; ?>