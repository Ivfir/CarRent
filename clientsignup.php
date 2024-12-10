<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Աշխատակցի գրանցում | Suren's Drive</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(120deg, #f8f9fa, #e9ecef);
        min-height: 100vh;
        margin: 0;
    }

    .navbar {
        background: #343a40;
    }

    .navbar-brand {
        color: #fff;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        color: #adb5bd;
    }

    .navbar-nav .nav-link:hover {
        color: #fff;
    }

    .jumbotron {
        background-color: #f8f9fa;
        color: #343a40;
        text-align: center;
        padding: 2rem 2rem;
        border-radius: 12px;
        margin-top: 20px;
        border: 1px solid #dee2e6;
    }

    .form-container {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 20px;
    }

    .btn-primary {
        background-color: #007BFF;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056D2;
    }

    footer {
        background: #343a40;
        color: #adb5bd;
        padding: 15px 0;
        text-align: center;
        margin-top: 30px;
    }
</style>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Suren's Drive</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Գլխավոր</a></li>
                    <li class="nav-item"><a class="nav-link" href="clientlogin.php">Աշխատակից</a></li>
                    <li class="nav-item"><a class="nav-link" href="customerlogin.php">Հաճախորդ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ՀՏՀ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">Աշխատակցի գրանցում</h1>
            <p class="lead">Ստեղծեք ձեր հաշիվը հիմա և սկսեք աշխատել մեզ հետ</p>
        </div>
    </div>

    <!-- Registration Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-container">
                    <h3 class="text-center mb-4">Ստեղծել հաշիվ</h3>
                    <form action="client_registered_success.php" method="POST">
                        <div class="mb-3">
                            <label for="client_name" class="form-label">Անուն, Ազգանուն<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Անուն, Ազգանուն" required  autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="client_username" class="form-label">Օգտանուն<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="client_username" name="client_username" placeholder="Օգտանուն" required  autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="client_email" class="form-label">Էլ․ հասցե<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="client_email" name="client_email" placeholder="Էլ․ հասցե" required  autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="client_phone" class="form-label">Հեռախոսահամար<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="client_phone" name="client_phone" placeholder="Հեռախոսահամար" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="client_address" class="form-label">Հասցե</label>
                            <input type="text" class="form-control" id="client_address" name="client_address" placeholder="Հասցե"  autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="client_password" class="form-label">Գաղտնաբառ<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="client_password" name="client_password" placeholder="Գաղտնաբառ" required  autocomplete="off">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Գրանցվել</button>
                        </div>
                        <div class="text-center mt-3">
                            <p>Կամ <a href="clientlogin.php">Մուտք գործել</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            &#169; <?php echo date("Y"); ?> Մշակումը՝ Սուրեն Հունանյանի
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
