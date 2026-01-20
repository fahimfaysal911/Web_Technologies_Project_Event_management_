<?php

class dtabaseconnection{
   
    function openConnection(){
        $db_host="localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "priject_management";

        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
        if($connection->connect_error){
            die("Failed to connect database ". $connection->connect_error);
        }
        return $connection;
    }


    function signup($connection, $tableName, $email, $password){
        $sql = "SELECT * FROM ".$tableName." WHERE email='".$email."' AND password='".$password."'";
        $result = $connection->query($sql);
        return $result;
    }

    function checkExistingUser($connection, $tableName, $email){
        $sql = "SELECT * FROM ".$tableName." WHERE email='".$email."'";
        $result = $connection->query($sql);
        return $result;
    }

    function closeConnection($connection){
        $connection->close();
    }
}



?>