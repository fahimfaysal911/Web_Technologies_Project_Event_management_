<?php
include "../Model/a_database_connection.php";

$path = __DIR__."/../Model/a_database_connection.php";
if(!file_exists($path)){
    die("Database File not found");
}

error_reporting(E_ALL);
ini_set("display_error", 1);

session_start();
$email = "";
$pass = "";

$email = $_POST["email"];
$pass = $_POST["password"];
$name = $_POST["name"] ?? "";
$uploadFile = $_FILES["uploadFile"] ?? null;

echo "Email - $email";
echo "password - $pass";


$errors = [];
$previousValues = [];
if(!$name){
    $errors["name"] = "Name field is required";
}
if(!$email){
$errors["email"] = "Email field is required";
}
if(!$pass){
    $errors["password"] = "Password field is required";
}
if(count($errors) > 0){
    $_SESSION["errors"] = $errors;
    if(!$email){
        $_SESSION["emailError"] = $errors["email"];
    }else{
        unset($_SESSION["emailError"]);
    }

    if(!$pass){
        $_SESSION["passwordError"] = $errors["password"];
    }else{
         unset($_SESSION["passwordError"]);
    }

    $previousValues["email"] = $email;
    $previousValues["name"] = $name;

    $_SESSION["previousValues"] = $previousValues;

    Header("Location: ..\View\a_signup.php");

}else{
    unset($_SESSION['errors']);
    unset($_SESSION['previousValues']);
    unset($_SESSION["signupErr"]);
    $path = "";
    if($uploadFile){
        $targetDir = "../Uploads/";
        $path = $targetDir.basename($uploadFile["name"]);
        $isUploaded = move_uploaded_file($uploadFile["tmp_name"],$path);
    }
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->signup($connection, "admin", $name,$email, $pass, $path);

    if($result){
        Header("Location: ..\View\a_login.php");
    }else{
        $_SESSION["signupErr"] = "Sign up failed..";
        Header("Location: ..\View\a_signup.php");
    }

    
}
?>