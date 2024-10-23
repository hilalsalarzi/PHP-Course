<?php
include "db.php"; // Include your database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert 3rd Category with AJAX</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Insert New 3rd Category</h2>
    
    <form method="POST" action="">
        <!-- 3rd Category ID field -->
        <!-- <div class="mb-3">
            <label for="id" class="form-label">3rd Category ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Enter 3rd Category ID" required>
        </div> -->

        <!-- Category Dropdown -->
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

        <!-- Sub Category Dropdown -->
        <div class="mb-3">
            <label for="sub_cat_id" class="form-label">Sub Category</label>
            <select class="form-select" id="sub_cat_id" name="sub_cat_id" required>
                <option value="">Select Sub Category</option>
                <!-- Subcategories will be populated using AJAX -->
            </select>
        </div>

        <!-- 3rd Category Name field -->
        <div class="mb-3">
            <label for="name" class="form-label">3rd Category Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter 3rd Category Name" required>
        </div>

        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">Insert 3rd Category</button>
        </div>
    </form>

    <?php
    // PHP to handle form submission and insert into the database
    if (isset($_POST['submit'])) {
        // $id = $_POST['id'];
        $sub_cat_id = $_POST['sub_cat_id'];
        $name = $_POST['name'];

        // Insert query for the 3rd category
        $insert_query = "INSERT INTO 3rd_cat ( sub_cat_id, name) VALUES ('$sub_cat_id', '$name')";
        $result = mysqli_query($connection, $insert_query);

        if ($result) {
            echo '<div class="alert alert-success mt-3" role="alert">
                    3rd Category added successfully!
                  </div>';
        } else {
            echo '<div class="alert alert-danger mt-3" role="alert">
                    Error: Could not insert 3rd Category.
                  </div>';
        }
    }
    ?>
</div>

<!-- jQuery (for AJAX functionality) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- AJAX script to load subcategories based on selected category -->
<script>
    $(document).ready(function(){
        $('#cat_id').on('change', function(){
            var cat_id = $(this).val();
            if(cat_id){
                $.ajax({
                    type: 'POST',
                    url: 'fetch_sub_categories.php', // File to fetch sub-categories
                    data: {cat_id: cat_id},
                    success: function(response){
                        $('#sub_cat_id').html(response); // Populate the sub-category dropdown
                    }
                });
            } else {
                $('#sub_cat_id').html('<option value="">Select Sub Category</option>'); // Default option if no category is selected
            }
        });
    });
</script>

<!-- Bootstrap 5 JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
