<?php
    $hata="";
	$giris=isset($_POST["giris"])? $_POST["giris"]:"";
	if ($giris){		
		$mail=addslashes($_POST["mail"]);
		$parola=addslashes($_POST["parola"]);
		if ($mail && $parola) {
			$sql="SELECT id,mail FROM kullanicilar WHERE mail='$mail' and parola='$parola'";
			$kayit=mysql_query($sql);
			 if (mysql_num_rows($kayit)>0) {
				 $kullanici = mysql_fetch_array($kayit);
				 $_SESSION["login"]=$kullanici["mail"];
				 header("Location:index.php?sayfa=admin");
				 die();
			 } 
			 else
			   $hata="E-posta veya parolanızda hata var.";
	    }
	}
?>
<script>
 function kayit_kontrol(){
	f = document.forms['giris_form'];
	uyari_div= document.getElementById('uyari_div'); 
	var uyari = '';
	var hatalar = '';
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (f.mail.value.trim() == '' || reg.test(f.mail.value) == false) hatalar = hatalar + '<font color="red" size="2"><bold>- E-posta adresinizi düzgün giriniz.<br></font>';
	if (f.parola.value.trim() == '' || f.parola.value.length<4) hatalar = hatalar + '<font color="red" size="2"><bold>- En az 4 karekterli parola giriniz.<br></font>';
	if (hatalar!='') {
		uyari_div.visible=true;
		uyari_div.innerHTML=hatalar;		
		return false;
	} else {return true;}
 }
</script>
<div class="container padTop20"> <!-- SLİDER ÇUBUĞU -->
<div class="row" align="center">
<div class="panel-body" id="login" style="width:250px">      
	<form method="post" name="giris_form" id="giris_form" onsubmit="return kayit_kontrol();" action="index.php?sayfa=giris"> 
      	  <h4 class="text-center">GİRİŞ</h4>
		  <div class="uyari_div" id="uyari_div"></div>      
		  <? echo $hata;?>
	      <p> <input type="text" name="mail" value="" class="form-control" placeholder="E-posta"></p>		   
	       <div class="form-group password-strength"> 
			<p><input type="password" name="parola" class="form-control" value="" placeholder="Parola"></p>
			</div>
	   	    
		<p class="submit"><input type="reset" name="vazgec" value="Vazgeç" class="btn btn-danger"> 
		<input type="submit" name="giris"  value="Giriş" class="btn btn-success"> </p>
      </form>
</div>
</div>
</div>
<br>