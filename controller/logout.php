<?php
session_start();
 if(isset($_SESSION['loggedin'])){
    unset($_SESSION['loggedin']);
    unset( $_SESSION['username']);
    unset($_SESSION['avatar'] );
    unset($_SESSION['pass']);
}
$_SESSION['notice'] = "Log out successfully";
header("Location:../views/index.php");
exit();
