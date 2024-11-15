<?php

if ( isset($_GET['xss']) ) {
    $xss = str_ireplace('<script>', '', $_GET['xss']);
    $xss = str_ireplace('</script>', '', $xss);
    echo "<b>ID page - ${xss}</b>";
}

if ( isset($_GET['htmli']) ) {
    $htmli = str_replace('<img ', '', $_GET['htmli']);
    $htmli = str_replace('</img>', '', $htmli);
    $htmli = str_replace('src', '', $htmli);
    echo "<b>ID page - ${htmli}</b>";
}

?>
