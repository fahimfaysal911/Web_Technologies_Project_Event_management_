<?php
include "../Model/DatabaseConnection.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events Table</title>

    <!-- Internal CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 40px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #2c3e50;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .back-btn {
            display: block;
            margin: 30px auto;
            padding: 10px 25px;
            font-size: 16px;
            background-color: #2c3e50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-btn:hover {
            background-color: #1a252f;
        }
    </style>
</head>
<body>

<?php
function TableHeader(){
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Customer_Name</th>
                <th>Customer_Email</th>
                <th>Event_type</th>
                <th>Days</th>
                <th>Total_price</th>
            </tr>";
}

function TableRow(){
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $users = $db->getAllUsers($connection, "events");

    if($users->num_rows > 0){
        while($user = $users->fetch_assoc()){
            echo "<tr>
                    <td>".$user['ID']."</td>
                    <td>".$user['Customer_name']."</td>
                    <td>".$user['Customer_email']."</td>
                    <td>".$user['Event_type']."</td>
                    <td>".$user['Days']."</td>
                    <td>".$user['Total_price']."</td>
                  </tr>";
        }
    }

    echo "</table>";
    $db->closeConnection($connection);
}

TableHeader();
TableRow();
?>

<!-- Back Button -->
<button class="back-btn" onclick="history.back()">Back</button>

</body>
</html>
