<?php
//connection details
$host="localhost";
$user="root";
$pass="";
$database="mugisha";
// creating connection
$connection= new mysqli($host,$user,$pass,$database);
//chek connection

if($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
}
?>