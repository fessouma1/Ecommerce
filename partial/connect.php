<?php

$host="localhost";
$user="root";
$password="";
$dbname="phpstore";

$connect=mysqli_connect($host,$user,$password,$dbname);

if($connect->mysqli_error)
{
    echo "No connection";
}
else
{
    echo "We are good to go!!";
}

?>