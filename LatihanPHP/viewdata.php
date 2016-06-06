<html>
<body>
    <table border=1 width="30%">
        <tr>
            <th>Id Pegawai</th>
            <th>Gaji</th>
        </tr>
        <? include "koneksi.php";
 $query="select * from pegawai";
            $exe=mysql_query($query);
            $no=1;
            while ($row=mysql_fetch_array($exe)) { ?>
        <tr>
            <td><? echo $row[1];?></td>
            <td><? echo $row[2];?></td>
        </tr>
        <? $no++; } ?>
    </table>
    <a href='latihanMysql.php'>Input Lagi</a></br>
</body>
</html>