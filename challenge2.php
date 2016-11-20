

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
    
    <body style='background-color: #eeeeee; margin: 0; padding: 0'>
    
    <!-- Static Header -->
    <div class='header'>
        <center>SENTINEL</center>
    </div>
    
    <?php
    
    echo "
    <center>
    <div class='config card'>
        <p id='questLove'></p>
        <input type='text' name='answer' id='answer' placeholder='Answer'><br>
        <center><div class='button' id='submit'>Submit</div></center>
    </div>
    </center>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='game2.js'></script>";
    
    
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