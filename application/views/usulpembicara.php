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
                    <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
                        <h1>Usul Pembicara</h1>
                    </div>
                </div>
            </div>

            <!-- RESULT SECTION -->
            <div class="row section usulpembicara-section">
                <div class="col-md-6 col-md-offset-3">
                    <form class="form-usulpembicara">
                        <h3>Data Pembicara</h3>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Gereja</label>
                            <input type="text" class="form-control" name="gereja">
                        </div>
                        <div class="form-group">
                            <label>Tempat Tinggal</label>
                            <input type="text" class="form-control" name="tempattinggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Wilayah Pelayan</label>
                            <input type="text" class="form-control" name="wilayahpelayan">
                        </div>
                        <div class="form-group">
                            <label>Pendidikan</label>
                            <input type="text" class="form-control" name="pendidikan">
                            <p class="help-block">Sebutkan jurusan dan universitas/sekolah, jika lebih dari satu pisahkan dengan tanda koma.</p>
                        </div>
                        <div class="form-group">
                            <label>No. Handphone</label>
                            <input type="text" class="form-control" name="nohandphone">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" name="twitter">
                        </div>
                        <div class="form-group">
                            <label>Line</label>
                            <input type="text" class="form-control" name="line">
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" name="website">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto">
                            <p class="help-block">Ukuran foto harus di bawah 1Mb.</p>
                        </div>

                        <div class="divider"></div>
                        <h3>Pengusul</h3>
                        <div class="form-group">
                            <label>Nama Pengusul</label>
                            <input type="text" class="form-control" name="namapengusul">
                        </div>
                        <div class="form-group">
                            <label>Email Pengusul</label>
                            <input type="email" class="form-control" name="emailpengusul">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>
            </div>
            <!-- end of pembicara-result-section -->

            <?php include 'footer.php'; ?>
        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=js_url()?>jquery-1.9.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script src="<?=js_url()?>pembicarakristen.js"></script>
    </body>
</html>