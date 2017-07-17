<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/header_rel.php";?>
        <!-- Semua link di sini -->
        <title>Discover Indonesia | Trip Planner</title>
        <link type="text/css" rel="stylesheet" href="css/trip_planner.css"/>
        <?php include "layout/koneksi.php"; ?>
    </head>
    <body>
        <?php include "layout/navigation.php";?> 
        <?php include "layout/sidebar.php";?>
        <div class="main-bar">
            <div id="judul">
                <h1>Trip Planner</h1>
            </div>
            <div id="form">
                <form action="input/create_trip_planner.php" method="post">
                    <input id="id" type="text" name="id" placeholder="Id Trip Anda" required>
                    <br>
                    <input id="nama" type="text" name="nama" placeholder="Nama Trip Anda" required>
                    <br>
                    <input id="email" type="email" name="email" placeholder="Email Anda" required>
                    <br>
                    <input id="id" type="text" name="id_wisata1" placeholder="Id Wisata1" required>
                    <select id="wisata1" name="wisata1">
                        <option>Pilih Tempat Wisata</option>
                        <option value="Festival Bintan">Festival Bintan</option>
                        <option value="Festival Isen">Festival Isen</option>
                        <option value="Festival Jailolo">Festival Jailolo</option>
                        <option value="Festival JFFF">Festival  JFFF</option>
                        <option value="Festival Layang">Festival Layang</option>
                        <option value="Festival Pangaruyung">Festival Pangaruyung</option>
                        <option value="Festival Pasola">Festival Pasola</option>
                        <option value="Pura Besakih">Pura Besakih</option>
                        <option value="Candi Borobudur">Candi Borobudur</option>
                        <option value="Taman Laut Bunaken">Taman Laut Bunaken</option>
                        <option value="Gili Trawangan">Gili Trawangan</option>
                        <option value="Taman Nasional Gunung Rinjani">Taman Nasional Gunung Rinjani</option>
                        <option value="Kawah Ijen">Kawah Ijen</option>
                        <option value="Taman Laut Kepulauan Seribu">Taman Laut Kepulauan Seribu</option>
                        <option value="Malioboro">Malioboro</option>
                        <option value="Tugu Monas">Tugu Monas</option>
                        <option value="Ubud">Ubud</option>
                    </select>
                    <br>
                    <input id="id" type="text" name="id_wisata2" placeholder="Id Wisata2" required>
                    <select id="wisata2" name="wisata2">
                        <option>Pilih Tempat Wisata</option>
                        <option value="Festival Bintan">Festival Bintan</option>
                        <option value="Festival Isen">Festival Isen</option>
                        <option value="Festival Jailolo">Festival Jailolo</option>
                        <option value="Festival JFFF">Festival  JFFF</option>
                        <option value="Festival Layang">Festival Layang</option>
                        <option value="Festival Pangaruyung">Festival Pangaruyung</option>
                        <option value="Festival Pasola">Festival Pasola</option>
                        <option value="Pura Besakih">Pura Besakih</option>
                        <option value="Candi Borobudur">Candi Borobudur</option>
                        <option value="Taman Laut Bunaken">Taman Laut Bunaken</option>
                        <option value="Gili Trawangan">Gili Trawangan</option>
                        <option value="Taman Nasional Gunung Rinjani">Taman Nasional Gunung Rinjani</option>
                        <option value="Kawah Ijen">Kawah Ijen</option>
                        <option value="Taman Laut Kepulauan Seribu">Taman Laut Kepulauan Seribu</option>
                        <option value="Malioboro">Malioboro</option>
                        <option value="Tugu Monas">Tugu Monas</option>
                        <option value="Ubud">Ubud</option>
                    </select>
                    <br>
                    <input id="id" type="text" name="id_wisata3" placeholder="Id Wisata3" required>
                    <select id="wisata3" name="wisata3">
                        <option>Pilih Tempat Wisata</option>
                        <option value="Festival Bintan">Festival Bintan</option>
                        <option value="Festival Isen">Festival Isen</option>
                        <option value="Festival Jailolo">Festival Jailolo</option>
                        <option value="Festival JFFF">Festival  JFFF</option>
                        <option value="Festival Layang">Festival Layang</option>
                        <option value="Festival Pangaruyung">Festival Pangaruyung</option>
                        <option value="Festival Pasola">Festival Pasola</option>
                        <option value="Pura Besakih">Pura Besakih</option>
                        <option value="Candi Borobudur">Candi Borobudur</option>
                        <option value="Taman Laut Bunaken">Taman Laut Bunaken</option>
                        <option value="Gili Trawangan">Gili Trawangan</option>
                        <option value="Taman Nasional Gunung Rinjani">Taman Nasional Gunung Rinjani</option>
                        <option value="Kawah Ijen">Kawah Ijen</option>
                        <option value="Taman Laut Kepulauan Seribu">Taman Laut Kepulauan Seribu</option>
                        <option value="Malioboro">Malioboro</option>
                        <option value="Tugu Monas">Tugu Monas</option>
                        <option value="Ubud">Ubud</option>
                    </select>
                    <br>
                    <br>
                    <input id="submit" type="submit" value="Simpan">
                </form>
            </div>
            <div id="plan">
                <h2>Your Trip Plan</h2>
                <!--<?php 
                //$id=$_POST['id'];
                //$nama=$_POST['nama'];
                //$id_wisata1 = $_POST['id_wisata1'];
                //$t="SELECT * from wisata where id=$id_wisata1";
                $trip=$conn->query($t)->fetchAll();
                //if($trip)
                {
                    //foreach((array)$trip as $row)
                    {
                      /*echo "
                      <div class='pesan'>
                      <p>".$row['nama']."</p>
                      </div>
                      ";
                    }
                }*/
                ?>-->
            </div>
        </div>
        <!-- Footer web ini autoplay-->
        <div style="clear:both;"></div>
        <?php include "layout/footer.php"; ?>
    </body>
</html>