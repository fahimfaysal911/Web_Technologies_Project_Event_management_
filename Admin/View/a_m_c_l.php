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
        <div class = "container">
            <?php
            TableHeader("Admin List");
            TableRow("admin");
            ?>
            <div style="margin:10px 0;">
                <a href="edit_admin.php"><button type="button">Edit</button></a>
                <a href="add_admin.php"><button type="button">Add</button></a>
                <a href="delete_admin.php"><button type="button">Delete</button></a>
            </div>
            
            <?php
            TableHeader("Manager List");
            TableRow("manager");
            ?>
            <div style="margin:10px 0;">
                <a href="edit_manager.php"><button type="button">Edit</button></a>
                <a href="add_manager.php"><button type="button">Add</button></a>
                <a href="delete_manager.php"><button type="button">Delete</button></a>
            </div>
            
            <?php
            TableHeader("Customer List");
            TableRow("customer");
            ?>
            <div style="margin:10px 0;">
                <a href="edit_customer.php"><button type="button">Edit</button></a>
                <a href="add_customer.php"><button type="button">Add</button></a>
                <a href="delete_customer.php"><button type="button">Delete</button></a>
            </div>

        </div>
        
        
    </body>
</html>