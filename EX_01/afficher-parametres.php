<?php

echo ("<p><table></p>");
foreach ($_GET as $a => $b) {
    echo("<ul><li> clé : " . $a . "valeur : " .$b . "</li></ul>");
}
echo ("</table");
?>