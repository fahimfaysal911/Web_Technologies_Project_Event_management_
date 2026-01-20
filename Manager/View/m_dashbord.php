

<?php
// session_start();
// $isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

// if(!$isLoggedIn){
//     Header("Location: ./login.php");
// }
$encoded_email  = $_COOKIE["email"] ?? "";
$email = json_decode($encoded_email);
if(!isset($_COOKIE["isLoggedIn"])){
    Header("Location: ./login.php");
}

?>

<html>
    
<body>
   <div>
    <table>
        <tr><th class="title"> Mahager Dashboard </th></tr>
        <tr>  </tr>

    </table>
    <div>
        <a class="back" href="http://localhost/Event%20Management/Web_Technologies_Project_Event_management_/Manager/View/m_login.php">back</a>
    </div>
   </div>
    <a href="..\Controller\logout.php">Logout</a>
</body>
</html>