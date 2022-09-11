<?php 
include_once "./settings.php";
include_once "./functions.php";

$site_title = "";
$site= "";

if(isset($_GET["site"])) {
    $site = $_GET["site"];
}

$site_title = get_site($site, false)["title"];



?>
<!DOCTYPE html>
<html lang="<?php echo $GLOBALS["SEVO"]["SETTINGS"]["lang"]; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GLOBALS["SEVO"]["SETTINGS"]["title"]; ?> - <?php echo $site_title; ?></title>
</head>
<body>

<?php include DIR . "/templates/header.php"; ?>

<main>
    <?php get_site($site); ?>
</main>

<?php include DIR . "/templates/footer.php"; ?>
    
</body>
</html>