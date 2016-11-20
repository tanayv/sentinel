<?php 

    //Do PHP Things like start COOKIES and connect to Database
    
    $settingType = $_GET['sType'];
    
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
        <title>Sentinel | Settings</title>
        <link rel='stylesheet' href='assets/style.css'>
        <meta name="viewport" content="user-scalable=no" />
    </head>
    
    <body style='background-color: #eeeeee; margin: 0; padding: 0'>
    
    <!-- Static Header -->
    <div class='header'>
        <center>SENTINEL</center>
    </div>
    <center>
    
    <?php if ($settingType == 1 || !isset($settingType) ) { 
    echo "
    <!-- MDesign Card for Config -->
    
        <!-- Card for Screen1 - HeartBeat Sensor-->
        <div class='config card'>
            <h1>Settings</h1>
            <h2>Configure Heartbeat Sensor</h2>
            <hr>
            <center>
                <div class='icoHolder'></div>
            </center>
            <p>Connection to heartbeat sensor couldn’t be established. Make sure your car is equipped with a compatible heartbeat sensor and your phone is connected using Bluetooth for AppLink™</p>
            <center>
                <div class='button'>Retry</div>
                <a href='/settings.php?sType=2'><div class='button'>Skip</div></a>
                <br>
                <a href='/settings.php'><div class='circlePtr selected'></div></a>
                <a href='/settings.php?sType=2'><div class='circlePtr'></div></a>
                        
            </center>
        </div>
        ";
    }
    
        else if ($settingType==2) {
            echo "
    
        
        
        <!-- Card for Screen1 - VDD-->
        <div class='config card'>
            <h1>Settings</h1>
            <h2>Virtual Designated Driver</h2>
            <hr>
            <center>
                <div class='icoHolder vdd'></div>
            </center>
                <input type='text' name='fullName' value='Tanay Vardhan'>
                <input type='tel' name='phone' value='2173052056'>
            <center><br>
                <a href='/'><div class='button'>Save</div></a>
                
                <br><br>
                <a href='/settings.php'><div class='circlePtr'></div></a>
                <a href='/settings.php?sType=2'><div class='circlePtr selected'></div></a>

                        
            </center>
        </div>";
        }
        ?>
        
        
    </center>
    
    
    
    
    <?php
    
    //Check if status is active or inactive: 
    if ($status == 'active') {
    echo "<!-- Footer Nav -->
    <div class='navbar'>
        <center>
          <ul>
              <li><a href='/challenge1.php'><div class='icoHolder power'></div></a></li>
              <li><a href='/'><div class='icoHolder home'></div></a></li>
              <li><a href='/settings.php'><div class='icoHolder settings selected'></div></a></li>
          </ul>
        </center>
    </div>";
    }
    
    else {
    echo "<!-- Footer Nav -->
    <div class='navbar'>
        <center>
          <ul>
              <li><a href='/toggleSentinel.php'><div class='icoHolder power'></div></a></li>
              <li><a href='/'><div class='icoHolder home'></div></a></li>
              <li><a href='/settings.php'><div class='icoHolder settings selected'></div></a></li>
          </ul>
        </center>
    </div>";
    }
    ?>
    
    </body>
</html>