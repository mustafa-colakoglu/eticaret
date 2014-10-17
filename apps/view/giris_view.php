<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>SiteAdı</title>
	<script type="text/javascript" src=""></script>
	<script type="text/javascript"></script>
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $doc; ?>css/stil.css"/>
	<style type="text/css">
		@import url('<?php echo $doc; ?>css/reset.css');
	</style>	
</head>
<body>

	<div class="login">
		<div class="loginLogo">
			<h1>SITE.LOGO</h1>
			<span>giriş</span>
		</div>
		<div class="in">
			<div class="logLeft">
				<form action="" method="post">
					<ul>
						<li>
							<span>Kullanıcı Adı</span>
							<input type="text" name="kadi" />
						</li>
						<li>
							<span>Şifre</span>
							<input type="password" name="sifre" />
						</li>
						<li><button>Giriş</button></li>
						<li><a href="#" class="unut">Şifremi unuttum</a></li>
					</ul>
				</form>
			</div>
			<div class="logRight">
				<h1>Üyeliğiniz yoksa</h1>
				<button>Ücretsiz Üye Ol!</button>
			</div>
		</div>
	</div>

</body>
</html>