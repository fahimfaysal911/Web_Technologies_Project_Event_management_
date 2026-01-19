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
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color:skyblue;
        }
        .cart1 {
            max-width: 950px;
            background-color: white;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: blanchedalmond;

        }
        table:hover{
            background-color: skyblue;
        }
        
        body {
            margin-left: 20%;
            margin-right: 20%;
        }
        .center-text {
            text-align: center;
        }

        .event-name {
            text-align: left;
            font-size: larger;
            font-weight: bold;
           
        }
        .event-desc {
            text-align: left;
            font-weight: light;
            
        }
        .event-price {
            text-align: left;
            font-weight: bolder;
            color: brown;
        }

        </style>
    </head>
    <body >
        <h1>Dashboard</h1>
        <h1>Hi, <?php echo $email;?></h1>

        <div class="container">
            <h1 class="center-text" >Event Web Page</h1>
        </div>
        <div class="cart1" style="display: flex; gap: 20px;">
            <table border="10px">
                <tr>
                    <td class="event-name" >Birthday<td>
                </tr>
                <tr>
                    <td><img src="Birthday.jpg" alt="Birthday"></td>
                </tr>
                
                <tr>
                    <td class="event-desc"> Another Year, Another Reason to Celebrate! </td>
                </tr>
                <tr>
                    <td class="event-price"> Price - $199</td>
                </tr>
                <tr>
                    <td> <a href="https://www.asus.com/bd/laptops/for-students/all-series/" class="buy-link">Fill details. </a></td>
                </tr>
                
            </table>

            <table border="10px">
                <tr>
                    <td class="event-name" >Wedding<td>
                </tr>
                <tr>
                    <td><img src="Wedding.png" alt="Wedding"></td>
                </tr>
                
                <tr>
                    <td class="event-desc">Two Hearts, One Journey ! From This Day Forward. </td>
                </tr>
                <tr>
                    <td class="event-price"> Price - $599</td>
                </tr>
                <tr>
                    <td> <a href="https://www.asus.com/bd/laptops/for-students/all-series/" class="buy-link">Fill details. </a></td>
                </tr>
            </table>

            <table border="10px">
                <tr>
                    <td class="event-name" >Baby Shower<td>
                </tr>
                <tr>
                    <td><img src="Babyshower.jpg" alt="BabyShower"></td>
                </tr>
                
                <tr>
                    <td class="event-desc">Because Every Baby Deserves a Grand Welcome !</td>
                </tr>
                <tr>
                    <td class="event-price"> Price - $399</td>
                </tr>
                <tr>
                    <td> <a href="https://www.asus.com/bd/laptops/for-students/all-series/" class="buy-link">Fill details. </a></td>
                </tr>
            </table>
        </div>
        
        
    </body>
    <body>
        <a href="..\Controller\a_logout.php">Logout</a>
    </body>
</html>