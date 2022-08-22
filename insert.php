<?php
include_once 'db_connection.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['fullname'];
     $email = $_POST['email'];
     $class=$_POST['cls_name'];
     $year = $_POST['year'];
     $date = date('Y-m-d');

   
      $sql = "INSERT INTO student (fullname,email_id,class_name,edu_year,create_at)
        VALUES ('$name','$email','$class','$year','$date')";
  
      if (mysqli_query($conn, $sql)){
        
        echo ("<script LANGUAGE='JavaScript'>
        window. alert('New record has been added successfully !');
        window. location. href='http://localhost/project_1/index.php';
        </script>");

       } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }


   
     mysqli_close($conn);
   }

?>