$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#container-pembicarakristen');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('#navbar-pembicarakristen').css('background-color', '#06b9f1');
       } else {
          $('#navbar-pembicarakristen').css('background-color', 'transparent');
       }
   });
});

$('.navbar-toggle').click(function(){
  $('#navbar-pembicarakristen').css('background-color', '#06b9f1');
});

// tema button selector 
$('.kkr').click(function(){
  $('.topik-title').html('KKR');
  $('.topik-desc').html('KKR (Kebaktian Kebangunan Rohani) merupakan ibadah yang membangun kerohanian jemaat melalui materi-materi yang berfokus pada dasar iman Kristen seperti penciptaan, kejatuhan, penebusan, penyempurnaan.');
});

$('.topikal').click(function(){
  $('.topik-title').html('Topikal');
  $('.topik-desc').html('Topikal adalah tema pemuridan/pembinaan rohani jemaat yang membahas  mengenai hal-hal khusus iman Kristen dan kontekstualisasinya dalam kehidupan sehari-hari.');
});

$('.psikologi').click(function(){
  $('.topik-title').html('Psikologi');
  $('.topik-desc').html('Tema ini membahas hal-hal psikologis dari sudut pandang Kristiani, seperti temperamen, sifat-sifat diri, psikologi remaja, dan karakter.');
});

$('.doktrinal').click(function(){
  $('.topik-title').html('Doktrinal');
  $('.topik-desc').html('Tema ini membahas pemahaman-pemahaman iman Kristen secara mendalam seperti Kristologi (doktrin Kristus), Soteriologi (doktrin Keselamatan), Bibliologi (doktrin Alkitab), doktrin Roh Kudus, Eskatologi (doktrin akhir zaman), Himnologi (doktrin pujian), dan lain-lain.');
});

$('.eksposisi').click(function(){
  $('.topik-title').html('Eksposisi');
  $('.topik-desc').html('Eksposisi adalah tema yang mengekspos suatu bagian dalam Alkitab detail dan mendalam; seperti konteks budaya dan gaya penulisan, sehingga jemaat dapat mengaplikasikannya dalam kehidupan saat ini.');
});

$('.mahasiswasiswa').click(function(){
  $('.topik-title').html('Mahasiswa/Siswa');
  $('.topik-desc').html('Tema yang membahas bagaimana integrasi iman dan ilmu untuk memperlengkapi kaum intelektual mahasiswa dan siswa.');
});

$('.lds').click(function(){
  $('.topik-title').html('LDS');
  $('.topik-desc').html('Love, Dating, dan Sex merupakan tema yang membahas hal-hal percintaan, pacaran, dan seks dari sudut pandang Alkitab.');
});

$('.training').click(function(){
  $('.topik-title').html('Training');
  $('.topik-desc').html('Materi-materi pelatihan bagi para pelayan di persekutuan, seperti training pemimpin pujian, pemusik, membuat bahan PA, memimpin kelompok kecil.');
});

$('.pa').click(function(){
  $('.topik-title').html('PA');
  $('.topik-desc').html('PA (Pendalaman Alkitab) merupakan pembahasan Alkitab yang dilakukan secara berkelompok.');
});