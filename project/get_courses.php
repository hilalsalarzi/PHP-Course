<?php
include "db_connection.php"; // Include your database connection

if(isset($_POST['teacher_id'])){
    $teacher_id = $_POST['teacher_id'];

    // Fetch courses based on the selected teacher
    $select_courses_query = "SELECT id, course_name FROM courses WHERE teacher_id = '$teacher_id'";
    $courses_result = mysqli_query($connection, $select_courses_query);

    // Generate options for the courses dropdown
    echo '<option value="">Select course</option>';
    while($row = mysqli_fetch_assoc($courses_result)){
        echo '<option value="'.$row['id'].'">'.$row['course_name'].'</option>';
    }
}
?>
