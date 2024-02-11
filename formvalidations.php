<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Portal</title>
    <link rel="shortcut icon" href="../A1/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    
    <style>
    <?php include "css/style.css" ?>
    </style>

    </head>
<body>

    <header>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">
        <img src="../A1/img/logo.svg" width="40" height="40" class="d-inline-block align-center" alt="Engsol_logo">
        Engsol
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="records.php">Records</a>
            </div>
          </div>
        </nav>
    </header>

<?php

$id=$_POST['id'];
$name=$_POST['name'];
$hours=$_POST['hours'];

    //Validate employee
    if (empty($name)) 
    {
        echo "Name is required";
    }
    elseif (!preg_match("/^[a-zA-Z]*$/",$name))
    {
        echo "Only alphabets and whitespaces are allowed";
    }
    elseif (empty($id))
    {
        echo "User ID is required";
    }
    elseif (empty($hours))
    {
        echo "Hours worked are required";
    }
    else {
        include "connection.php";
        $sql = "INSERT INTO employeeinfo(eid,uname,hours) VALUES('$id','$name','$hours')";
        if ($conn->query($sql)==TRUE) 
        {
            echo "Record inserted successfully";
        }
        else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }


?>

    <footer>
      <p>&copy; 2024 Engsol. All rights reserved.</p>
    </footer>

</body>
</html>