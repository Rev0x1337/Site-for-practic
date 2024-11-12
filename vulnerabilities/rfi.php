<?php

$page = $_REQUEST['page'];

if ( isset($page) ) {
    if (strpos($page, "http://") !== false || strpos($page, "https://") !== false) {
        echo "Hacking attempt!";
    } else {
        include($page . ".php");
    }
} else {
    include("index.php");
}

?>
