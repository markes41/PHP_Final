<?php
   include('./inc/conexion.php');
   session_start();
   
   $checkMail = $_SESSION['login_user'];
   if($checkMail != ""){
   $sql = "SELECT Email FROM usuarios WHERE email = '$checkMail'";
   $stmt=$conectar->prepare($sql);
   $stmt->execute();
   $row = $stmt->get_result();	
   $stmt = $conectar->prepare($sql);
   $stmt->execute();
   $result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
        echo $row['Email'];
}
   if(!isset($_SESSION['login_user'])){
    header("location:main.php");
    die();
   }
}else
{
    header("location:main.php");
    die();
}
?>