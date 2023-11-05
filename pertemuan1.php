<?php 
    $nama = "Sandy";

    if ( !empty($nama) ){
        //ini kondisi pertama//
        cetaknama("fizul");

    } else {
         //ini kondisi lainnya//
        for($i=0; $i<5; $i++){
            cetaknama("tama");
        }
    }

    function cetaknama($nama){
        echo "hallo ".$nama.".....";
    }

    // luas_ruangan
    
    $panjang = 15; 
    $lebar = 10; 
    $luas = $panjang * $lebar;

    echo "Luas ruangan adalah: " . $luas;

?>