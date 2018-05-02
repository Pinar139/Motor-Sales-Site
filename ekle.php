<div class="container padTop20"> 
<div class="row padTop20">
	<div class="col-md-6">  
<?php
	if (!isset($_SESSION["login"]))  die("Yetkisiz giriş");
	$hata="";
	$ekle=isset($_POST["ekle"])? $_POST["ekle"]:"";
	if ($ekle){		
		$baslik=addslashes($_POST["baslik"]);
		$icerik=addslashes($_POST["icerik"]);
		$tarih=addslashes($_POST["tarih"]);
		if ($baslik && $icerik && $tarih) {
			$sql="INSERT INTO etkinlikler(tarih,baslik,icerik) VALUES('$tarih','$baslik','$icerik')";
 			$sonuc=mysql_query($sql);
			if ($sonuc) {
				 header("Location:index.php?sayfa=admin");
				 die();
			}else 
			$hata="Kayıt eklenirken hata oluştu.";
	    }
	}
?>
<h3>ADMİN PANELİ</h3> 
<? echo $hata;?>
	<form method="post" name="ekle_form" id="ekle_form" onsubmit="return kayit_kontrol();" action="index.php?sayfa=ekle"> 
			<div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-calendar"></span>
                        ETKİNLİK EKLE
                    </h3>
					
                </div>
				<div class="panel-body">
                    <ul class="media-list">
						<li class="media">
                            <div class="media-body">
							   <p>
							     <input type="date" name="tarih" value="" placeholder="Tarih" class="form-control" required>
							   </p>
                               <p>
                                   <input type="text" name="baslik" value="" placeholder="Başlık" class="form-control" required>
                                </p>
                                <p>
                                    <textarea  name="icerik" value="" placeholder="İçerik" class="form-control" style="height:100px;" required></textarea>
                                </p>
								<p> 
									<input type="button" value="Geri" class="btn btn-danger" onclick="window.location='index.php?sayfa=admin'">
									<input type="submit" value="Ekle" name="ekle" id="ekle" class="btn btn-success">
								</p>
                            </div>							
                        </li>
                    </ul>
                   
                </div> 
			</div>
     </form>
</div>
</div>
</div>
<br>