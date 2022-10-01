<?php  

    class Tabel {
        public $nama;
        public $nip;
        public $agama;
        public $jabatan;
        public $status;

        //memberikan inisialisasi construct untuk pecah ke beberapa fungsi
        public function __construct($nama, $nip, $agama, $jabatan, $status) {
            $this->nama = $nama;
            $this->nip = $nip;
            $this->agama = $agama;
            $this->jabatan = $jabatan;
            $this->status = $status;
        
        }

        //fungsi gaji dengan struktur kendali dalam menentukan gaji dan jabatannya
        public function gaji($jabatan) {
            $this->jabatan = $jabatan;
            switch($jabatan) {
                case 'Manager' : $gaji = 15000000;
                break;
                case 'Asistant Manager' : $gaji = 10000000; 
                break;
                case 'Head Of Division' : $gaji = 7000000;
                break;
                case 'Staff' : $gaji = 4000000;
                break;
                default: $gaji = '';

            }
            return $gaji;
        }

        //fungsi menentukan gaji tunjangan jabatan
        public function tJabatan() {
            $dJabatan = $this->gaji($this->jabatan) * 0.2;
            return $dJabatan;

        }

         //fungsi menentukan gaji tunjangan keluarga yang ditentukan oleh status
        public function tKeluarga($status) {
            $this->status = $status;
            $dKeluarga = ($this->status == 'Menikah') ? 0.1 * $this->gaji($this->jabatan) : 0;
            return $dKeluarga;

        }

         //fungsi menentukan gaji kotor yang dikumpulkan dari gaji tjabatan + tkeluarga + gaji
        public function gKotor() {
            $dKotor = $this->gaji($this->jabatan) + $this->tJabatan() + $this->tKeluarga($this->status);
            return $dKotor;

        }

         //fungsi menentukan zakat yang disimulasikan dengan rumus yang sesuai data status agama
        public function zakat($agama) { 
            $this->agama = $agama;
            $dZakat = ($this->agama == 'Islam' && $this->gKotor() >= 6000000) ? 0.25 * $this->gaji($this->jabatan) : 0;
            return $dZakat;

        }

         //fungsi menentukan tatal akhir keseluruhan sesuai fungsi
        public function gTotal() {
            $dTotal = $this->gKotor() - $this->zakat($this->agama);
            return $dTotal;

        }


         //mencetak semua atribut yang ada dengan mengirimkan kembali ke ClassPegawai.php
        public function cetak() {
            echo ' ' .$this->nama; 
            echo '<td> ' .$this->nip;  echo '</td>';
            echo '<td> ' .$this->agama;  echo '</td>';
            echo '<td> ' .$this->jabatan;  echo '</td>';
            echo '<td> ' .$this->status;  echo '</td>';
            echo '<td> '. 'Rp ' .$this->gaji($this->jabatan);  echo '</td>';
            echo '<td> '. 'Rp ' .$this->tJabatan();  echo '</td>';
            echo '<td> '. 'Rp ' .$this->tKeluarga($this->status);  echo '</td>';
            echo '<td> '. 'Rp ' .$this->gKotor();  echo '</td>';
            echo '<td> '. 'Rp ' .$this->zakat($this->agama);  echo '</td>';
            echo '<td> '. 'Rp ' .$this->gTotal();  echo '</td>';
         
        }






    }

        ?>