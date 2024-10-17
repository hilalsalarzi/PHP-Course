<?php
include "include/header.php";
// inner join
// select students.student_name,courses.course_name from students inner join courses on students.id= courses.id
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $select_query = "delete  from students where id=$id";
    $result = mysqli_query($connection, $select_query);
   if($result){
    echo "<script>
    Swal.fire({
        title: 'Success!',
        text: 'Student Deleted successfully.',
        icon: 'success',
        confirmButtonText: 'Okay'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'student_view.php';
        }
    });
    </script>";
   }
   else{
       echo "Error in fetching data";
   }
 
}
else{
    header("location:student_view.php");
}
?>


    
<?php


include "include/footer.php";
?>