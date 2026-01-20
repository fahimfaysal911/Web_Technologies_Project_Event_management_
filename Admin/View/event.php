<html>
    <head>
        <style>
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: skyblue;
            text-align: center;
            border-radius: 8px;
        }
        
        .cart1 {
            max-width: 1000px;
            margin: 20px auto;
            display: flex;
            gap: 20px;

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
            font-size: 14px;
            text-align: left;
            font-weight: light;
            
        }
        .event-price {
            text-align: left;
            font-weight: bolder;
            color: brown;
        }
        .event-img {
            width: 250px;
            height: 250px;
            object-fit: cover;
        }

        .buy-link {
            text-decoration: none;
            background: #008CBA;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
        }
        .buy-link:hover{
            background-color: red;
        }
        body {
            font-family: Arial, sans-serif;
        }

        </style>
    </head>
    <body >
        
        <div class="container">
            <h1 class="center-text" >Event Web Page</h1>
        </div>
        <div class="cart1" style="display: flex; gap: 20px;">
            <table border="10px">
                <tr>
                    <td class="event-name" >Birthday<td>
                </tr>
                <tr>
                    <td><img src="Birthday.jpg" alt="Birthday" class="event-img"></td>
                </tr>
                
                <tr>
                    <td class="event-desc"> Another Year, Another Reason to Celebrate! </td>
                </tr>
                <tr>
                    <td class="event-price"> Price - $199 (for 1 day).</td>
                </tr>
                <tr>
                    <td> <a href="form.php" class="buy-link">Fill details. </a></td>
                </tr>
                
            </table>

            <table border="10px">
                <tr>
                    <td class="event-name" >Wedding<td>
                </tr>
                <tr>
                    <td><img src="Wedding.jpg" alt="Wedding" class="event-img"></td>
                </tr>
                
                <tr>
                    <td class="event-desc">Two Hearts, One Journey ! From This Day Forward. </td>
                </tr>
                <tr>
                    <td class="event-price"> Price - $599 (for 1 day).</td>
                </tr>
                <tr>
                    <td> <a href="form.php" class="buy-link">Fill details. </a></td>
                </tr>
            </table>

            <table border="10px">
                <tr>
                    <td class="event-name" >Baby Shower<td>
                </tr>
                <tr>
                    <td><img src="Babyshower.jpg" alt="BabyShower" class="event-img"></td>
                </tr>
                
                <tr>
                    <td class="event-desc">Because Every Baby Deserves a Grand Welcome !</td>
                </tr>
                <tr>
                    <td class="event-price"> Price - $399 (for 1 day).</td>
                </tr>
                <tr>
                    <td> <a href="form.php" class="buy-link">Fill details. </a></td>
                </tr>
            </table>
            
        </div>
        <div class="container">
            <a href="a_dashboard.php"><button type="button">Back</button></a>
        </div>

    </body>

</html>