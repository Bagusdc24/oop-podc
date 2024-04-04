<?php 
//list produk kendaraan
//Mobil : Merek | warna, tenaga : 0 hp (RP. harga)

class kendaraan {
    public  $merek = "merek",
            $warna = "warna",
            $tenaga = 0,
            $harga = 0;
    
    public function getLabel() {
        $str = "{$this->merek} | {$this->warna}, Tenaga : $this->tenaga  | Rp. $this->harga Juta";
        return $str;
    }

}


$produk1 = new kendaraan();


$produk1-> merek = "Toyota";
$produk1-> warna = "Silver";
$produk1-> tenaga = 106;
$produk1-> harga = 250;

//$produk1->helo();

$produk2 = new kendaraan(); 

$produk2-> merek = "Honda";
$produk2-> warna = "Putih";
$produk2-> tenaga = 120;
$produk2-> harga = 300;

echo $produk1->getLabel();
echo"<hr>";

echo $produk2->getLabel();





?>
