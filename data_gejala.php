<div class="table">
    <table class="table table-striped">
        <tr class="success">
            <th>ID GEJALA</th>
            <th>NAMA GEJALA</th>
            <th>AKSI</th>
        </tr>
        <?php
        include './confg/koneksi.php';

//Langkah 1: Tentukan batas,cek halaman & posisi data
        $batas = 5;
        $halaman = $_GET['halaman'];
        if (empty($halaman)) {
            $posisi = 0;
            $halaman = 1;
        } else {
            $posisi = ($halaman - 1) * $batas;
        }

//Langkah 2: Sesuaikan perintah SQL
        $tampil = "select * from tb_gejala limit $posisi,$batas";
        $hasil = mysql_query($tampil);

        //$no = $posisi + 1; // Agar angka (penomoran) mengikuti paging
        while ($data = mysql_fetch_array($hasil)) {
            echo "<tr>
                <td>$data[id_gejala]</td>
                <td>$data[nama_gejala]</td>
                <td><a href=\"form_update_gejala.php?id_gejala=" . $data[id_gejala] . "\"><button class=\"btn btn-primary\"><i class=\"icon-edit icon-white\"></i>Edit</button>
                <a href=\"delete_gejala.php?id_gejala=" . $data[id_gejala] . "\"><button class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i>Hapus</button></a>
            </tr>";
            $no++;
        }
        echo "</table>";
        //Langkah 3: Hitung total data dan halaman serta link 1,2,3 ...

        $file = "gejala.php";

        $tampil2 = "select * from tb_gejala";
        $hasil2 = mysql_query($tampil2);
        $jmldata = mysql_num_rows($hasil2);
        $jmlhalaman = ceil($jmldata / $batas);
        ?>

        <div class="pagination">
            <ul>
                <li>
                    <?php
                    for ($i = 1; $i <= $jmlhalaman; $i++)
                        if ($i != $halaman) {
                            echo " <a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a> ";
                        } else {
                            echo " <a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a>";
                        }
                    echo "<p>Total gejala : <b>$jmldata</b></p>";
                    ?></li>
            </ul>
        </div>
</div><!-- akhir tabel -->