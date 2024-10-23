<?php
include "include/header.php"; 

// Fetching teachers from the database
$select_teachers_query = "SELECT id, teacher_name FROM teacher";
$teachers_result = mysqli_query($connection, $select_teachers_query);

?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Student Registration Form</h2>
    <div class="text-end">
        <a href="student_view.php" class="btn btn-primary">View</a>
    </div>
    <form method="post">
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

        <!-- Teacher field -->
        <div class="mb-3">
            <label for="teacher_name" class="form-label">Teacher Name</label>
            <select class="form-select" id="teacher_id" name="teacher_id" required>
                <option value="">Select Teacher</option>
                <?php while($row = mysqli_fetch_assoc($teachers_result)) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['teacher_name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <!-- Course name field -->
        <div class="mb-3">
            <label for="course_name" class="form-label">Course Name</label>
            <select class="form-select" id="course_name" name="course_name" required>
                <option value="">Select course</option>
            </select>
        </div>

        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#teacher_id').change(function(){
            var teacherId = $(this).val();
            
            // AJAX request to fetch courses for the selected teacher
            $.ajax({
                url: 'get_courses.php', // PHP file to handle the request
                type: 'POST',
                data: {teacher_id: teacherId},
                success: function(response){
                    $('#course_name').html(response); // Update the course dropdown
                }
            });
        });
    });
</script>

<?php include "include/footer.php"; ?>
