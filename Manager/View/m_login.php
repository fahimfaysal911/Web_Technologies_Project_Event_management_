<?php

session_start();
$isLoggedIn = false;

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if($isLoggedIn){
    Header("Location: ./a_dashboard.php");
}


$previousValues = $_SESSION["previousValues"] ?? [];

$loginErr = $_SESSION["loginErr"]  ?? "";

$errors = $_SESSION["errors"] ?? [];

unset($_SESSION['errors']);
unset($_SESSION['previousValues']);
unset( $_SESSION["loginErr"]);

?>


<html>
    <head>
        <script src="../Controller/JS/"></script>
        <style>
        .container {
            max-width: 800px;
            margin: 210px auto;
            background-color: skyblue;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(149, 150, 106, 0.25);
            text-align: center;
            
        }

        .front {
            background-color: goldenrod;
            max-width: 100px;
            margin: auto;
            margin-top: 30px;
            border-radius: 8px;
            
        }
        table {
            margin-left: auto;
            margin-right: auto;

        }
        
        .center-text {
            text-align: center;
        }
 
        .login{
            
            
            max-width: 130px;
            margin : 10px;
            border-radius: 8px;

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
    <body class="container">
        <h1 class="center-text" >Manager Login Form</h1>
        <div class="container">
            <form method ="post" action="../Controller/m_login_validation.php">

                <table>
                    
                    <tr>
                        <td style="color: white;">E-mail  </td>
                    </tr>
                    <tr>

                        <td>
                            <input type="text" placeholder="Enter your E-mail" id="email" name="email" value="<?php echo $previousValues['email'] ?? '' ?>"/>
                        </td>
                        <td><?php echo $errors["email"] ?? ''; ?></td>
                    <tr>
                        <td style="color: white;">Password</td>
                    </tr>
                    <tr >
                        <td><input type="password" name="password" placeholder="" id="password" name="password" /></td>
                        <td><?php echo $errors["password"] ?? ''; ?></td>
                    </tr>
                    <tr>
                    
                        <td><?php echo $loginErr;?></td>
                    </tr>
                </table>

                <button class="login" type="submit" name="login"> Submit</button>
                
                <table>
                    <tr>
                        <td style="color: white;">Don't have an account ?</td>
                        <td style="color: blue;"><a href="http://localhost/Event%20Management/Web_Technologies_Project_Event_management_/Manager/View/m_register.php">Sign Up</a> </td>
                    </tr>
                </table>

                
            </form>

        </div>

        <!-- Back Button -->
<button class="back-btn" onclick="history.back()">Back</button>
    </body>
</html>