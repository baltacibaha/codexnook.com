<?php
// Sıkı durun, yaratıcılığıma bakın!
session_start();
include 'ayar.php';
include 'ukas.php';
include 'func.php';
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="main.css" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3809740976001286"
        crossorigin="anonymous"></script>
    <title>Welcome to the Matrix</title>
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <style>
        body {
            background-color: black;
            color: limegreen;
            font-family: monospace;
        }

        h2 {
            font-size: 24px;
            text-align: center;
            margin-top: 50px;
        }

        ul {
            list-style: none;
            padding: 0;
            text-align: center;
            margin-top: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: limegreen;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <center>
        <?php include 'header.php'; // Resistance is futile. ?>
        <br><br>
        <center>
            <table>
                <tr>
                    <td colspan="2">
                        <h2>The Chosen Ones:</h2>

                        <ul>
                            <?php
                            $dataList = $db->prepare("SELECT * FROM uyeler LIMIT 100000");
                            $dataList->execute();
                            $dataList = $dataList->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($dataList as $row) {
                                echo '<li><a href="profil.php?kadi=' . $row["uye_adsoyad"] . '">Red Pill ' . $row["uye_eposta"] . '</a></li>';
                            }
                            ?>
                        </ul>
                    </td>
                </tr>
            </table>
        </center>
    </center>
</body>

</html>