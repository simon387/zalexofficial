<?php
// main translation function
function tr($key)
{
	//getting query string for language detection
	$queryString = $_SERVER["QUERY_STRING"];
	$lang = str_replace("lang=", "", $queryString);
	if ($lang == '') {
		$lang = "en";
	}
	if ($key == "en") {
		return $lang;
	}
	//in-memory 2d-matrix with all translations, that's a small site(one page)
	$index = 1;
	if ($lang == "es") {
		$index = 2;
	}
	if ($lang == "it") {
		$index = 3;
	}
	$matrix = array(//key, en, es, it
			array("i_am", "I'm a passionate ", "Soy una ", "Sono una "),
			array("singer", "singer", "cantante", "cantante"),
			array("from_italy", " from Italy", " italiana", " italiana"),
			array("home", "Home", "Inicio", "Home"),
			array("about", "About", "Acerca de mí", "Info"),
			array("my_music", "My music", "La mi musica", "La mia musica"),
			array("my_music_profiles", "My music profiles", "Mis perfiles musicales", "I miei profili musicali"),
			array("my_media", "My Media", "Mis medias", "I miei media"),
			array("all", "All", "Todos", "Tutti"),
			array("photos", "Photos", "Fotos", "Foto"),
			array("contact", "Contact", "Contactos", "Contatti"),
			array("contact_me", "Contact Me", "Contáctame", "Contattami"),
			array("learn_more", "Learn more about me", "Aprende más sobre mi", "Scopri di più su di me"),
	);
	for ($i = 0; $i < count($matrix); $i++) {
		if ($matrix[$i][0] == $key) {
			return $matrix[$i][$index];
		}
	}
	return null;
}