<?php
session_start();

// cek apakah user sudah login sesuai role apa blom
if ($_SESSION["role"] != "Member") {
    // alihkan ke halaman login
    header('Location:../login.php');
}

?>
<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/splash.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Dashboard | Member</title>
</head>
<style>
    ::-webkit-scrollbar {
        display: none;
    }
</style>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg position-relative sticky navbar-light bg-light" style="width: 100%; z-index: 10;">
        <div class="container-fluid">
            <a href="dash.php" class="navbar-brand my-2">
                <h5 class="mb-0">Market Sampah</h5>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a class="nav-item active nav-link btn">Dashboard</a>
                    <a href="#aboutus" class="nav-item nav-link btn">Order Service</a>
                    <a href="#service" class="nav-item nav-link btn">Nofitikasi</a>
                    <a href="../logout.php" class="nav-item nav-link btn btn-danger text-light px-3" style="margin-left: 10px;">Log out</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row d-flex justify-content-evenly flex-row mt-5" style="margin: 0 15px 0 0">
            <div class="col-xl-3 col-md-12 mb-2">
                <div class="card border-left-primary bg-primary text-light shadow h-90 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-light h4 mb-1">
                                    <span style="font-weight: bold;">Hi, <?= ucfirst($_SESSION['username']) ?></span>
                                </div>
                                <div class="mb-0 font-weight-bold d-flex justify-content-between text-gray-800">
                                    <?= $_SESSION['role'] ?>
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-12 mb-2">
                <div class="card border-left-primary bg-success text-dark shadow h-90 py-2">
                    <div class="card-body text-light">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-uppercase mb-1">
                                    Konfirmasi Pesanan
                                </div>
                                <div class="h5 mb-0 font-weight-bold d-flex justify-content-between text-gray-800">
                                    200
                                    <i data-feather="send"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-12 mb-2">
                <div class="card border-left-primary bg-danger text-dark shadow h-90 py-2">
                    <div class="card-body text-light">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-uppercase mb-1">
                                    Penolakan Pesanan
                                </div>
                                <div class="h5 mb-0 font-weight-bold d-flex justify-content-between text-gray-800">
                                    200
                                    <i data-feather="slash"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-12 mb-2">
                <div class="card border-left-primary bg-warning text-dark shadow h-90 py-2">
                    <div class="card-body text-dark">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-uppercase mb-1">
                                    Total Point(s)
                                </div>
                                <div class="h5 mb-0 font-weight-bold d-flex justify-content-between text-gray-800">
                                    200
                                    <i data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex mt-3 m-1">
            <div class="col-lg-3 col-md-12">
                <div class="card p-0">
                    <div class="card-header">
                        <img src="../asset/svg/pick.svg" width="100%">
                    </div>
                    <button class="btn btn-success">
                        <div class="card-footer">Order Service</div>
                    </button>
                </div>
            </div>

            <div class="col-xl-4 col-md-12 mt-3">
                <div class="card p-0">
                    <div class="card-header">
                        <img src="../asset/svg/coins.svg" width="100%">
                    </div>
                    <button class="btn btn-success">
                        <div class="card-footer">Tukar Point</div>
                    </button>
                </div>
            </div>

            <div class="col-xl-5 col-md-12 mt-3 mb-3">
                <div class="card p-0">
                    <img src="../asset/img/bgutama.jpg" width="100%" alt="">
                </div>
            </div>


        </div>
    </div>

    <!-- contact -->
    <footer class="container-fluid bg-light py-2" style="width: 100%;">
        <div class="row d-flex justify-content-between align-items-center mx-2 mb-0">
            <div class="col-lg-3 col-md-12">

                <span class="text-dark font-weight-bold">
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $date = date('Y');
                    ?>
                    Copyright &copy; <?= $date ?>.
                </span>

            </div>

            <div class="col-lg-2 col-md-12">

                <div>
                    <a href="#" class="text-dark"><i class="fa-solid fa-envelope mx-2"></i></a>
                    <a href="#" class="text-dark"><i class="fa-brands fa-instagram mx-2"></i></a>
                    <a href="#" class="text-dark"><i class="fa-brands fa-facebook mx-2"></i></a>
                    <a href="#" class="text-dark"><i class="fa-brands fa-github mx-2"></i></a>
                    <a href="#" class="text-dark"><i class="fa-brands fa-linkedin mx-2"></i></a>
                </div>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/splash.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>