<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Records</title>
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
              <a class="nav-item nav-link" href="index.html">Timesheets</a>
              <a class="nav-item nav-link active" href="records.php">Records<span class="sr-only">(current)</span></a>
            </div>
          </div>
        </nav>
    </header>
    

    <div class="header">
        <h1>Employees Records</h1>
    </div>


    <?php

        include "connection.php";

        //Selecting data from the database

        $sql= "select * from employeeinfo";

        $result = $conn->query($sql);

        if ($result->num_rows>0) 
        {
            echo "<table>";
            echo "<tr>";
            echo "<th> Employee ID </th>";
            echo "<th> Employee Name </th>";
            echo "<th> Hours worked </th>";
            echo "</tr>";

            while ($row=$result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" .$row["eid"]."</td>";
                echo "<td>" .$row["uname"]."</td>";
                echo "<td>".$row["hours"]. "</td>";
                echo "</tr>";
            }
        }
        else {
            echo "<br> 0 result found";
        }

        ?>

    <footer>
      <p>&copy; 2024 Engsol. All rights reserved.</p>
    </footer>
    
</body>
</html>