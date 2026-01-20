<?php
session_start();
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if(!$isLoggedIn){
    header("Location: ./m_login.php");
    exit;
}


//for cookies
$encoded_email  = $_COOKIE["email"] ?? "";
$email = json_decode($encoded_email);

if(!isset($_COOKIE["isLoggedIn"])){
    header("Location: ./m_login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dashboard {
            background: #ffffff;
            width: 420px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            text-align: center;
        }

        .dashboard h1 {
            margin-bottom: 10px;
            color: #333;
        }

        .welcome {
            margin-bottom: 25px;
            color: #666;
            font-size: 16px;
        }

        table {
            width: 100%;
            margin-bottom: 25px;
            border-collapse: collapse;
        }

       

        .action-btn {
            margin-top: 15px;
        }

        .action-btn a {
            display: block;
            text-decoration: none;
            background: #764ba2;
            color: white;
            padding: 12px;
            border-radius: 6px;
            font-weight: 500;
            transition: background 0.3s ease;
        }

        .action-btn a:hover {
            background: #5a3d8a;
        }

        .logout {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #e74c3c;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .logout:hover {
            color: #c0392b;
        }
    </style>
</head>

<body>

    <div class="dashboard">
        <h1>Manager Dashboard</h1>
        <p class="welcome">Hi, <strong><?php echo htmlspecialchars($email); ?></strong></p>

        <div class="action-btn">
            <a href="http://localhost/Event%20Management/Web_Technologies_Project_Event_management_/Manager/View/user.php">
                View Order List</a>
        </div>

        <div class="action-btn">
            <a href="http://localhost/Event%20Management/Web_Technologies_Project_Event_management_/Manager/View/login.php">
                profile</a>
        </div>

        <div class="action-btn">
            <a href="http://localhost/Event%20Management/Web_Technologies_Project_Event_management_/Manager/View/user.php">
                Manager List</a>
        </div>

        <a class="logout" href="../Controller/logout.php">Logout</a>
    </div>

</body>
</html>
