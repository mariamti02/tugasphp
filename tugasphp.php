
 <?php 

//isi array yang dijabarkan nanti
$obj1 = ['nim' => 12345, 'nama' => 'Jae Nuri', 'nilai' => '90'];
$obj2 = ['nim' => 23451, 'nama' => 'Dwianika', 'nilai' => '98'];
$obj3 = ['nim' => 34512, 'nama' => 'Mariam', 'nilai' => '80'];
$obj4 = ['nim' => 45123, 'nama' => 'Adam', 'nilai' => '25'];
$obj5 = ['nim' => 51234, 'nama' => 'Idroi', 'nilai' => '10'];
$obj6 = ['nim' => 43215, 'nama' => 'Nuh', 'nilai' => '60'];
$obj7 = ['nim' => 32154, 'nama' => 'Hud', 'nilai' => '50'];
$obj8 = ['nim' => 21543, 'nama' => 'Shaleh', 'nilai' => '30'];
$obj9 = ['nim' => 15432, 'nama' => 'Ibrohim', 'nilai' => '10'];
$obj10 = ['nim' => 54321, 'nama' => 'Lut', 'nilai' => '40'];


//memberikan variabel yang akan dibentuk dengan array
$ar_predikat = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$siswa = [$obj1, $obj2, $obj3, $obj4, $obj5, $obj6, $obj7, $obj8, $obj9, $obj10];
           

//struktur inisialisasi foot
$jmlh_tabel = count($siswa);
$jmlh_nilai = array_column($siswa, 'nilai');
$max_range = max($jmlh_nilai);
$min_range = min($jmlh_nilai);

               
$jmlh_akhir = array_sum($jmlh_nilai); 
$averange = $jmlh_akhir / $jmlh_tabel;

$keterangan = [
   'Jumlah Siswa' => $jmlh_tabel,
   'Predikat Tertinggi' => $max_range,
   'Predikat Terendah' => $min_range,
   'Keseluruhan' => $averange
];



               
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Informasi Predikat</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
* {
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  padding: 10px;
  margin: 10px;
  font-size: small;
}
td {
   text-align: left;
   font-size: small;

}
th {
   font-size: small;
   text-align: center;
  
}

.foot {
   text-align: left;
}

</style>  

</head>
<body>
<div class="container">
<div class="card mb-3 mt-2">
   <ul class="nav justify-content-center mt-4">

       <li class="nav-item">
         <a class="nav-link disabled">Predikat Nilai Mahasiswa</a>
       </li>

   </ul>
   <div class="card-body">
       <table align="center"  cellspacing="0" width="100%">
           <thead>
               <tr border="1">
                   <th bgcolor="Silver">No.</th>
                   <th bgcolor="Silver">NIM</th>
                   <th bgcolor="Silver">Nama</th>
                   <th bgcolor="Silver">Nilai</th>
                   <th bgcolor="Silver">Ketentuan</th>
                   <th bgcolor="Silver">Keterangan Grade</th>
               </tr>
           </thead>
           <tbody>
              
               <?php 
               
               $no = 1;
               foreach ($siswa as $murid) {

                   if ($murid['nilai'] >= 90 && $murid['nilai'] <= 100) $rank = 'A | Sangat Bagus';
                   else if ($murid['nilai'] >= 70 && $murid['nilai'] <= 80) $rank = 'B | Bagus';
                   else if ($murid['nilai'] >= 50 && $murid['nilai'] <= 60) $rank = 'C | Kurang Bagus';
                   else if ($murid['nilai'] >= 10 && $murid['nilai'] <= 40) $rank = 'E | Buruk';
                   else $rank = '';

                   $ternary = ($murid['nilai'] >= 70) ? 'Lulus' : 'Tidak Lulus';

                   ?>

               <tr>
                   <td><?= $no ?></td>
                   <td><?= $murid['nim'] ?></td>
                   <td><?= $murid['nama'] ?></td>
                   <td><?= $murid['nilai'] ?></td>
                   <td><?= $ternary ?></td>
                   <td><?= $rank ?></td>
               
                 
               </tr>

       <?php  $no++; }  ?>
             
             </tbody>   
             <tfoot >
               <tr >
                   <th bgcolor="White" colspan="2"></th>
                   <th bgcolor="White" colspan="1"></th>
               </tr>
               <tr >
                   <th bgcolor="White" colspan="2"></th>
                   <th bgcolor="White" colspan="1"></th>
               </tr>
               <?php foreach ($keterangan as $ktrg => $hasil) { ?> 
              
               <tr>
                   <th bgcolor="Silver" class="foot" colspan="2"><?= $ktrg  ?></th>
                   <th bgcolor="White"  colspan="1"><?= $hasil ?></th>
               </tr>
               <?php } ?>
             </tfoot>
   </div>
</div>  
</body> 






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>