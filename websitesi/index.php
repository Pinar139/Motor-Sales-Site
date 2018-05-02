<?php
	$baglanti = @mysql_connect("localhost","root","") or die("Sunucuya Bağlanamadı.");
	$veritabani= @mysql_select_db("webtek") or die("Veritabanı Bulunamadı");
	mysql_query("SET NAMES UTF8");
    $sayfa=@$_GET["sayfa"];
	
	include("baslik.php");
	if ($sayfa) { // o alt sayfayı çağır 
		include($sayfa.".php");
	}
	else { // anasayfayı çağır 
		include("slider.php");
		include("etkinlik_duyuru.php");
	}	
	include("alt.php");
	?>
