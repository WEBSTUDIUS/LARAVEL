<?php
$ip = "https://mpi.bspb.ru:5443/Exec";
exec("ping -c 1 $ip", $output, $result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(!empty($output)){
       print_r($output);
    }
    ?>
</body>
</html>
