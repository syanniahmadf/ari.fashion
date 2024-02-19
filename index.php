	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="asets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  		<link href="asets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  		<link href="asets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  		<link href="asets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  		<link href="asets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
		<link href="asets/css/style.css" rel="stylesheet">
		<link rel="icon" href="uploads/iconn.png">
	
	</head>
	<body>
		
	</body>
	</html>
	
	<?php include 'header.php'; ?>
	<!-- bagian banner -->
	<div class="banner" style="background-image: url('uploads/identitas/<?= $d->foto_sekolah ?>');">
	<br><br><br><br><br><br><br><br><br>
	<div class="container">
        <div class="hero-content">
		<h1 style="font-size:80px";>WE'RE <span class="typed" data-typed-items="ARI.fashion, Original, Unique,"></span></h1>
          <p style="font-size:25px";>Brighten Your Look, Make You More Fashionable</p>

        <ul class="list-unstyled list-social">
          <li><a href="https://wa.me/6287861640154	"><i class="bi bi-whatsapp"></i></a></li>
          <li><a href="#"><i class="bi bi-twitter"></i></a></li>
          <li><a href="https://instagram.com/ariii.and?igshid=OGQ5ZDc2ODk2ZA=="><i class="bi bi-instagram"></i></a></li>
          <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
	</div>

	<!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="asets/img/about.jpg" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading" style="font-size:40px" style="color:#0F0F0F";> OUR STORY</p>
              <p class="separator" style="font-size:20px";>ARI.& Fashion adalah brand local anak muda yang menyediakan koleksi pakaian rajut dengan nama lain knit wear yang cocok bagi orang-orang yang menyukai pakaian berbahan rajut dengan warna pastel dan dominan netral yang memberi kesan minimalis dan aesthetic.</p>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->
	

	<!-- bagian sambutan -->
	<div class="section">

		<div class="container text-center">
			<h3 style="color:#0F0F0F";> ABOUT</h3>
			<img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="200">
			<h4><?= $d->nama_kepsek ?></h4>
			<p ><?= $d->sambutan_kepsek ?></p>
		</div>

	</div>
	
	<!-- bagian jurusan -->
	<div class="section" id="jurusan">

		<div class="container text-center">
			<h3 style="color:#0F0F0F";>BEST PRODUCT</h3>

			<?php
				$jurusan = mysqli_query($conn, "SELECT * FROM jurusan ORDER BY id DESC");
				if(mysqli_num_rows($jurusan) > 0){
					while($j = mysqli_fetch_array($jurusan)){
			?>

				<div class="col-4">
					<a href="detail-jurusan.php?id=<?= $j['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" style="background-image: url('uploads/jurusan/<?= $j['gambar'] ?>');">
						</div>

						<div class="thumbnail-text">
							<?= $j['nama'] ?>
						</div>

					</div>
					</a>
				</div>

			<?php }}else{ ?>

				Tidak ada data

			<?php } ?>
		</div>

	</div>

	<!-- bagian informasi -->
	<div class="section">

		<div class="container text-center">
			<h3 style="color:#0F0F0F";>OUR GALLERY</h3>

			<?php
				$informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC LIMIT 8");
				if(mysqli_num_rows($informasi) > 0){
					while($p = mysqli_fetch_array($informasi)){
			?>

				<div class="col-4">
					<a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">
						</div>

						<div class="thumbnail-text">
							<?= substr($p['judul'], 0, 50) ?>
						</div>

					</div>
					</a>
				</div>

			<?php }}else{ ?>

				Tidak ada data

			<?php } ?>
		</div>

	</div>

	<!-- ======= Contact Section ======= -->
    <

            
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->
	</body>

	

  </main><!-- End #main -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="asets/js/main.js"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  
	<?php include 'footer.php'; ?>
	