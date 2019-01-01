<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LAPAS KELAS 1 TANGERANG</title>
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
        <div class="row align-items-center ftco-vh-100">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">LAPAS KELAS 1 TANGERANG</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">Jl. Veteran No. 2, RT. 04 / RW. 04, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118.</h2>
            <p data-aos="fade-up"  data-aos-delay="700"><a href="https://www.google.co.id/maps/place/SMKS+Mandiri/@-6.2860474,106.5467925,15z/data=!4m5!3m4!1s0x0:0x1c19f6c5bcd00c4e!8m2!3d-6.2860474!4d106.5467925" class="btn btn-outline-white px-4 py-3" target="_blank">Temukan Kami</a></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-12  mb-5" data-aos="fade-up">
            <h2 class="ftco-heading heading-thin mb-5"><strong>Visi</strong></h2>
            <h4 class="ftco-heading heading-thin mb-5">Menjadi lembaga yang akuntabel, transparan dan profesional dengan didukung oleh petugas yang memiliki kompetensi tinggi yang mampu mewujudkan tertib pemasyarakatan.</h4>
            <h2 class="ftco-heading heading-thin mb-5"><strong>Misi</strong></h2>
            <ol>
              <li>Mewujudkan tertib pelaksanaan tugas pokok dan fungsi pemasyarakatan secara konsisten dengan mengedepankan terhadap hokum dan hak asasi manusia</li>
              <li>Membangun kelembagaan yang professional dengan berlandaskan pada akuntabilitas dan transparansi dalam pelaksanaan tugas pokok dan fungsi pemasyarakatan.</li>
              <li>Mengembangkan kompetensi dan potensi sumber daya petugas secara konsisten dan berkesinambungan.</li>
              <li>Mengembangkan kerjasama dengan mengoptimalkan stakeholder.</li>
            </ol> 
          </div>
        </div>
      </div>
    </section>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center"  data-aos="fade-up">
            <h2>Artikel Terbaru</h2>
          </div>
        </div>

        <div class="row">
        <?php
            $r = $con->query("SELECT artikel.id_artikel, artikel.judul_artikel, artikel.id_kategori_artikel, kategori_artikel.kategori_artikel, artikel.artikel, artikel.username, artikel.tgl_terbit, artikel.views FROM kategori_artikel INNER JOIN artikel ON kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel WHERE kategori_artikel.kategori_artikel<>'Pengumuman' ORDER BY artikel.id_artikel DESC LIMIT 3");
            while ($rr = $r->fetch_array()) {
        ?>
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <a href="blog-single?id_artikel=<?php echo $rr['id_artikel'];?>" class="block-5" style="background-color: grey;">
              <div class="text">
                <h3 class="heading"><?php echo $rr['judul_artikel'];?></h3>
                <div class="post-meta">
                  <span><?php echo $rr['views'];?> Views</span>
                  <span><?php echo $rr['tgl_terbit'];?></span>
                </div>
              </div>
            </a>
          </div>
          <?php
              }
          ?>
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