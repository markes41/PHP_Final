<?php
session_start();
session_destroy();
header('Location: https://localhost/PHP_Final/login.php');
exit;
?>