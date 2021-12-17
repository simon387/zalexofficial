<?php

include_once 'util/minify.php';

function generateItem($image, $filter, $title): string
{
 return '<div class="col-lg-4 col-md-6 portfolio-item ' . $filter . '">
	<div class="portfolio-wrap">
		<img src="assets/img/photo/' . $image . '" class="img-fluid" alt="">
		<div class="portfolio-info">
			<h4>' . $title . '</h4>
			<p>' . $title . '</p>
			<div class="portfolio-links">
				<a href="assets/img/photo/' . $image . '" data-gallery="portfolioGallery" class="portfolio-lightbox"
				   title="' . $title . '"><i class="bx bx-plus"></i></a>
				<!--<a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
				   class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a-->
			</div>
		</div>
	</div>
</div>';
}

echo(minify_html(
'<section id="photos" class="portfolio">
	<div class="container">
		<div class="section-title">
			<h2>' .  tr("photos") . '</h2>
			<p>' .  tr("my_media") . '</p>
		</div>
		<div class="row">
			<div class="col-lg-12 d-flex justify-content-center">
				<ul id="portfolio-flters">
					<li data-filter="*" class="filter-active">' .  tr("all") . '</li>
					<li data-filter=".filter-app">2021</li>
					<!--li data-filter=".filter-card">Card</li-->
					<!--li data-filter=".filter-web">Web</li-->
				</ul>
			</div>
		</div>
		<div class="row portfolio-container">' .
generateItem("ZAlex-11.jpg", "filter-app", "Image 1") .
generateItem("ZAlex-22.jpg", "filter-app", "Image 2") .
generateItem("ZAlex-43.jpg", "filter-app", "Image 3") .
'		</div>
	</div>
</section>'
));
