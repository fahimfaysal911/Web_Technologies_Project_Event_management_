<?php
include "../Model/a_database_connection.php";

session_start();

function TableHeader(){
    echo "<table border=1><tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Type of Event</th>
            <th>Days</th>
            <th>Price</th>
          </tr>";
}

function TableRow(){
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $users = $db->getAllUsers($connection, "events");

    if($users && $users->num_rows > 0){
        while($user = $users->fetch_assoc()){
            echo "<tr>
            <td>".($user['ID'] ?? '')."</td>
            <td>".($user['Customer_name'] ?? '')."</td>
            <td>".($user['Customer_email'] ?? '')."</td>
            <td>".($user['Event_type'] ?? '')."</td>
            <td>".($user['Days'] ?? '')."</td>
            <td>".($user['Total_price'] ?? '')."</td>
            <td>";

            echo "</td></tr>";
        }
    }
    echo "</table>";

    $db->closeConnection($connection);
}

?>

<html>
    <head>
        <style>
            body {
                background: DodgerBlue;
            }

            .container {
                width: 90%;
                max-width: 900px;
                margin: 60px auto;
                background-color: cyan;
                padding: 25px;
                border-radius: 10px;
            }

            h2 {
                text-align: center;
                margin-top: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            th, td {
                padding: 8px;
                border: 1px solid black ;
                text-align: center;
            }

            th {
                background: tomato;
                color: white;
            }

            img {
                border-radius: 50%;
            }

            button {
                padding: 8px 12px;
                border-radius: 5px;
                border: none;
                background-color: tomato;
                color: white;
                cursor: pointer;
            }

            button:hover {
                background: blue;
            }

            .center {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="center" style ="margin-top : 50px ;">
            <a href="a_dashboard.php"><button type="button">Back</button></a>
        </div>
        <br>
        <div class = "container">
            <?php
            TableHeader();
            TableRow();
            ?>
        </div>
        
    </body>
</html>