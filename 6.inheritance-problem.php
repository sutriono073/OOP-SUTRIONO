<?php 

class Produk {
     Public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;


     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = 0 ) {
     	  $this->judul = $judul;
     	  $this->penulis = $penulis;
     	  $this->penerbit = $penerbit;
     	  $this->harga = $harga;
     	  $this->jmlHalaman = $jmlHalaman;
     	  $this->waktuMain = $waktuMain;
     	  $this->tipe = $tipe;

     }


     public function getLabel() {
          return "$this->penulis, $this->penerbit";
     }



     public function getInfoLengkap() {
     	// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 20000) - 100 Halaman.
     	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

     	if( $this->tipe == "Komik" ) {
     		$str .= " - {$this->jmlHalaman} Halaman.";
     	} else if( $this->tipe == "Game" ) {
     		$str .= " ~ {$this->waktuMain} Jam.";
     	}

     	return $str;
     }

}


class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}





$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 20000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo"<br>";
echo $produk2->getInfoLengkap();


// Komik : Masashi Kishimoto, Shonen Jump
// Game : Neil Druckmann, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. 20000)

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 20000) - 100 Halaman.
// Game  : Unhcharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 jam.