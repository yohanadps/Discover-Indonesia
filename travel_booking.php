<!DOCTYPE html>
<title>Discover Indonesia | Travel Booking</title>
<head>
    <?php include "layout/header_rel.php"; ?>
    <link rel="stylesheet" type="text/css" href="css/travel_booking.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script>
$(document).ready(function(){
    $(".logopesawat").click(function(){
        $(".pesawat").show();
        $(".hotel").hide();
        $(".sewa_mobil").hide();
    });
});
</script>
    <script>
$(document).ready(function(){
    $(".logohotel").click(function(){
        $(".pesawat").hide();
        $(".hotel").show();
        $(".sewa_mobil").hide();
    });
});
</script>
<script>
$(document).ready(function(){
    $(".logosewa_mobil").click(function(){
        $(".pesawat").hide();
        $(".hotel").hide();
        $(".sewa_mobil").show();
    });
});
</script>
    
</head>
<body>
    <?php include "layout/navigation.php";?>
    <?php include "layout/sidebar.php";?>
    <div class="main-bar">
        <ul class="menu_besar">
            
                        <li class="logopesawat">Pesawat</li> 
                        <li class="logohotel">Hotel</li>
                        <li class="logosewa_mobil">Mobil</li>
        </ul>
    <div class="menu_kecil">
         <div class="pesawat">
             <form>
                    <input type="radio" name="rute"checked>
                            <a>Sekali Jalan</a>
                            <input type="radio" name="rute">
                            <a>Pulang Pergi</a><br>
                            <a>Dari</a>
                            <input type="text" name="dari" placeholder="Bandara/Kota">
                            <a>Ke</a>
                            <input type="text" name="ke" placeholder="Bandara/Kota"><br>
                            <a>Pergi</a>
                            <input type="date" name="pergi" placeholder="DD/MM/YYYY">
                            <a>Dewasa</a>
                            <select>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                            <a>Anak</a>
                            <select>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                </select>
                            <a>Bayi</a>
                             <select>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                            <br>
                            <input type="checkbox" name="opsi">
                            <a>Tanggal keberangkatan fleksibel</a><br>
                            <button type="button">Cari</button>
                    </form>
                </div>
        <div class="hotel" style="display:none;">
                    <form>
                            <a>Lokasi / Hotel</a>
                            <input type="text" name="hotel"><br>
                            <a>Check In</a>
                            <input type="date" name="in" placeholder="DD/MM/YYYY">
                            <a>Check Out</a>
                            <input type="date" name="out" placeholder="DD/MM/YYYY">
                            <a>Kamar</a>
                            <select>
                                <option>1 kamar</option>
                                <option>2 kamar</option>
                                <option>3 kamar</option>
                                <option>4 kamar</option>
                                <option>5 kamar</option>
                                <option>6 kamar</option>
                                <option>7 kamar</option>
                                <option>8 kamar</option>
                                <option>9 kamar</option>
                                <option>10 kamar</option>
                            </select>
                            <a>Dewasa</a>
                            <select>
                                <option>1 dewasa</option>
                                <option>2 dewasa</option>
                                <option>3 dewasa</option>
                                <option>4 dewasa</option>
                                <option>5 dewasa</option>
                                <option>6 dewasa</option>
                                <option>7 dewasa</option>
                                <option>8 dewasa</option>
                                <option>9 dewasa</option>
                                <option>10 dewasa</option>
                            </select>
                            <br>
                            <button type="button">Cari</button>
                    </form>
        </div>
        <div class="sewa_mobil" style="display:none;">
                    <form>
                            <a>Lokasi Penjemputan</a>
                            <input type="text" name="lokasi" placeholder="Kota"><br>
                            <a>Waktu Jemput</a>
                            <input type="date" name="jemput" placeholder="DD/MM/YYYY">
                            <input type="time" name="jam_jemput"><br>
                            <a>Waktu Selesai</a>
                            <input type="date" name="selesai" placeholder="DD/MM/YYYY">
                            <input type="time" name="jam_selesai"><br>
                            <a>Jumlah Mobil</a>
                            <select> 
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <br>
                            <button type="button">Cari</button>
                        </form>
        </div>
    </div>
    <div class="tampil_pesawat">
        <?php

include('connection.php');

$sql = "SELECT id, nama, kota FROM bandara";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nama: " . $row["nama"]." -Kota:".$row["kota"]." <br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
    </div>
    </div>
    <div style="clear:both;"></div>
    <?php include "layout/footer.php"?>
</body>
<html>