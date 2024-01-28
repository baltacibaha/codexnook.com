<!DOCTYPE html>
<html>
<link rel="stylesheet" href="main.css" />

<head>
    <meta name=”viewport” content=”width=device-width, initial-scale=1 ″>
    <title>CodexNook</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <h1>CodexNook.com</h1>
    </header>

    <nav>
        <?php
        if (@$_SESSION["uye_id"]) {
            echo '<a href="index.php">Anasayfa</a>';
            echo '<a href="profil.php?kadi=' . @$_SESSION["uye_kadi"] . '">Profilime Git</a>';
            echo '<a href="uyelik.php?p=cikis">Çıkış Yap</a>';
        } else {
            echo '<a href="index.php">Anasayfa</a>';
            echo '<a href="uyelik.php?p=kayit">Üye Ol</a>
             <a href="uyelik.php">Giriş Yap</a>';
        }
        ?>

    </nav>
</body>

</html>