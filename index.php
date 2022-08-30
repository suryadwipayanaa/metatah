<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>Tantri Familly</title>
<!-- CSS only -->
<link rel="icon" href="./image/party.jpg">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="music">
        <audio controls id="musik">
            <source class="lagu" src="BALI WORLD MUSIC, GUS TEJA, FEEL WITH LOVE.mp3" type="audio/mpeg">
        </audio>
    </div>

    <div class="welcome">
        <div class="box">
        <h3>Undangan Mepandes</h3>
        <h1>Tantra Family</h1>
        <p>Kepada <br>Bapak/Ibu/Saudara/i</p>
            <div class="box">
                <h5 id="name" style="margin-right:5px ;"><?php $_GET['name'] ?></h5>
            </div>
           <a href="#invited" id="buka" onclick="togglePlay()">Buka Undangan</a>
        </div>
    </div>

    <div class="pondasi" id="invited">
    <div class="stop">
        <i class="bi bi-pause-fill"></i>
    </div>
        <header>
            <div class="benner">
               <div class="bunter">
                <img class="apa" src="./image/bunter.png">
               </div>
            </div>
        </header>
        <content>
            <div class="containerr" style="padding:20px;">
                <div class="title">
                    <h1 class="om">Om Swastyastu</h1>
                </div>
                <div class="deskripsi">
                    <p class="tuhan">
                        Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa kami bermaksud mengundang Bapak/Ibu/Saudara/i pada Upacara Manusa Yadnya Mepandes (Potong Gigi) Putra & Putri kami.
                    </p>
                </div>
                <div class="orang orang1">
                    <h5>Putu Ayu Eka Febriana</h5>
                    <h5>Agus Chandra Aryadi</h5>
                    <p>Putra Putri Dari Putu Gede Diatmika & Ni Wayan Muterini</p>
                </div>
                <div class="orang orang2">
                    <h5>Ni Putu Arix Nirmala, S.E., M.M</h5>
                    <h5>Agus Mega Krisna, S.H</h5>
                    <h5>Komang Sudana Krisna</h5>
                    <p>Putra Putri Dari I Made Parwata & Pande Kadek Sriani</p>
                </div>
                <div class="orang orang3">
                    <h5>Ni Putu Eka Ari Adnyani</h5>
                    <p>Putra Putri Dari Ni Wayan Manis & I Nyoman Seri Adnya (Almarhum)</p>
                </div>
                <div class="orang orang4">
                    <h5>Ni Putu Intan Astriani</h5>
                    <h5>Ayu Dwi Nandiani</h5>
                    <p>Putra Putri Dari I Ketut Astratapa & Ni Made Suastiani</p>
                </div>
            </div>
            <div class="containerr">
                <div class="detailAcara">
                    <div class="bungaAtas">
                        <img src="./image/bungaAtas.png">
                    </div>
                    <div class="bungaBawah">
                        <img src="./image/bungaBawah.png">
                    </div>
                    <div class="titleAcara">
                        <h1>Detail Acara</h1>
                    </div>
                    <div class="detail">
                        <h5>Mepandes</h5>
                        <i class="bi bi-calendar"></i>
                        <p>Rabu, 31 Agustus 2022 <br>
                            10.00 s/d 20.00 Wita</p>
                        <i class="bi bi-map-fill"></i>
                       <p>
                        Bertempat di <br>
                        Banjar Tusan, Desa Blahbatuh (Disebelah Pohon Bamboo)
                       </p>
                    </div>
                    <div class="menuju">
                        <h5 class="menujuAcara">Menuju Acara</h5>
                        <div class="row time">
                            <div class="col">
                                <div id="hari">0</div>
                                <p>Hari</p>
                            </div>
                            <div class="col">
                                <div id="jam">0</div>
                                <p>Jam</p>
                            </div>
                            <div class="col">
                                <div id="menit">0</div>
                                <p>Menit</p>
                            </div>
                            <div class="col">
                                <div id="detik">0</div>
                                <p>Detik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </content>
        <main>
            <div class="lokasi">
                <h5 class="tLokasi">Lokasi Acara</h5>
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63124.72903918063!2d115.3144263!3d-8.567552550000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd215d9fef56b95%3A0x1c00c5eb6016bef0!2sKec.%20Blahbatuh%2C%20Kabupaten%20Gianyar%2C%20Bali%2080581!5e0!3m2!1sid!2sid!4v1661688727086!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <a href="https://maps.app.goo.gl/CJggyKnaBD2P9BKB7" style="z-index: 999999;">Map Lokasi</a>
            </div>
        </main>
        <div class="ucapan">
            <h5>Konfirmasi Kehadiran</h5>
            <form method="POST" action="#" id="inputform" class="formuser">
            <input type="text" name="name" id="nama" placeholder="masukan nama">
            <br>
            <input type="text" name="komentar" id="komentar" placeholder="masukan pesan dan doa">
            <select name="hadir" id="pilih">
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
                <option value="Ragu Ragu">Ragu Ragu</option>
              </select>
             <button type="submit" name="submit" id="submit">Kirim Ucapan</button>
            </form>
        </div>
        <div class="sukses">
            <p>Komentar Ditambahkan</p>
        </div>
        <div class="komentar">
          <!-- komentar disini -->
        </div>
        <div class="las">
            <div class="last" style="width: 90%; margin:60px auto;">
                <p class="text-center">Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan do'a restu kepada kami. Atas kehadiran dan do'a restu Bapak/Ibu/Saudara/i kami ucapkan terima kasih. Kami Yang Berbahagia</p>
                <h5>Terimakasih Kami Ucapkan Dari Sekeluarga</h5>
                <h4 class="mt-3">Tantra Family</h4>
            </div>
        </div>
    </div>
    <footer>
        <strong>Sunthey Project</strong>
        </footer>
<script src="./js/main.js"></script>  
<script>
 $('.komentar').load('tampil.php');
        $(document).ready(function(){
            $('#submit').click(function(e){
                e.preventDefault()
                const data = $('.formuser').serialize();
                $.ajax({
                    type:'POST',
                    url:'master.php?menu=weding&act=simpan',
                    data:data,
                    success:function(e){
                        $('.komentar').show('tampil.php');
                        $('.sukses p').addClass('show')
                    },
                });
            });
        });
</script>
</body>
</html>