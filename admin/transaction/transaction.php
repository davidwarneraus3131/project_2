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
// Fetch blogs
$sql = "SELECT * FROM payments ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Transaction List</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="blog-table" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>UserName</th>
                                        <th>Transaction ID</th>
                                        <th>Amount</th>
                                        <th>Plan Details</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            
                                            <td><?= htmlspecialchars($row['username'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['payment_id'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['amount'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['plan'] ?? '') ?></td>
                                            <td>
    <?= htmlspecialchars(date('M d, Y h:i A', strtotime($row['created_at']))) ?>
</td>

                                            
                                         

                                            <td>
                                                <!-- <button class="btn btn-primary editBlog" data-id="<?= $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#editBlogModal">
                                                    <i class="fa fa-edit"></i>
                                                </button> -->
                                                <button class="btn btn-danger deletetrans" data-id="<?= $row['id'] ?>">
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
    var table = $('#blog-table').DataTable();
    
    $('#searchTitle').on('keyup', function () {
        table.column(1).search(this.value).draw();
    });
    
    $('#searchAuthor').on('keyup', function () {
        table.column(3).search(this.value).draw();
    });
    
    $('#searchCategory').on('change', function () {
        table.column(2).search(this.value).draw();
    });
});
</script>

<script>
$(document).ready(function() {
  


    // DELETE BLOG
    $(document).on("click", ".deletetrans", function() {
        var id = $(this).data("id");
        Swal.fire({
            title: "Are you sure?",
            text: "This Message will be deleted permanently!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "delete_transaction.php",
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
                            text: 'Error deleting blog.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }
        });
    });
});
</script>

<?php include '../admin_footer.php'; ?>