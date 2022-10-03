<?php 

   //penyebutan file yang akan di tangkap
  require_once "IndukClass.php";

  //memberikan turunan class yang akan ditangkap oleh induk class
  class PersegiPanjang extends IndukClass {

       //inisialisasi variabel
      public $panjang;
      public $lebar;
      public $luas;
      public $keliling;
      public $keterangan;

       //turunan class fungsi
      public function __construct($panjang, $lebar) {
          $this->panjang = $panjang;
          $this->lebar = $lebar;
       }
  
       public function Detail() {
          echo "Persegi Panjang ";
       } 

       public function Luas() {
          $luas = $this->panjang * $this->lebar;
          return $luas;
       }

       public function Keliling() {
          $keliling = ($this->panjang + $this->lebar) * 2;
          return $keliling; 
       }

       public function Keterangan() {
          echo "Detail Panjang : " . $this->panjang;
          echo "  | Lebar : " . $this->lebar;
       }

       public function Cetak() {
         echo ' ' .$this->no; 
         echo '<td> ' .$this->Detail();  echo '</td>';
         echo '<td> ' .$this->Luas();  echo '</td>';
         echo '<td> ' .$this->Keliling();  echo '</td>';
         echo '<td> ' .$this->Keterangan();  echo '</td>';
     
 
       }

  }


?>
  