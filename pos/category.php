<?php
include "db.php"; // Include your database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Category</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Insert New Category</h2>
    
    <form method="POST" action="">
        <!-- ID field -->
        <div class="mb-3">
            <label for="category_id" class="form-label">Category ID</label>
            <input type="text" class="form-control" id="category_id" name="category_id" placeholder="Enter category ID" required>
        </div>

        <!-- Name field -->
        <div class="mb-3">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter category name" required>
        </div>

        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">Insert Category</button>
        </div>
    </form>

    <?php
    // PHP to handle form submission and insert into database
    if (isset($_POST['submit'])) {
        $id = $_POST['category_id'];
        $name = $_POST['category_name'];

        // Insert query
        $insert_query = "INSERT INTO category (id, name) VALUES ('$id', '$name')";
        $result = mysqli_query($connection, $insert_query);

        if ($result) {
            echo '<div class="alert alert-success mt-3" role="alert">
                    Category added successfully!
                  </div>';
        } else {
            echo '<div class="alert alert-danger mt-3" role="alert">
                    Error: Could not insert category.
                  </div>';
        }
    }
    ?>
</div>

<!-- Bootstrap 5 JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
