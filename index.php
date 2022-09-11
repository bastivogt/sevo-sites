<?php 
include_once "./settings.php";
include_once "./functions.php";

$site_title = "";
$site= "";

if(isset($_GET["site"])) {
    $site = $_GET["site"];
}
$site_title = get_site($site, false)["title"];

/*if(
    !empty($GLOBALS["SEVO"]["SITES"][$_GET["site"]])
    &&
    isset($_GET["site"])
    ) {
    $site = $_GET["site"];
    $site_title = get_site($site, false)["title"];
}*/





?>
<?php include DIR . "/templates/head.php"; ?>
<body>

<?php include DIR . "/templates/header.php"; ?>

<main>
    <?php get_site($site); ?>
</main>

<?php include DIR . "/templates/footer.php"; ?>
    
</body>
</html>