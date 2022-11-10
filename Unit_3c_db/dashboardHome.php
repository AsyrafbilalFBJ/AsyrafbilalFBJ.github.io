<?php
    include 'connection.php';
    require 'connection.php';
?>

<div class="dataKelas">
    <div class="row gap-5">
        <div class="col card p-4">
            <h3>Sedang dipelajari</h3>
            <?php
                $ambildata = mysqli_query($connection,"select id_kelas from transaksi join pengguna using(id_pengguna) join kelas using(id_kelas) join status using(id_status) where id_pengguna = 1 and status = 'dipelajari'");
                $tampil = mysqli_num_rows($ambildata);
                echo "
                    <h5>$tampil</h5>
                ";
            ?>
        </div>
        <div class="col card p-4">
            <h3>Kelas selesai</h3>
            <?php
                $ambildata = mysqli_query($connection,"select id_kelas from transaksi join pengguna using(id_pengguna) join kelas using(id_kelas) join status using(id_status) where id_pengguna = 1 and status = 'selesai'");
                $tampil = mysqli_num_rows($ambildata);
                echo "
                    <h5>$tampil</h5>
                ";
            ?>
        </div>
    </div>
</div>