<!DOCTYPE html>
<html>
<link rel="stylesheet" href="uyelik.css" />

<head>
     <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3809740976001286"
     crossorigin="anonymous"></script>
    <title>CodexNook.com/Kayıt Ol Giriş Yap</title>
  <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
</head>

<body>

	<?php
	session_start();
	include 'ayar.php';
	include 'ukas.php';

	$p = @$_GET["p"];

	switch ($p) {
		case 'cikis':
			if (@$_SESSION["uye_id"]) {
				ukas_cikis("ayar.php", "index.php");
			} else {
				header("LOCATION:index.php");
			}
			break;

		case 'kayit':
			if (@$_SESSION["uye_id"]) {
				header("LOCATION:index.php");
			} else {
				ukas_kayit("ayar.php", "<p class='text-warning'>Lütfen boş bırakmayınız!</p>", "<p class='text-danger'>Böyle bir eposta mevcut! Lütfen başka bir tane deneyiniz!</p>", "<p class='text-warning'>Böyle bir kullanıcı adı mevcut! Lütfen başka bir tane deneyiniz!</p>", "<p class='text-success'>Başarıyla kaydoldun! :)</p>", "index.php", "<p class='text-danger'>Kullanıcı adı veya şifre hatalı!</p>", "<p class='text-danger'>Kayıt başarısız!</p>", "<p>Şifreniz bir birine eşleşmiyor!</p>", "<p>Lütfen gerçek bir eposta giriniz!</p>");
				echo '<h1 class="text-center"><strong>Şimdi Kayıt Ol!</strong></h1>
			<form action="" method="POST">
				<strong>Ad Soyad:</strong><br>
				<input type="text" class="form-control" name="adsoyad"><br>
				<strong>Kullanıcı adı:</strong><br>
				<input type="text" class="form-control" name="kadi"><br>
				<strong>Şifre:</strong><br>
				<input type="password" class="form-control" name="sifre"><br>
				<strong>Şifre (Tekrar):</strong><br>
				<input type="password" class="form-control" name="sifret"><br>
				<strong>E-Posta:</strong><br>
				<input type="text" class="form-control" name="eposta"><br />
				<input type="submit" class="btn btn-block btn-danger" name="kayit" value="Kayıt Ol">
			</form>
			<hr>
			<a href="uyelik.php?p=giris" class="btn btn-block btn-success"><strong><em>Şimdi giriş yap!</em></strong></a><br />
			<a href="index.php" class="text-dark"><small>&larr; <strong><em>Anasayfaya dön</em></strong></small></a>';
			}
			break;

		default:
			if (@$_SESSION["uye_id"]) {
				header("LOCATION:index.php");
			} else {
				ukas_giris("ayar.php", "index.php", "<p class='text-warning'>Lütfen boş bırakmayınız!</p>", "<p class='text-danger'>Kullanıcı adı veya şifre hatalı!</p>");

				echo '<h1 class="text-center"><strong>Giriş Yap</strong></h1>
			<br /><form action="" method="POST">
				<strong>Kullanıcı Adı:</strong><br>
				<input type="text" class="form-control" name="kadi"><br>
				<strong>Şifre:</strong><br>
				<input type="password" class="form-control" name="sifre"><br />
				<input type="submit" class="btn btn-block btn-success" name="giris" value="Giriş Yap">
			</form>
			<hr>
			<a href="index.php" class="text-dark"><small>&larr; <strong><em>Anasayfaya dön</em></strong></small></a>';
			}
			break;
	}

	?>