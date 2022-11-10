<!doctype html>
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
            .container-fluid {
                padding: 10px 120px;
            }
            .banner {
                background-image: url(assets/images/banner3.png);
                /* background-image: linear-gradient(to bottom, rgba(255,0,0,0) 95%,white 100%), url(assets/images/banner2.png); */
                background-repeat: no-repeat;
                background-size: cover;
                height: 80vh;
                text-align: center;
            }
            .banner .banner-text {
                margin-top: 100px;
            }
            .supporter {
                margin: 100px;
            }
            .supporter h4 {
                margin: 50px 0 40px 0;
            }
            .row {
                margin: auto;
            }
            .supporter img{
                max-width: 250px;
                padding: 10px;
            }
            .kenapa .row {
                background-color: #F4F4F5;
                padding: 100px;
            }
            .kenapa h4 {
                padding: 20px;
            }
            .produk h4 {
                margin: 50px 0 100px 0;
            }
            .produk {
                margin: 100px;
            }
            .carouselExampleIndicators {
                height: 70vh;
            }
            .carousel-inner {
                background-color: #F4F4F5;
                height: max-content;
            }
            .carousel-inner img {
                width: 100px;
                height: 100px;
            }
            .carousel-content {
                padding: 20px 0;
                margin: 0 100px 100px 100px;
            }
            .testi h4 {
                margin: 80px 0 20px 0;
            }
            .ajakan {
                border-radius: 5px;
                padding: 50px;
                margin: 100px;
                background-color: #32DE84;
            }
            .footerLine {
                margin: 100px 100px 0 100px;
            }
            .footerLine .card-group {
                padding-top: 90px;
            }
            .footer img {
                max-width: 150px;
                margin-left: 15px;
            }
            .footerEnd {
                border-radius: 5px 5px 0 0;
                margin: 100px 100px 0 100px;
                background-color: #32DE84;
                height: max-content;
                padding: 5px 0 5px 0;
            }

            .logoBrand {
                box-shadow: .125rem .125rem .125rem 0px rgba(0, 0, 0, 0.05);
                padding: 23px 120px;
            }
            .dashboardContent {
                background-color: #F4F4F5;
                width: 100%;
                height: 100vh;
                padding-left: 300px;
            }
            .userImage img {
                width: 40px;
                height: 40px;
                margin: -1px;
                /* margin: 8px 0 7px 0; */
            }
            .navbar {
                box-shadow: .125rem .125rem .125rem 0px rgba(0, 0, 0, 0.05);
            }
            .daftarKelas {
                margin: 50px;
            }
            .daftarKelas h5 {
                padding: 10px 0;
            }
            .daftarKelas ul {
                padding: 10px 0;
            }
            .sideNav a {
                padding: 0 102px;
            }
            .sideNav .list-group {
                margin-bottom: 100vh;
            }
            .sideNav {
                position: fixed;
            }
            .content {
                height: fit-content;
            }

            .materi {
                margin: 20px 100px;
            }
            .footer {
                box-shadow: .125rem .125rem .125rem .3rem rgba(0, 0, 0, 0.06);
                height: 50px;
            }

            .soal {
                margin: 100px;
            }
        </style>
    </head>
    <body>
        <div class="soal container">
            <div class="row">
                <div class="col-3">
                    <div class="nomorSoal">
                        <a href="" class="btn btn-dark">1</a>
                        <a href="soal2.php" class="btn btn-light">2</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="pertanyaan">
                        <h5>Apa itu Lorem Ipsum?</h5>
                        <div class="list-group" role="group" aria-label="Basic radio toggle button group">
                            <table>
                                <tr>
                                    <td>
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="btnradio1">A</label>
                                    </td>
                                    <td>
                                        <label for="">Dummy Text</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="btnradio2">B</label>
                                    </td>
                                    <td>
                                        <label for="">Dummy Bear</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="btnradio3">C</label>
                                    </td>
                                    <td>
                                        <label for="">Dummy an</label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <a href="soal2.php" class="btn btn-dark">Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="bootstrap/js/bootstrap.js"></script>
        <!-- <script src="bootstrap/js/bootstrap.bundle.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>