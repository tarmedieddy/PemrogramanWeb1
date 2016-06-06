<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'm0dule';
$db = 'dbsttb';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass,$db);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
?>