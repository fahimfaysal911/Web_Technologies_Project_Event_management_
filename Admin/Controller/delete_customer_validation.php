<?php
include "../Model/a_database_connection.php";

session_start();

$id = $_POST['id'] ?? null;

if(!$id){
    die("ID is required");
}

$db = new DatabaseConnection();
$conn = $db->openConnection();

$sql = "DELETE FROM customer WHERE id = $id";
$result = $conn->query($sql);

if(!$result){
    die("Delete failed ".$conn->error);
}

header("Location: ../View/a_m_c_l.php");
exit;
