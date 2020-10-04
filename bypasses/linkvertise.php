<?php
    if (PHP_SAPI === 'cli') {
        $url = $argv[1];
    }
    else {
        $url = $_GET['url'];
    }
    echo file_get_contents('https://ovd-center.eu/API/LinkvertiseBypass.php?url='.str_replace("/","(",$url));
?>
