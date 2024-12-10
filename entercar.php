<!DOCTYPE html>
<html>

<?php 
include('session_client.php'); ?> 
<head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body>

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
                    <li>
                        <a href="#">Հիշողություն</a>
                    </li>
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
                        <a href="#"> ՀՏՀ </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="entercar1.php" enctype="multipart/form-data" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Խնդրում ենք ներմուծել Ձեր մեքենայի տվյալները: </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="car_name" name="car_name" placeholder="Ավտոմեքենայի մոդել " required autofocus="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="car_nameplate" name="car_nameplate" placeholder="Մեքենայի համարանիշ" required>
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="ac_price" name="ac_price" placeholder="AC ուղեվարձը մեկ կմ-ի համար (դր)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="non_ac_price" name="non_ac_price" placeholder="Ոչ AC ուղեվարձը մեկ կմ-ի համար (դր)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="ac_price_per_day" name="ac_price_per_day" placeholder="AC-ով օրական ուղեվարձ (դր)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="non_ac_price_per_day" name="non_ac_price_per_day" placeholder="Օրական ոչ AC-ով ուղեվարձ (դր)" required>
          </div>

          <div class="form-group">
            <input name="uploadedimage" type="file">
          </div>
           <button type="submit" id="submit" name="submit" class="btn btn-success pull-right">Ավելացնել ավտոմեքենա</button>    
        </form>
      </div>
    </div>


        <div class="col-md-12" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Իմ ավտոմեքենաները </h3>
<?php
// Storing Session
$user_check=$_SESSION['login_client'];
$sql = "SELECT * FROM cars WHERE car_id IN (SELECT car_id FROM clientcars WHERE client_username='$user_check');";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>
<div style="overflow-x:auto;">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th width="24%"> Մոդել</th>
        <th width="15%"> Համարանիշ </th>
        <th width="13%"> AC-ով(կմ) </th>
        <th width="17%"> Առանց AC(կմ)</th>
        <th width="13%"> AC-ով(օր)</th>
        <th width="17%"> Առանց AC(օր)</th>
        <th width="1%"> Առկա </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["car_name"]; ?></td>
      <td><?php echo $row["car_nameplate"]; ?></td>
      <td><?php echo $row["ac_price"]; ?></td>
      <td><?php echo $row["non_ac_price"]; ?></td>
      <td><?php echo $row["ac_price_per_day"]; ?></td>
      <td><?php echo $row["non_ac_price_per_day"]; ?></td>
      <td><?php echo $row["car_availability"]; ?></td>
      
    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>Դեռ ավտոմեքենաներ չկան</center> </h4>
  <?php } ?>
        </form>
</div>        
        </div>
    </div>
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