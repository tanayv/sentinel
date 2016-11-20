<?php
$number = $_POST['From'];
$body = $_POST['Body'];
header('Content-Type: text/xml');
?>
 
<Response>
    <Message>
        Do you think he is sober to drive?
        Hello <?php echo $number ?>.
        You said <?php echo $body ?>
    </Message>
</Response>