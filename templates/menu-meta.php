<nav>
    <?php foreach($GLOBALS["SEVO"]["SITES"] AS $key => $val): ?>
        <?php if($val["menu"] == "meta"): ?>
            <a href="<?php echo "index.php?site=$key"; ?>" class="nav-link<?php if($key == $_GET["site"]): ?> active<?php endif; ?>" title="<?php echo $val["title"]; ?>">
                <?php echo $val["title"]; ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</nav>