<?php

    include 'db.php';
    $query1 = "SELECT * FROM global WHERE item = 'status'";
    $result1 = $mysqli->query($query1);
    $status = 'hulu1';
    while ($row = $result1->fetch_array()) {
        $status = $row["value"];
    }
    
    if ($status == 'active')
        $query2 = "UPDATE global SET value='inactive' WHERE item = 'status'";
    
    else
        $query2 = "UPDATE global SET value='active' WHERE item = 'status'";
        
    $mysqli->query($query2);

    header('Location: /');

?> 