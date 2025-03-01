<?php
    //mendefinisikan konstanta
    define("PHI", 3.14);
    define("DBNAME", "Inventori");
    define("DBSERVER", "Localhost");

    $jari = 8;
    $luas = PHI * pow($jari, 2);
    $keliling = 2 * PHI * $jari;

    echo "Luas Lingkaran dengan Jari " . $jari . " cm adalah " . $luas . " cm^2";
    echo "<br/>Keliling Lingkaran dengan Jari " . $jari . " cm adalah" . $keliling . " cm";

?>
<hr>
<?php
    echo "Nama database : " . DBNAME;
    echo "<br/>Nama server : " . DBSERVER;
?>