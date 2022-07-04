<html>

<head>
    <title>Buat Surat Izin v.1 | Buat Surat Izin Sekolah Generator</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/icon.png">
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
                <a class="navbar-brand" href="../">Dashboard</a> </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../tutorial.php">Tutorial</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <form class="form-horizontal" action="buat_surat2.php" method="get">
            <center>
                <h3>Isikan Data dengan Benar!</h3><br>
            </center>
            <div class="form-group">
                <label for="inputName3" class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama" id="inputName3" placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="form-group">
                <label for="inputSekolah3" class="col-sm-3 control-label">Asal Sekolah</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="sekolah" id="inputSekolah3"
                        placeholder="Masukkan Asal Sekolah">
                </div>
            </div>
            <div class="form-group">
                <label for="inputKelas3" class="col-sm-3 control-label">Kelas</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="kelas" id="inputKelas3" placeholder="Masukkan Kelas">
                </div>
            </div>
            <div class="form-group">
                <label for="inputOrtu3" class="col-sm-3 control-label">Orang Tua/Wali</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="ortu" id="inputOrtu3"
                        placeholder="Masukkan Nama Orang Tua/Wali">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAlamat3" class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="alamat" id="inputAlamat3"
                        placeholder="Masukkan Alamat">
                </div>
            </div>
            <div class="form-group">
                <label for="inputKota3" class="col-sm-3 control-label">Kota/Kabupaten</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="kota" id="inputkota3"
                        placeholder="Masukkan Nama Kota/Kabupaten">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAlasan3" class="col-sm-3 control-label">Alasan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="alasan" id="inputAlasan3"
                        placeholder="Contoh : Sakit/Izin/Lainnya">
                </div>
            </div>
            <div class="form-group">
                <label for="inputHari3" class="col-sm-3 control-label">Hari</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="hari" id="inputHari3" placeholder="Masukkan Hari">
                </div>
            </div>
            <div class="form-group">
                <label for="inputKalender3" class="col-sm-3 control-label">Tanggal Izin</label>
                <div class="col-sm-2">
                    <select class="form-control" name="tgl" id="inputKalender3">
                    <option selected="selected">Tanggal</option>
                    <?php
                    for($a=1; $a<=31; $a+=1){
                        echo"<option value=$a> $a </option>";
                    }
                    ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select class="form-control" name="bln" id="inputKalender3">
                    <option selected="selected">Bulan</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <?php
                    $now=date('Y');
                    echo "<select class='form-control' name='tahun'>";
                    echo "<option selected='selected'>Tahun</option>";
                    for ($a=2010;$a<=$now;$a++)
                    {
                        echo "<option value='$a'>$a</option>";
                    }
                    echo "</select>";
                    ?>
                    </div>
            </div>
            <br>
            <center>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </center>
        </form>
    </div>
    <!-- Footer -->
    <footer class="footer navbar-fixed-bottom container-fluid bg-4 text-center border border-white">
        <div class="text-center p-3 border-white">©2022</div>
    </footer>
</body>

</html>
</body>

</html>