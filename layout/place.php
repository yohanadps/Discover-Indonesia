<!DOCTYPE html>
<html>
    <head>
        <!-- Semua link di sini -->
        <?php include "layout/header_rel.php"; ?>
        <title>Discover Indonesia | Places</title>
        <link type="text/css" rel="stylesheet" href="../css/place.css"/>
        <script src="../js/maps_place.js"></script>
    </head>
    <body>
        <?php include "layout/navigation.php"; ?>
        <?php include "layout/sidebar.php"; ?>
        <!-- Isi dari halaman web ini -->
        <div class="main-bar">
            <div id="gallery">
                <a href="Places/places_besakih.php" class="show">
                    <img src="../img/place_besakih.jpg" width="580" height="360" rel="<h3>Pura Besakih</h3>Terletak di bagian barat lereng Gunung Agung dan disebut sebagai pura Hindu terbesar di Bali">
                </a>
                <a href="Places/places_borobudur.php" >
                    <img src="../img/place_borobudur.jpg" width="580" height="360" rel="<h3>Candi Borobudur</h3>Inilah candi Buddha terbesar di dunia yang berdiri megah ibarat puzzle raksasa">
                </a>
                <a href="Places/places_bunaken.php" >
                    <img src="../img/place_bunaken.jpg" width="580" height="360" rel="<h3>Taman Laut Bunaken</h3>Pernahkah Anda  membayangkan menjadi putri duyung?">
                </a>
                <a href="Places/places_gili_trawangan.php" >
                    <img src="../img/place_gilitrawangan.jpg" title="" width="580" height="360" rel="<h3>Gili Trawangan</h3>Mungkin Anda sudah kali keberapa menapakkan kaki dan berselancar wisata di Pulau Bali">
                </a>
                <a href="Places/places_gunung_rinjani.php" >
                    <img src="../img/place_gunung_rinjani.jpg" title="" width="580" height="360" rel="<h3>Taman Nasional Gunung Rinjani</h3>Gunung Rinjani yang megah, gunung api besar yang menjulang tinggi di kawasan Pulau Lombok">
                </a>
                <a href="Places/places_ijen.php" >
                    <img src="../img/place_ijen.jpg" width="580" height="360" rel="<h3>Kawah Ijen</h3>Pesona keindahan alam Indonesia yang luar biasa dan telah memukau banyak wisatawan dari berbagai negara">
                </a>
                <a href="Places/places_kep_seribu.php" >
                    <img src="../img/place_kepri.jpg" width="580" height="360" rel="<h3>Taman Nasional Laut Kepulauan Seribu</h3>Taman Nasional Laut Kepulauan Seribu, gugusan kepulauan di Teluk Jakarta">
                </a>
                <a href="Places/places_ubud.php" >
                    <img src="../img/place_ubud.jpg" width="580" height="360" rel="<h3>Ubud</h3>Ubud terletak di Kabupaten Gianyar Bali, tempat ini menawarkan berbagai keindahan alam, pentas seni dan budaya, serta hasil kerajinan masyarakat Bali yang eksotis">
                </a>
                <a href="Places/places_malioboro.php" >
                    <img src="../img/place_malioboro.jpg" width="580" height="360" rel="<h3>Malioboro</h3>Menutup perjalanan darat dari arah Pulau Dewata, Bali, ataupun membuka lembaran petualangan pertama dari sisi barat Pulau Jawa">
                </a>
                <a href="Places/places_monas.php" >
                    <img src="../img/place_monas.jpg" width="580" height="360" rel="<h3>Tugu Monas</h3>Inilah monumen yang telah menjadi ikonnya kota Jakarta sekaligus juga pengenang perjuangan rakyat Indonesia dalam merebut kemerdekaan">
                </a>
                <div class="caption">
                    <div class="content">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="clear">
            </div>
            <div id="maps">
                <div id="googleMap">
                </div>
            </div>
        </div>
        <!-- Footer web ini autoplay-->
        <div style="clear:both;"></div>
        <?php include "layout/footer.php"?>
    </body>
</html>