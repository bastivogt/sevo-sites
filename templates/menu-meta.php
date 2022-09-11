<nav>
    <ul>
        <?php foreach($GLOBALS["SEVO"]["SITES"] AS $key => $val): ?>
            <?php if($val["menu"] == "meta"): ?>
                <li>
                    <a href="<?php echo "index.php?site=$key"; ?>">
                        <?php echo $val["title"]; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>