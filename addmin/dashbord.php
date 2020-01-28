<?php
session_start();
if($_SESSION['id']==null){
    header('Location:index.php');
}
require_once '../vendor/autoload.php';
$login= new App\classes\Login();
If(isset($_GET['logout'])){
    $login->adminLogout();
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php include 'includes/manu.php'?>
</div>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
