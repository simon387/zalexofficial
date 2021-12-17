<?php

const matrix = array(//key, en, es, it
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
		array("youtube", "My personal Youtube channel", "Mi canal de Youtube", "Il mio canale di Youtube"),
		array("spotify", "My personal Spotify channel", "Mi canal de Spotify", "Il mio canale Spotify"),
		array("my_address", "My Address", "Mi dirección", "Il mio indirizzo"),
		array("social_profiles", "Perfiles sociales", "Mi dirección", "Profili Social"),
		array("email_me", "Email Me", "Envíeme un correo electrónico", "Mandami una email"),
		array("your_name", "Your Name", "Tu nombre", "Il tuo nome"),
		array("your_email", "Your Email", "Tu correo", "La tua email"),
		array("subject", "Subject", "Sujeto", "Oggetto"),
		array("message", "Message", "Mensaje", "Messaggio"),
		array("loading", "Loading", "Cargando", "Caricamento"),
		array("send_ok", "Your message has been sent. Thank you!", "Tu mensaje ha sido enviado. ¡Gracias!", "Il tuo messaggio è stato inviato. Grazie!"),
		array("send", "Send Message", "Enviar mensaje", "Invia messaggio"),
		array("about_title", "Singer-songwriter-drummer", "Cantante-compositora-baterista", "Cantante-cantautrice-batterista"),
		array("about_p1", "Finalist of Sanremo NewTalent (1-2-3-4-5/02/2022), Finalist of TourMusicFest 2021", "Finalista de Sanremo NewTalent (1-2-3-4-5 / 02/2022), Finalista de TourMusicFest 2021", "Finalista di Sanremo NewTalent (1-2-3-4-5/02/2022), Finalista di TourMusicFest 2021"),
		array("about_p2", "\"What's the kindest way to say you took away my friend,my buddy.\"", "\"What's the kindest way to say you took away my friend,my buddy.\"", "\"What's the kindest way to say you took away my friend,my buddy.\""),
		array("age", "Age:", "Años:", "Anno di nascita:"),
		array("city", "City:", "Ciudad:", "Città:"),
);

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

	for ($i = 0; $i < count(matrix); $i++) {
		if (matrix[$i][0] == $key) {
			return matrix[$i][$index];
		}
	}
	return null;
}