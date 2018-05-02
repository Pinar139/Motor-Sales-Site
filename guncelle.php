<div class="container padTop20"> 
<div class="row padTop20">
	<div class="col-md-6">  
<?php
	if (!isset($_SESSION["login"]))  die("Yetkisiz giriş");
	$hata="";
	$id=isset($_GET["id"])?$_GET["id"]:"";
	if ($id) {
		$sql="SELECT * from etkinlikler WHERE id=".$id;
		$sonuc=mysql_query($sql); 
     	if (mysql_num_rows($sonuc)>0) {
 		    $etkinlik = mysql_fetch_array($sonuc);				
		}
	}
	$guncelle=isset($_POST["guncelle"])? $_POST["guncelle"]:"";
	if ($guncelle){		
	    $id=$_GET["id"];
		$baslik=addslashes($_POST["baslik"]);
		$icerik=addslashes($_POST["icerik"]);
		$tarih=addslashes($_POST["tarih"]);
		if ($baslik && $icerik && $tarih) {
			$sql="UPDATE etkinlikler SET tarih='$tarih',baslik='$baslik',icerik='$icerik' WHERE id=".$id;
 			$sonuc=mysql_query($sql);
			if ($sonuc) {
				 header("Location:index.php?sayfa=admin");
				 die();
			}else 
			$hata="Kayıt güncellenirken hata oluştu.";
	    }
	}
?>
<h3>ADMİN PANELİ</h3> 
<?php echo $hata;?>
	<form method="post" name="guncelle_form" id="guncelle_form" onsubmit="return kayit_kontrol();" action="index.php?sayfa=guncelle&id=<?php echo $id?>"> 
			<div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-calendar"></span>
                        ETKİNLİK GÜNCELLE
                    </h3>
					
                </div>
				<div class="panel-body">
                    <ul class="media-list">
						<li class="media">
                            <div class="media-body">
							   <p>
							     <input type="date" name="tarih" value="<?php echo $etkinlik["tarih"];?>" placeholder="Tarih" class="form-control" required>
							   </p>
                               <p>
                                   <input type="text" name="baslik" value="<?php echo $etkinlik["baslik"];?>" placeholder="Başlık" class="form-control" required>
                                   <input type="text" name="baslik" value="<?php echo $etkinlik["baslik"];?>" placeholder="Başlık" class="form-control" required>
                                </p>
                                <p>
                                    <textarea  name="icerik" placeholder="İçerik" class="form-control" style="height:100px;" required><?php echo $etkinlik["icerik"];?></textarea>
                                </p>
								<p> 
									<input type="button" value="Geri" class="btn btn-danger" onclick="window.location='index.php?sayfa=admin'">
									<input type="submit" value="Güncelle" name="guncelle" id="guncelle" class="btn btn-success">
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