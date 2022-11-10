<?php
    include 'connection.php';

    if(isset($_POST["masuk"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $ambildata = mysqli_query($connection,"select * from pengguna join user using(id_user) where email = '$email'");

        if (mysqli_num_rows($ambildata) === 1){
            $data = mysqli_fetch_assoc($ambildata);
            if($password == $data["password"]){
                header("Location: index.php");
                exit;
            }
            else {
                $pesan = "Password salah";
                $error =  true;
            }
        }
        elseif($email == ""){
            $pesan = "Masukan Email dan Password";
            $error =  true;
        }
        else{
            $pesan = "Email belum terdaftar";
            $error =  true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unit 3C | Unit Computing Certification Center</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo_unit3c.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #32DE84;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($error)){
            echo '
            <div class="alert alert-danger" role="alert">
                '.$pesan.'
            </div>
            ';
        }
    ?>
    <div class="container">
        <div class="card p-5 position-absolute top-50 start-50 translate-middle w-25">
            <div class="row">
                <div class="col">
                    <h4>Masuk</h4>
                </div>
                <div class="col text-end">
                    <a href="index.php"><img src="assets/images/logo_unit3c_text.png" alt="" class="img-fluid w-75"></a>
                </div>
            </div>
            <form class="mt-4 mb-4" method="post">
                <div class="mb-3">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="asyraf@gmail.com">
                </div>
                <div class="mb-3">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="asyraf123">
                </div>
                <div class="text-center">
                    <button type="submit" name="masuk" class="btn btn-success">Masuk</button>
                </div>
            </form>
            <hr>
                <div class="text-center">
                    <span>Belum punya akun? <br><a href="signup.php"><b>Daftar sekarang</b></a></span>
                </div>
        </div>
    </div>
</body>
</html>