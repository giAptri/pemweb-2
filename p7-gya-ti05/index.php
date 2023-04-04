<?php

    class mobil{
        public  $nama,
                $merk,
                $warna;


        public function tambahkecepatan(){

        }


        public function kurangkecepatan(){

        }

    }

  class Produk {
        public  $nama = 'ini nama',
                $jenis = 'ini jenis',
                $harga = 99999;
                const PHI = 3.14;
        


        public function  __construct($nama, $jenis, $harga){
           $this->nama = $nama;
           $this->jenis = $jenis;
           $this->harga = $harga;
        }




        public function Harga(){
            return self::PHI ;
        }
    
  }

    // $produk1 = new Produk();
    // $produk1->nama =  "KAOS";
    // $produk1->jenis =  "BAJU";
    // var_dump($produk);


    $produk2 = new Produk("BAJU HITAM POLOS", "KAOS", 20000);
    echo "produk 2 :    $produk2->nama, $produk2->jenis";
    echo "<br>";
    echo "harga : ".    $produk2->harga();

$produk3 = new produk("HOODIE", "JAKET", 180000);
echo "<br>";
echo "<br>";

echo "produk3 : $produk3->nama, $produk3->jenis";
echo"<br>";
echo "harga : " . $produk3->harga();
  

?>