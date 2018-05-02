<?php


session_start();
session_destroy();

echo "Cıkıs İslemi Tamamlandi.";
echo "<br><a href=index.php>Anasayfa</a>";

mysql_query("SET NAMES 'utf8'");
?>