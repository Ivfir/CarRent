<?php
include('login_client.php'); // Includes Login Script

if (isset($_SESSION['login_client'])) {
    header("location: index.php"); //Redirecting
}
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <title>Աշխատակցի մուտք | Suren's Drive</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        .jumbotron-custom {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Suren's Drive</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Գլխավոր</a></li>
                    <li class="nav-item"><a class="nav-link" href="clientlogin.php">Աշխատակից</a></li>
                    <li class="nav-item"><a class="nav-link" href="customerlogin.php">Հաճախորդ</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq/index.php">ՀՏՀ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="content">
        <div class="container py-5">
            <!-- Intro Section -->
            <div class="jumbotron-custom text-center">
                <h1>Suren's Drive - Աշխատակցի մուտք</h1>
                <p class="lead">Մուտք գործեք շարունակելու համար</p>
            </div>

            <!-- Login Form -->
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white text-center">
                            <h4>Մուտք</h4>
                        </div>
                        <div class="card-body">
                            <?php if (!empty($error)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="client_username" class="form-label">Օգտանուն:</label>
                                    <input type="text" id="client_username" name="client_username" class="form-control" placeholder="Օգտանուն" required autofocus autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="client_password" class="form-label">Գաղտնաբառ:</label>
                                    <input type="password" id="client_password" name="client_password" class="form-control" placeholder="Գաղտնաբառ" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary w-100">Մուտք</button>
                            </form>
                            <div class="text-center mt-3">
                                <span>կամ</span><br>
                                <a href="clientsignup.php" class="text-decoration-none">Ստեղծել նոր հաշիվ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &#169; <?php echo date("Y"); ?> Մշակումը՝ Սուրեն Հունանյանի
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
