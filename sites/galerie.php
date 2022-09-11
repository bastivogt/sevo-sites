<?php  
$gallery = $GLOBALS["SEVO"]["SITES"]["galerie"]["images"];
$gallery_site = $_GET["site"];
?>

<h1><?php echo $GLOBALS["SEVO"]["SITES"]["galerie"]["title"]; ?></h1>
<section class="gallery">
    <?php foreach($gallery AS $key => $val): ?>
        <div class="card"><a href="single-image.php?from=<?php echo $gallery_site; ?>&image=<?php echo $key; ?>" title="<?php echo $val["title"]; ?>">
            <h4><?php echo $val["title"]; ?><h4>
            <img src="<?php echo $val["preview_path"]; ?>">
            
        </a></div>
    <?php endforeach ?>
</section>

<pre>
<?php 
    var_dump($gallery);    
?>
</pre>
