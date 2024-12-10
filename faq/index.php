<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Resource style -->
    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <title>FAQ | Suren's Drive</title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-custom" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="../index.php">
                   Suren's Drive </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?>
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../index.php">Գլխավոր</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span> Բարի գալուստ <?php echo $_SESSION['login_client']; ?></a>
                        </li>
                        <li>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
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
                                <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
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
                                    <a href="/../CarRental/index.php">Գլխավոր</a>
                                </li>
                                <li>
                                    <a href="/../CarRental/clientlogin.php">Աշխատակից</a>
                                </li>
                                <li>
                                    <a href="/../CarRental/customerlogin.php">Հաճախորդ</a>
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

    <section class="cd-faq">
        <ul class="cd-faq-categories">
            <li><a class="selected" href="#basics">Նախնական</a></li>
            <li><a href="#membership">Անդամակցություն</a></li>
            <li><a href="#chauffeur">Վարորդի ծառայություններ</a></li>
        </ul>
        <!-- cd-faq-categories -->

        <div class="cd-faq-items">
            <ul id="basics" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Նախնական</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Ինչպե՞ս վճարել իմ վարձույթի համար</a>
                    <div class="cd-faq-content">
                        <p>Ավտոմեքենաների վարձույթի համար ընդունվում է Mastercard-ը և Visa-ն: Անձնական չեկերը նույնպես ընդունվում են,
                        Այս պահին մենք ցանկանում ենք խորհուրդ տալ, որ անձնական չեկերը տեղական մակարդակում չեն ընդունվում:</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Ի՞նչ անել, եթե ես վարձակալած մեքենայի համար ավելի լավ գներ գտնեմ:</a>
                    <div class="cd-faq-content">
                        <p>Ավտոմեքենաների վարձույթի շատ լավ բաներից մեկն այն է, որ մեր վարձակալության գները և ծառայությունները երաշխավորված են լինելու ամենալավը ոլորտում: Եթե ​​դուք հանդիպեք ավելի ցածր գնի մրցակցի կողմից, և գինը համադրելի մեքենայի համար է, ներառյալ նույն պայմանները, գտնվելու վայրը և մեքենաների վարձակալության վճարները, մենք ուրախ կլինենք գերազանցել ձեզ համար գինը: Խնդրում ենք լրացնել մեր երաշխավորված լավագույն գնահատականի ձևը, եթե մեր մրցակիցներից մեկի հետ ավելի լավ դրույքաչափ եք գտել:</div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Արդյո՞ք ինձ վարորդական իրավունք է պետք մեքենա վարձելու համար:</a>
                    <div class="cd-faq-content">
                        <p>Վարորդական իրավունքի վկայական պետք չէ, քանի որ վարորդն արդեն տրամադրված է աշխատողի կողմից:
                        </p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">
                    Արդյո՞ք հավելավճար կա, եթե մեքենան վերադարձնեմ սահմանված ժամկետից հետո:</a>
                    <div class="cd-faq-content">
                        <p>
                        Այո, մենք գանձում ենք 2-4%(Կախված է վարձված ավտոմեքենայի գնից) ժամկետից հետո:</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
            <!-- cd-faq-group -->

            <ul id="membership" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Անդամակցություն</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Ինչու՞ պետք է գրանցվեմ:</a>
                    <div class="cd-faq-content">
                        <p>Երբ դուք գրանցվեք մեր կայքի անդամ լինելու համար, դուք կկարողանաք խնայել ժամանակը՝ հարցումները լրացնելով: Հենց որ միանաք և մուտք գործեք, ամեն անգամ, երբ մեզ հարցում եք ուղարկում, մենք նախապես լրացնելու ենք ներկայացման ձևը ձեր անձնական տվյալներով, որպեսզի դուք ստիպված չլինեք նույն բաները նորից ու նորից մուտքագրել: Մենք նաև ձեզ հնարավորություն ենք տալիս գրանցվելու մեր էլ. տեղեկագրին, որը ձեզ կտեղեկացնի մեր առաջարկած վերջին հատուկ առաջարկների և խթանների մասին:
                        </p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Ինչպե՞ս կարող եմ անդամ դառնալ:</a>
                    <div class="cd-faq-content">
                        <p>Գրանցվելու երկու եղանակ կա. Դուք կարող եք կամ ուղղակիորեն գնալ մեր գրանցման ձևին, կամ կարող եք պարզապես լրացնել հարցումը, ինչպես սովորաբար դա անում եք: Այդ հարցումն ուղարկելուց հետո դուք հնարավորություն կունենաք գրանցվելու: Եթե ​​դուք որոշեք դա անել, երբ դուք գնում եք գրանցման ձևաթուղթ, ձեր հարցման համար տրամադրված տեղեկատվությունը նախապես լրացվում է գրանցման ձևում:
                        </p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Ինչպե՞ս կարող եմ մուտք գործել:</a>
                    <div class="cd-faq-content">
                        <p>
                        Գրանցվելուց հետո մենք ձեզ կուղղորդենք մուտքի էկրանին: Երբ մուտք գործեք, էկրանի վերին աջ անկյունում կտեսնեք մի փոքրիկ բար, որը ողջունում է ձեզ մեր կայքը: Եթե ​​դուք արդեն ստեղծել եք հաշիվ, բայց դուրս եք եկել, կարող եք կամ սեղմել "Login" կոճակը մեր ընտրացանկի տողում, որը ձեզ տանում է դեպի մեր մուտքի էջ, կամ, եթե դուք մեր գլխավոր էջում եք, կարող եք օգտագործեք մուտքի տարածքը դրա վրա:</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">
                    Իմ կրեդիտ քարտի տվյալները պահվու՞մ են իմ հաշվում:</a>
                    <div class="cd-faq-content">
                        <p>Ոչ, մենք բանկային քարտի որևէ տեղեկություն չենք պահում ձեր հաշվում:</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
            <!-- cd-faq-group -->

            <ul id="chauffeur" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Վարորդի ծառայություններ</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Դուք հանդիպելու և ողջունելու ծառայություններ ունե՞ք:</a>
                    <div class="cd-faq-content">
                        <p>Օդանավակայաններում և այլ հասարակական վայրերում ձեզ կդիմավորեն ձեռքի ցուցանակով։ Մենք կարող ենք նաև հանդիպել ձեզ ձեր հյուրանոցում և այլ վայրերում:</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Ինչպե՞ս կարող եմ վճարել իմ վարորդի ծառայությունների համար:</a>
                    <div class="cd-faq-content">
                        <p> Suren's Drive-ը սիրով ընդունում է MasterCard, Visa և չեկեր: Մենք նաև PayTm.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Արդյո՞ք վճար կա, եթե փոխեմ իմ վարորդի ծառայությունները:</a>
                    <div class="cd-faq-content">
                        <p>Վարորդի ծառայությունների համար ամրագրումները փոխելու համար վճար չկա:

</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
            <!-- cd-faq-group -->
        </div>
        <!-- cd-faq-items -->
        <a href="#0" class="cd-close-panel">Փակել</a>

        <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>&#169; <?php echo date("Y"); ?> Մշակումը՝ Սուրեն Հունանյանի</h5>

                </div>
                
            </div>
        </div>
    </footer>
    
    </section>
    <!-- cd-faq -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Resource jQuery -->
</body>

</html>