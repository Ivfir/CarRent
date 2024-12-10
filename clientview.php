<!DOCTYPE html>
<html>
<?php 
session_start();
require 'connection.php';
$conn = Connect();
?>
<head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/w3css/w3.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Suren's Drive </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Գլխավոր</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Բարի գալուստ <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Կառավարման վահանակ <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entercar.php">Ավելացնել ավտոմեքենա</a></li>
              <li> <a href="enterdriver.php">Ավելացնել վարորդ</a></li>
              <li> <a href="clientview.php">Վարձույթի դիտում</a></li>

            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Ելք</a>
                    </li>
                </ul>
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Գլխավոր</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Բարի գալուստ <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Ավտոտնակ <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="prereturncar.php">Ավտոմեքենայի վերադարձ</a></li>
              <li> <a href="mybookings.php">Իմ ամրագրածները</a></li>
            </ul>
            </li>
          </ul>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Ելք</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Գլխավոր</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Աշխատակից</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Հաճախորդ</a>
                    </li>
                    <li>
                        <a href="#">ՀՏՀ</a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 
<?php $login_client = $_SESSION['login_client']; 

    $sql1 = "SELECT * FROM rentedcars rc, clientcars cc, customers c, cars WHERE cc.client_username = '$login_client' AND cc.car_id = rc.car_id AND rc.return_status = 'R' AND c.customer_username = rc.customer_username AND cc.car_id = cars.car_id";

    $result1 = $conn->query($sql1);

    if (mysqli_num_rows($result1) > 0) {
?>
<div class="container">
      <div class="jumbotron">
        <h1 class="text-center">ձեր ամրագրածները</h1>
        <p class="text-center"> Հուսով ենք, որ դուք հավանել եք մեր ծառայությունը </p>
      </div>
    </div>

    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="20%">Ավտոմեքենա</th>
<th width="15%">Հաճախորդի անուն</th>
<th width="20%">Վարձույթի սկիզբ</th>
<th width="20%">Վարձույթի ավարտ</th>
<th width="10%">Հեռավորություն</th>
<th width="15%">Ընդհանուր գումար</th>
</tr>
</thead>
<?php
        while($row = mysqli_fetch_assoc($result1)) {
?>
<tr>
<td><?php echo $row["car_name"]; ?></td>
<td><?php echo $row["customer_name"]; ?></td>
<td><?php echo $row["rent_start_date"] ?></td>
<td><?php echo $row["rent_end_date"]; ?></td>
<td><?php echo $row["distance"]; ?></td>
<td>Rs. <?php echo $row["total_amount"]; ?></td>
</tr>
<?php        } ?>
                </table>
                </div> 
        <?php } else {
            ?>
        <div class="container">
      <div class="jumbotron">
        <h1>Չկա վարձույթ</h1>
        <p> Վարձել ավտոմեքենա հիմա <?php echo $conn->error; ?> </p>
      </div>
    </div>

            <?php
        } ?>   

</body>
<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                <h5>&#169; <?php echo date("Y"); ?> Մշակումը՝ Սուրեն Հունանյանի <b>
                  
                </b> </h5>
                </div>
            </div>
        </div>
    </footer>
</html>