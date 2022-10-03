
 <?php 

//rujukan file yang diinisialisasikan
require_once "Bentuk1.php";
require_once "Bentuk2.php";
require_once "Bentuk3.php";

//object yang dibentuk dengan sebuah value isi
$obj1 = new Lingkaran(54);
$obj2 = new PersegiPanjang(100, 350);
$obj3 = new Segitiga(27, 5);

//inisialisasi data sesuai tabel
$ar_bidang = ['No', 'Nama Bidang', 'Luas Bidang', 'Keliling Bidang', 'Keterangan'];
$bidang = [$obj1, $obj2, $obj3];


            
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Class Bentuk</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
* {
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  padding: 10px;
  margin: 10px;
  font-size: small;
}
td {
   text-align: center;
   font-size: small;

}
th {
   font-size: small;
   text-align: center;
  
}

.ktrg {
    text-align: left;
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
         <a class="nav-link disabled">Informasi Bangun Datar</a>
       </li>

   </ul>
   <div class="card-body">
       <table align="center"  cellspacing="0" width="100%">
           <thead>
               <tr border="1">
                   <th bgcolor="Silver">No.</th>
                   <th bgcolor="Silver">Nama Bidang</th>
                   <th bgcolor="Silver">Luas Bidang</th>
                   <th bgcolor="Silver">Keliling Bidang</th>
                   <th bgcolor="Silver">Keterangan</th>
                   
               </tr>
           </thead>
           <tbody>
              
            <!-- memberikan ouput dengan require file berbagai bentuk -->
            <?php 
            $no = "#"; 
            foreach ($bidang as $bdng) {
            
            
            ?>
               
               <tr>
                   <td><?= $no ?></td>
                   <td><?= $bdng->Detail() ?></td>
                   <td><?= $bdng->Luas() ?></td>
                   <td><?= $bdng->Keliling() ?></td>
                   <td class="ktrg"><?= $bdng->keterangan() ?></td>
               </tr>

          <?php  $no++; } ?> 
           
             </tbody>   
           
   </div>
</div>  
</body> 






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>
