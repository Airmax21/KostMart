<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css') ?>">
    <title>Navbar</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand title-navbar" href="<?php base_url() ?>">KostMart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Laundry</a></li>
                            <li><a class="dropdown-item" href="#">Product</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact Us</a>
                    </li>
                    <form class="d-flex ms-5" role="search">
                        <input class=" me-2 search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary search" type="submit">Search</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</body>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js') ?>"></script>

</html>