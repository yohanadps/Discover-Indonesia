<!DOCTYPE html>
<title>Discover Indonesia | Index</title>
<head>
    
    <?php include "layout/header_rel.php";?>
    <link rel="stylesheet" type="text/css" href="css/home.css">
     <script src="js/map_home.js"></script>
    
</head>
<body>
    <?php include "layout/navigation.php";?>
    
    <div class="main-bar">
        
        <div id="gallery">

        	<a href="#" class="show">
        	<img src="img/festival_bintan.jpg" alt="Events" title=""height="360" rel="<h3>Events</h3>Bintan Triathlon"/>
        	</a>
        	<a href="#">
        		<img src="img/place_besakih.jpg" alt="Places" alt="Places" title="" height="360" rel="<h3>Places</h3>Pura Besakih"/>
        	</a>
        	<a href="#">
        		<img src="3.jpg" alt="Experiences" alt="Experiences" title=""  height="360" rel="<h3>Experiences</h3>"/>
        	</a>
        	<div class="caption">
        	    <div class="content"></div>
        	</div>
        </div>
        <div class="clear"></div>
       
        
        <h2>Top Experiences</h2>
        <div class="home-news">
            <img class="img-left" src="img/festival_bintan.jpg">
            <h3>BINTAN TRIATHLON</h3><hr>
            <p>Kompetisi kombinasi olahraga penuh tantangan, Bintan Triathlon 2015 kembali diselenggarakan di Pulau Bintan, Provinsi Kepulauan Riau pada 23 Mei 2015.
                    Gelaran berskala internasional ini memadukan olahraga renang, lari dan bersepeda dalam satu kegiatan lomba. 
                    Terbilang sangat menantang dan membutuhkan stamina lebih, peserta Bintan Triathlon akan disuguhi pemandangan menawan Pulau Bintan. <a href="Events/event_festival_bintan.php"> Read More</a></p>
            
        </div>
        <div class="home-news">
            <img class="img-right" src="img/festival_isen.jpg" >
            <h3 style="text-align:right;">FESTIVAL BUDAYA ISEN</h3><hr>
            <p>Ragam budaya dan etnis di Kalimantan Tengah setiap tahun diperkenalkan melalui Festival Budaya Isen Mulang (FBIM).
                    Tahun ini acara tersebut berlangsung pada 18-24 Mei di Kota Palangkaraya, bertepatan dengan hari ulang tahun kota tersebut pada 23 Mei. <a href="Events/event_festival_isen.php"> Read More</a></p>
        </div>
        <h2>Time To Book</h2>
        <div class="timetobook">
            <ul >
                <li><embed class="timetobook-thumbnail" src="https://www.youtube.com/embed/T5bomTRXTq8"></li>
                <li><embed class="timetobook-thumbnail" src="https://www.youtube.com/embed/E8EQSWidg6w"></li>
                <li><embed class="timetobook-thumbnail" src="https://www.youtube.com/embed/Ks6TeLkpFPA"></li>
                <li><embed class="timetobook-thumbnail" src="https://www.youtube.com/embed/u7g7V1-y_hs"></li>
                <li><embed class="timetobook-thumbnail" src="https://www.youtube.com/embed/ldHd8Z5ZV-c"></li>
                <li><embed src="https://www.youtube.com/embed/XW5Op06q2yA" class="timetobook-thumbnail"></li>
            </ul>
        </div>
       
        <h2>Trip Planner</h2>
        <div class="tripplan">
          <center>
              
              <div id="maps">
                <div id="googleMap">
                </div>
            </div>
            <!--
            <iframe
            style="width:90%; height:400px;"
              frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEs2Bv4FjfBTt7l_Zs4gFbPFdSQoati08
                &q=indonesia &zoom=5">
            </iframe>-->
            </center>
        </div>
        <br>
        <div>
            <div class="panel-50">
                <h2>Send us a Message</h2>
                <form method="POST" action="input/comment-input.php">
                <table class="message-table">
                    <tr>
                        <td>Name</td>
                        <td><input style="width:100%;" type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input style="width:100%;" type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td><textarea style="width:100%; height:100px;" name="message"></textarea></td>
                    </tr>
                </table>
                <button type="submit">Send</button>
                </form>
            </div>
            <div class="panel-50">
                <h2>Partnership</h2>
                <ul class="partnership">
                    <li ><img class="partnership-thumbnail" src="safasf"></li>
                    <li ><img class="partnership-thumbnail" src="safasf"></li>
                    <li ><img class="partnership-thumbnail" src="safasf"></li>
                    <li ><img class="partnership-thumbnail" src="safasf"></li>
                    <li ><img class="partnership-thumbnail" src="safasf"></li>
                    <li ><img class="partnership-thumbnail" src="safasf"></li>
                    <li ><img class="partnership-thumbnail" src="safasf"></li>
                    <li ><img class="partnership-thumbnail" src="safasf"></li>
                </ul>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
    <?php include "layout/footer.php"; ?>
</body>
<html>