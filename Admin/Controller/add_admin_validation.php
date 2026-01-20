<?php
include "../Model/a_database_connection.php";



error_reporting(E_ALL);
ini_set("display_error", 1);

session_start();
$email = "";
$pass = "";

$email = $_POST["email"];
$pass = $_POST["password"];
$name = $_POST["name"] ?? "";

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

    Header("Location: ..\View\a_m_c_l.php");

}else{
    unset($_SESSION['errors']);
    unset($_SESSION['previousValues']);
    unset($_SESSION["signupErr"]);
    
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->add($connection, "admin", $name,$email, $pass);

    if($result){
        Header("Location: ..\View\a_m_c_l.php");
    }else{
        $_SESSION["signupErr"] = "Add failed..";
        Header("Location: ..\View\a_m_c_l.php");
    }

    
}
?>