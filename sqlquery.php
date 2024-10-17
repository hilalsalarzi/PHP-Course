<?php 
// inner join
// select students.student_name,courses.course_name from students inner join courses on students.id= courses.id


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Student Registration Form</h2>
    <form action="submit.php" method="post">
        <!-- Name field -->
        <div class="mb-3">
            <label for="student_name" class="form-label">Name</label>
            <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Enter your name" required>
        </div>

        <!-- Email field -->
        <div class="mb-3">
            <label for="student_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="student_email" name="student_email" placeholder="Enter your email" required>
        </div>

        <!-- Course ID field -->
        <div class="mb-3">
            <label for="course_id" class="form-label">Course ID</label>
            <input type="number" class="form-control" id="course_id" name="course_id" placeholder="Enter course ID" required>
        </div>
<?php 
// i want to select the course name from course table and display it in the form
// select course_name from courses where id=course_id

?>
        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<!-- Bootstrap 5 JS (Optional if you use Bootstrap components like modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
