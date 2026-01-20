<?php
include "../Model/a_database_connection.php";
$Email="";
$Email=$_POST["Email"];

if($Email==""){
    echo "Email Empty";
}
else{

    $connection=new DatabaseConnection();
    $conobj=$connection->openConnection();
    $result=$connection->checkExistingUser($conobj,"admin",$Email);
    if ($result->num_rows > 0)
    {
       echo "Email Already Used";
    }

    else{
            echo "Unique Email";
    }
    $connection->closeConnection($conobj);
}




?>