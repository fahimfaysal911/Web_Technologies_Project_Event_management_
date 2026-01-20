<?php
session_start();
$isLoggedIn = false;

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if($isLoggedIn){
    Header("Location: ./a_dashboard.php");
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

        <title>Sign Up</title>
        <script src="..\Controller\JS\checkEmail.js"></script>
        <style>

            body {
                background: DodgerBlue;
            }

            .container {
                width: 380px;
                margin: 120px auto;
                background-color : cyan;
                padding: 25px;
                border-radius: 10px;
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            table {
                width: 100%;
            }

            td {
                padding: 6px;
            }

            input {
                width: 100%;
                padding: 8px;
                margin-top: 5px;
                border-radius: 5px;
                border: 1px;
            }

            button {
                text-align: center;
                padding: 8px 10px;
                border-radius: 5px;
                border: none;
                background-color: tomato ;
                color: white;
                cursor: pointer;
            }

            button:hover {
                background: blue;
            }

            .error {
                color: red;
                font-size: 14px;
            }

        </style>
    </head>


    <body>
        <div class="container">
            <h2>Create Account</h2>

            <form method="post" action="..\Controller\a_signup_validation.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="name" placeholder="Enter your name"
                                value="<?php echo $previousValues['name'] ?? '' ?>">
                        </td>
                        <td><?php echo $errors["name"] ?? ''; ?></td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" id="email" name="email" value="<?php echo $previousValues['email'] ?? '' ?>"
                                onkeyup="findExistingEmail()">
                        </td>
                        <td id="erroremail"></td>
                        <td><?php echo $errors["email"] ?? ''; ?></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" id="password" name="password">
                        </td>
                        <td><?php echo $errors["password"] ?? ''; ?></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><?php echo $signupErr; ?></td>
                    </tr>

                    <tr>
                        <td>Upload File</td>
                        <td>
                            <input type="file" id="uploadFile" name="uploadFile">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="submit" name="signup">Sign Up</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="a_login.php"><button type="button">Back</button></a>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </body>
</html>