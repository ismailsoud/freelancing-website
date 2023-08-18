<?php

if(!isset($_POST['submit'])){
    header("location:../sign-up.php");
}else{
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $rpwd = $_POST["rpwd"];

    require_once 'conn.inc.php';
    require_once 'function.inc.php';

    if (verifySignup($name, $phone, $email, $pwd, $rpwd) !== true){
        header("location: ../sign-up.php?error=emptyinput");
        exit();
    };
    if (userExists($conn, $name) == true){
        header("location: ../sign-up.php?error=IdTaken");
        exit();
    };
    if (emailExists($conn, $email) == true){
        header("location: ../sign-up.php?error=emailUsed");
        exit();
    };
    if (invalidId($name) !== true){
        header("location: ../sign-up.php?error=invalidid");
        exit();
    };
    if (invalidEmail($email) !== true){
        header("location: ../sign-up.php?error=invalidEmail");
        exit();
    };
    if (pwdMatch($pwd, $rpwd) !== true){
        header("location: ../sign-up.php?error=pwdDontMatch");
        exit();
    };
    if (pwdLenth($pwd) !== true){
        header("location: ../sign-up.php?error=shurtPwd");
        exit();
    };
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    addUser($conn, $name, $phone, $email, $hashedPwd);

}