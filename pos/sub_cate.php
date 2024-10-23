<?php
include "db.php"; // Include your database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Sub Category</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Insert New Sub Category</h2>
    
    <form method="POST" action="">
        <!-- Sub Category ID field -->
       

        <!-- Category ID Dropdown (Populated dynamically) -->
        <div class="mb-3">
            <label for="cat_id" class="form-label">Category</label>
            <select class="form-select" id="cat_id" name="cat_id" required>
                <option value="">Select Category</option>
                <?php
                // Fetch categories from the database
                $select_query = "SELECT id, name FROM category";
                $result = mysqli_query($connection, $select_query);

                // Loop through the categories and display them in the dropdown
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                }
                ?>
            </select>
        </div>

        <!-- Sub Category Name field -->
        <div class="mb-3">
            <label for="sub_cat_name" class="form-label">Sub Category Name</label>
            <input type="text" class="form-control" id="sub_cat_name" name="sub_cat_name" placeholder="Enter Sub Category Name" required>
        </div>

        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">Insert Sub Category</button>
        </div>
    </form>

    <?php
    // PHP to handle form submission and insert into database
    if (isset($_POST['submit'])) {
        // $sub_cat_id = $_POST['sub_cat_id'];
        $cat_id = $_POST['cat_id'];
        $sub_cat_name = $_POST['sub_cat_name'];

        // Insert query
        $insert_query = "INSERT INTO sub_category (cat_id, name) VALUES ( '$cat_id', '$sub_cat_name')";
        $result = mysqli_query($connection, $insert_query);

        if ($result) {
            echo '<div class="alert alert-success mt-3" role="alert">
                    Sub Category added successfully!
                  </div>';
        } else {
            echo '<div class="alert alert-danger mt-3" role="alert">
                    Error: Could not insert sub category.
                  </div>';
        }
    }
    ?>
</div>

<!-- Bootstrap 5 JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
