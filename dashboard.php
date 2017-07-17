<!DOCTYPE html>
<head>

  <title>Discover Indonesia | Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <?php include "layout/header_rel.php"; ?>
</head>
<body>
    <?php include "layout/navigation.php";?>
    <?php session_start(); ?>
    <?php include "layout/koneksi.php"; ?>
    <?php include "layout/sidebar.php";?>

    <?php
   // $conn = mysql_connect("10.151.64.105", "pweb", "pweb") or die('Error connecting to mysql');
    //mysql_select_db("pweb3_5113100169");

    ?>
    <div class="main-bar">
        <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
        <div class='panel-50'>
          <h2>Pesan terbaru</h2>
          <?php
       // $result = mysql_connect("10.151.64.105", "pweb", "pweb") or die('Error connecting to mysql');
            //  mysql_select_db("pweb3_5113100169");
                $que="SELECT* from pesan";
                $pesan=$conn->query($que)->fetchAll();
                if($pesan)
                {
                  foreach((array)$pesan as $row)
                  {
                    echo "
                    <div class='pesan'>
                      <div class='pesan-title'>".$row['email']."</div>
                      <p>".$row['isi_pesan']."</p>
                    </div>";
                  }
                }
          ?>
        </div>
        <div class='panel-50'>
          <h2>Trip Terbaru</h2>
          <?php
          $t="SELECT* from trip";
          $trip=$conn->query($t)->fetchAll();
          if($trip)
          {
            foreach((array)$trip as $row)
            {
              echo "
              <div class='pesan'>
              <div class='pesan-title'>".$row['email']."</div>
              <p>".$row['nama']."</p>
              </div>
              ";
            }
        }
          ?>
        </div>
        <div class='panel-50'>
          <h2>Cari Hotel Terbaru</h2>
         <?php
          $t="SELECT* from hotel";
          $trip=$conn->query($t)->fetchAll();
          if($trip)
          {
            foreach((array)$trip as $row)
            {
              echo "
              <div class='pesan'>
              <p>".$row['nama']."-".$row['kota']."<br>Rp".$row['harga'].", tanggal: ".$row['tgl_cek_in']."</p>
              </div>
              ";
            }
        }
          ?>
         

         </div>
        <div class='panel-50'>
          <h2>Cari Pesawat</h2>
          <?php
          $t="SELECT* from maskapai";
          $trip=$conn->query($t)->fetchAll();
          if($trip)
          {
            foreach((array)$trip as $row)
            {
              echo "
              <div class='pesan'>
              <p>".$row['nama_maskapai']."<br>".$row['bandara_asal']."-".$row['bandara_tujuan']."<br>".$row['berangkat']."</p>
              </div>
              ";
            }
        }
          ?>
         </div>
    </div>
    <div style="clear:both;"></div>
    <?php include "layout/footer.php"; ?>
</body>
<html>