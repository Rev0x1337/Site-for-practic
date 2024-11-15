<?php

echo "<b>Задание:</b> <br>- проэксплуатируйте XSS в GET-параметре xss <br>- проэксплуатируйте HTML Injection в GET-параметре htmli <br><br>";

if ( isset($_GET['xss']) ) {
    $xss = str_ireplace('<script>', '', $_GET['xss']);
    $xss = str_ireplace('</script>', '', $xss);
    echo "<b>ID страницы - ${xss}</b>";
}

if ( isset($_GET['htmli']) ) {
    $htmli = str_replace('<img ', '', $_GET['htmli']);
    $htmli = str_replace('</img>', '', $htmli);
    $htmli = str_replace('src', '', $htmli);
    echo "<b>ID страницы - ${htmli}</b>";
}

?>