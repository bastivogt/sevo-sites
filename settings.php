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
                    "title" => "Robokopp",
                    "desc" => "Ein Robotergesicht guckt dich an.",
                    "preview_path" => "./images/galerie/preview/pexels-alex-knight-2599244.jpg",
                    "full_path" => "./images/galerie/full/pexels-alex-knight-2599244.jpg"
                ),
                "02" => array(
                    "title" => "Waldtunnel",
                    "desc" => "Ein mystischer Tunnel aus Bäumen",
                    "preview_path" => "./images/galerie/preview/pexels-francesco-ungaro-1671324.jpg",
                    "full_path" => "./images/galerie/full/pexels-francesco-ungaro-1671324.jpg"
                ),
                "03" => array(
                    "title" => "Wald mit Moos",
                    "desc" => "Ein Bild mit viel Moos im Wald",
                    "preview_path" => "./images/galerie/preview/pexels-luis-del-río-15286.jpg",
                    "full_path" => "./images/galerie/full/pexels-luis-del-río-15286.jpg"
                ),
                "04" => array(
                    "title" => "Berge und Nebel",
                    "desc" => "Ein Gebirge im Nebel oder umgekehrt",
                    "preview_path" => "./images/galerie/preview/pexels-quang-nguyen-vinh-2175952.jpg",
                    "full_path" => "./images/galerie/full/pexels-quang-nguyen-vinh-2175952.jpg"
                ),
                "05" => array(
                    "title" => "Straße zum Berg",
                    "desc" => "Eine Straße, die zum Berg führt",
                    "preview_path" => "./images/galerie/preview/pexels-sebastian-palomino-1955134.jpg",
                    "full_path" => "./images/galerie/full/pexels-sebastian-palomino-1955134.jpg"
                ),
                "06" => array(
                    "title" => "Computer",
                    "desc" => "Computer Bild ;)",
                    "preview_path" => "./images/galerie/preview/pexels-thisisengineering-3861972.jpg",
                    "full_path" => "./images/galerie/full/pexels-thisisengineering-3861972.jpg"
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