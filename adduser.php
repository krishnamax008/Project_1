<!doctype html>
<html>

<head>
    <title>student form</title>
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
        <form method="POST" action="insert.php"  onsubmit="validate()" name="myForm">
            <legend style="text-align:center; color:blue;"> Student Form </legend>

            <div class="row">
                <div class="col-md-6">
                    <label>FullName :</label>

                </div>
                <div class="col-md-6">
                    <input type="textbox" name="fullname" value="" class="form-control" placeholder="Enter the FullName" required>
                    
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label> Email Id : </label>

                </div>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control" value="" placeholder="Entet the Email Id" required>
                   
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label> Class : </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" id="cls_name" name="cls_name">
                        <option value="0" selected>select-class</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                    
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label> Year : </label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" id="year" name="year">
                        <option value="0" selected>select-year</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                    
                </div>
            </div><br>

            <div class="row">
                <input type="submit" class="btn btn-primary" name="submit" value="submit" onclick="return validate()">
            </div>
        </form>
    </div>

</body>

</html>

<script type="text/javascript">

   function validate(){
   
        if (document.myForm.fullname.value == "") {
            alert("Please provide your name!");
            document.myForm.fullname.focus();
            return false;
        }
        
      
        var email = document.myForm.email.value;
        var re = /\S+@\S+\.\S+/;
        var validate_email = re.test(email);
        if(!validate_email){
            alert("Please provide your Email!");
            document.myForm.email.focus();
            return false;
        }
    

        if (document.myForm.cls_name.value == "0") {
                alert("Please provide your class!");
                document.myForm.cls_name.focus();
                return false;
            }
 

            if (document.myForm.year.value == "0") {
                alert("Please provide your year!");
                document.myForm.year.focus();
                return false;
            }
  }
</script>        
    


       

          
   
