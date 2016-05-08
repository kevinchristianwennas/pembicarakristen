<nav class="navbar navbar-default navbar-fixed-top" id="navbar-pembicarakristen">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/pembicarakristen">
        <img alt="Brand" src="<?=img_url()?>logo-white.png">
      </a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/pembicarakristen/cari" <?php if($navigasi=='pembicara'){echo 'class="active-navigation-navbar"';} ?>>Pembicara</a></li>
        <!-- <li><a href="#" <?php if($navigasi=='acara'){echo 'class="active-navigation-navbar"';} ?>>Acara</a></li> -->
        <li><a href="/pembicarakristen/tentang" <?php if($navigasi=='tentang'){echo 'class="active-navigation-navbar"';} ?>>Tentang</a></li>
        <li><a href="/pembicarakristen/faq" <?php if($navigasi=='faq'){echo 'class="active-navigation-navbar"';} ?>>FAQ</a></li>
        <li><a href="/pembicarakristen/kontak" <?php if($navigasi=='kontak'){echo 'class="active-navigation-navbar"';} ?>>Kontak</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>