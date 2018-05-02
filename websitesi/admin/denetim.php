<?php


include("ayarlar.php");
session_start();

if(($_POST["kullanici_adi"]==$kullanici_adi) and ($_POST["sifre"]==$sifre))
{

$_SESSION["giris"] = "true";
$_SESSION["kullanici_adi"] = $kullanici_adi;
$_SESSION["sifre"] = $sifre;

header("Location:yonetim.php");

}
else
{

echo "Kullanici adi ve sifre yanlis.<br>";
echo "<a href=index.php>Geri don</a>";

}


mysql_query("SET NAMES 'utf8'");

?>