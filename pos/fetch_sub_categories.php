<?php
include "db.php"; // Include your database connection

if (isset($_POST['cat_id'])) {
    $cat_id = $_POST['cat_id'];

    // Query to fetch sub-categories based on selected category
    $query = "SELECT sub_cat_id, name FROM sub_category WHERE cat_id = '$cat_id'";
    $result = mysqli_query($connection, $query);

    // Generate sub-category dropdown options
    if (mysqli_num_rows($result) > 0) {
        echo '<option value="">Select Sub Category</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['sub_cat_id'] . '">' . $row['name'] . '</option>';
        }
    } else {
        echo '<option value="">No Sub Categories Available</option>';
    }
}
?>
