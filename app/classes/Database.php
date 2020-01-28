<?php


namespace App\classes;


class Database
{
    public function dbconnection(){
        $hostName='localhost';
        $userName='root';
        $password= 'root';
        $dbName='blog';
        $conn=mysqli_connect($hostName,$userName,$password,$dbName);

        return $conn;
    }

}