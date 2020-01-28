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
<!--    catagory Form add  Deshbord-->
    <form action="" method="POST">
        <div class="form-group row" style="margin-top: 20px;">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Catagory Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="category_name" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Category Description</label>
            <div class="col-sm-10">
               <textarea class="form-control" name="category_description"></textarea>
            </div>
        </div>
      <div class="form-group row">
          <label for="inputE" class="col-sm-3 col-form-label"> Publication Status</label>
          <div class="col-sm-9">
              <input type="radio" name="status" value="0"> Unpublish
              <input type="radio" name="status" value="1"> Publish
          </div>
      </div>
        <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <button type="submit" name="btn" class="btn btn-success btn-block"> Save category</button>
            </div>
        </div>

    </form>

</div>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
