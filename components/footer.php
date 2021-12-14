<?php

include_once 'util/minify.php';

$f = fopen("changelog.txt", 'r');
$version = fgets($f);
fclose($f);

echo(minify_html('<div class="credits">
	<!-- All the links in the footer should remain intact. -->
	<!-- You can delete the links only if you purchased the pro version. -->
	<!-- Licensing information: https://bootstrapmade.com/license/ -->
	<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
	Designed by <a target="_blank" href="https://bootstrapmade.com/">BootstrapMade</a>
	and <a target="_blank" href="https://www.simonecelia.it/">simonecelia.it</a> ' . $version . '
</div>'
));
