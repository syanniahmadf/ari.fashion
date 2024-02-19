	<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">

			<?php
				$informasi 	= mysqli_query($conn, "SELECT * FROM informasi LEFT JOIN pengguna ON pengguna.id = informasi.created_by WHERE informasi.id = '".$_GET['id']."' ");

				if(mysqli_num_rows($informasi) == 0){
					echo "<script>window.location='index.php'</script>";
				}

				$p 			= mysqli_fetch_object($informasi);
			?>

			<h3 class="text-center"><?= $p->judul ?></h3>
			<center><img src="uploads/informasi/<?= $p->gambar ?>" width="65%" class="image" style="margin-top:5px"><br>
			<?= $p->keterangan ?></center>
		</div>
	</div>

	<?php include 'footer.php'; ?>