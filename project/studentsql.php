<?php
include "include/header.php"; 
// Query to select course names from the courses table
$select_query = "SELECT course_name, id FROM courses";
$result = mysqli_query($connection, $select_query);
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Student Registration Form</h2>
    <div class="text-end">
        <a href="student_view.php" class="btn btn-primary">View</a>
    </div>
    <form method="post">
        <!-- Name field -->
        <!-- <div class="mb-3">
            <label for="student_name" class="form-label">Name</label>
            <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Enter your name" required>
        </div> -->

        <!-- Email field -->
        <!-- <div class="mb-3">
            <label for="student_email" class="form-label">Email</label>
            <input type="text" class="form-control" id="student_email" name="student_email" placeholder="Enter your email" required>
        </div> -->
<!-- Total marks field -->
<div class="mb-3">
    <label for="totalmarks" class="form-label">Total Marks</label>
    <input type="number" class="form-control" id="totalmarks" name="totalmarks" placeholder="Enter total marks" required oninput="calculatedPercentage()">
</div>
<!-- Obtain marks field -->
<div class="mb-3">
    <label for="obtainmarks" class="form-label">Obtain Marks</label>
    <input type="number" class="form-control" id="obtainmarks" name="obtainmarks" placeholder="Enter obtained marks" required oninput="calculatedPercentage()">
</div>
<!-- Percentage field -->
<div class="mb-3">
    <label for="percentage" class="form-label">Percentage</label>
    <input type="text" class="form-control" id="percentage" name="percentage" placeholder="Percentage" readonly>
</div>
<div id="showpercentage"></div>
        <!-- Course name field -->
        <!-- <div class="mb-3">
            <label for="course_name" class="form-label">Course Name</label>
            <select class="form-select" id="course_name" name="course_name" required>
                <option value="">Select course</option>
                <?php 
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['course_name']; ?></option>
                <?php 
                }
                ?>
            </select>
        </div> -->

        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    echo $percentage=$_POST['percentage'];
    // Retrieve and sanitize input data
    $name = trim(htmlspecialchars($_POST['student_name'], ENT_QUOTES, 'UTF-8'));
    $password=md5($name);
    // echo $password;
    $password2=password_hash($name, PASSWORD_DEFAULT);
    echo $password2;
     $email = filter_var(trim($_POST['student_email']), FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger" role="alert">Invalid email format.</div>';
    }
    $course = (int)$_POST['course_name']; // Casting to integer for security

    // Validate input data
    if (strlen($name) > 50) {
        echo '<div class="alert alert-danger" role="alert">Name is too long. Maximum 50 characters allowed.</div>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger" role="alert">Invalid email format.</div>';
    } elseif (empty($course)) {
        echo '<div class="alert alert-danger" role="alert">Please select a course.</div>';
    } else {
        // Prepare the INSERT statement
        $insert_query = "INSERT INTO students (student_name, student_email, course_id) VALUES (?, ?, ?)";
        $stmt = $connection->prepare($insert_query);

        // Check if the statement was prepared successfully
        if ($stmt === false) {
            die("Error preparing statement: " . $connection->error);
        }

        // Bind parameters
        $stmt->bind_param("ssi", $name, $email, $course);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<div class="alert alert-primary" role="alert">Student registered successfully!</div>'.$name.'helll';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error: ' . $stmt->error . '</div>';
        }

        // Close the statement
        $stmt->close();
    }
}


?>
<script>
//    now we want to oninput function to calculate the percentage of the student
function calculatedPercentage(){
    var totalmarks=document.getElementById('totalmarks').value;
    console.log(totalmarks);
    var obtainmarks=document.getElementById('obtainmarks').value;
    var percentage=(obtainmarks/totalmarks)*100;
    document.getElementById('percentage').value=percentage;
    document.getElementById('showpercentage').innerHTML=percentage;
}

</script>
<?php 
include "include/footer.php"; 
?>
