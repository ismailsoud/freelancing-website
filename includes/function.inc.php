<?php 

function verifySignup($name, $phone, $email, $pwd,$rpwd) {
  $result = true;
  if (empty($name) || empty($phone) || empty($email) || empty($pwd) || empty($rpwd)) {
    $result = false;
  }
  return $result;
};
function invalidId($name) {
  $result = true;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $name)){
    $result = false;
  };
  return $result;
};
function invalidEmail($email){
  $result = true;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = false;
  };
  return $result;
};

function pwdMatch($pwd, $rpwd) {
  return $pwd === $rpwd;
}

function pwdLenth($pwd) {
  return strlen($pwd) > 8;
}
function userExists($conn,$name){
  $sql = "SELECT * FROM freelancers WHERE name = ?;";
  $res = $conn->prepare($sql);

  if(!$res->execute(array($name))){
    $errorInfo = $res->errorInfo();
    //  ^   add it to the log
    $res = null;
    header("location: ../sign-up.php?error=resfailed");
    exit();
  }
  $exist = false;
  if($res->rowCount() > 0){
    $exist = true;
  }
  return $exist;
};

function emailExists($conn, $email){
  $sql = "SELECT * FROM freelancers WHERE email = ?;";
  $res = $conn->prepare($sql);

  if(!$res->execute(array($email))){
    $errorInfo = $res->errorInfo();
    //  ^   add it to the log
    $res = null;
    header("location: ../sign-up.php?error=resfailed");
    exit();
  };
  $exist = false;
  if($res->rowCount() > 0){
    $exist = true;
  };
  return $exist;
};

function addUser($conn, $name, $phone, $email, $pwd){
  $sql = "INSERT INTO freelancers (name, phone, email, password) VALUES(?, ?, ?, ?);";
  $res = $conn->prepare($sql);

  if(!$res->execute(array($name, $phone, $email, $pwd))){
    $errorInfo = $res->errorInfo();
    //  ^   add it to the log
    $res = null;
    header("location: ../sign-up.php?error=signupFailed");
    exit();
  };
  header("location: ../log-sign.php");
};


function verifyLogin($email, $pwd) {
  $result = true;
  if (empty($email) || empty($pwd)){
    $result = false;
  }
  return $result;
};

function loginUser($conn, $email, $pwd){
  $sql = "SELECT * FROM freelancers WHERE email = ?;";
  $res = $conn->prepare($sql);

  if(!$res->execute(array($email))){
    $errorInfo = $res->errorInfo();
    //  ^   add it to the log
    $res = null;
    header("location: ../log-sign.php?error=resfailed");
    exit();
  };
  if(!$res->rowCount() > 0){
    header("location: ../log-sign.php?error=wrong");
  }else{
    $rows = $res->fetchAll();
    $hashedpwd = $rows[0]["password"];
    $checkpwd = password_verify($pwd, $hashedpwd);
    if($checkpwd === false){
      $res = null;
      header("location: ../log-sign.php?error=wrong");
      exit();
    }else if($checkpwd === true){
      session_start();
      $_SESSION["id"] = $rows[0]['id'];
      $_SESSION["name"] = $rows[0]['name'];
      $_SESSION["phone"] = $rows[0]['phone'];
      $_SESSION['email'] = $rows[0]['email'];
      header('location: ../index.php?status=logged-in');
    }
  }
}