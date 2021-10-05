<?php
session_start();
    echo "Hello";
    if($_SESSION["User_ID"]!="0"){
        echo $_SESSION["User_ID"];
        log($_SESSION["User_ID"]);
    }
?>
<html>

</html>