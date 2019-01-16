<?php  

require_once 'App/init.php';

$produk1 = new komik("Naruto", "Masashi Kishimoto","Shonen Jump", 150000, 100);
$produk2 = new game("Uncharted", "Neil Druckmann", "Sony Computer", 37000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();
