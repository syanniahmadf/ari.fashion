	<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Product</h3>
			
			<?php
				$ekstrakurikuler = mysqli_query($conn, "SELECT * FROM ekstrakurikuler ORDER BY id DESC");
				if(mysqli_num_rows($ekstrakurikuler) > 0){
					while($j = mysqli_fetch_array($ekstrakurikuler)){
			?>

				<div class="col-4">
					<a href="detail-ekstrakurikuler.php?id=<?= $j['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" style="background-image: url('uploads/ekstrakurikuler/<?= $j['gambar'] ?>');">
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

	<?php include 'footer.php'; ?>