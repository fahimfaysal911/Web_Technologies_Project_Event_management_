<?php
include "../Model/DatabaseConnection.php";
session_start();

/* Check login */
if (!isset($_SESSION['manager_id'])) {
    header("Location: login.php");
    exit();
}

$managerId = $_SESSION['manager_id'];

/* Fetch profile data */
$result = getManagerProfile($connection, "manager", $managerId);
$manager = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .profile-card {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .profile-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .back-btn {
            margin-top: 20px;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="profile-card">

    <img src="<?php echo $manager['file_path']; ?>" alt="Profile Image">

    <h2><?php echo $manager['Name']; ?></h2>
    <p><strong>Email:</strong> <?php echo $manager['Email']; ?></p>
    <p><strong>ID:</strong> <?php echo $manager['ID']; ?></p>

    <button class="back-btn" onclick="history.back()">Back</button>

</div>

</body>
</html>
