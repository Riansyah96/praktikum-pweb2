<?php
    // $ar_buah = array("apel", "mangga", "pisang");
    $ar_buah = ["Pepaya", "Mangga", "Pisang","Jambu"];
    echo $ar_buah[1];
    //menampilkan jumlah buah
    echo "<br>Jumlah Buah : " . count($ar_buah);
    //menampilkan seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>". $buah . "</li>";
    } echo "</ol>";

    //menambahkan buah
    $ar_buah[] = "Apel";

    //menghapus index ke 1
    unset($ar_buah[1]);

    //mengubah index ke 2
    $ar_buah[1] = "Durian";

    //menampilkan seluruh buah dengan indexnya
    echo "<br><ul>";
    foreach ($ar_buah as $Buah => $v) {
    echo "<li>Buah Index -" .$Buah. " adalah " .$v."</li>";
    } echo "</ul>";

    //menampilkan seluruh buah
    echo "<ol>";
    sort ($ar_buah);
    foreach ($ar_buah as $buah) {
        echo "<li>". $buah . "</li>";
    } echo "</ol>";

    //menambahkan buah
    $ar_buah[] = "Apel";

    //menghapus index ke 1
    unset($ar_buah[1]);

    //mengubah index ke 2
    $ar_buah[1] = "Durian";

    //menampilkan seluruh buah dengan indexnya
    echo "<br><ul>";
    foreach ($ar_buah as $Buah => $v) {
        echo "<li>Buah Index -" .$Buah. " adalah " .$v."</li>";
    } echo "</ul>";
?>