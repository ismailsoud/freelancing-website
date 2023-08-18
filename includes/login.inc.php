<?php 

if(!isset($_POST['login'])){
    header('location: ../index.php');
}else{
    require_once 'conn.inc.php';
    require_once 'function.inc.php';
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    if (verifyLogin($email, $pwd) !== true){
        header("location: ../sign-up.php?error=emptyinput");
        exit();
    };

    loginUser($conn, $email, $pwd);
}