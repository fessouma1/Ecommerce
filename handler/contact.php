<?php_


$email=$_POST['email'];
$msg=$POST['msg'];

$sql="INSERT INTO contact(email,msg) VALUES('email','msg')";

$connect->query($sql);
?>