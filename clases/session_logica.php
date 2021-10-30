<?php
   include('./inc/conexion.php');
   session_start();
   $username;
   $checkMail = $_SESSION['login_user'];
   if($checkMail != ""){
   $sql = "SELECT Username FROM usuarios WHERE email = '$checkMail'";
   $stmt=$conectar->prepare($sql);
   $stmt->execute();
   $row = $stmt->get_result();	
   $stmt = $conectar->prepare($sql);
   $stmt->execute();
   $result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
        $username = $row['Username'];
}
   if(!isset($_SESSION['login_user'])){
    header("location:index.php");
    die();
   }
}else
{
    header("location:login.php");
    die();
}
?>