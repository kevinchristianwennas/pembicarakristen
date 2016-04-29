function changelanguage(lang){
    if (lang=='id') {
        document.getElementById('current-lang-img').src="assets/img/language/ind.png";
    }
    else if(lang=='en'){
        document.getElementById('current-lang-img').src="assets/img/language/en.png";
    }
    else{
        document.getElementById('current-lang-img').src="assets/img/language/chn.png";
    }
}

/* TOGGLE LANGUAGE OPTION */
$("#changelanguage").click(function (e) {
    e.stopPropagation();
    $('#dropdown-language').toggle();
});
$('body').click(function () {
    $('#dropdown-language').hide();
});

/* CHANGE LANGUAGE */
$("#lang-id").click(function (e) {
    $('#changelanguage').text('Indonesia');
    $('#changelanguage').prepend('<img class="lang-img" id="current-lang-img" src="assets/img/language/id.png">');
});

$("#lang-en").click(function (e) {
    $('#changelanguage').text('English');
    $('#changelanguage').prepend('<img class="lang-img" id="current-lang-img" src="assets/img/language/en.png">');
});

$("#lang-chn").click(function (e) {
    $('#changelanguage').text('Mandarin');
    $('#changelanguage').prepend('<img class="lang-img" id="current-lang-img" src="assets/img/language/chn.png">');
});


// GMAPS
var map = new GMaps({
    el: '#map',
    lat: -6.1542314,
    lng: 106.7972396,
    scrollwheel : false,
    click: function(e) {
        window.location.href = 'https://www.google.co.id/maps/search/ruko+mal+season+city+hirudo/@-6.1542314,106.7972396,18z?hl=id';
    }
});

map.addMarker({
    lat: -6.1542314,
    lng: 106.7972396,
    title: 'Hirudo Clinic',
    click: function(e) {
        window.location.href = 'https://www.google.co.id/maps/search/ruko+mal+season+city+hirudo/@-6.1542314,106.7972396,18z?hl=id';
    }
});