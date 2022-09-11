<?php 
include "settings.php";
include "functions.php";
$from = "";
$image = "";
$path = "";
$title = "";
$desc = "";
$save = false;

if(
    !empty($GLOBALS["SEVO"]["SITES"][$_GET["from"]])
    &&
    !empty($GLOBALS["SEVO"]["SITES"][$_GET["from"]]["images"][$_GET["image"]])
) {
    $image = $_GET["image"];
    $from = $_GET["from"];
    $path = get_site($from, false)["images"][$image]["full_path"];
    $title = e(get_site($from, false)["images"][$image]["title"]);
    $desc = e(get_site($from, false)["images"][$image]["desc"]);
    $save = true;
}

?>

<?php include DIR . "/templates/head.php"; ?>
<body>
    <section>
        <?php if($save): ?>
            <h1><?php echo $title; ?></h1>
            <p><?php echo $desc; ?></p>
            <img src="<?php echo $path; ?>" alt="<?php echo $title; ?>">
        <?php else: ?>
            <?php get_site("404"); ?>
        <?php endif; ?>
    </section>
    <a href="javascript:history.go(-1);">Zurück</a>
</body>


