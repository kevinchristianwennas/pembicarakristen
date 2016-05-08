            <!-- FOOTER -->
            <div class="row section footer">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="col-sm-6">
                        <a href="/pembicarakristen/cari" <?php if($navigasi=='pembicara'){echo 'class="active-navigation-footer"';} ?>><p>Daftar Pembicara</p></a>
                        <a href="#" <?php if($navigasi=='usulpembicara'){echo 'class="active-navigation-footer"';} ?>><p>Usul Pembicara</p></a>
                        <!-- <a href="#" <?php if($navigasi=='acara'){echo 'class="active-navigation-footer"';} ?>><p>Daftar Acara</p></a>
                        <a href="#" <?php if($navigasi=='usulacara'){echo 'class="active-navigation-footer"';} ?>><p>Usul Acara</p></a> -->
                    </div>
                    <div class="col-sm-6">
                        <a href="/pembicarakristen/tentang" <?php if($navigasi=='tentang'){echo 'class="active-navigation-footer"';} ?>><p>Tentang</p></a>
                        <a href="/pembicarakristen/faq" <?php if($navigasi=='faq'){echo 'class="active-navigation-footer"';} ?>><p>FAQ</p></a>
                        <a href="/pembicarakristen/penjelasankategori" <?php if($navigasi=='penjelasankategori'){echo 'class="active-navigation-footer"';} ?>><p>Penjelasan Kategori</p></a> <!-- Berisi penjelasan kategori tema, maksud dari suatu kategori -->
                        <a href="#" <?php if($navigasi=='blog'){echo 'class="active-navigation-footer"';} ?>><p>Blog</p></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 bottom-logo">
                    <img src="<?=img_url()?>logo-color.png" class="img-responsive footer-logo">
                </div>
            </div>