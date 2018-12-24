<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ARTIKEL - LAPAS KELAS 1 TANGERANG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php
      include 'include/navbar.php';
    ?>

    <section class="ftco-cover" style="background-image: url(assets/images/bg_1.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-75">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Pengumuman</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600"><i>"Pengumuman terkait Lapas Kelas 1 Tangerang"</i></h2>    
          </div>
        </div>
      </div>
    </section>
    
    <div class="ftco-section">
    <div class="container">
      <div class="row">
      <?php
        $halaman = 6;
        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $result = $con->query("SELECT artikel.id_artikel, artikel.judul_artikel, artikel.id_kategori_artikel, kategori_artikel.kategori_artikel, artikel.artikel, artikel.username, artikel.tgl_terbit, artikel.views FROM kategori_artikel INNER JOIN artikel ON kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel WHERE kategori_artikel.kategori_artikel='Pengumuman'");
        $total = $result->num_rows;
        $pages = ceil($total/$halaman);

        $r = $con->query("SELECT artikel.id_artikel, artikel.judul_artikel, artikel.id_kategori_artikel, kategori_artikel.kategori_artikel, artikel.artikel, artikel.username, artikel.tgl_terbit, artikel.views FROM kategori_artikel INNER JOIN artikel ON kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel WHERE kategori_artikel.kategori_artikel='Pengumuman' ORDER BY artikel.id_artikel DESC LIMIT $mulai, $halaman");
        while ($rr = $r->fetch_array()) {
      ?>

          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <a href="pengumuman-single?id_artikel=<?php echo $rr['id_artikel'];?>" class="block-5" style="background-color: navy;">
              <div class="text">
                <h3 class="heading"><?php echo $rr['judul_artikel'];?></h3>
                <div class="post-meta">
                  <span><?php echo $rr['username'];?></span>
                  <span><?php echo $rr['tgl_terbit'];?></span>
                </div>
              </div>
            </a>
          </div>

        <?php
            }
        ?>
        </div>

        <div class="row">
          <div class="col-md-12 pt-5">
            <ul class="pagination custom-pagination">
            <?php for ($i=1; $i<=$pages ; $i++){ ?>
              <li class="page-item <?php if($_GET["halaman"] == $i){echo "active";} ?>"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>

    </div>
  </div>

  <?php
    include 'include/footer.php';
  ?>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
    
  </body>
</html>