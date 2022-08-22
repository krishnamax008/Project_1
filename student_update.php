<?php
include_once 'db_connection.php';

if($_POST['update'] == 'update'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $class=$_POST['class'];
    $year = $_POST['year'];
   
    $id = $_POST['idval'];

     

    $sql = "UPDATE student set fullname='$name',email_id ='$email',class_name='$class',edu_year='$year' WHERE id = $id";
} else{
    echo 'nothing was update..';
   } 
  
    
   if (mysqli_query($conn,$sql)){

        echo ("<script LANGUAGE='JavaScript'>
        window. alert('Succesfully Updated');
        window. location. href='index.php';
        </script>");
   } else{
        echo  'not updated' .mysqli_error($conn);
   }




$conn->close();

?>




// $sql = "UPDATE subject_list set sub_name='$sub_name',sub_code ='$sub_code' WHERE id = $stu_id ";
   
//      if(mysqli_query($conn, $sql) == '0'){
//          echo "added a new record's....";

//         } elseif($sql = "INSERT INTO subject_list (sub_name,sub_code,stu_id,create_at)
//         VALUES ('$sub_name','$sub_code','$stu_id','$date')"){

//         }else{
//           echo "Error:" .$sql . ":-";
//         }
         
        
   
