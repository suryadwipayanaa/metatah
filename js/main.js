// STARTED FUNCTION SCROL

$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.om').offset().top -150){
        $('.om').addClass('aktif');
    } else {
       $('.om').removeClass('aktif');
   }
})

// Deskripsi
$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.deskripsi').offset().top -150){
        $('.deskripsi').addClass('aktif1');
    } else {
       $('.deskripsi').removeClass('aktif1');
   }
})
// Deskripsi

// Orang1
$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.orang1').offset().top -250){
        $('.orang1').addClass('aktif2');
    } else {
       $('.orang1').removeClass('aktif2');
   }
})
// Orang1

// Orang2
$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.orang2').offset().top -250){
        $('.orang2').addClass('aktif3');
    } else {
       $('.orang2').removeClass('aktif3');
   }
})
// Orang2

// Orang3
$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.orang3').offset().top -250){
        $('.orang3').addClass('aktif4');
    } else {
       $('.orang3').removeClass('aktif4');
   }
})
// Orang3

// Orang4
$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.orang4').offset().top -250){
        $('.orang4').addClass('aktif5');
    } else {
       $('.orang4').removeClass('aktif5');
   }
})
// Orang4

// Detail
$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.detailAcara').offset().top -250){
        $('.detailAcara').addClass('aktif6');
    } else {
       $('.detailAcara').removeClass('aktif6');
   }
})
// Detail

// Menuju
$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.menujuAcara').offset().top -250){
        $('.menujuAcara').addClass('aktif7');
    } else {
       $('.menujuAcara').removeClass('aktif7');
   }
})
// Menuju

// Lokasi
$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.tLokasi').offset().top -250){
        $('.tLokasi').addClass('aktif8');
    } else {
       $('.tLokasi').removeClass('aktif8');
   }
})
// Lokasi

// Peta
$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('#map').offset().top -250){
        $('#map').addClass('aktif9');
    } else {
       $('#map').removeClass('aktif9');
   }
})
// Peta

$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.menuju').offset().top -250){
        $('.menuju .time').addClass('akti11');
    } else {
       $('.menuju .time').removeClass('akti11');
   }
})
// Peta

$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.ucapan').offset().top -250){
        $('.ucapan').addClass('akti12');
    } else {
       $('.ucapan').removeClass('akti12');
   }
})
// Peta

$(window).scroll(function(){
    const scroll4 = $(this).scrollTop();
    if(scroll4 > $('.komentar').offset().top -250){
        $('.komentar').addClass('akti13');
    } else {
       $('.komentar').removeClass('akti13');
   }
})
// Peta


$(window).on('load', function(){
    $('.box').addClass('pop-up')
})




const countDate = new Date('aug 31 2022 00:00:00').getTime();

function newYear() {
    const now = new Date().getTime();
    gap = countDate - now;

    const detik = 1000;
    const menit = detik * 60;
    const jam = menit * 60;
    const hari = jam * 24;

    const h = Math.floor(gap / (hari));
    const j = Math.floor((gap % (hari)) / (jam));
    const m = Math.floor((gap % (jam)) / (menit));
    const d = Math.floor((gap % (menit)) / (detik));

    document.getElementById('hari').innerText = h;
    document.getElementById('jam').innerText = j;
    document.getElementById('menit').innerText = m;
    document.getElementById('detik').innerText = d;
}

setInterval(function() {
    newYear();
}, 1000);


const audio = document.getElementById("musik");

function togglePlay() {
    audio.play();
    // terakhir = document.querySelector('.welcome');
    // terakhir.classList('hide');
}

$('.stopp').on('click', function(){
    audio.ontoggle()
})


// get data url javascript

function GetURLParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}

var nama = GetURLParameter('name');
var last = GetURLParameter('last');
document.getElementById("name").innerHTML = nama;
document.getElementById("last").innerHTML = last;
// get data url javascript

$('#buka').on('click', function(){
    $('.welcome').addClass('geser')
})

