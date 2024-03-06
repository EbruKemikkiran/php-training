<?php

$host ="localhost";
$username = "root";
$password= "";
$database ="php2024db";



//MYSQLI (Object Oriented, procedural)
//PDO


$connection = mysqli_connect($host,$username,$password,$database);

if(mysqli_connect_errno() > 0)
{
    die("error: ".mysqli_connect_errno());
}


?>