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
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/bookingconfirm.css" />
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
              <li> <a href="mybookings.php"> Իմ ամրագրածները</a></li>
            </ul>
            </li>
          </ul>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Ելք </a>
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
                        <a href="customerlogin.php">Հաճախրոդ</a>
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
<body>

<?php 
$id = $_GET["id"];
$distance = NULL;
$distance_or_days = $conn->real_escape_string($_POST['distance_or_days']);
$fare = $conn->real_escape_string($_POST['hid_fare']);
$total_amount = $distance_or_days * $fare;
$car_return_date = date('Y-m-d');
$return_status = "R";
$login_customer = $_SESSION['login_customer'];

$sql0 = "SELECT rc.id, rc.rent_end_date, rc.charge_type, rc.rent_start_date, c.car_name, c.car_nameplate FROM rentedcars rc, cars c WHERE id = '$id' AND c.car_id = rc.car_id";
$result0 = $conn->query($sql0);

if(mysqli_num_rows($result0) > 0) {
    while($row0 = mysqli_fetch_assoc($result0)){
            $rent_end_date = $row0["rent_end_date"];  
            $rent_start_date = $row0["rent_start_date"];
            $car_name = $row0["car_name"];
            $car_nameplate = $row0["car_nameplate"];
            $charge_type = $row0["charge_type"];
    }
}

function dateDiff($start, $end) {
    $start_ts = strtotime($start);
    $end_ts = strtotime($end);
    $diff = $end_ts - $start_ts;
    return round($diff / 86400);
}

$extra_days = dateDiff("$rent_end_date", "$car_return_date");
$total_fine = $extra_days*200;

$duration = dateDiff("$rent_start_date","$rent_end_date");

if($extra_days>0) {
    $total_amount = $total_amount + $total_fine;  
}

if($charge_type == "days"){
    $no_of_days = $distance_or_days;
    $sql1 = "UPDATE rentedcars SET car_return_date='$car_return_date', no_of_days='$no_of_days', total_amount='$total_amount', return_status='$return_status' WHERE id = '$id' ";
} else {
    $distance = $distance_or_days;
    $sql1 = "UPDATE rentedcars SET car_return_date='$car_return_date', distance='$distance', no_of_days='$duration', total_amount='$total_amount', return_status='$return_status' WHERE id = '$id' ";
}

$result1 = $conn->query($sql1);

if ($result1){
     $sql2 = "UPDATE cars c, driver d, rentedcars rc SET c.car_availability='yes', d.driver_availability='yes' 
     WHERE rc.car_id=c.car_id AND rc.driver_id=d.driver_id AND rc.customer_username = '$login_customer' AND rc.id = '$id'";
     $result2 = $conn->query($sql2);
}
else {
    echo $conn->error;
}
?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Մեքենան վերադարձված է</h1>
        </div>
    </div>
    <br>

    <h2 class="text-center"> Շնորհակալություն Suren's Drive այցելելու համար, մաղթում ենք ձեզ ապահով ճանապարհորդություն </h2>

    <h3 class="text-center"> <strong>Ձեր պատվերի համարը.</strong> <span style="color: blue;"><?php echo "$id"; ?></span> </h3>


    <div class="container">
        <h5 class="text-center">
        Խնդրում ենք կարդալ ձեր պատվերի վերաբերյալ հետևյալ տեղեկությունները</h5>
        <div class="box">
            <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
                <h3 style="color: orange;">
                Ձեր ամրագրումը ստացվել և տեղադրվել է պատվերի մշակման համակարգում</h3>
                <br>
                <h4>Խնդրում ենք նշել ձեր <strong>պատվերի համարը</strong> այժմ և պահեք այն դեպքում, երբ ձեզ անհրաժեշտ է կապնվել մեզ հետ ձեր պատվերի մասին</h4>
                <br>
                <h3 style="color: orange;">
                Հաշիվ-ապրանքագիր</h3>
                <br>
            </div>
            <div class="col-md-10" style="float: none; margin: 0 auto; ">
                <h4> <strong>Մեքենայի անվանումը </strong> <?php echo $car_name;?></h4>
                <br>
                <h4> <strong>Մեքենայի համարանիշ</strong> <?php echo $car_nameplate; ?></h4>
                <br>
                <h4> <strong>Արժեք:&nbsp;</strong>  դր <?php 
            if($charge_type == "days"){
                    echo ($fare . "/day");
                } else {
                    echo ($fare . "/km");
                }
            ?></h4>
                <br>
                <h4> <strong>Ամրագրման օր: </strong> <?php echo date("Y-m-d"); ?> </h4>
                <br>
                <h4> <strong>Ամրագրման սկիզբ: </strong> <?php echo $rent_start_date; ?></h4>
                <br>
                <h4> <strong>Ամրագրման ավարտ: </strong> <?php echo $rent_end_date; ?></h4>
                <br>
                <h4> <strong>Վերադարձի օր: </strong> <?php echo $car_return_date; ?> </h4>
                <br>
                <?php if($charge_type == "days"){?>
                    <h4> <strong>Օրերի քանակը:</strong> <?php echo $distance_or_days; ?>օր</h4>
                <?php } else { ?>
                    <h4> <strong>
                    Անցած հեռավորությունը։</strong> <?php echo $distance_or_days; ?>կմ</h4>
                <?php } ?>
                <br>
                <?php
                    if($extra_days > 0){
                        
                ?>
                <h4> <strong>Ընդհանուր տուգանք:</strong> <label class="text-danger"> դր <?php echo $total_fine; ?>/- </label> <?php echo $extra_days;?>
                լրացուցիչ օրերի համար</h4>
                <br>
                <?php } ?>
                <h4> <strong>Ընդհանուր գումար </strong> դր <?php echo $total_amount; ?>/-     </h4>
                <br>
            </div>
        </div>
        <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6>Զգուշացում <strong>Մի վերաբեռնեք այս էջը </strong>քանի որ վերը նշված էկրանը կկորչի: Եթե ​​ցանկանում եք այս էջի թղթային պատճենը, խնդրում ենք տպել այն հիմա:</h6>
        </div>
    </div>

</body>
<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>&#169; <?php echo date("Y"); ?> Մշակումը՝ Սուրեն Հունանյանի<b>
                </b></h5>
                </div>
            </div>
        </div>
    </footer>
</html>