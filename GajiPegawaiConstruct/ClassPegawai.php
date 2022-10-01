<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pegawai - Javascript</title>

  <style>
    h1 {
       text-align: center;
       font-size: x-large;
    }
   
     * {
      padding: 10px;
      margin: 10px;
      font-size: small;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     }

     td {
        text-align: justify;
     }
  </style>
 
</head>
<body>

<?php 

     require 'RequiredClass.php';

     //isi array yang dijabarkan nanti
     $obj1 = new Tabel('Mariam', '12345', 'Islam', 'Staff','Belum Menikah');
     $obj2 = new Tabel('Lulu', '23451', 'Islam', 'Manager','Belum Menikah');
     $obj3 = new Tabel('Syahla', '34512', 'Islam', 'Asistant Manager','Belum Menikah');
     $obj4 = new Tabel('Rani', '45123', 'Khatolik', 'Head Of Division','Menikah');
     $obj5 = new Tabel('Tono Takua', '51234', 'Hindu', 'Staff','Menikah');
    

      ?>

  <h1>Gaji Pegawai || PT.Senosa</h1>
 
  <table align="center"  cellspacing="0" width="100%">
    <thead>
        <tr border="1">
            <th bgcolor="Silver">No.</th>
            <th bgcolor="Silver">Nama Pegawai</th>
            <th bgcolor="Silver">NIP</th>
            <th bgcolor="Silver">Agama</th>
            <th bgcolor="Silver">Jabatan</th>
            <th bgcolor="Silver">Status</th>
            <th bgcolor="Silver">Gaji</th>
            <th bgcolor="Silver">Tunjangan Jabatan</th>
            <th bgcolor="Silver">Tunjangan Keluarga</th>
            <th bgcolor="Silver">Gaji Kotor</th>
            <th bgcolor="Silver">Zakat Mall</th>
            <th bgcolor="Silver">Take Home Pay</th>
         

          
        </tr>
    </thead>
    <tbody>
     
      <?php $no = '#'; ?>
                        
            <!-- data diterima yang dicetak oleh RequiredClass.php -->
           <tr>
               <td><?= $no ?></td>
               <td><?= $obj1->cetak() ?></td>
               
           </tr>
           <tr>
               <td><?= $no ?></td>
               <td><?= $obj2->cetak() ?></td>
               
           </tr>
           <tr>
               <td><?= $no ?></td>
               <td><?= $obj3->cetak() ?></td>
               
           </tr>
           <tr>
               <td><?= $no ?></td>
               <td><?= $obj4->cetak() ?></td>
               
           </tr>
           <tr>
               <td><?= $no ?></td>
               <td><?= $obj5->cetak() ?></td>
               
           </tr>
           

      <?php  $no++;  ?>
         
         

     
        

    </tbody>
   
</table>
</body>
</html>