<?php $this->load->view('navbar') ?>
<div id="carouselExampleIndicators" class="carousel vh-100 carousel-dark slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url() ?>assets/img/app/carousel1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url() ?>assets/img/app/carousel2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url() ?>assets/img/app/carousel3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container-fluid vh-100" style="background-color: rgb(130,205,71,0.5);">
  <center>
    <img src="<?= base_url() ?>assets/img/app/logo.png">
  </center>
</div>
<div class="container-fluid vh-100">
  <h2 class="text-center mt-5" style="color: #82CD47;">Terlaris</h2>
  <br>
  <div class="row">
    <div class="col-lg-3">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 70vh;">
        <center>
          <img src="<?= base_url() ?>assets/img/app/sayurpack.png" width="300">
        </center>
        <h5>Sayur Bening Pack</h5>
        <h6 style="color: rgb(130,205,71);">Rp 12.000,00</h6>
        <div class="row m-1">
          <button class="col-lg-2 btn cart" data-nama="Sayur-Bening-Pack" type="button" style="background-color: rgb(130,205,71);"><i class="fa fa-shopping-cart"></i></button>
          <button class="col-lg-10 btn beli" data-nama="Sayur-Bening-Pack" type="button" style="background-color: rgb(130,205,71);">Beli Sekarang</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 70vh;">
        <center>
          <img src="<?= base_url() ?>assets/img/app/brokolipack.png" width="300">
        </center>
        <h5>Brokoli Pack</h5>
        <h6 style="color: rgb(130,205,71);">Rp 10.000,00</h6>
        <div class="row m-1">
          <button class="col-lg-2 btn cart" data-nama="Brokoli-Pack" type="button" style="background-color: rgb(130,205,71);"><i class="fa fa-shopping-cart"></i></button>
          <button class="col-lg-10 btn beli" data-nama="Brokoli-Pack" type="button" style="background-color: rgb(130,205,71);">Beli Sekarang</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 70vh;">
        <center>
          <img src="<?= base_url() ?>assets/img/app/parepack.png" width="300">
        </center>
        <h5>Pare Pack</h5>
        <h6 style="color: rgb(130,205,71);">Rp 9.000,00</h6>
        <div class="row m-1">
          <button class="col-lg-2 btn cart" data-nama="Pare-Pack" type="button" style="background-color: rgb(130,205,71);"><i class="fa fa-shopping-cart"></i></button>
          <button class="col-lg-10 btn beli" data-nama="Pare-Pack" type="button" style="background-color: rgb(130,205,71);">Beli Sekarang</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 70vh;">
        <center>
          <img src="<?= base_url() ?>assets/img/app/bakwanpack.png" width="300">
        </center>
        <h5>Bakwan Pack</h5>
        <h6 style="color: rgb(130,205,71);">Rp 8.000,00</h6>
        <div class="row m-1">
          <button class="col-lg-2 btn cart" data-nama="Bakwan-Pack" type="button" style="background-color: rgb(130,205,71);"><i class="fa fa-shopping-cart"></i></button>
          <button class="col-lg-10 btn beli" data-nama="Bakwan-Pack" type="button" style="background-color: rgb(130,205,71);">Beli Sekarang</button>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="container-fluid vh-100" style="background-color: rgb(130,205,71,0.5);">
  <center>
    <h3 class="text-center p-5">Higenis, Fresh dan Praktis</h3>
    <p class="text-center">memudahkan anak kos dan karyawan dalam <br>
      memilih menu makanan harian, efisiensi waktu <br>
      berbelanja, praktis dan hemat, mendapatkan menu paketan <br>
      sesuai keinginan memasak dan makan apa, bisa diantar sampai rumah atau <br>
      kost dengan memesan di market place</p>
    <img class="mt-5" src="<?= base_url() ?>assets/img/app/alur.png" width="1000">
  </center>
</div>
<div class="container-fluid vh-100">
  <h3 class="text-center p-5" style="color: rgb(130,205,71);">Ulasan Pembeli</h3>
  <h4 class="text-center p-5" style="color: rgb(130,205,71);">Komentar para pembeli sayour pack</h4>
  <div class="row">
    <div class="col-lg-4">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 25vh;">
        <div class="row">
          <div class="col-sm-3">
            <img class="m-4" src="<?= base_url() ?>assets/img/app/salsabilla.png" width="100">
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-7">
            <br>
            <h5 style="color: rgb(130,205,71);">Sayurnya masih seger banget</h5><br>
            <h3 style="color: rgb(130,205,71);">Salsabilla Adriani</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 25vh;">
        <div class="row">
          <div class="col-sm-3">
            <img class="m-4" src="<?= base_url() ?>assets/img/app/jefri.png" width="100">
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-7">
            <br>
            <h5 style="color: rgb(130,205,71);">Mayan buat gua yang mageran</h5><br>
            <h3 style="color: rgb(130,205,71);">Jefri Nichol</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 25vh;">
        <div class="row">
          <div class="col-sm-3">
            <img class="m-4" src="<?= base_url() ?>assets/img/app/refal.png" width="100">
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-7">
            <br>
            <h5 style="color: rgb(130,205,71);">Sayurnya sesuai dengan deskripsi, thanks Sayourkost</h5><br>
            <h3 style="color: rgb(130,205,71);">Refal Hady</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-4">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 25vh;">
        <div class="row">
          <div class="col-sm-3">
            <img class="m-4" src="<?= base_url() ?>assets/img/app/bryan.png" width="100">
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-7">
            <br>
            <h5 style="color: rgb(130,205,71);">Delicious</h5><br>
            <h3 style="color: rgb(130,205,71);">Bryan Domani</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 25vh;">
        <div class="row">
          <div class="col-sm-3">
            <img class="m-4" src="<?= base_url() ?>assets/img/app/pevita.png" width="100">
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-7">
            <br>
            <h5 style="color: rgb(130,205,71);">Gila si inimah, sayurnya fresh, ownernya cantik cantik pula</h5><br>
            <h3 style="color: rgb(130,205,71);">Pevita Pearce</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="container-fluid" style="background-color: #E5FFCE;height: 25vh;">
        <div class="row">
          <div class="col-sm-3">
            <img class="m-4" src="<?= base_url() ?>assets/img/app/ciatlin.png" width="100">
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-7">
            <br>
            <h5 style="color: rgb(130,205,71);">Enakeun sayurnya euy</h5><br>
            <h3 style="color: rgb(130,205,71);">Ciatlin halderman</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>\
<script>
    $(document).ready(function(){
        $('.cart').on('click',function(e){
            e.preventDefault();
            $.post('<?= site_url('dashboard/home/pesan') ?>', {
                    nama: $(this).attr('data-nama')
                },
                function(data) {
                    console.log(data);
                }, 'json');
        });
        $('.beli').on('click',function(e){
            e.preventDefault();
            $.post('<?= site_url('dashboard/home/pesan') ?>', {
                    nama: $(this).attr('data-nama')
                },
                function(data) {
                    window.location.replace('<?= site_url('dashboard/home/cart') ?>');
                }, 'json');
        });
    });
</script>