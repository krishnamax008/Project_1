<?php
include_once 'db_connection.php';
$sql = "SELECT * FROM student ORDER BY id DESC";
$sql = "SELECT student.id,student.fullname,student.email_id,student.class_name,student.edu_year,subject_list.sub_name,subject_list.sub_code,subject_list.create_at  FROM student left JOIN subject_list ON student.id = subject_list.stu_id ";

$result = $conn->query($sql);
$result->num_rows;
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>index table</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css'>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container mt_3">
    <button class="btn btn-success"><a href="adduser.php"> Add User </a></button>
  </div>

  <div class="row">
    <div class="container">

      <h1>Student's List </h1>
      <table class="table responsive" id="sort">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Fullname</th>
            <th scope="col">Email Id</th>
            <th scope="col">Class Name</th>
            <th scope="col">Education Year</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Subject Code</th>
            <th scope="col">Create At</th>
            <th scope="col">Action</th>
        <tbody>
          <?php
          while ($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $row["id"]; ?></td>
              <td><?= $row["fullname"]; ?></td>
              <td><?= $row["email_id"]; ?></td>
              <td><?= $row["class_name"]; ?></td>
              <td><?= $row["edu_year"]; ?></td>
              <td><?= $row["sub_name"]; ?></td>
              <td><?= $row["sub_code"]; ?></td>
              <td><?= $row["create_at"]; ?></td>
              <td>  <a href="student_edit.php?id=<?= $row['id']; ?>"><button type="button" class="btn btn-primary">Edit</button></a> 
                    <a href="studentdelete_form.php?id=<?= $row['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a> 
                    <a href="addsubject.php?id=<?= $row['id']; ?>"><button type="button" class="btn btn-success">Add Subject</button></a>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>


</body>

</html>
<script>
  $(document).ready(function() {
    $("#sort").DataTable({
      columnDefs: [{
        type: 'date',
        targets: [3]
      }],
    });
  });
</script>