<?php
include_once 'db_connection.php';

if(isset ($_POST['delete'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $class=$_POST['class'];
    $year = $_POST['year'];
    $id=$_POST['idval'];

     $sql="DELETE FROM student WHERE id=$id";
     
  if(mysqli_query($conn,$sql)) {

      echo ("<script LANGUAGE='JavaScript'>
      window. alert('Succesfully deleted...');
      window. location. href='http://localhost/project_1/index.php';
      </script>");

  }else{
    echo "record's not delete" .mysqli_error($conn);
  }
  
  
  
  mysqli_close($conn);
}
?>
