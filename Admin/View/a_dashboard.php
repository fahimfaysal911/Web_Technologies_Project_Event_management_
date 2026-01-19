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
                    <td><img src="Laptop1.jpg" alt="Birthday"></td>
                </tr>
                
                <tr>
                    <td class="event-desc">High-performance laptop for work and gaming.</td>
                </tr>
                <tr>
                    <td class="product-price"> Price - $199</td>
                </tr>
                <tr>
                    <td> <a href="https://www.asus.com/bd/laptops/for-students/all-series/" class="buy-link">Buy Now</a></td>
                </tr>
                
            </table>
            <table border="10px">
                <tr>
                    <td class="product-name" >Headphone<td>
                </tr>
                <tr>
                    <td><img src="Headphone1.jpg" alt="Headphone"></td>
                </tr>
                
                <tr>
                    <td class="product-desc">High-performance headphone for work and gaming.</td>
                </tr>
                <tr>
                    <td class="product-price"> Price - $99</td>
                </tr>
                <tr>
                    <td> <a href="https://smartbd.com/product/xtreme-x50rg-rgb-gaming-headphone/" class="buy-link">Buy Now</a></td>
                </tr>
            </table>
            <table border="10px">
                <tr>
                    <td class="product-name" >Headphone<td>
                </tr>
                <tr>
                    <td><img src="headphone2.jpg" alt="Headphone1"></td>
                </tr>
                
                <tr>
                    <td class="product-desc">High-performance headphone for work and gaming.</td>
                </tr>
                <tr>
                    <td class="product-price"> Price - $119</td>
                </tr>
                <tr>
                    <td> <a href="https://sourceofproduct.com/product/havit-h2013d-rgb-gaming-headphone/" class="buy-link">Buy Now</a></td>
                </tr>
            </table>
        </div>
        <div class="cart1" style="display: flex; gap: 20px;">
            <table border="10px">
                <tr>
                    <td class="product-name" >Baby Shower<td>
                </tr>
                <tr>
                    <td><img src="Smartwatch.jpg" alt="Smartwatch"></td>
                </tr>
                
                <tr>
                    <td class="product-desc">Stylish watch for work and casual wear.</td>
                </tr>
                <tr>
                    <td class="product-price"> Price - $59</td>
                </tr>
                <tr>
                    <td> <a href="https://www.gadstyle.com/item/167415/samsung-galaxy-watch-7-ai-smart-watch-40mm-44mm/" class="buy-link">Buy Now</a></td>
                </tr>
                
            </table>
            <table border="10px">
                <tr>
                    <td class="product-name" >Smartwatch<td>
                </tr>
                <tr>
                    <td><img src="smartwatch1.jpg" alt="Smartwatch"></td>
                </tr>
                
                <tr>
                    <td class="product-desc">Stylish watch for work and casual wear.</td>
                </tr>
                <tr>
                    <td class="product-price"> Price - $49</td>
                </tr>
                <tr>
                    <td> <a href="https://zeblazebangladesh.com/product/zeblaze-beyond-3-pro/" class="buy-link">Buy Now</a></td>
                </tr>
                
            </table>
        </div>
        
    </body>

<body>
    
    <a href="..\Controller\a_logout.php">Logout</a>
</body>
</html>