<?php
    include 'connection.php';
?>

<div class="daftarKelas">
    <div class="progres">
        <h5>Sedang dipelajari</h5>
            <?php
                $ambildata = mysqli_query($connection,"select * from transaksi join pengguna using(id_pengguna) join kelas using(id_kelas) join status using(id_status) where id_pengguna = 1 and status = 'dipelajari'");
                while($tampil = mysqli_fetch_assoc($ambildata)){
                    echo '
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                '.$tampil['judul'].'
                                <a href="materi.php" class="btn btn-success rounded">Lanjut Belajar</a>
                            </li>
                        </ul>
                    ';
                }
            ?>
    </div>
    <div class="selesai">
        <h5>Selesai</h5>
            <?php
                $ambildata = mysqli_query($connection,"select * from transaksi join pengguna using(id_pengguna) join kelas using(id_kelas) join status using(id_status) where id_pengguna = 1 and status = 'selesai'");
                while($tampil = mysqli_fetch_assoc($ambildata)){
                    echo '
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                '.$tampil['judul'].'
                                <a href="sertifikat.php" class="btn btn-outline-secondary rounded">Lihat Sertifikat</a>
                            </li>
                        </ul>
                    ';
                }
            ?>
    </div>
</div>