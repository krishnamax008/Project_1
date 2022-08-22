<?php
include_once 'db_connection.php';
include_once 'insert.php';

$id = $_REQUEST['id'];

$sql = "SELECT * FROM student WHERE id = $id";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {

    $name = $row['fullname'];
    $email = $row['email_id'];
    $class = $row['class_name'];
    $year = $row['edu_year'];
}
?>

<!doctype html>
<html>

<head>
    <title>Student Edit Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt_3">
        <button class="btn btn-light"><a href="index.php"> Back </a></button>
    </div>

    <div class="container mt-3">
        <form method="POST" action="student_update.php">
            <legend style="text-align:center; color:blue;"> Student Form </legend>

            <div class="row">
                <div class="col-md-6">
                    <label>FullName :</label>
                </div>
                <div class="col-md-6">
                    <input type="textbox" name="name" value="<?= $name; ?>" class="form-control" placeholder="Enter the FullName" require>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <label> Email Id : </label>
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control" value="<?= $email; ?>" placeholder="Entet the Email Id">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <label> Class : </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" id="class" name="class" value="<?= $class; ?>">
                        <option selected>select-class</option>
                        <option value="X" <?php if ($class == 'X') { ?> selected="selected" <?php } ?>>X</option>
                        <option value="XI" <?php if ($class == 'XI') { ?> selected="selected" <?php } ?>>XI</option>
                        <option value="XII" <?php if ($class == 'XII') { ?> selected="selected" <?php } ?>>XII</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <label> Year : </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" id="year" name="year" value="<?= $year; ?>">
                        <option value="2022" <?php if ($year == '2022') { ?> selectd="selected" <?php  } ?>>2022</option>
                        <option value="2023" <?php if ($year == '2023') { ?> selectd="selected" <?php } ?>>2023</option>
                    </select>
                </div>
            </div><br>

            <div class="row">
                <input type="submit" class="btn btn-primary" name="update" value="update">
                <input type="hidden" class="form-control" value="<?= $id; ?>" name="idval">
            </div>
        </form>
    </div>
</body>