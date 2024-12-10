<html>

  <head>
    <title> Հաճախորդի գրանցում | Suren's Drive </title>
  </head>
  <?php session_start(); ?>
  <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">

    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Ավտոմեքենայի վարձույթ </a>
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
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Ելք <?php echo $_SESSION['login_customer']; ?></a>
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

<?php

require 'connection.php';
$conn = Connect();

function GetImageExtension($imagetype) {
    if(empty($imagetype)) return false;
    
    switch($imagetype) {
        case 'assets/img/cars/bmp': return '.bmp';
        case 'assets/img/cars/gif': return '.gif';
        case 'assets/img/cars/jpeg': return '.jpg';
        case 'assets/img/cars/png': return '.png';
        default: return false;
    }
}

$car_name = $conn->real_escape_string($_POST['car_name']);
$car_nameplate = $conn->real_escape_string($_POST['car_nameplate']);
$ac_price = $conn->real_escape_string($_POST['ac_price']);
$non_ac_price = $conn->real_escape_string($_POST['non_ac_price']);
$ac_price_per_day = $conn->real_escape_string($_POST['ac_price_per_day']);
$non_ac_price_per_day = $conn->real_escape_string($_POST['non_ac_price_per_day']);
$car_availability = "yes";

//$query = "INSERT into cars(car_name,car_nameplate,ac_price,non_ac_price,car_availability) VALUES('" . $car_name . "','" . $car_nameplate . "','" . $ac_price . "','" . $non_ac_price . "','" . $car_availability ."')";
//$success = $conn->query($query);


if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=$_FILES["uploadedimage"]["name"];
    $target_path = "assets/img/cars/".$imagename;

    if(move_uploaded_file($temp_name, $target_path)) {
        //$query0="INSERT into cars (car_img) VALUES ('".$target_path."')";
      //  $query0 = "UPDATE cars SET car_img = '$target_path' WHERE ";
        //$success0 = $conn->query($query0);

        $query = "INSERT into cars(car_name,car_nameplate,car_img,ac_price,non_ac_price,ac_price_per_day,non_ac_price_per_day,car_availability) VALUES('" . $car_name . "','" . $car_nameplate . "','".$target_path."','" . $ac_price . "','" . $non_ac_price . "','" . $ac_price_per_day . "','" . $non_ac_price_per_day . "','" . $car_availability ."')";
        $success = $conn->query($query);

        
    } 

}


// Taking car_id from cars

$query1 = "SELECT car_id from cars where car_nameplate = '$car_nameplate'";

$result = mysqli_query($conn, $query1);
$rs = mysqli_fetch_array($result, MYSQLI_BOTH);
$car_id = $rs['car_id'];
 

$query2 = "INSERT into clientcars(car_id,client_username) values('" . $car_id ."','" . $_SESSION['login_client'] . "')";
$success2 = $conn->query($query2);

if (!$success){ ?>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
    Նույն համարանիշով մեքենա արդեն գոյություն ունի:
        <?php echo $conn->error; ?>
        <br><br>
        <a href="entercar.php" class="btn btn-default"> Վերադարձնել </a>
</div>
<?php	
}
else {
    header("location: entercar.php"); //Redirecting 
}

$conn->close();

?>

    </body>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>&#169; <?php echo date("Y"); ?> Մշակումը՝ Սուրեն Հունանյանի <b>
                </b></h5>
                </div>
            </div>
        </div>
    </footer>
</html>