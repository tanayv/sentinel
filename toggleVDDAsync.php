<?php

    include 'db.php';
    
    $query1 = "SELECT * FROM global WHERE item = 'vdd_phone'";
    $result1 = $mysqli->query($query1);
    $vdd_phone = 'hulu1';
    while ($row = $result1->fetch_array()) {
        $vdd_phone = $row["value"];
    }
    
    //Send text message...
    include 'testmsg.php';
    
    $query2 = "UPDATE global SET value='on' WHERE item = 'vdd_async'";
        
    $mysqli->query($query2);

    header('Location: tel: ' . $vdd_phone);

?> 