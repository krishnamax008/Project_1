<?php
include_once 'db_connection.php';


if(isset($_POST['submit']))
{    
    $sub_name = implode(",",$_POST['subjectname']);
    $sub_code = implode(",",$_POST['subjectcode']);
    $stu_id = $_POST['id'];
    $date = date('Y-m-d');
       
      $is_query = "SELECT * FROM subject_list WHERE stu_id = $stu_id";
      $stu_ids = mysqli_query($conn, $is_query);

      if($stu_ids->num_rows == 0){
          $sql = "INSERT INTO subject_list (sub_name,sub_code,stu_id,create_at)  VALUES ('$sub_name','$sub_code','$stu_id','$date')";
      }else{
        
         $sql = "UPDATE subject_list set sub_name = '$sub_name',sub_code = '$sub_code' where stu_id = $stu_id";
      }
          $numval = mysqli_query($conn, $sql);
          if($numval){
            echo("<script LANGUAGE='JavaScript'>
            window. alert('New record has been added successfully !');
            window. location. href='http://localhost/project_1/index.php'
            setTimeout(100);
            </script>");
          }else{
            echo "Error:" .$sql . ":-";
          }

     mysqli_close($conn);
   }

?>