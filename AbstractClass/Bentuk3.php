<?php 

 //penyebutan file yang akan di tangkap
  require_once "IndukClass.php";

  //memberikan turunan class yang akan ditangkap oleh induk class
  class Segitiga extends IndukClass {

       //inisialisasi variabel
      public $alas;
      public $tinggi;
      public $sisimiring;
      public $luas;
      public $keliling;
      public $keterangan;

       //turunan class fungsi
      public function __construct($alas, $tinggi) {
          $this->alas = $alas;
          $this->tinggi = $tinggi;
       }

      
       public function Detail() {
          echo "Segitiga ";
       } 

       public function Luas() {
          $luas = $this->alas * $this->tinggi * 0.5;
          return $luas;
       }

       public function Sisimiring() {
          $sisimiring = ($this->alas * $this->alas) + ($this->tinggi * $this->tinggi);
          return $sisimiring;
       }

       public function Keliling() {
          $keliling = $this->alas + $this->tinggi + $this->Sisimiring();
          return $keliling; 
       }

       public function Keterangan() {
          echo "Detail Alas : " . $this->alas;
          echo "  | Tinggi : " . $this->tinggi ;
          echo "  | Sisimiring : " . $this->Sisimiring();
       }

       public function Cetak() {
         echo ' ' .$this->no; 
         echo '<td> ' .$this->Detail();  echo '</td>';
         echo '<td> ' .$this->Luas();  echo '</td>';
         echo '<td> ' .$this->sisiMiring();  echo '</td>';
         echo '<td> ' .$this->Keliling();  echo '</td>';
         echo '<td> ' .$this->Keterangan();  echo '</td>';
     
 
       }

  }


?>
  