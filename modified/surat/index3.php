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
                    <li><a href="/tutorial.php">Tutorial</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <form class="form-horizontal" action="buat_surat.php" method="get">
            <center>
                <h3>Isikan Data dengan Benar!</h3><br>
            </center>
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="inputName3" placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="form-group">
                <label for="inputSekolah3" class="col-sm-2 control-label">Asal Sekolah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sekolah" id="inputSekolah3"
                        placeholder="Masukkan Asal Sekolah">
                </div>
            </div>
            <div class="form-group">
                <label for="inputKelas3" class="col-sm-2 control-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kelas" id="inputKelas3" placeholder="Masukkan Kelas">
                </div>
            </div>
            <div class="form-group">
                <label for="inputOrtu3" class="col-sm-2 control-label">Orang Tua/Wali</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="ortu" id="inputOrtu3"
                        placeholder="Masukkan Nama Orang Tua/Wali">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAlamat3" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="inputAlamat3"
                        placeholder="Masukkan Alamat">
                </div>
            </div>
            <div class="form-group">
                <label for="inputKota3" class="col-sm-2 control-label">Kota/Kabupaten</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kota" id="inputkota3"
                        placeholder="Masukkan Nama Kota/Kabupaten">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAlasan3" class="col-sm-2 control-label">Alasan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alasan" id="inputAlasan3"
                        placeholder="Contoh : Sakit/Izin/Lainnya">
                </div>
            </div>
            <div class="form-group">
                <label for="inputHari3" class="col-sm-2 control-label">Hari</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="hari" id="inputHari3" placeholder="Masukkan Hari">
                </div>
            </div>
            <div class="form-group">
                <label for="inputTanggal3" class="col-sm-2 control-label">Tanggal Izin</label>
                <div class="col-sm-10">
                    <input data-date-format="dd-mm-yyyy" type="date" class="form-control" name="tanggal"
                        id="inputTanggal3" placeholder="Masukkan Tanggal Tidak Masuk">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <footer class="footer navbar-fixed-bottom container-fluid bg-4 text-center border border-white">
        <div class="text-center p-3 border-white">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>
</body>

</html>
</body>

</html>