<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Layanan Aspirasi dan Pengaduan Masa Informatika ITERA</title>

	<link rel="stylesheet" href="<?php echo base_url() ?>/atributweb/css/style.css">
</head>

<body>

	<div class="container">
		<h1>Layanan Aspirasi dan Pengaduan Massa Informatika ITERA</h1>
		<form action="" method="post">
			<input type="text" name="cari" id="cari" placeholder="ketik kata kunci pencarian">
			<button type="submit" name="submit"> cari </button>
			</input>
		</form>
		<a href="<?php echo base_url() ?>index.php/Home/tambah">
			<h3>Buat Laporan / Komentar</h3>
		</a>

		<h4>Laporan / Komentar Terakhir</h4>
		<hr />
		<div id="konten">
			<ul>
				<?php foreach ($lapor as $value) { ?>
					<li>
						<?php if (strlen($value["isi"]) > 300) { ?>
							<h4 style="margin-bottom: 20px;"><?php echo substr($value["isi"], 0, 300); ?>.....</h4>
						<?php } else { ?>
							<h4 style="margin-bottom: 20px;"><?php echo $value["isi"]; ?></h4>
						<?php } ?>
						<h4 class="lampiran">Lampiran : <?php echo $value["file"]; ?></h4>
						<a href="<?php echo base_url() ?>index.php/Home/detail/<?php echo $value["id"] ?>">
							<h4 class="detail">Selengkapnya >>></h4>
						</a>
						<h4 class="waktu" style="margin-right: 10px;">Waktu : <?php echo $value["tanggal"]; ?></h4>
						<div style="clear: both"></div>
					</li>
					<br>
					<hr />
				<?php } ?>
			</ul>
		</div>
		<footer>&copyCopyright 2020 -informatika.itera.ac.id
			<br>118140088 118140114 118140041</br>
		</footer>
	</div>

	</div>

	<input id="alamat" value="<?php echo base_url() ?>index.php/Home/cari/" hidden>
	<script src="<?php echo base_url() ?>/atributweb/ajax/ajax.js"></script>

</body>

</html>