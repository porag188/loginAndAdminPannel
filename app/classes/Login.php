<?php


namespace App\classes;
use App\classes\Database;

class Login
{
    public function addminLoginCheck($data){
//        echo "<pre>";
//        print_r($data);
        $email=$data['email'];
        $password=md5($data['password']);
        $sql="SELECT * FROM users WHERE email='$email' AND password='$password' ";
        if(mysqli_query(Database::dbconnection(),$sql)){
        $queryResult=mysqli_query(Database::dbconnection(),$sql);
        $user= mysqli_fetch_assoc($queryResult);
        if($user){
            session_start();
            $_SESSION['id']=$user['id'];
            $_SESSION['name']=$user['name'];
            header('Location:dashbord.php');
        }else{

            $message="This user not valid";
            return $message;
        }
        }else{
            die("Query Problem".mysqli_error(Database::dbconnection()));
        }

    }
    public function adminLogout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:index.php ');
    }
}