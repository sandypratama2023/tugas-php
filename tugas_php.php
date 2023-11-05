<?php
// Variabel
$nama = "SandyHafizulPratama";
$umur = 20;

// Echo / Print
echo "Halo, nama saya " . $nama . ". Saya berumur " . $umur . " tahun.";
print "Halo, nama saya " . $nama . ". Saya berumur " . $umur . " tahun.";

// Tipe Data
$angka = 10; 
$desimal = 3.14; 
$teks = "Halo"; 
$benar = true; 
$kosong = null; 

// String
$nama_depan = "Sandy";
$nama_belakang = "Pratama";
$nama_lengkap = $nama_depan . " " . $nama_belakang; // Menggabungkan string

// Angka
$angka1 = 200;
$angka2 = 5;

// Operasi Matematika
$penjumlahan = $angka1 + $angka2;
$pengurangan = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;
$sisa_bagi = $angka1 % $angka2;

// Konstanta
define("PI", 3.14);
echo "Nilai PI adalah: " . PI;

// Konstanta Magis
echo "Nama file ini adalah: " . _FILE_;

// Operator
$a = 10;
$b = 5;

if ($a < $b) {
    echo "a lebih kecil dari b";
} elseif ($a > $b) {
    echo "a lebih besar dari b";
} else {
    echo "a sama dengan b";
}

// Switch
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah Senin";
        break;
    case "Selasa":
        echo "Hari ini adalah Selasa";
        break;
    default:
        echo "Hari ini bukan Senin atau Selasa";
}

// Perulangan
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}

$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}

// Fungsi
function tambah($a, $b) {
    return $a + $b;
}

echo "Hasil penjumlahan: " . tambah(5, 3);

// Array
$buah = array("Apel", "Jeruk", "Mangga");
echo "Buah pertama: " . $buah[0];

// Superglobals
echo "Alamat IP Anda: " . $_SERVER['REMOTE_ADDR'];

?>