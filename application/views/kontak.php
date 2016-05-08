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
                        <h1>Kontak</h1>
                    </div>
                </div>
            </div>

            <!-- RESULT SECTION -->
            <div class="row section kontak-section">
              <div class="col-md-8 col-md-offset-2">
                <div class="row intro-kontak">
                    Silahkan hubungi kami jika ada pertanyaan, saran, ataupun ingin berkolaborasi. Kami akan berusaha membalas setiap pesan dan email yang masuk dengan segera.
                </div>
                <div class="row kontak-details">
                    <div class="email col-sm-6">
                        <h4>Email</h4>
                        <p>pembicarakristen@gmail.com</p>
                    </div>
                    <div class="email col-sm-6">
                        <h4>No. Handphone</h4>
                        <p>Gohan Parningotan - 0838 7309 9622</p>
                    </div>
                </div>

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