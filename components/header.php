<header id="header">
	<div class="container">
		<h1><a href="index.php">Zalex</a></h1>
		<!-- Uncomment below if you prefer to use an image logo -->
		<!-- <a href="index.php" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
		<h2><?= tr("i_am") ?><span><?= tr("singer") ?></span><?= tr("from_italy") ?></h2>
		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link active" href="#header"><?= tr("home") ?></a></li>
				<li><a class="nav-link" href="#about"><?= tr("about") ?></a></li>
				<li><a class="nav-link" href="#music"><?= tr("my_music") ?></a></li>
				<li><a class="nav-link" href="#photos"><?= tr("photos") ?></a></li>
				<li><a class="nav-link" href="#contact"><?= tr("contact") ?></a></li>
				<li><a class="nav-link" href="index.php?lang=en"><i class="flag flag-uk"></i></a></li>
				<li><a class="nav-link" href="index.php?lang=es"><i class="flag flag-es"></i></a></li>
				<li><a class="nav-link" href="index.php?lang=it"><i class="flag flag-it"></i></a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
		<div class="social-links">
			<a href="<?=facebook_link ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
			<a href="<?=instagram_link ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
			<a href="<?=youtube_link ?>" target="_blank"><i class="bi bi-youtube"></i></a>
			<a href="<?=spotify_link ?>" target="_blank"><i class="bi bi-spotify"></i></a>
		</div>
	</div>
</header>