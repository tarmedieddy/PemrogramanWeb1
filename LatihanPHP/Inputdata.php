<?php
 include "koneksi.php"; 
 $idpeg=$_POST['idpegawai'];
 $gaji=$_POST['gaji'];
 
 $query="insert into pegawai values('$idpeg','$gaji')";
 $exe=mysql_query($query);
 
    echo"<a href='latihanMysql.php'>Input Lagi</a></br>";
    echo"<a href='viewdata.php'>Lihat Hasil Input</a>";
?>