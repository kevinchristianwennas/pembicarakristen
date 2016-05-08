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
            <div class="row section main-half">
                <div class="col-sm-12 main-section-container">
                    <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 searchbar">
                        <form class="" action="" method="post">
                            <div class="form-group">
                                <div class="search-input">
                                    <input type="text" class="form-control search-pembicarakristen" id="exampleInputEmail1" placeholder="nama pembicara, tema, atau kategori">
                                </div>
                                <div class="search-button">
                                    <button type="submit" class="btn btn-default">
                                    <img src="<?=img_url();?>search-icon.png" class="search-icon"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- RESULT SECTION -->
            <div class="row section pembicara-result-section">
                <div class="pembicara-container col-md-6 col-md-offset-3 col-xs-12">
                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/alex.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="/pembicarakristen/pembicara">Alex Nanlohy, S.Sos, M.A.</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#Doktrinal</a> <a href="#">#TrainingMC</a> <a href="#">#PelayananSiswa</a> <a href="#">#Topikal</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Jakarta Pusat</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Seluruh Indonesia</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/purwoko.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="#">Ardhi Purwoko, ST</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#Topikal</a> <a href="#">#PelayananMahasiswa</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Depok</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Jabodetabek</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/alex.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="#">Ir. Linawati K., M. Div.</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#Doktrinal</a> <a href="#">#Renungan</a> <a href="#">#PelayananMahasiswa</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Jakarta Pusat</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Banten, Jakarta, Jawa Barat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>



                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/flafiana.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="#">Dra. Flafiana Tagung, M. Min., M. Si.</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#Doktrinal</a> <a href="#">#PelayananMahasiswa</a> <a href="#">#Islamologi </a> <a href="#">#Penginjilan</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Jakarta Utara</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Banten, Jakarta, Jawa Barat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/sahat.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="#">Sahat Parulian Silalahi, SE</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#TrainingKeyboardis</a> <a href="#">#PelayananMahasiswa</a> <a href="#">#Musik</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Jakarta Timur</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Jabodetabek</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/alex.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="#">Alex Nanlohy, S.Sos, M.A.</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#Doktrinal</a> <a href="#">#TrainingMC</a> <a href="#">#PelayananSiswa</a> <a href="#">#Topikal</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Jakarta Pusat</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Seluruh Indonesia</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/purwoko.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="#">Ardhi Purwoko, ST</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#Topikal</a> <a href="#">#PelayananMahasiswa</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Depok</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Jabodetabek</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/alex.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="#">Ir. Linawati K., M. Div.</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#Doktrinal</a> <a href="#">#Renungan</a> <a href="#">#PelayananMahasiswa</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Jakarta Pusat</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Banten, Jakarta, Jawa Barat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>



                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/flafiana.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="#">Dra. Flafiana Tagung, M. Min., M. Si.</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#Doktrinal</a> <a href="#">#PelayananMahasiswa</a> <a href="#">#Islamologi</a><a href="#">#Penginjilan</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Jakarta Utara</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Banten, Jakarta, Jawa Barat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="pembicara-item row">
                        <div class="col-sm-3 col-xs-4 pembicara-foto">
                            <img src="<?=img_url();?>pembicara/sahat.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-9 col-xs-8 pembicara-desc">
                            <h4 class="nama-pembicara"><a href="#">Sahat Parulian Silalahi, SE</a></h4>
                            <p class="tag"><a href="#">#KKR</a> <a href="#">#TrainingKeyboardis</a> <a href="#">#PelayananMahasiswa</a> <a href="#">#Musik</a></p>
                            <table class="keterangan-daerah-pelayanan">
                                <tbody>
                                    <tr>
                                        <td>Tempat tinggal</td>
                                        <td>: Jakarta Timur</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah pelayanan</td>
                                        <td>: Jabodetabek</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- end of Pembicara Item-->
                </div>
            </div>
            <!-- end of pembicara-result-section -->

            <div class="row section paging-number">
                <nav>
                  <ul class="pagination">
                    <!-- <li class="disabled">
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li> -->
                    <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <!-- <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li> -->
                  </ul>
                </nav>
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