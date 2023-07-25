<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #5653FE;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url() ?>assets/img/app/logo.png" alt="Logo" width="50">
                KOSTmart
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/') ?>">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/aboutus') ?>">
                            <i class="fas fa-info-circle"></i> About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/cart') ?>">
                            <i class="fas fa-shopping-cart"></i> Product
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>