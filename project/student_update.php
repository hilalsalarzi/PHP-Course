<?php
include "include/header.php";
// inner join
// select students.student_name,courses.course_name from students inner join courses on students.id= courses.id
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $select_query = "select * from students where id=$id";
    $result = mysqli_query($connection, $select_query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['student_name'];
    $email = $row['student_email'];
    $course_id = $row['course_id'];
}
else{
    header("location:student_view.php");
}
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
                <input type="text" class="form-control" id="student_name" name="student_name" value="<?php echo $name ?>" placeholder="Enter your name" required>
            </div>

            <!-- Email field -->
            <div class="mb-3">
                <label for="student_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="student_email" name="student_email" value="<?php echo $email ?>" placeholder="Enter your email" required>
            </div>


            <?php
            // i want to select the course name from course table and display it in the form
            // select course_name from courses where id=course_id
            $select_query = "select course_name,id from courses";
            $result = mysqli_query($connection, $select_query);
            ?>
            <!-- Course name field -->
            <div class="mb-3">
                <label for="course_name" class="form-label">Course Name</label>
                <select class="form-select" id="course_name" name="course_name" required>
                    <option value="">Select course</option>
                    <?php
                    // Check if the query returned any results
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Check if the current teacher ID is selected
                            $selected = ($course_id == $row['id']) ? 'selected' : '';
                            echo "<option value='{$row['id']}' $selected>{$row['course_name']}</option>";
                        }
                    } else {
                        echo "<option value=''>No Course available</option>";
                    }
                    ?>

                </select>
            </div>



            <!-- Submit button -->
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    
<?php
if(isset($_POST['submit'])){
    $name=$_POST['student_name'];
    $email=$_POST['student_email'];
    $course_id=$_POST['course_name'];
    $update_query="update students set student_name='$name',student_email='$email',course_id=$course_id where id=$id";
    $result=mysqli_query($connection,$update_query);
    if($result){
        echo "<script>
        Swal.fire({
            title: 'Success!',
            text: 'Student updated successfully.',
            icon: 'success',
            confirmButtonText: 'Okay'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'student_view.php';
            }
        });
        </script>";
        // echo "Data updated successfully";
        // header("location:student_view.php");
    }else{
        echo "Data not updated";
    }

} 

include "include/footer.php";
?>