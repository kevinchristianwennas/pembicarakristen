<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- for ios 7 style, multi-resolution icon of 152x152 --> 
        <meta name="apple-mobile-web-app-capable" content="yes"> <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent"> 
        <link rel="apple-touch-icon" href="<?=img_url()?>logo-color-color.png"> 

        <!-- for Chrome on Android, multi-resolution icon of 196x196 --> 
        <meta name="mobile-web-app-capable" content="yes"> <link rel="shortcut icon" sizes="196x196" href="<?=img_url()?>logo-color-color.png">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?=css_url()?>pembicarakristen.css">

        <title>Pembicara Kristen | 2016</title>
    </head>

    <body>
        <?php include 'navbar.php'; ?>

    	<!-- content -->
    	<div class="container-pembicarakristen" id="container-pembicarakristen">
            
            <!-- MAIN SECTION -->
            <div class="row section main-half main-half-pembicara">
                <div class="col-sm-12 main-section-container">
                    <div class="col-md-6 col-md-offset-3 col-xs-12 pembicara-header">
                        <div class="pembicara-header-wrapper">
                            <div class="pembicara-foto">
                                <img src="<?=img_url()?>pembicara/alex.jpg" class="img-responsive">
                            </div>
                            <div class="pembicara-name">
                                <h3>Alex Nanlohy, S.Sos., M. A.</h3>
                                <a class="btn btn-default tambah-komentar" href="#" role="button" 
                                    data-toggle="modal" data-target="#modalkomentar">Tambah Komentar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row section pembicara-data">
                <div class="col-md-6 col-md-offset-3 col-xs-12 pembicara-data-wrapper">

                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Tentang</p></div>
                        <div class="col-xs-9">
                            <p>Alex Nanlohy merupakan seorang staf full time Perkantas Jakarta. Pelayanannya dimulai dari pelayanan
                                    sebagai staf pelayan siswa pada tahun 2000. Kecintaannya pada pelayanan siswa membuatnya sering melayani
                                    pada ibadah-ibadah Rohkris di sekolah Jakarta dan Dpeok. Saat ini fokus pada pelayanan pemberitaan injil
                                    di berbagai wilayah Indonesia.</p>
                        </div>
                    </div>

                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Gereja</p></div>
                        <div class="col-xs-9">
                            <p>GPIB Matraman</p>
                        </div>
                    </div>

                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Tempat Tinggal</p></div>
                        <div class="col-xs-9">
                            <p>Jakarta Pusat</p>
                        </div>
                    </div>

                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Pendidikan</p></div>
                        <div class="col-xs-9">
                            <p>Ilmu Komunikasi, Universitas Indonesia</p>
                            <p>Misiology, Redcliffe College, UK</p>
                        </div>
                    </div>
                    
                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Spesialisasi</p></div>
                        <div class="col-xs-9">
                            <p><a href="#">#KKR</a> <a href="#">#Doktinal</a> <a href="#">#Topikal</a> <a href="#">#TraininngMC</a> </p>
                        </div>
                    </div>

                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Email</p></div>
                        <div class="col-xs-9">
                            <p>alex.nanlohy@gmail.com</p>
                        </div>
                    </div>

                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Handphone</p></div>
                        <div class="col-xs-9">
                            <a href="#" role="button" data-toggle="modal" data-target="#modalpengunjung" ><p>08xxxxxxxxxx</p></a>
                        </div>
                    </div>

                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>LINE</p></div>
                        <div class="col-xs-9">
                            <p>@alexnanlohy</p>
                        </div>
                    </div>

                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Facebook</p></div>
                        <div class="col-xs-9">
                            <p>Alex Nanlohy </p>
                        </div>
                    </div>
                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Twitter</p></div>
                        <div class="col-xs-9">
                            <p>@alexnanlohy</p>
                        </div>
                    </div>
                    <div class="row pembicara-data-row">
                        <div class="col-xs-3 data-title"><p>Instagram</p></div>
                        <div class="col-xs-9">
                            <p>@alexnanlohy</p>
                        </div>
                    </div>


                    <div class="row pembicara-data-row komentar">
                        <div class="col-xs-3 data-title"><p>Komentar</p></div>
                        <div class="col-sm-9 col-xs-12">
                            <div class="col-xs-12 komentar-item">
                                <div class="col-xs-2">
                                    <img src="<?=img_url()?>logo-color-color.png" class="img-responsive">
                                </div>
                                <div class="col-xs-10">
                                    <h5>Samuel Arijan</h5>
                                    <p class="waktu-komentar">2 minggu lalu</p>
                                    <p>Pembicaranya OK. Najwa? Kick Andy? Kalah!</p>
                                </div>
                            </div>

                            <div class="col-xs-12 komentar-item">
                                <div class="col-xs-2">
                                    <img src="<?=img_url()?>logo-color-color.png" class="img-responsive">
                                </div>
                                <div class="col-xs-10">
                                    <h5>Samuel Arijan</h5>
                                    <p class="waktu-komentar">2 minggu lalu</p>
                                    <p>Pembicaranya OK. Najwa? Kick Andy? Kalah!</p>
                                </div>
                            </div>

                            <div class="col-xs-12 komentar-item">
                                <div class="col-xs-2">
                                    <img src="<?=img_url()?>logo-color-color.png" class="img-responsive">
                                </div>
                                <div class="col-xs-10">
                                    <h5>Samuel Arijan</h5>
                                    <p class="waktu-komentar">2 minggu lalu</p>
                                    <p>Pembicaranya OK. Najwa? Kick Andy? Kalah!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'footer.php'; ?>
        </div>

        

        <!-- Modal untuk menambahkan komentar -->
        <div class="modal fade" id="modalkomentar" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Komentar untuk Alex Nanlohy, S.Sos, M. A.</h4>
              </div>
              <div class="modal-body">
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="asal" class="col-sm-2 control-label">Asal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempatpelayanan" class="col-sm-2 control-label">Tempat Pelayanan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempatpelayanan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="waktupelayanan" class="col-sm-2 control-label">Waktu Pelayanan</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" id="waktupelayanan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="isikomentar" class="col-sm-2 control-label">Komentar</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="isikomentar"></textarea>
                        </div>
                    </div>
                    <div class="form-group button-komentar">
                        <button type="submit" class="btn btn-default">Kirim</button>
                    </div>
                </form>

              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- Modal untuk mengisi absen dan membuka kontak -->
        <div class="modal fade" id="modalpengunjung" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Hi! Perkenalkan diri Anda</h4>
              </div>
              <div class="modal-body">
                <p>Kontak pembicara akan terbuka setelah Anda mengisi daftar pengunjung ini.</p>
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="asal" class="col-sm-2 control-label">Asal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asal">
                            <p class="help-block">(Contoh : SMA 1 Jakarta, Fakultas Kedokteran UI, Gereja HKBP Depok)</p>
                        </div>
                    </div>
                    <div class="form-group button-pengunjung">
                        <button type="submit" class="btn btn-default button-kirim-pengunjung">Kirim</button>
                    </div>
                </form>

              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=js_url()?>jquery-1.9.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script src="<?=js_url()?>pembicarakristen.js"></script>
    </body>
</html>