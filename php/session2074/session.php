 <!-- Discuss the use of session with suitable example -->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session in php</title>
</head>
<body>
    <?php 
    // setting session variables
    $_SESSION['favcolor']="green";
    $_SESSION['favanimal']="cow";
    $_SESSION['favgame']="cricket";

    // Getting session variables
    echo "Favorite color is ".$_SESSION["favcolor"]."<br>";
    echo "Favorite animal is ".$_SESSION["favanimal"]."<br>";
    echo "Favorite game is ".$_SESSION["favgame"]."<br>";
    ?>
</body>
</html>
