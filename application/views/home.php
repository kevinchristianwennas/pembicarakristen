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
                            <button type="submit" class="btn btn-default">Cari</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- TEMA SECTION -->
            <div class="row section tema">
                <div class="col-md-7 col-md-offset-1 tema-collase">
                    <div class="col-sm-4 tema-item">
                        <p>KKR</p>
                    </div>
                    <div class="col-sm-4 tema-item">
                        <p>Topikal</p>
                    </div>
                    <div class="col-sm-4 tema-item">
                        <p>Renungan</p>
                    </div>

                    <div class="col-sm-4 tema-item">
                        <p>Psikologi</p>
                    </div>
                    <div class="col-sm-4 tema-item">
                        <p>Doa</p>
                    </div>
                    <div class="col-sm-4 tema-item">
                        <p>Training</p>
                    </div>

                    <div class="col-sm-4 tema-item">
                        <p>Doktrinal</p>
                    </div>
                    <div class="col-sm-4 tema-item">
                        <p>Eksposisi</p>
                    </div>
                    <div class="col-sm-4 tema-item">
                        <p>PA</p>
                    </div>
                </div>
                <div class="col-md-3 tema-desc">
                    <h3>KKR</h3>
                    <p>KKR merupakan sebuah ibadah penantangan jemaat untuk menerima Kristus sebagai satu-satunya Tuhan dan Juruselamat secara pribadi.
                    Yang membedakan KKR dengan ibadah lain adalah proses penantang jemaat.
                    </p>
                    <button class="btn btn-default" type="submit">Lihat semua</button>
                </div> 
            </div>


            <!-- USUL PEMBICARA SECTION -->
            <div class="row section usulpembicara">
                <div class="col-md-offset-2 col-md-4 ">
                    <h3>Punya rekomendasi pembicara?</h3>
                    <p>Setiap pembicara yang direkomendasikan akan diverifikasi terlebih dahulu oleh admin sebelum ditampilkan
                    pada website pembicarakristen.</p>
                    <button class="btn btn-default" type="submit">Rekomendasikan</button>
                </div>
            </div>


            <!-- FOOTER -->
            <div class="row section footer">
                <div class="col-md-4 col-md-offset-4">
                    <div class="col-sm-6">
                        <a href=""><p>Daftar Pembicara</p></a>
                        <a href=""><p>Usul Pembicara</p></a>
                        <a href=""><p>Daftar Acara</p></a>
                        <a href=""><p>Usul Acara</p></a>
                    </div>
                    <div class="col-sm-6">
                        <a href=""><p>Tentang</p></a>
                        <a href=""><p>FAQ</p></a>
                        <a href=""><p>Blog</p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?=img_url()?>logo-color.png" class="img-responsive footer-logo">
                </div>
            </div>
        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script src="<?=js_url()?>pembicarakristen.js"></script>
    </body>
</html>