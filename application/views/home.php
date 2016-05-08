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
            <div class="row section main">
                <div class="col-sm-12 main-section-container">
                    <img src="<?=img_url()?>logo-icon-white.png" class="img-responsive">
                    <h2>Pembicara tepat untuk persekutuanmu.</h2>
                    <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 searchbar">
                        <form class="" action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nama pembicara, tema, atau kategori">
                            </div>
                            <a type="submit" class="btn btn-default" role="button" href="/pembicarakristen/cari">Cari</a>
                        </form>
                    </div>
                </div>
            </div>

            <!-- TEMA SECTION -->
            <div class="row section tema tema-pc">
                <div class="col-md-7 col-md-offset-1 col-xs-12 col-xs-offset-0 tema-collase">
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p class="kkr">KKR</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p class="topikal">Topikal</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p class="psikologi">Psikologi</p>
                    </div>

                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p class="doktrinal">Doktrinal</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p class="eksposisi">Eksposisi</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p class="mahasiswasiswa">Mahasiswa/Siswa</p>
                    </div>

                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p class="lds">LDS</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p class="training">Training</p>
                    </div>
                    <div class="col-sm-4 col-xs-12 tema-item">
                        <p class="pa">PA</p>
                    </div>
                </div>
                <div class="col-md-3 tema-desc">
                    <h3 class="topik-title">KKR</h3>
                    <p class="topik-desc">KKR (Kebaktian Kebangunan Rohani) merupakan ibadah yang membangun kerohanian jemaat melalui materi-materi yang berfokus pada dasar iman Kristen seperti penciptaan, kejatuhan, penebusan, penyempurnaan.
                    </p>
                    <button class="btn btn-default" type="submit">Cari pembicara</button>
                </div> 
            </div>


            <!-- TEMA SECTION for MOBILE -->
            <div class="row section tema tema-mobile">
                <div class="title-tema-mobile row">
                    <h3 class="tema-mobile-title">Tema yang Sering Dicari</h3>
                </div>
                <div class="col-xs-12 tema-collase">
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p data-toggle="modal" data-target="#modalkkr">KKR</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p data-toggle="modal" data-target="#modaltopikal">Topikal</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p data-toggle="modal" data-target="#modalrenungan">Psikologi</p>
                    </div>

                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p data-toggle="modal" data-target="#modalpsikologi">Doktrinal</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p data-toggle="modal" data-target="#modaldoa">Eksposisi</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p data-toggle="modal" data-target="#modaltraining">Mahasiswa/Siswa</p>
                    </div>

                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p data-toggle="modal" data-target="#modaldoktrinal">LDS</p>
                    </div>
                    <div class="col-sm-4 col-xs-6 tema-item">
                        <p data-toggle="modal" data-target="#modaleksposisi">Training</p>
                    </div>
                    <div class="col-sm-4 col-xs-12 tema-item">
                        <p data-toggle="modal" data-target="#modalpa">PA</p>
                    </div>
                </div>

                <!-- MODAL for mobile -->

                <!-- KKR -->
                <div id="modalkkr" class="modal modal-tema fade" role="dialog">
                  <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">KKR</h4>
                        </div>
                        <div class="modal-body">
                          <p>KKR (Kebaktian Kebangunan Rohani) merupakan ibadah yang membangun kerohanian jemaat melalui materi-materi yang berfokus pada dasar iman Kristen seperti penciptaan, kejatuhan, penebusan, penyempurnaan.</p>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-default" href="#" role="button" href="#">Cari Pembicara</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Topikal -->
                <div id="modaltopikal" class="modal modal-tema fade" role="dialog">
                  <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Topikal</h4>
                        </div>
                        <div class="modal-body">
                          <p>Topikal adalah tema pemuridan/pembinaan rohani jemaat yang membahas  mengenai hal-hal khusus iman Kristen dan kontekstualisasinya dalam kehidupan sehari-hari.</p>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-default" href="#" role="button" href="#">Cari Pembicara</a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- Renungan -->
                <div id="modalpsikologi" class="modal modal-tema fade" role="dialog">
                  <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Psikologi</h4>
                        </div>
                        <div class="modal-body">
                          <p>Tema ini membahas hal-hal psikologis dari sudut pandang Kristiani, seperti temperamen, sifat-sifat diri, psikologi remaja, dan karakter.</p>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-default" href="#" role="button" href="#">Cari Pembicara</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Psikologi -->
                <div id="modaldoktrinal" class="modal modal-tema fade" role="dialog">
                  <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doktrinal</h4>
                        </div>
                        <div class="modal-body">
                          <p>Tema ini membahas pemahaman-pemahaman iman Kristen secara mendalam seperti Kristologi (doktrin Kristus), Soteriologi (doktrin Keselamatan), Bibliologi (doktrin Alkitab), doktrin Roh Kudus, Eskatologi (doktrin akhir zaman), Himnologi (doktrin pujian), dan lain-lain.</p>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-default" href="#" role="button" href="#">Cari Pembicara</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Doa -->
                <div id="modaleksposisi" class="modal modal-tema fade" role="dialog">
                  <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Eksposisi</h4>
                        </div>
                        <div class="modal-body">
                          <p>Eksposisi adalah tema yang mengekspos suatu bagian dalam Alkitab detail dan mendalam; seperti konteks budaya dan gaya penulisan, sehingga jemaat dapat mengaplikasikannya dalam kehidupan saat ini.</p>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-default" href="#" role="button" href="#">Cari Pembicara</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Training -->
                <div id="modalmahasiswasiswa" class="modal modal-tema fade" role="dialog">
                  <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Mahasiswa/Siswa</h4>
                        </div>
                        <div class="modal-body">
                          <p>Tema yang membahas bagaimana integrasi iman dan ilmu untuk memperlengkapi kaum intelektual mahasiswa dan siswa.</p>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-default" href="#" role="button" href="#">Cari Pembicara</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Doktrinal -->
                <div id="modallds" class="modal modal-tema fade" role="dialog">
                  <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">LDS</h4>
                        </div>
                        <div class="modal-body">
                          <p>Love, Dating, dan Sex merupakan tema yang membahas hal-hal percintaan, pacaran, dan seks dari sudut pandang Alkitab.</p>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-default" href="#" role="button" href="#">Cari Pembicara</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Eksposisi -->
                <div id="modaltraining" class="modal modal-tema fade" role="dialog">
                  <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Training</h4>
                        </div>
                        <div class="modal-body">
                          <p>Materi-materi pelatihan bagi para pelayan di persekutuan, seperti training pemimpib pujian, pemusik, membuat bahan PA, memimpin kelompok kecil.</p>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-default" href="#" role="button" href="#">Cari Pembicara</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- PA -->
                <div id="modalpa" class="modal modal-tema fade" role="dialog">
                  <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">PA</h4>
                        </div>
                        <div class="modal-body">
                          <p>PA (Pendalaman Alkitab) merupakan pembahasan Alkitab yang dilakukan secara berkelompok.</p>
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-default" href="#" role="button" href="#">Cari Pembicara</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- end of MODAL -->

            </div>


            <!-- USUL PEMBICARA SECTION -->
            <div class="row section usulpembicara">
                <div class="col-md-offset-2 col-md-3 ">
                    <h3>Punya Rekomendasi Pembicara?</h3>
                    <p>Setiap pembicara yang direkomendasikan akan diverifikasi terlebih dahulu oleh admin sebelum ditampilkan
                    pada website pembicarakristen.</p>
                    <button class="btn btn-default" type="submit">Rekomendasikan</button>
                </div>
            </div>

            <?php include 'footer.php'; ?>
        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=js_url()?>jquery-1.9.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script src="<?=js_url()?>pembicarakristen.js"></script>
    </body>
</html>