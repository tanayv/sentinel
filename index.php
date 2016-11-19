<?php 

    //Do PHP Things like start COOKIES and connect to Database
    
    include 'db.php';
    $query1 = "SELECT * FROM global WHERE item = 'status'";
    $result1 = $mysqli->query($query1);
    $status = 'hulu1';
    while ($row = $result1->fetch_array()) {
        $status = $row["value"];
    }
    
    


?>

<!DOCTYPE HTML> 

<html>
    <head>
        <title>Sentinel | Home</title>
        <link rel='stylesheet' href='assets/style.css'>
        <meta name="viewport" content="user-scalable=no" />
    </head>
    
    <body style='background-color: #fff; margin: 0; padding: 0'>
    
    <!-- Static Header -->
    <div class='header'>
        <center>SENTINEL</center>
    </div>
    
    <?php
    
    if ($status == 'active') {
    
        echo "
    <!-- Dynamic Sentinel Status IMG -->
    <a href=''>
    <div class='sentinel active'>
    </div></a>
    <center class='status'>ACTIVE</center>";
    
    
    }
    
    else {
    
    echo "
    <!-- Dynamic Sentinel Status IMG -->
    <a href='toggleSentinel.php'>
    <div class='sentinel'>
    </div></a>
    <center class='status'>INACTIVE</center>";
    }
    
    ?>
    
    <!-- Footer Nav -->
    <div class='navbar'>
        <center>
          <ul>
              <li><a href='/drunk.php'><div class='icoHolder power'></div></a></li>
              <li><a href='/'><div class='icoHolder home selected'></div></a></li>
              <li><a href='/settings.php'><div class='icoHolder settings'></div></a></li>
          </ul>
        </center>
    </div>
    
    </body>
</html>