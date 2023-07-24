<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #82CD47;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url() ?>assets/img/app/logo.png" alt="Logo" width="50" style="background-color: white;border-radius: 100px;">
                SayourKost
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/') ?>">
                            <i class="fas fa-home"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/catalog') ?>">
                            <i class="fas fa-th-large"></i> Kategori
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/aboutus') ?>">
                            <i class="fas fa-info-circle"></i> Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/cart') ?>">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                    </li>
                </ul>

            </div>
            <div class="ml-auto">
                <form class="form-inline">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Cari Sayour Pack">
                    </div>
                </form>
            </div>
        </div>
    </nav>
</div>