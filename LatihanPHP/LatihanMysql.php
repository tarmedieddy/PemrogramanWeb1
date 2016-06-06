<html>
    <body>
        <h2>Data Mahasiswa</h2>
        <form method="post" action="LatihanMysql.php">
        <table width="500" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">ID Mahasiswa</td>
            <td><input name="id_mhs" type="text" id="id_mhs" placeholder="Id Anda"></td>
        </tr>
        <tr>
            <td width="120">Nama</td>
            <td><input name="nama_mhs" type="text" id="nama_mhs" placeholder="Nama Anda"></td>
        </tr>
        <tr>
            <td width="100">Kelas</td>
            <td><input name="kelas" type="text" id="kelas" placeholder="Kelas Anda"></td>
        </tr>
        <tr>
            <td width="150">Alamat</td>
            <td><input name="alamat" type="text" id="alamat" placeholder="Alamat Anda"></td>
        </tr>
        <tr>
            <td width="100">Usia</td>
            <td><input name="usia" type="text" id="usia" placeholder="Usia Anda"></td>
        </tr>
        <tr>
            <td width="110">No Tlp</td>
            <td><input name="no_tlp" type="text" id="no_tlp" placeholder="Tlp Anda"></td>
        </tr>
        <tr>
            <td width="110"> </td>
            <td> </td>
        </tr>
        <tr>
            <td width="110"> </td>
            <td>
                <input name="simpan" type="submit" id="simpan" value="Simpan">
            </td>
        </tr>
        </table>
    </form>
        <?php
            if(isset($_POST['simpan']))
            {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'm0dule';
            $koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $koneksi )
            {
              die('Gagal Koneksi: ' . mysql_error());
            }
             
            if(! get_magic_quotes_gpc() )
            {
               $nim = addslashes ($_POST['id_mhs']);
               $nama = addslashes ($_POST['nama_mhs']);
               $kelas = addslashes($_POST['kelas']);
               $alamat = addslashes($_POST['alamat']);
               $usia = addslashes($_POST['usia']);
               $tlp = addslashes($_POST['no_tlp']);
            }
            else
            {
               $nim = $_POST ['id_mhs'];
               $nama = $_POST ['nama_mhs'];
               $kelas = $_POST['kelas'];
               $alamat = $_POST['alamat'];
               $usia = $_POST['usia'];
               $tlp = $_POST['no_tlp'];
            }
            
            //Memasukkan data kedalam tabel mahasiswa
            $sql = "INSERT INTO mahasiswa ".
                   "(id_mhs,nama_mhs,kelas,alamat,usia,no_tlp) ".
                   "VALUES('$nim','$nama','$kelas','$alamat','$usia','$tlp')";
            mysql_select_db('dbmahasiswa');
            $tambahdata = mysql_query( $sql, $koneksi );
            if(! $tambahdata )
            {
              die('Gagal Tambah Data: ' . mysql_error());
            }
            echo "Berhasil tambah data\n <br>";
            
            //Mengambil data dari tabel mahasiwa
            $sql = "SELECT id_mhs,nama_mhs,kelas FROM mahasiswa";
            mysql_select_db('dbmahasiswa');
            $hasil = mysql_query($sql);
            
            // Hasil Inputan
            while ( $row = mysql_fetch_assoc($hasil) ) {
                echo "<br>";
                echo "ID Mahasiswa: " . $row["id_mhs"]. " - Nama: " . $row["nama_mhs"]. " - Kelas: " . $row["kelas"]. "<br>";
            }
            mysql_close($koneksi);
            }
            else
            {
            }
        ?>
    </body>
</html>