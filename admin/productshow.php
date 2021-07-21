<!DOCTYPE html>
<html>
<?php
include("adminpartial/session.php");
    include("adminpartial/head.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php
include("adminpartial/header.php");
include("adminpartial/aside.php");

?>
 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="col-sm-9">

       <?php
       include('../partial/connect.php');

       $sql="Select * FROM products";;
       $results=$connect->query($sql);
       while($final=$results->fetch_assoc()){ ?>
       
       <a href="proshow.php?pro_id=<?php echo $final['id']?>">
       <h3><?php echo $final['id'] ?> : <?php echo $final['name'] ?></h3> <br>
       </a>

       <a href="proupdate.php?up_id=<?php echo $final['id'] ?>">
       <button>Update</button>
       </a><br>
       
      <?php }
      ?>

       </div>


            <div class=col-sm-3>


              </div>
        </div>
    </section>
    </div>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
 <?php
    include("adminpartial/footer.php");
 ?>
</body>
</html>
