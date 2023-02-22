<?php
    $ns1 = ['id'=>1 , 'nama'=>'Bang Chan' , 'nim'=>'01102' , 'uts'=>80 , 'uas'=>90 , 'tugas'=>100];
    $ns2 = ['id'=>2 , 'nama'=>'Lee Know' , 'nim'=>'01106' , 'uts'=>90 , 'uas'=>97 , 'tugas'=>90];
    $ns3 = ['id'=>3 , 'nama'=>'Seo Changbin' , 'nim'=>'01107' , 'uts'=>80 , 'uas'=>95 , 'tugas'=>100];
    $ns4 = ['id'=>4 , 'nama'=>'Hwang Hyunjin' , 'nim'=>'01104' , 'uts'=>88 , 'uas'=>94 , 'tugas'=>87];
    $ns5 = ['id'=>5 , 'nama'=>'Han Jisung' , 'nim'=>'01101' , 'uts'=>95 , 'uas'=>99 , 'tugas'=>89];
    $ns6 = ['id'=>6 , 'nama'=>'Lee Felix' , 'nim'=>'01109' , 'uts'=>86 , 'uas'=>92 , 'tugas'=>100];
    $ns7 = ['id'=>7 , 'nama'=>'Kim Seungmin' ,'nim'=>'01105' , 'uts'=>98 , 'uas'=>94 , 'tugas'=>90];
    $ns8 = ['id'=>8 , 'nama'=>'Yang Jeong-in' ,'nim'=>'01103' , 'uts'=>98 , 'uas'=>90 , 'tugas'=>90];
     

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5, $ns6, $ns7, $ns8];
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $nomor = 1;

        foreach($ar_nilai as $ns){

            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3 ; 
    
    ?>

        <tr>
            <td> <?= $nomor  ?> </td>
            <td> <?= $ns['nama']  ?> </td>
            <td> <?= $ns['nim']  ?> </td>
            <td> <?= $ns['uts']  ?> </td>
            <td> <?= $ns['uas']  ?> </td>
            <td> <?= $ns['tugas']  ?> </td>
            <td> <?= number_format($nilai_akhir,2   ,',',',')  ?> </td>
        </tr>

    <?php
        $nomor++;
        }
    ?>
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>