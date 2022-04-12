<?php
include_once("KonversiSuhu.php");
    if(isset($_POST["submit"])){
        $suhu=$_POST['suhu'];
        $konversi=$_POST['konversi'];
    if($konversi=="celcius ke fahrenhait"){
        $hasil= (9/5)*$suhu+32;
        echo "Hasil Konversi : $hasil ";
    }else if($konversi=="fahrenhait ke celcius"){
        $hasil=(5/9)*$suhu-32;
        echo "Hasil konversi: $hasil";
    }
    }