<?php 
session_start();

$_SESSION["boll"] = "hello world 2";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>
    <?php echo $_SESSION["boll"]; ?>
    </h1>


    
</body>
</html>