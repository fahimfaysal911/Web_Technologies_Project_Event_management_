<?php
session_start();
$isLoggedIn = false;

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if($isLoggedIn){
    Header("Location: ./m_dashbord.php");
}

$previousValues = $_SESSION["previousValues"] ?? [];
$signupErr = $_SESSION["signupErr"] ?? "";
$errors = $_SESSION["errors"] ?? [];

unset($_SESSION['errors']);
unset($_SESSION['previousValues']);
unset($_SESSION["signupErr"]);
?>

<html>
<head>
    <script src="..\Controller\JS\checkEmail.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form {
            background: #ffffff;
            padding: 35px 40px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            width: 420px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 8px 4px;
            vertical-align: middle;
            font-size: 14px;
            color: #333;
        }

        td:first-child {
            font-weight: 600;
            color: #555;
            width: 35%;
        }

        input[type="text"],
        input[type="password"],
        input[type="file"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 2px rgba(102, 126, 234, 0.2);
            outline: none;
        }

        input[type="file"] {
            padding: 6px;
            font-size: 13px;
        }

        #erroremail {
            font-size: 12px;
            color: #e74c3c;
            padding-left: 5px;
        }

        td:nth-child(3),
        td:nth-child(4) {
            font-size: 12px;
            color: #e74c3c;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 15px;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
        }

        input[type="submit"]:active {
            transform: translateY(0);
            box-shadow: 0 5px 10px rgba(102, 126, 234, 0.3);
        }

        tr:last-child td {
            padding-top: 15px;
        }

        tr td[colspan] {
            text-align: center;
        }

        /* Signup general error */
        tr:nth-last-child(2) td {
            color: #e74c3c;
            font-size: 13px;
            text-align: center;
        }

        .back-btn {
            display: block;
            margin: 30px auto;
            padding: 10px 25px;
            font-size: 16px;
            background-color: #34495e;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-btn:hover {
            background-color: #2c3e50;
        }
    </style>
</head>

<body>
    <form method="post" action="..\Controller\m_register_validation.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" id="name" name="name" value="<?php echo $previousValues['name'] ?? '' ?>"></td>
                <td><?php echo $errors["name"] ?? ''; ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" id="email" name="email" value="<?php echo $previousValues['email'] ?? '' ?>" onkeyup="findExistingEmail()"/></td>
                <td id="erroremail"></td>
                <td><?php echo $errors["email"] ?? ''; ?></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" id="password" name="password"/></td>
                <td><?php echo $errors["password"] ?? ''; ?></td>
            </tr>

            <tr>
                <td></td>
                <td><?php echo $signupErr; ?></td>
            </tr>

            <tr>
                <td>Upload File</td>
                <td><input type="file" id="uploadFile" name="uploadFile"/></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="signup" value="Sign Up"/>
                </td>
                <td>
                    <button class="back-btn" onclick="history.back()">Back</button>
                </td>
            </tr>

        </table>
    </form>
</body>
</html>
