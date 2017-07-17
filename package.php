<!DOCTYPE html>
<title>Discover Indonesia | Package</title>
<head>
    <?php include "layout/header_rel.php"; ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/package.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open-Sans">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <?php include "layout/navigation.php";?>
    
    <?php include "layout/sidebar.php";?>
    <div class="main-bar">
        <div id="paket">
    <button onclick="paket1()"><h4>Wisata Karimun Jawa</h4>     
    </button>
    <button onclick="paket2()"><h4>Wisata Yogyakarta</h4> 
    </button>
    <button onclick="paket3()"><h4>Wisata Borobudur</h4>
    </button>
    <button onclick="paket4()"><h4>Wisata Raja Ampat</h4>
    </button>
    <button onclick="paket5()"><h4>Wisata Pulau Komodo</h4>
    </button>
    <button onclick="paket6()"><h4>Wisata Danau Toba</h4>
    </button>
    
</div>
<div id="isi">
    <script>
        function paket1() {
        document.getElementById('demo').innerHTML = "Paket wisata Karimun Jawa termasuk akomodasi";
        }
    </script>
    <p id="demo"></p>
    
    <script>
        function paket2() {
        document.getElementById('demo').innerHTML = "Paket wisata Yogyakarta termasuk akomodasi dan transportasi";
        }
    </script>
    <p id="demo"></p>
    
    <script>
        function paket3() {
        document.getElementById('demo').innerHTML ="Paket wisata Borobudur termasuk Tour Guide";
        }
    </script>
    <p id="demo"></p>
    
    <script>
        function paket4() {
        document.getElementById('demo').innerHTML ="Paket wisata Raja Ampat termasuk paket spesial wisata bahari";
        }
    </script>
    <p id="demo"></p>
    
    <script>
        function paket5() {
        document.getElementById('demo').innerHTML ="Paket wisata Pulau Komodo termasuk akomodasi dan hotel";
        }
    </script>
    <p id="demo"></p>
    
    <script>
        function paket6() {
        document.getElementById('demo').innerHTML ="Paket wisata Danau Toba termasuk akomodasi, transportasai, dan sarapan";
        }
    </script>
    <p id="demo"></p>
</div>
    </div>
    <div style="clear:both;"></div>
    <?php include "layout/footer.php";?>
</body>
<html>