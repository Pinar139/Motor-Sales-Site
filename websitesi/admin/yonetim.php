<?php


include("ayarlar.php");
session_start();

if(!isset($_SESSION["giris"]))
{

echo "Bu sayfayı goruntulema yetkiniz yoktur.<br>";
echo "<a href=index.php>Giris sayfası</a>";

}
else

{
echo "Admin Paneli<br>";
echo "<a href=\"cikis.php\">Cıkıs Yap</a>";
}

mysql_query("SET NAMES 'utf8'");

?>