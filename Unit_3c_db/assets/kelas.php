<?php
    include 'connection.php';
    $ambildata = mysqli_query($connection,"select * from kelas join kategori using(id_kategori)");
?>

<!-- Modal -->
<div class="modal fade" id="bayarBerhasil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran Berhasil</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#32DE84" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
            </div>
            <div class="modal-footer">
            <a href="materi.html" type="button" class="btn btn-primary">Buka Materi</a>
            </div>
        </div>
    </div>
</div>

<div class="kelas container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            while($tampil = mysqli_fetch_assoc($ambildata)){
                echo '
                <div class="col">
                    <div class="card h-100">
                        <img src="'.$tampil['gambar'].'" class="card-img-top" alt="security-training">
                        <div class="card-body">
                            <h5 class="card-title">'.$tampil['judul'].'</h5>
                            <table>
                                <tr>
                                    <td>Training</td>
                                    <td>:</td>
                                    <td>'.$tampil['judul'].'</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>:</td>
                                    <td>'.$tampil['lokasi'].'</td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td>'.$tampil['kategori'].'</td>
                                </tr>
                                <tr>
                                    <td>Durasi</td>
                                    <td>:</td>
                                    <td>'.$tampil['durasi'].' hari</td>
                                </tr>
                            </table>
                            <div class="text-end">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#daftar'.$tampil['id_kelas'].'">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="daftar'.$tampil['id_kelas'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar '.$tampil['judul'].'</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Training</label>
                                    <input class="form-control" type="text" value="'.$tampil['judul'].'" aria-label="Disabled input example" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                                    <input class="form-control" type="text" value="'.$tampil['lokasi'].'" aria-label="Disabled input example" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                    <input class="form-control" type="text" value="'.$tampil['kategori'].'" aria-label="Disabled input example" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Durasi</label>
                                    <input class="form-control" type="text" value="'.$tampil['durasi'].' hari" aria-label="Disabled input example" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                    <input class="form-control-plaintext" type="text" value="Rp '.$tampil['harga'].'" aria-label="Disabled input example" disabled readonly>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bayarBerhasil">Bayar</button>
                            </div>
                        </div>
                    </div>
                </div>

                ';
            }
        ?>
    </div>
</div>