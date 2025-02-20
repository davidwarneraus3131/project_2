<form method="post" action="ins_floor.php" enctype="multipart/form-data">
    <label>Property Name:</label>
    <input type="text" name="property_name" required>

    <label>Floor Plan (JSON Format):</label>
    <textarea name="floor_plans" rows="5" placeholder='[{"floor_name": "First Floor", "description": "Floor description", "image_url": "floor1.png"}]' required></textarea>

    <button type="submit" name="submit">Add Property</button>
</form>
