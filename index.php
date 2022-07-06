<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Buat Surat Izin Sekolah Generator</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/icon.png">
    <meta charset="UTF-8">
    <meta name="description" content="Buat Surat Izin Sekolah Kamu disini dijamin Cepat dan Mudah">
    <meta name="keywords"
        content="Bikin Surat,surat,surat izin,make surat izin,surat sekolah,contoh surat sekolah,surat sekolah generator,surat izin generator,surat izin tidak masuk sekolah,surat sekolah,surat tdk masuk,surat izin tdk sekolah">
    <meta name="author" content="Muhammad Farras Rayhand, Muhammad Izzaturrahman Hikmal Nurwahid, Tico Rivaldy">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: black;
        }

        p {
            font-size: 16px;
        }

        .margin {
            margin-bottom: 45px;
        }

        .bg-1 {
            background-color: #1abc9c;
            /* Green */
            color: #ffffff;
        }

        .bg-2 {
            background-color: #474e5d;
            /* Dark Blue */
            color: #ffffff;
        }

        .bg-3 {
            background-color: #ffffff;
            /* White */
            color: #555555;
        }

        .bg-4 {
            background-color: #2f2f2f;
            /* Black Gray */
            color: #fff;
        }

        .container-fluid {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }

        .navbar-nav li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#">Dashboard</a> </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="tutorial.php">Tutorial</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <center>
        <?php
$tanggal = mktime(date("m") , date("d") , date("Y"));
echo "Tanggal : <b>" . date("d-M-Y", $tanggal) . "</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam = date("H:i:s");
echo "| Pukul : <b>" . $jam . " " . "</b>";
$a = date("H");
if (($a >= 6) && ($a <= 11))
{
    echo "<b>, Selamat Pagi :)</b>";
}
else if (($a > 11) && ($a <= 15))
{
    echo ", Selamat Siang !!";
}
else if (($a > 15) && ($a <= 18))
{
    echo ", Selamat Malam !!";
}
else
{
    echo ", <b> Selamat Malam :) </b>";
}
?>
        <br>
        <br>
        <h1>Selamat Datang!</h1>
        <h2>Ini adalah website untuk membuat Surat izin otomatis!</h2>
        <br><br>
        <a href="surat" class="btn btn-primary">Buat Surat
            Izin v.1</a><br><br> <a href="surat/index2.php" class="btn btn-warning">Buat Surat Izin v.2</a><br>
        <br>
        <img src="img/2.gif" class="img-rounded" height="250px">
        <br><br><br><br>
        <center>
            <!-- Footer -->
            <footer class="container-fluid bg-4 text-center border border-white">
                <div class="text-center p-3 border-white">©2022</div>
            </footer>
</body>

</html>
