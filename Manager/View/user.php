<?php
include "../Model/DatabaseConnection.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager List</title>

    <!-- Internal CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 40px;
        }

        table {
            border-collapse: collapse;
            width: 70%;
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
            background-color: #34495e;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            border-radius: 50%;
            object-fit: cover;
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
<body>

<?php
function TableHeader(){
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile Picture</th>
            </tr>";
}

function TableRow(){
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $users = $db->getAllUsers($connection, "manager");

    if($users->num_rows > 0){
        while($user = $users->fetch_assoc()){
            echo "<tr>
                    <td>".$user['ID']."</td>
                    <td>".$user['Name']."</td>
                    <td>".$user['Email']."</td>
                    <td>
                        <img src='".$user["file_path"]."' width='50' height='50'/>
                    </td>
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
