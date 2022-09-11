<nav>
    <ul>
        <?php foreach($GLOBALS["SEVO"]["SITES"] AS $key => $val): ?>
            <?php if($val["menu"] == "main"): ?>
                <li>
                    <a href="<?php echo "index.php?site=$key"; ?>">
                        <?php echo $val["title"]; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>