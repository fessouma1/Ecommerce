<?php

include("adminpartial/head.php");
if(isset($_POST['login'])){

    include('../partial/connect.php');

$email=$_POST['email'];
$password = $_POST['password'];
$sql="SELECT * from admins where username='$email' AND password='$password'";
$result = $connect->query($sql);
$final=$result->fetch_assoc();

if($email=$final['username'] AND $password=$final['password']){
    header('location:adminindex.php');
}
else
{
    header("location:adminlogin.php");
}
}
?>

<div class="row">

    <div class="col-sm-4">

    </div>

    <div class="col-sm-4">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="adminlogin.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" name="login">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
  </div>

  <div class="col-sm-4">

 </div>

</div>