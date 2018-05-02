
	<div class="row padTop20">
	<div class="col-md-4">  <!-- ETKİNLİKLER -->
	
	     
            <!-- Fluid width widget -->        
    	    <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-calendar"></span>
                       SATIŞLAR
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        <?php
							$etkinlikler=mysql_query("SELECT tarih,baslik,icerik FROM etkinlikler ORDER by tarih ASC");
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
                        </li>
                        <?php
							}
						?>
                    </ul>
                    <a href="#" class="btn btn-danger btn-block">Tüm Satışlar »</a>
                </div>
            </div>
	</div>
	
	<div class="col-md-4">  <!-- DUYURULAR -->
		    <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bullhorn"></span>
                      Motorların Fiyatı
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
									<img class="media-object duyuru-resim img-rounded" src="images/s3.jpg" alt="">
								</a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Pulvinar Mauris Eu
                                </h4>
                                <p>
                                    Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
									<img class="media-object duyuru-resim img-rounded" src="images/s2.jpg" alt="">
								</a>
                               
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Aenean Consectetur Ultricies
                                </h4>
                                <p>
                                    Curabitur vel malesuada tortor, sit amet ultricies mauris. Aenean consectetur asnbasbnsdbn shjsdhsdhj
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
									<img class="media-object duyuru-resim img-rounded" src="images/t2.jpg" alt="">
								</a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Praesent Tincidunt
                                </h4>
                                <p>
                                    Sed convallis dignissim magna et dignissim. Praesent tincidunt sapien eu asjjsaj dssdhjsd sdjjdsjsd fdjkfdjk
                                </p>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-info btn-block">Tüm Satışlar »</a>
                </div>
				</div>
	
	</div>
	
	<div class="col-md-4">  <!-- GÖRÜŞLER -->
	  <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-user"></span>
                        Motorlar Hakkında Görüşler
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
									<img class="media-object duyuru-resim img-circle" src="images/per2.jpg" alt="">
								</a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                   Pınar MÜNÜKLÜ
                                </h4>
                                <p>
                                    Boşuna paranıza yazık etmeyin. Buraya harcadığınız zamanda gidip gezin, dolaşın.
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
									<img class="media-object duyuru-resim  img-circle" src="images/t3.jpg" alt="">
								</a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Angelia Sundval
                                </h4>
                                <p>
                                    İngilizceyi Amerka'da bile böyle güzel öğretmiyorlar. Kaçırmayın. Böyle fırsat her zaman ele geçmez.
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
									<img class="media-object duyuru-resim img-circle" src="images/t4.jpg" alt="">
								</a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Mark Zubery
                                </h4>
                                <p>
                                    Kişisel gelişim kursları bir harika. Bir daha bu kurstan sonra toplum içine çıkamıyorsunuz.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-success btn-block">Tüm Satışlar »</a>
                </div>
	
	</div>
	
	</div>
	
	
	
	
	
	
	</div>
