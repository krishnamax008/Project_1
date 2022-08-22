<?php

$id = $_REQUEST['id'];

$sql = "SELECT * FROM subject_list WHERE id = $id";


?>



<!doctype html>
<html>

<head>
    <title>Subject form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
        $('select').selectpicker();
    </script>

</head>

<body>
    <div class="container mt-3">
        <form method="POST" action="subject_insert.php">
            <legend style="text-align:center; color:blue;"> Subject Form </legend>

            <div class="row">
                <div class="col-md-6">
                    <label> Subject Name :</label>
                </div>
                <div class="col-md-6">
                    <!-- <input type="textbox" id="subjectname" name="subjectname" class="form-control" placeholder="Enter the subject name"  required>     -->
                    <select class="selectpicker" multiple data-live-search="true" name="subjectname[]">
                        <option disabled>select-subject_name</option>
                        <option>Tamil</option>
                        <option>English</option>
                        <option>Maths</option>
                        <option>socialscience</option>
                        <option>Social</option>
                    </select>
                </div>
            </div><br>


            <div class="row">
                <div class="col-md-6">
                    <label> Subject Code: </label>
                </div>
                <div class="col-md-6">
                    <!-- <input type="textbox" name="subjectcode" id="subjectcode" class="form-control" placeholder="Entet the subject code" required> -->
                    <select class="selectpicker" multiple data-live-search="true" name="subjectcode[]">
                        <option disabled>select-subject_code</option>
                        <option>Ta456</option>
                        <option>En789</option>
                        <option>Ma234</option>
                        <option>ss324</option>
                        <option>So125</option>
                    </select>
                </div>
            </div><br>


            <div class="row">
                <input type="submit" class="btn btn-primary" name="submit" value="submit">
                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
            </div>
        </form>
    </div>
</body>

</html>