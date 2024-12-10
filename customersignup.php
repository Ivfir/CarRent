<!DOCTYPE html>
<html lang="hy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Հաճախորդի գրանցում | Suren's Drive</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Lato', sans-serif;
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
            background: linear-gradient(120deg, #0d6efd, #6610f2);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(120deg, #6610f2, #0d6efd);
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
            <h1 class="display-4">Suren's Drive - Հաճախորդի գրանցում</h1>
            <p class="lead">Սկսեք գրանցումը որպես Հաճախորդ</p>
        </div>
    </div>

    <!-- Registration Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-container">
                    <h3 class="text-center mb-4">Ստեղծել հաշիվ</h3>
                    <form action="customer_registered_success.php" method="POST">
                        <div class="mb-3">
                            <label for="customer_name" class="form-label">Անուն, Ազգանուն<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Անուն, Ազգանուն" required>
                        </div>
                        <div class="mb-3">
                            <label for="customer_username" class="form-label">Օգտանուն<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="customer_username" name="customer_username" placeholder="Օգտանուն" required>
                        </div>
                        <div class="mb-3">
                            <label for="customer_email" class="form-label">Էլ․ հասցե<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="Էլ․ հասցե" required>
                        </div>
                        <div class="mb-3">
                            <label for="customer_phone" class="form-label">Հեռախոսահամար<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="customer_phone" name="customer_phone" placeholder="Հեռախոսահամար" required>
                        </div>
                        <div class="mb-3">
                            <label for="customer_address" class="form-label">Հասցե</label>
                            <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Հասցե">
                        </div>
                        <div class="mb-3">
                            <label for="customer_password" class="form-label">Գաղտնաբառ<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="customer_password" name="customer_password" placeholder="Գաղտնաբառ" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Գրանցվել</button>
                        </div>
                        <div class="text-center mt-3">
                            <p>Կամ <a href="customerlogin.php">Մուտք գործել</a></p>
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
