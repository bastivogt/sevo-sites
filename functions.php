<?php  
include_once "./settings.php";

function e($html) {
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}

function get_site($slug, $inc = true) {
    if(!empty($slug) && !empty($GLOBALS["SEVO"]["SITES"][$slug])) {
        if($inc) {
            include $GLOBALS["SEVO"]["SITES"][$slug]["path"];
        }else {
            return $GLOBALS["SEVO"]["SITES"][$slug];
        }
    }else if(empty($slug)) {
        if($inc) {
            include $GLOBALS["SEVO"]["SITES"][$GLOBALS["SEVO"]["SETTINGS"]["home"]]["path"];
        }else {
            return $GLOBALS["SEVO"]["SITES"][$GLOBALS["SEVO"]["SETTINGS"]["home"]];
        }
    }else {
        if($inc) {
            include $GLOBALS["SEVO"]["SITES"]["404"]["path"];
        }else {
            return $GLOBALS["SEVO"]["SITES"]["404"];
        }
    }
}



?>