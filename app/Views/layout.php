<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
	<?= $this->renderSection('title') ?>
	</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<?= $this->renderSection('css') ?>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('riwayat-pendidikan') ?>" >Riwayat Pendidikan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('riwayat-organisasi') ?>">Riwayat Organisasi</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    <?= $this->renderSection('content') ?>


	<!-- Jquery dan Bootsrap JS -->
	<script src="bootstrap/js/bootstrap.min.js') ?>"></script>

</body>

</html>