<?php
include "include/header.php"; 
// inner join
// select students.student_name,courses.course_name from students inner join courses on students.id= courses.id


?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Student Registration Form</h2>
    <div class="text-end">
    <a href="student_view.php" class="btn btn-primary">View</a>

    </div>
    <form  method="post">
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

       
<?php 
// i want to select the course name from course table and display it in the form
// select course_name from courses where id=course_id
$select_query="select course_name,id from courses";
$result=mysqli_query($connection,$select_query);
?>
        <!-- Course name field -->
        <div class="mb-3">
            <label for="course_name" class="form-label">Course Name</label>
            <select class="form-select" id="course_name" name="course_name" required>
                <option value="">Select course</option>
                <?php 
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['course_name']; ?></option>
                <?php 
                }
                ?>
            </select>
        </div>



        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- now we will put if asset function  -->
 <?php
 if(isset($_POST['submit'])){
    $name=$_POST['student_name'];
    $email=$_POST['student_email'];
    $course=$_POST['course_name'];
    $insert_query="insert into students(student_name,student_email,course_id) values('$name','$email','$course')";
    $resultinsert=mysqli_query($connection,$insert_query);
    if($resultinsert){
        echo ' <div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>';
        // header("Location:student_registrationrrr.php");

 }

     ?>
    
     <?php
 }
 ?>
<?php 
include "include/footer.php";
?>