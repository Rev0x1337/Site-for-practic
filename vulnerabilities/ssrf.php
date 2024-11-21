<?php

$url = $_GET['url'];

if (strpos($url, "http://") !== false || strpos($url, "https://") !== false) {
    echo "Hacking attempt!";
} else {
    echo file_get_contents($url);
}

?>