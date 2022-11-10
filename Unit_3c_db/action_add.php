<?php
    include 'connection.php';

    if(isset($_POST['daftar'])){
        $simpan = mysqli_query($connection,"insert into pengguna (id_pengguna, nama, email, password, id_user) values ('', '$_POST[nama]','$_POST[email]','$_POST[password]','$_POST[user]') ");

        if($simpan){
            $pesan = "Berhasil daftar. Silakan login!";
            header("Location: login.php");
            exit;
        } else{
            $pesan = "Gagal daftar, periksa kembali data anda!";
            echo '
            <div class="alert alert-danger" role="alert">
                '.$pesan.'
            </div>
            ';
            header("Location: signup.php");
            exit;
        }
    }
?>