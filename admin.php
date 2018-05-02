<div class="container padTop20"> 
<div class="row padTop20">
	<div class="col-md-12">  
<?php
if (!isset($_SESSION["login"]))  die("Yetkisiz giriş");
if (isset($_GET["id"])){
	$islem=isset($_GET["islem"]) ? $_GET["islem"]:"";
	$id=isset($_GET["id"]) ? $_GET["id"]:"";
	if ($islem=="sil") {
		$sql="DELETE FROM etkinlikler WHERE id=".$id;
		mysql_query($sql);		
	}
}
?>
<h3>ADMİN PANELİ</h3>						
			<div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-calendar"></span>
                      MOTORSİKLETLER
                    </h3>
                </div>
				
				<div class="panel-body">
                
				<ul class="media-list">
				<a href="index.php?sayfa=ekle" class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon-plus"></span> EKLE</a>
			
                        <?php
							$etkinlikler=mysql_query("SELECT id,tarih,baslik,icerik FROM etkinlikler ORDER by tarih ASC");
							while($etkinlik = mysql_fetch_array($etkinlikler)){
						?>
						<li class="media">
                            <div class="media-left">
                                <div class="panel panel-danger text-center date">
                                    <div class="panel-heading month">
                                        <span class="panel-title strong">
                                            <?php echo date("M",strtotime($etkinlik["tarih"]))?>
                                        </span>
                                    </div>
                                    <div class="panel-body day text-danger">
                                        <?php echo date("d",strtotime($etkinlik["tarih"]))?>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <?php echo $etkinlik["baslik"]?>
                                </h4>
                                <p>
                                    <?php echo $etkinlik["icerik"]?>
                                </p>
                            </div>
							<div class="media-right">
							<a href="index.php?sayfa=guncelle&id=<?php echo $etkinlik["id"]?>" role="button" class="btn btn-info btn-sm" title="Güncelle"><span class="glyphicon glyphicon-pencil"></a>
						    <a href="index.php?sayfa=admin&islem=sil&id=<?php echo $etkinlik["id"]?>" role="button" class="btn btn-danger btn-sm" title="Sil"><span class="glyphicon glyphicon-trash"></a>
							</div>
                        </li>
                        <?php
							}
						?>
                    </ul>
                   
                </div> 
			</div>
</div>
</div>
</div>
<br>