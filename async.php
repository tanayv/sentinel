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
    
    
    //Hear for responses...
    include 'msgServer.php';
    
    $page = $_SERVER['PHP_SELF'];
    $sec = "5";
    
?>

<!DOCTYPE HTML> 

<html>
    <head>
        <title>Sentinel | Async</title>
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
    echo "
    <!-- MDesign Card for Config -->
    
        <!-- Card for Screen1 - HeartBeat Sensor-->
        <div class='config card'>
            <h1>Car Locked</h1>
            <h2>Sentinel has locked the car</h2>
            <hr>
            <center>
                <div class='icoHolder carLock'></div>
            </center>
            <p>We're waiting for your designated driver to make a decision on your suitability to drive your car. In the meantime, you can request an Uber. </p>
            <center>
                <a href='uber://?action=setPickup'><div class='long button'>Uber</div></a><br>
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