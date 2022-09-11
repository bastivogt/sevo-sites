<?php
define("DIR", __DIR__);


$GLOBALS["SEVO"] = array(
    "SETTINGS" => array(
        "title" => "SEVO Sites",
        "mail" => "betont.online@googlemail.com",
        "lang" => "de-DE",
        "home" => "home"
    ),
    "SITES" => array(
        "404" => array(
            "id" => 404,
            "title" => "404 - Seite nicht gefunden",
            "menu" => null,
            "path" => DIR . "/sites/404.php"
        ),
        "single_image" => array(
            "id" => 1001,
            "title" => "Single image",
            "menu" => null,
            "path" => DIR . "/sites/single.php"
        ),
        "home" => array(
            "id" => 1,
            "title" => "Startseite",
            "menu" => "main",
            "path" => DIR . "/sites/home.php"
        ),
        "galerie" => array(
            "id" => 2,
            "title" => "Galerie",
            "menu" => "main",
            "path" => DIR . "/sites/galerie.php",
            "images" => array(
                "01" => array(
                    "title" => "Das Bild 01",
                    "desc" => "Beschreibung von Bild 01 ...",
                    "preview_path" => DIR . "/images/galerie/preview/01.jpg",
                    "full_path" => DIR . "/images/galerie/full/01.jpg"
                ),
                "02" => array(
                    "title" => "Das Bild 02",
                    "desc" => "Beschreibung von Bild 02 ...",
                    "preview_path" => DIR . "/images/galerie/preview/02.jpg",
                    "full_path" => DIR . "/images/galerie/full/02.jpg"
                ),
                "03" => array(
                    "title" => "Das Bild 03",
                    "desc" => "Beschreibung von Bild 03 ...",
                    "preview_path" => DIR . "/images/galerie/preview/03.jpg",
                    "full_path" => DIR . "/images/galerie/full/03.jpg"
                ),
                "04" => array(
                    "title" => "Das Bild 04",
                    "desc" => "Beschreibung von Bild 04 ...",
                    "preview_path" => DIR . "/images/galerie/preview/04.jpg",
                    "full_path" => DIR . "/images/galerie/full/04.jpg"
                ),
                "05" => array(
                    "title" => "Das Bild 05",
                    "desc" => "Beschreibung von Bild 05 ...",
                    "preview_path" => DIR . "/images/galerie/preview/05.jpg",
                    "full_path" => DIR . "/images/galerie/full/05.jpg"
                ),
                "06" => array(
                    "title" => "Das Bild 06",
                    "desc" => "Beschreibung von Bild 06 ...",
                    "preview_path" => DIR . "/images/galerie/preview/06.jpg",
                    "full_path" => DIR . "/images/galerie/full/06.jpg"
                )
            )
        ),
        "kontakt" => array(
            "id" => 20,
            "title" => "Kontakt",
            "menu" => "main",
            "path" => DIR . "/sites/kontakt.php"
        ),
        "datenschutz" => array(
            "id" => 100,
            "title" => "Datenschutz",
            "menu" => "meta",
            "path" => DIR . "/sites/datenschutz.php"
        ),
        "impressum" => array(
            "id" => 101,
            "title" => "Impressum",
            "menu" => "meta",
            "path" => DIR . "/sites/impressum.php"
        )
    )
);