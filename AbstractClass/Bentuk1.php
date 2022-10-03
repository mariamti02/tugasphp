<?php 

  //penyebutan file yang akan di tangkap
  require_once "IndukClass.php";


  //memberikan turunan class yang akan ditangkap oleh induk class
  class Lingkaran extends IndukClass {

       //inisialisasi variabel
      public $jari;
      public $luas;
      public $keliling;
      public $keterangan;

      //turunan class fungsi
      public function __construct($jari) {
          $this->jari = $jari;
       }
  
       public function Detail() {
          echo "Lingkaran ";
       } 

       public function Luas() {
          $luas = $this->jari * $this->jari * 3.14;
          return $luas;
       }

       public function Keliling() {
          $keliling = $this->jari * 2 * 3.14;
          return $keliling; 
       }

       public function Keterangan() {
          echo "Detail Jari-Jari : " . $this->jari;
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
  