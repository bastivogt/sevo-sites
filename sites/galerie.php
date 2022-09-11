<?php  
$gallery = $GLOBALS["SEVO"]["SITES"]["galerie"]["images"];
$gallery_site = $_GET["site"];
?>

<h1><?php echo $GLOBALS["SEVO"]["SITES"]["galerie"]["title"]; ?></h1>
<section>
    <?php foreach($gallery AS $key => $val): ?>
        <div><a href="single-image.php?from=<?php echo $gallery_site; ?>&image=<?php echo $key; ?>"><?php echo $val["title"]; ?></a></div>
    <?php endforeach ?>
</section>

<pre>
<?php 
    var_dump($gallery);    
?>
</pre>
