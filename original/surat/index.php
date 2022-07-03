<html>

<head>
    <title>Buat Surat Izin v.1 | Buat Surat Izin Sekolah Generator</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/icon.png">
    <meta name="description" content="Buat Surat Izin Sekolah Kamu disini dijamin Cepat dan Mudah">
    <meta name="keywords"
        content="Bikin SUrat,surat,surat izin,make surat izin,surat sekolah,contoh surat sekolah,surat sekolah generator,surat izin generator,surat izin tidak masuk sekolah,surat sekolah,surat tdk masuk,surat izin tdk sekolah">
    <meta name="author" content="Ahmad Ansori">
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
            padding-top: 70px;
            padding-bottom: 70px;
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
    <?php
 session_start(); if(empty($_SESSION['username'])){ header("location:/index.php"); }
 ?>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#">Dashboard</a> </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/tutorial.php">Tutorial</a></li>
                    <li><a href="/about.php">Tentang Saya</a></li>
                    <li><a href="/logout.php">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <center>
        <h3>Isikan Data dengan Benar!<br></h3>
        <form action="buat_surat.php" method="get"> Nama Lengkap: <input type="text" name="nama"><br> Asal Sekolah:
            <input type="text" name="sekolah"><br> Kelas: <input type="text" name="kelas"><br> Nama Ortu/Wali: <input
                type="text" name="ortu"><br> Alamat: <input type="text" name="alamat"><br> Nama Kota/Kab: <input
                type="text" name="kota"><br> Alasan Tidak Masuk: <input type="text" name="alasan"><br> Hari: <input
                type="text" name="hari"><br> Tanggal Tidak Masuk: <input type="text" name="tanggal"><br><br> <input
                class="btn btn-success" type="submit"> </form>
    </center>
    <!-- Footer -->
    <footer class="container-fluid bg-4 text-center">
        <p>Aplikasi Web dibuat oleh <a href="https://www.ansoriweb.com/">ansoriweb.com</a></p>
    </footer>
</body>

</html>
</body>

</html>