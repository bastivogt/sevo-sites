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
        "home" => array(
            "id" => 1,
            "title" => "Startseite",
            "menu" => "main",
            "path" => DIR . "/sites/home.php"
        ),
        "kontakt" => array(
            "id" => 2,
            "title" => "Kontakt",
            "menu" => "main",
            "path" => DIR . "/sites/kontakt.php"
        ),
        "datenschutz" => array(
            "id" => 30,
            "title" => "Datenschutz",
            "menu" => "meta",
            "path" => DIR . "/sites/datenschutz.php"
        ),
        "impressum" => array(
            "id" => 31,
            "title" => "Impressum",
            "menu" => "meta",
            "path" => DIR . "/sites/impressum.php"
        )
    )
);