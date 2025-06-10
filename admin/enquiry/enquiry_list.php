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



$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'guest';
$agent_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;

// Fetch properties based on user role
if ($role === 'admin') {
    $sql = "
   SELECT 
    enquiry.*, 
    users.name AS agent_name, 
    users.email AS agent_email,
    properties.property_name, 
    properties.location 
FROM enquiry
LEFT JOIN users ON enquiry.agent_id = users.id
LEFT JOIN properties ON enquiry.property_id = properties.id
ORDER BY enquiry.created_at DESC;

";
    // Admin sees all properties
} elseif ($role === 'agent') {
    $sql = "
    SELECT 
    enquiry.*, 
    users.name AS agent_name, 
    users.email AS agent_email,
    properties.property_name, 
    properties.location 
FROM enquiry
LEFT JOIN users ON enquiry.agent_id = users.id
LEFT JOIN properties ON enquiry.property_id = properties.id 
WHERE enquiry.agent_id = $agent_id
ORDER BY enquiry.created_at DESC;

";

} else {
    echo "Unauthorized access!";
    exit;
}

$result = $conn->query($sql);
?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Enquiry</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Enquiry List</h4>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="property-table" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Agent Name</th>
                                        <th>Property Name</th>
                                        <th>Customer Name</th>
                                        <th>Customer Email</th>
                                        <th>Customer Phone</th>
                                        <th>Customer Message</th>
                                        <th>Date</th>


                                        <!-- <th>Actions</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>





                                            <td><?= htmlspecialchars($row['agent_name'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['property_name'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['name'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['email'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['phone'] ?? '') ?></td>
                                            <td><?= htmlspecialchars($row['message'] ?? '') ?></td>
                                            <td><?php echo htmlspecialchars(isset($row['created_at']) ? $row['created_at'] : '', ENT_QUOTES, 'UTF-8'); ?>
                                            </td>

                                            <!-- <td>
                                               
                                                <button class="btn btn-danger deleteProperty" data-id="<?= $row['id'] ?>">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td> -->

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


<!-- ADD PROPERTY MODAL -->
<div class="modal fade" id="addPropertyModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Property</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addPropertyForm" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Property Name:</label>
                            <input type="text" name="property_name" class="form-control" required><br>

                            <label>Price:</label>
                            <input type="number" name="price" class="form-control" required><br>

                            <label>Location:</label>
                            <input type="text" name="location" class="form-control" required><br>

                            <label>Description:</label>
                            <textarea name="description" class="form-control"></textarea><br>

                            <label>Beds:</label>
                            <input type="number" name="beds" class="form-control"><br>

                            <label>Baths:</label>
                            <input type="number" name="baths" class="form-control"><br>

                            <label>Square Feet:</label>
                            <input type="number" name="square_feet" class="form-control"><br>

                            <label>Country:</label>
                            <input type="text" name="country" class="form-control"><br>

                            <label>State/County:</label>
                            <input type="text" name="state_county" class="form-control"><br>

                            <label>City:</label>
                            <input type="text" name="city" class="form-control"><br>

                            <label>Address:</label>
                            <input type="text" name="address" class="form-control"><br>

                            <label>ZIP/Postal Code:</label>
                            <input type="text" name="zip_postal_code" class="form-control"><br>

                            <label>Rooms:</label>
                            <input type="number" name="rooms" class="form-control"><br>

                            <label>Garage Size:</label>
                            <input type="number" name="garage_size" class="form-control"><br>

                            <label>Year Built:</label>
                            <input type="number" name="year_built" class="form-control"><br>

                            <label>Property Type:</label>
                            <input type="text" name="property_type" class="form-control"><br>

                            <label>Status:</label>
                            <input type="text" name="status" class="form-control"><br>
                        </div>

                        <div class="col-md-6">
                            <label>Amenities:</label>
                            <input type="text" name="amenities_1" class="form-control" placeholder="Amenity 1"><br>
                            <input type="text" name="amenities_2" class="form-control" placeholder="Amenity 2"><br>
                            <input type="text" name="amenities_3" class="form-control" placeholder="Amenity 3"><br>
                            <input type="text" name="amenities_4" class="form-control" placeholder="Amenity 4"><br>
                            <input type="text" name="amenities_5" class="form-control" placeholder="Amenity 5"><br>
                            <input type="text" name="amenities_6" class="form-control" placeholder="Amenity 6"><br>

                            <label>Property Images:</label>
                            <input type="file" name="property_img1" class="form-control"><br>
                            <input type="file" name="property_img2" class="form-control"><br>
                            <input type="file" name="property_img3" class="form-control"><br>
                            <input type="file" name="property_img4" class="form-control"><br>
                            <input type="file" name="property_img5" class="form-control"><br>
                            <input type="file" name="property_img6" class="form-control"><br>

                            <label>Floor Plans:</label>
                            <input type="text" name="floor_plan_1_description" class="form-control"
                                placeholder="Floor Plan 1 Description"><br>
                            <input type="file" name="floor_plan_1_image" class="form-control"><br>
                            <input type="text" name="floor_plan_2_description" class="form-control"
                                placeholder="Floor Plan 2 Description"><br>
                            <input type="file" name="floor_plan_2_image" class="form-control"><br>
                            <input type="text" name="floor_plan_3_description" class="form-control"
                                placeholder="Floor Plan 3 Description"><br>
                            <input type="file" name="floor_plan_3_image" class="form-control"><br>

                            <button type="submit" class="btn btn-success mt-3">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- EDIT PROPERTY MODAL -->
<div class="modal fade" id="editPropertyModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Property</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editPropertyForm">
                    <input type="hidden" name="id" id="editPropertyId">

                    <div class="mb-3">
                        <label for="editPropertyName" class="form-label">Property Name</label>
                        <input type="text" name="property_name" id="editPropertyName" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editPrice" class="form-label">Price</label>
                        <input type="number" name="price" id="editPrice" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editLocation" class="form-label">Location</label>
                        <input type="text" name="location" id="editLocation" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editDescription" class="form-label">Description</label>
                        <textarea name="description" id="editDescription" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="editBeds" class="form-label">Beds</label>
                        <input type="number" name="beds" id="editBeds" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editBaths" class="form-label">Baths</label>
                        <input type="number" name="baths" id="editBaths" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editSquareFeet" class="form-label">Square Feet</label>
                        <input type="number" name="square_feet" id="editSquareFeet" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editCountry" class="form-label">Country</label>
                        <input type="text" name="country" id="editCountry" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editStateCounty" class="form-label">State/County</label>
                        <input type="text" name="state_county" id="editStateCounty" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editCity" class="form-label">City</label>
                        <input type="text" name="city" id="editCity" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editAddress" class="form-label">Address</label>
                        <input type="text" name="address" id="editAddress" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editZip" class="form-label">ZIP/Postal Code</label>
                        <input type="text" name="zip_postal_code" id="editZip" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editRooms" class="form-label">Rooms</label>
                        <input type="number" name="rooms" id="editRooms" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editGarageSize" class="form-label">Garage Size</label>
                        <input type="text" name="garage_size" id="editGarageSize" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editYearBuilt" class="form-label">Year Built</label>
                        <input type="number" name="year_built" id="editYearBuilt" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editPropertyType" class="form-label">Property Type</label>
                        <input type="text" name="property_type" id="editPropertyType" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editStatus" class="form-label">Status</label>
                        <input type="text" name="status" id="editStatus" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editRating" class="form-label">Rating</label>
                        <input type="number" name="rating" id="editRating" class="form-control" step="0.1">
                    </div>

                    <div class="mb-3">
                        <label for="editPropertyImages" class="form-label">Property Images</label>
                        <input type="file" name="property_img1" class="form-control">
                        <input type="file" name="property_img2" class="form-control">
                        <input type="file" name="property_img3" class="form-control">
                        <input type="file" name="property_img4" class="form-control">
                        <input type="file" name="property_img5" class="form-control">
                        <input type="file" name="property_img6" class="form-control">


                    </div>

                    <div class="mb-3">
                        <label for="editAmenities" class="form-label">Amenities</label>
                        <input type="text" name="amenities_1" class="form-control" placeholder="Amenity 1">
                        <input type="text" name="amenities_2" class="form-control" placeholder="Amenity 2">
                        <input type="text" name="amenities_3" class="form-control" placeholder="Amenity 3">
                        <input type="text" name="amenities_4" class="form-control" placeholder="Amenity 4">
                        <input type="text" name="amenities_5" class="form-control" placeholder="Amenity 5">
                        <input type="text" name="amenities_6" class="form-control" placeholder="Amenity 6">
                    </div>

                    <div class="mb-3">
                        <label for="editFloorPlan" class="form-label">Floor Plans</label>
                        <input type="text" name="floor_plan_1_description" class="form-control"
                            placeholder="Floor Plan 1 Description">
                        <input type="file" name="floor_plan_1_image" class="form-control">
                        <input type="text" name="floor_plan_2_description" class="form-control"
                            placeholder="Floor Plan 2 Description">
                        <input type="file" name="floor_plan_2_image" class="form-control">
                        <input type="text" name="floor_plan_3_description" class="form-control"
                            placeholder="Floor Plan 3 Description">
                        <input type="file" name="floor_plan_3_image" class="form-control">
                    </div>

                    <!-- add home page filters -->
                    <div class="mb-3">
                        <label for="editFeatured">Featured Property?</label>
                        <select class="form-control" id="editFeatured" name="featured">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editpicks">is Populae Pick?</label>
                        <select class="form-control" id="edipicks" name="picks">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editpremium">is Premium?</label>
                        <select class="form-control" id="editpremium" name="premium">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Update Property</button>
                </form>
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

        $("#addPropertyForm").submit(function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "add_property.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Property Added!',
                        text: response,
                        confirmButtonText: 'OK'
                    }).then(() => {
                        $("#addPropertyModal").modal("hide");
                        location.reload();
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Error adding property.',
                        confirmButtonText: 'Try Again'
                    });
                }
            });
        });


        // EDIT PROPERTY - OPEN MODAL
        $(document).on("click", ".editProperty", function () {
            var id = $(this).data("id");
            $.ajax({
                type: "GET",
                url: "get_property.php",
                data: { id: id },
                success: function (data) {
                    var property = JSON.parse(data);
                    $("#editPropertyId").val(property.id);
                    $("#editPropertyName").val(property.property_name);
                    $("#editPrice").val(property.price);
                    $("#editLocation").val(property.location);
                    $("#editBeds").val(property.beds);
                    $("#editBaths").val(property.baths);
                    $("#editSquareFeet").val(property.square_feet);

                    $("editfeatured").val(property.featured);
                    $("editpremium").val(property.is_premium);
                    $("editpicks").val(property.picks);
                    $("#editPropertyModal").modal("show");
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Error fetching property details.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });

        $("#editPropertyForm").submit(function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "update_property.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Property Updated!',
                        text: response,
                        confirmButtonText: 'OK'
                    }).then(() => {
                        $("#editPropertyModal").modal("hide");
                        location.reload();
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Error updating property.',
                        confirmButtonText: 'Try Again'
                    });
                }
            });
        });

        // DELETE PROPERTY
        $(document).on("click", ".deleteProperty", function () {
            var id = $(this).data("id");
            Swal.fire({
                title: "Are you sure?",
                text: "This Enquiry will be deleted permanently!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "delete_enquiry.php",
                        data: { id: id },
                        success: function (response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: response,
                                confirmButtonText: 'OK'
                            }).then(() => {
                                location.reload();
                            });
                        },
                        error: function () {
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

    });
</script>








<?php include '../admin_footer.php'; ?>