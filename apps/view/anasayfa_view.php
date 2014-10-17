<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>SiteAdı</title>

	<script src="<?php echo $doc; ?>js/min.js"></script>
	<script type="text/javascript" src="<?php echo $doc; ?>js/style.js"></script>
	<script type="text/javascript"></script>
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $doc; ?>css/stil.css"/>
	<style type="text/css">
		@import url('<?php echo $doc; ?>css/reset.css');
	</style>	
</head>
<body>

	<div id="genel">
		<div class="genel">
			<!-- Header -->
			<header>
				<h1 class="logo">SITE.LOGO</h1>
				<aside>
					<a href="#"></a>
				</aside>
			</header>
			<!-- AramaGirişYeniÜye -->
			<div class="wrap">
				<form action="#">
					<div class="search"><input type="search" placeholder="Aradığını bul.."/></div>
					<span></span>
				</form>
				<ul>
					<?php
						if($giris=="YAPILDI"){
					?>
					<li><a href="#"><?php foreach($kullaniciBilgi as $kullanici){ echo $kullanici["adSoyad"]; } ?></a></li>
					<?php
						}else{}
						if($giris=="YAPILMADI"){
					?>
					<li><a href="<?php echo $doc; ?>giris">Giriş</a></li>
					<li><a href="<?php echo $doc; ?>yeniUyelik">Yeni Üyelik</a></li>
					<?php
					}else{
					?>
					<li class="ilanVerButton"><a href="<?php echo $doc; ?>ilanVer">İlan ver</a></li>
					<?php
					}
					?>
				</ul>
			</div>
			<section>
				<div class="sol">
					<ul class="kategori">
						<li><a href="#">Ev</a></li>
						<li><a href="#">Araba</a></li>
						<li><a href="#">Makine</a></li>
					</ul>
				</div>
				<div class="sag">
					<?php
						foreach($son40 as $son){
						?>
						<article class="urun">
							<a href="<?php echo $doc; ?>urunDetay/<?php echo $son["id"]; ?>">							
								<span class="resim">
									<img src="<?php echo $doc; ?>images/<?php echo $son["temsiliResim"]; ?>" />
								</span>
								<h3><?php echo substr($son["baslik"],0,12); ?><!-- MAX 12 KARAKTER --></h3>
								<span class="not"><?php echo substr($son["aciklama"],0,12); ?><!-- MAX 12 KARAKTER --></span>
								<span class="fiyat"><?php echo $son["fiyat"]; ?> TL</span>
							</a>
						</article>
						<?php
						}
					?>	
					<div class="clear"></div>
					<?php
						if(count($son40)<40){}
						else{
						?>
						<div class="tumu">
							<a href="#">
								<span>Tümünü Gör</span>
							</a>
						</div>
						<?php
						}
					?>
				</div>
			</section>
			
			<!-- Fırsat Bölümü - Slide -->
			<div class="slideHome">
				<div class="sagOk">></div>
				<div class="solOk"><</div>
				<span class="firsat">Fırsat</span>
				
				<div class="slideIn">
					<?php
						foreach($firsatUrun as $firsat){
						?>
						<div class="slideUrun">
							<a href="<?php echo $doc; ?>urunDetay/<?php echo $firsat["id"]; ?>">
								<img src="<?php echo $doc; ?>images/<?php echo $firsat["temsiliResim"]; ?>" />
								<span><?php echo $firsat["baslik"]; ?></span>
							</a>
						</div>
						<?php
						}
					?>
					
				</div>
			</div>
			
			<!-- Footer -->
			<footer>
				footer
			</footer>
		</div>
	</div>
	
	<!-- Yeni Kayıt İlk İsim - Soyisim -->
	<!--
	<div class="newName">
		<form action="#">
			<span>İsim</span>
			<input type="text"/>
			
			<span>Soyisim</span>
			<input type="text"/>
			
			<button>Kayıt</button>
		</form>
	</div>
	-->
</body>
</html>