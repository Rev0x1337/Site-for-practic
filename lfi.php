<?php

$page = $_GET['page'];

if ( isset($page) ) {
    if (strpos($page, "../") !== false || strpos($page, "..") !== false) {
        echo "Hacking attempt!";
    } else {
        include("$page");
    }
} else {
    include("index.php");
}
?>