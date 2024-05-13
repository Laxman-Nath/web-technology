<?php
// Creating and retrieving the cookie
$cookie_name="user";
$cookie_value="laxman";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named ".$cookie_name." is not set!<br>";
}
else{
    echo "Cookie $cookie_name is set!<br>";
    echo "Value is :".$_COOKIE[$cookie_name];
}

// Deleting the cookie
// setcookie("user",time()-3600);
// echo "Cookie user is deleted";
?>