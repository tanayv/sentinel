<?php 

    //Do PHP Things like start COOKIES and connect to Database
    
    $settingType = $_GET['sType'];
    include 'db.php';
    $query1 = "SELECT * FROM global WHERE item = 'vdd_phone'";
    $result1 = $mysqli->query($query1);
    $varTel = 'hulu1';
    while ($row = $result1->fetch_array()) {
        $varTel = $row["value"];
    }
    
    $query1 = "SELECT * FROM global WHERE item = 'status'";
    $result1 = $mysqli->query($query1);
    $status = 'hulu1';
    while ($row = $result1->fetch_array()) {
        $status = $row["value"];
    }
    
    
    $query1 = "SELECT * FROM global WHERE item = 'vdd_async'";
    $result1 = $mysqli->query($query1);
    $async = 'hulu1';
    while ($row = $result1->fetch_array()) {
        $async = $row["value"];
    }
    if ($async == 'on') {
        //Send text message...
        include 'testmsg.php';
        header("Location: async.php");
    }
    
    $page = $_SERVER['PHP_SELF'];
    $sec = "10";
    
?>

<!DOCTYPE HTML> 

<html>
    <head>
        <title>Sentinel | Drunk Person</title>
        <link rel='stylesheet' href='assets/style.css'>
        <meta name="viewport" content="user-scalable=no" />
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    
    <body style='background-color: #eeeeee; margin: 0; padding: 0'>
    
    <!-- Static Header -->
    <div class='header'>
        <center>SENTINEL</center>
    </div>
    <center>
    
    <?php 
    $varTel = "+1-217-305-2056";
    echo "
    <!-- MDesign Card for Config -->
    
        <!-- Card for Screen1 - HeartBeat Sensor-->
        <div class='config card'>
            <h1>Challenge Failed</h1>
            <h2>Sentinel has locked the car</h2>
            <hr>
            <center>
                <div class='icoHolder carLock'></div>
            </center>
            <center>
                <a href='uber://?action=setPickup'><div class='long button'>Uber</div></a><br>
                <a href='/toggleVDDAsync.php'><div class='long button'>Consult VDD</div></a>
            </center>
        </div>
        </center>
        ";
        
        //Check if status is active or inactive: 
        if ($status == 'active') {
        echo "<!-- Footer Nav -->
        <div class='navbar'>
            <center>
              <ul>
                  <li><a href='/challenge1.php'><div class='icoHolder power selected'></div></a></li>
                  <li><a href='/'><div class='icoHolder home'></div></a></li>
                  <li><a href='/settings.php'><div class='icoHolder settings'></div></a></li>
              </ul>
            </center>
        </div>";
        }
        
        else {
        echo "<!-- Footer Nav -->
        <div class='navbar'>
            <center>
              <ul>
                  <li><a href='/toggleSentinel.php'><div class='icoHolder power selected'></div></a></li>
                  <li><a href='/'><div class='icoHolder home'></div></a></li>
                  <li><a href='/settings.php'><div class='icoHolder settings'></div></a></li>
              </ul>
            </center>
        </div>";
        }
        
        ?>
    </body>
</html>