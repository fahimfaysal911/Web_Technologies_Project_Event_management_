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

TableHeader();
TableRow();
?>

<html>
    <body>
        <br>
        <a href="a_dashboard.php"><button type="button">Back</button></a>
        
    </body>
</html>