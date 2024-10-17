
<?php
include "include/header.php"; 
// inner join
// select students.student_name,courses.course_name from students inner join courses on students.id= courses.id


?>
<div class="container mt-5">
    <h2 class="text-center mb-4">Student Information Table</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Course ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select_query="select students.*,courses.course_name as course_name from students inner join courses on students.course_id=courses.id";
                $result=mysqli_query($connection,$select_query);
                while($row=mysqli_fetch_assoc($result)){
                    $name=$row['student_name'];
                    $email=$row['student_email'];
                    $student_id=$row['id'];
                    $course=$row['course_name'];
                    // $course_id=$row['course_id'];
                ?>
                <tr>
                    <td><?php echo $student_id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $course; ?></td>
                    <td>
                        <a href="student_update.php?id=<?php echo $student_id; ?>" class="btn btn-primary">Update</a>
                        <a href="student_delete.php?id=<?php echo $student_id; ?>" class="btn btn-danger">Delete</a>
                    </td>
                    
                </tr>
                <?php 
                }?>
               
            </tbody>
        </table>
    </div>
</div>
<?php 
include "include/footer.php";
?>