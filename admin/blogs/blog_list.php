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
$sql = "SELECT id, title, category, image, author, author_image, publish_date, short_description, blog_link, featured, tags, updated_at FROM blogs";
$result = $conn->query($sql);
?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">BLOGS</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Blog List</h4>
                            <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addBlogModal">
                                Add Blog
                            </button>
                        </div>
                        <div class="mt-3">
                            <input type="text" id="searchTitle" class="form-control" placeholder="Search Blog Title">
                            <input type="text" id="searchAuthor" class="form-control mt-2" placeholder="Search Author">
                            <select id="searchCategory" class="form-control mt-2">
                                <option value="">All Categories</option>
                                <option value="Technology">Technology</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Travel">Travel</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="blog-table" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Publish Date</th>
                                        <th>Short Description</th>
                                        <th>Featured</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <td>
                                                <img src="<?= "../../assets/images/blogs/" . htmlspecialchars($row['image'] ?? '') ?>" alt="Blog Image" width="100">
                                            </td>
                                            <td><?= htmlspecialchars($row['title'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['category'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['author'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['publish_date'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['short_description'] ?? '') ?></td>
                                            <td><?= isset($row['featured']) ? ($row['featured'] == 1 ? 'Yes' : 'No') : '' ?></td>

                                            <td>
                                                <button class="btn btn-primary editBlog" data-id="<?= $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#editBlogModal">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button class="btn btn-danger deleteBlog" data-id="<?= $row['id'] ?>">
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

<!-- ADD BLOG MODAL -->
<div class="modal fade" id="addBlogModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addBlogForm" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Title:</label>
                            <input type="text" name="title" class="form-control" required><br>

                            <label>Category:</label>
                            <input type="text" name="category" class="form-control" required><br>

                            <label>Author:</label>
                            <input type="text" name="author" class="form-control" required><br>

                            <label>Author Image:</label>
                            <input type="file" name="author_image" class="form-control"><br>

                            <label>Publish Date:</label>
                            <input type="date" name="publish_date" class="form-control" required><br>

                            <label>Short Description:</label>
                            <textarea name="short_description" class="form-control"></textarea><br>

                            <label>Blog Link:</label>
                            <input type="text" name="blog_link" class="form-control"><br>

                            <label>Featured:</label>
                            <select name="featured" class="form-control">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select><br>

                            <label>Tags:</label>
                            <input type="text" name="tags" class="form-control"><br>
                        </div>

                        <div class="col-md-6">
                            <label>Blog Image:</label>
                            <input type="file" name="image" class="form-control"><br>

                            <button type="submit" class="btn btn-success mt-3">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- EDIT BLOG MODAL -->
<div class="modal fade" id="editBlogModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editBlogForm">
                    <input type="hidden" name="id" id="editBlogId">

                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Title</label>
                        <input type="text" name="title" id="editTitle" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editCategory" class="form-label">Category</label>
                        <input type="text" name="category" id="editCategory" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editAuthor" class="form-label">Author</label>
                        <input type="text" name="author" id="editAuthor" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editAuthorImage" class="form-label">Author Image</label>
                        <input type="file" name="author_image" id="editAuthorImage" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editPublishDate" class="form-label">Publish Date</label>
                        <input type="date" name="publish_date" id="editPublishDate" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editShortDescription" class="form-label">Short Description</label>
                        <textarea name="short_description" id="editShortDescription" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="editBlogLink" class="form-label">Blog Link</label>
                        <input type="text" name="blog_link" id="editBlogLink" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editFeatured" class="form-label">Featured</label>
                        <select name="featured" id="editFeatured" class="form-control">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="editTags" class="form-label">Tags</label>
                        <input type="text" name="tags" id="editTags" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editImage" class="form-label">Blog Image</label>
                        <input type="file" name="image" id="editImage" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Update Blog</button>
                </form>
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
    // ADD BLOG
    $("#addBlogForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "add_blogs.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Blog Added!',
                    text: response,
                    confirmButtonText: 'OK'
                }).then(() => {
                    $("#addBlogModal").modal("hide");
                    location.reload();
                });
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Error adding blog.',
                    confirmButtonText: 'Try Again'
                });
            }
        });
    });

    // EDIT BLOG - OPEN MODAL
    $(document).on("click", ".editBlog", function() {
        var id = $(this).data("id");
        $.ajax({
            type: "GET",
            url: "get_blogs.php",
            data: { id: id },
            success: function(data) {
                var blog = JSON.parse(data);
                $("#editBlogId").val(blog.id);
                $("#editTitle").val(blog.title);
                $("#editCategory").val(blog.category);
                $("#editAuthor").val(blog.author);
                $("#editPublishDate").val(blog.publish_date);
                $("#editShortDescription").val(blog.short_description);
                $("#editBlogLink").val(blog.blog_link);
                $("#editFeatured").val(blog.featured);
                $("#editTags").val(blog.tags);
                $("#editBlogModal").modal("show");
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Error fetching blog details.',
                    confirmButtonText: 'OK'
                });
            }
        });
    });

    // UPDATE BLOG
    $("#editBlogForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "update_blogs.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Blog Updated!',
                    text: response,
                    confirmButtonText: 'OK'
                }).then(() => {
                    $("#editBlogModal").modal("hide");
                    location.reload();
                });
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Error updating blog.',
                    confirmButtonText: 'Try Again'
                });
            }
        });
    });

    // DELETE BLOG
    $(document).on("click", ".deleteBlog", function() {
        var id = $(this).data("id");
        Swal.fire({
            title: "Are you sure?",
            text: "This blog will be deleted permanently!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "delete_blogs.php",
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