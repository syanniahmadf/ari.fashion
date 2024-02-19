	<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">

			<?php
				$ekstrakurikuler 	= mysqli_query($conn, "SELECT * FROM ekstrakurikuler WHERE id = '".$_GET['id']."' ");

				if(mysqli_num_rows($ekstrakurikuler) == 0){
					echo "<script>window.location='index.php'</script>";
				}

				$p 			= mysqli_fetch_object($ekstrakurikuler);
			?>

			<center><h3 class="text-center"><?= $p->nama ?></h3>
			<img src="uploads/ekstrakurikuler/<?= $p->gambar ?>" width="40%" class="image"><br>
			<?= $p->keterangan ?></center>
		</div>
	</div>

	<?php include 'footer.php'; ?>