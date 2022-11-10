<?php
    $dataJSON = json_decode(file_get_contents("assets/unit_3c.json"));
?>

<!-- Modal -->
<!-- <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar Certified Secure Computer User (CSCU)</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Poster</label><br>
                    <img src="assets/images/security-training.png" class="img-thumbnail w-50 h-50" alt="security-training">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Training</label>
                    <input class="form-control" type="text" value="Certified Secure Computer User (CSCU)" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                    <input class="form-control" type="text" value="Bandung" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                    <input class="form-control" type="text" value="Security Training" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Durasi</label>
                    <input class="form-control" type="text" value="4 hari" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                    <input class="form-control-plaintext" type="text" value="Rp 2.500.000" aria-label="Disabled input example" disabled readonly>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bayarBerhasil">Bayar</button>
            </div>
        </div>
    </div>
</div> -->

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
    <div class="mt-5">
        <button class="btn btn-success">Tambah</button>
    </div>
    <table class="table mt-2">
        <thead class="table-secondary">
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Training</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Kategori</th>
            <th scope="col">Durasi</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="data-table">
            <?php
                function kategori($id, $dataJSON){
                    if($id == "1"){
                        return $dataJSON[3]->data[0]->kategori;
                    } else {
                        return $dataJSON[3]->data[1]->kategori;
                    }
                }
                foreach($dataJSON[2]->data as $datakelas){
                    echo'
                        <tr>
                            <th scope="row">'.$datakelas->id_kelas.'</th>
                            <td>'.$datakelas->judul.'</td>
                            <td>'.$datakelas->lokasi.'</td>
                            <td>'.kategori($datakelas->id_kategori, $dataJSON).'</td>
                            <td>'.$datakelas->durasi.' hari</td>
                            <td>Rp '.$datakelas->harga.'</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#daftar'.$datakelas->id_kelas.'">Edit</button>&nbsp
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                            </td>
                        </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="daftar'.$datakelas->id_kelas.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar '.$datakelas->judul.'</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Poster</label><br>
                                        <img src="'.$datakelas->gambar.'" class="img-thumbnail w-50 h-50" alt="security-training">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Training</label>
                                        <input class="form-control" type="text" value="'.$datakelas->judul.'" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                                        <input class="form-control" type="text" value="'.$datakelas->lokasi.'" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                        <input class="form-control" type="text" value="'.kategori($datakelas->id_kategori, $dataJSON).'" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Durasi</label>
                                        <input class="form-control" type="text" value="'.$datakelas->durasi.' hari" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                        <input class="form-control-plaintext" type="text" value="Rp '.$datakelas->harga.'" aria-label="Disabled input example" disabled readonly>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bayarBerhasil">Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            ?>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Certified Secure Computer User (CSCU)</td>
                <td>Bandung</td>
                <td>Security Training</td>
                <td>4 hari</td>
                <td>Rp 2.500.000</td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#daftar">Edit</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Certified Ethical Hacker (CEH)</td>
                <td>Bandung</td>
                <td>Security Training</td>
                <td>5 hari</td>
                <td>Rp 14.500.000</td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#daftar">Edit</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Mikrotik Certified Network Associate (MTCNA)</td>
                <td>Bandung</td>
                <td>Network and Cloud Training</td>
                <td>3 hari</td>
                <td>Rp 2.500.000</td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#daftar">Edit</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Developing Solutions for Microsoft Azure (AZ-204)</td>
                <td>Bandung</td>
                <td>Network and Cloud Training</td>
                <td>5 hari</td>
                <td>Rp 18.000.000</td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#daftar">Edit</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                </td>
            </tr> -->
        </tbody>
    </table>
    <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
            <img src="assets/images/security-training.png" class="card-img-top" alt="security-training">
            <div class="card-body">
                <h5 class="card-title">Certified Secure Computer User (CSCU)</h5>
                <table>
                    <tr>
                        <td>Training</td>
                        <td>:</td>
                        <td>Certified Secure Computer User (CSCU)</td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td>:</td>
                        <td>Security Training</td>
                    </tr>
                    <tr>
                        <td>Durasi</td>
                        <td>:</td>
                        <td>4 hari</td>
                    </tr>
                </table>
                <div class="text-end">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#daftar">Daftar</button>
                </div>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img src="assets/images/security-training2.png" class="card-img-top" alt="security-training2">
            <div class="card-body">
                <h5 class="card-title">Certified Ethical Hacker (CEH)</h5>
                <table>
                    <tr>
                        <td>Training</td>
                        <td>:</td>
                        <td>Certified Ethical Hacker (CEH)</td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td>:</td>
                        <td>Security Training</td>
                    </tr>
                    <tr>
                        <td>Durasi</td>
                        <td>:</td>
                        <td>5 hari</td>
                    </tr>
                </table>
                <div class="text-end">
                    <button type="button" class="btn btn-success">Daftar</button>
                </div>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="assets/images/network-and-cloud-training.png" class="card-img-top" alt="network-and-cloud-training">
                <div class="card-body">
                    <h5 class="card-title">Mikrotik Certified Network Associate (MTCNA)</h5>
                    <table>
                        <tr>
                            <td>Training</td>
                            <td>:</td>
                            <td>Mikrotik Certified Network Associate (MTCNA)</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>:</td>
                            <td>Bandung</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>Network and Cloud Training</td>
                        </tr>
                        <tr>
                            <td>Durasi</td>
                            <td>:</td>
                            <td>3 hari</td>
                        </tr>
                    </table>
                    <div class="text-end">
                        <button type="button" class="btn btn-success">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="assets/images/network-and-cloud-training2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Developing Solutions for Microsoft Azure (AZ-204)</h5>
                    <table>
                        <tr>
                            <td>Training</td>
                            <td>:</td>
                            <td>Developing Solutions for Microsoft Azure (AZ-204)</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>:</td>
                            <td>Bandung</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>Network and Cloud Training</td>
                        </tr>
                        <tr>
                            <td>Durasi</td>
                            <td>:</td>
                            <td>5 hari</td>
                        </tr>
                    </table>
                    <div class="text-end">
                        <button type="button" class="btn btn-success">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

<script>
    // function kategori(id, result){
    //     if(id == "1"){
    //         return result[3].data[0].kategori
    //     } else {
    //         return result[3].data[1].kategori
    //     }
    // }
    // $.getJSON("assets/store.json", function (result) {
    //     console.log(result);
    //     for (let i = 0; i < result[2].data.length; i++){
    //         $("#data-table").add('<tr><th scope="row">'+(i+1)+'</th><td>'+result[2].data[i].judul+'</td><td>'+result[2].data[i].lokasi+'</td><td>'+kategori(result[2].data[i].id_kategori, result)+'</td><td>'+result[2].data[i].durasi+' hari</td><td>Rp '+result[2].data[i].harga+'</td><td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#daftar">Edit</button>&nbsp<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button></td></tr>').appendTo("#data-table");
    //     }
    // });
    
</script>