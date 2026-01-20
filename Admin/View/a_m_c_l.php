<?php
include "../Model/a_database_connection.php";

session_start();

function TableHeader($title){
    echo "<h2>$title</h2>";
    echo "<table border=1><tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Profile Picture</th>
          </tr>";
}

function TableRow($tablename){
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $users = $db->getAllUsers($connection, $tablename);

    if($users && $users->num_rows > 0){
        while($user = $users->fetch_assoc()){
            echo "<tr>
            <td>".($user['ID'] ?? '')."</td>
            <td>".($user['Name'] ?? '')."</td>
            <td>".($user['Email'] ?? '')."</td>
            <td>";

            if(!empty($user["file_path"])){
                echo "<img src='".$user["filepath"]."' width='50' height='50'/>";
            }

            echo "</td></tr>";
        }
    }
    echo "</table><br>";

    $db->closeConnection($connection);
}

TableHeader("Admin List");
TableRow("admin");

TableHeader("Manager List");
TableRow("manager");

TableHeader("Customer List");
TableRow("customer");


?>
<html>
    <body>
        <a href="a_dashboard.php"><button type="button">Back</button></a>
        
    </body>
</html>