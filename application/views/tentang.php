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
                        <h1>Tentang</h1>
                    </div>
                </div>
            </div>

            <!-- RESULT SECTION -->
            <div class="row section tentang-section">
              <div class="col-md-8 col-md-offset-2">
                <div class="pembicarakristen-logo col-sm-3 col-sm-offset-0 col-xs-6 col-xs-offset-3">
                    <img src="<?=img_url()?>logo-color.png" class="img-responsive">
                </div>
                <div class="col-xs-12 text-tentang">
                    <p><span>Pembicarakristen</span> merupakan sebuah portal pencarian pembicara untuk persekutuan, baik persekutuan mahasiswa, siswa, maupun persekutuan remaja di gereja. Visi <span>pembicarakristen</span> adalah 
                        "tersedianya pembicara yang tepat sesuai dengan kebutuhan persekutuan".
                    </p>

                    <p>Berangkat dari permasalah yang sering dialami oleh pengurus persekutuan: kebingungan dalam penentuan pembicara yang tepat dan sesuai dengan kebutuhan sehingga membuat proses menghubungi pembicara terlambat. Hal seperti ini tentu akan membuat kualitas ibadah yang dipersiapkan tidak baik. Selain itu, ini juga akan mengurangi waktu pembicara untuk mempersiapkan dirinya. Pada akhirnya pertumbuhan jemaatlah yang akan menjadi korban atas permasalahan ini.
                    </p>

                    <p>Pemberitaan firman adalah pusat suatu ibadah, sehingga mempersiapkan pemberita firman yang terbaik seharusnya menjadi prioritas seorang pengurus persekutuan dalam mempersiapkan suatu ibadah. Kami merindukan <span>pembicarakristen</span> menjadi jawaban atas kondisi ini; pengurus persekutuan dapat mencari pembicara yang sesuai untuk setiap tema ibadah yang dibuat dan mendapatkan kontak pembicara yang diinginkan dari daftar pembicara yang tersedia di website <span>pembicarakristen</span>.</p>

                    <div class="signature">
                        
                        <p>Yonas Suryono</p>
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