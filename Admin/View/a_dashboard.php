<?php


$encoded_email  = $_COOKIE["email"] ?? "";
$email = json_decode($encoded_email);
if(!isset($_COOKIE["isLoggedIn"])){
    Header("Location: .a_login.php");
}

?>

<html>
    <head>
        <style>
            body {
                background: DodgerBlue;
            }
            .container {
                width: 500px;
                margin: 120px auto;
                background-color: cyan;
                padding: 25px;
                border-radius: 10px;
                text-align: center;
            }
            h1 {
                margin-bottom: 15px;
            }
            button {
                padding: 8px 10px;
                border-radius: 5px;
                border: none;
                background-color: tomato;
                color: white;
                cursor: pointer;
            }
            button:hover {
                background: blue;
            }
            a {
                text-decoration: none;
                color: blue;
            }

            a:hover {
                color: red;
            }

        </style>
    </head>
    <body >
        <div class = "container">
            <h1>Dashboard</h1>
            <h1>Hi, <?php echo $email;?></h1>

            <div>
                <a href="profile.php"><button type="next">Profile</button></a>
                <a href="event.php"><button type="next">Event List</button></a>
                <a href="order.php"><button type="next">Order List</button></a>
            </div>
            <br>
            <div>
                <a href="a_m_c_l.php"><button type="next">Admin , Manager & Customer List</button></a>
                
            </div>

            <br>

            <div>
                <a href="..\Controller\a_logout.php">Logout</a>
            </div>

            
        </div>
    </body>
</html>