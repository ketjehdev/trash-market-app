<?php
session_start();

include "../config.php";

// cek apakah user sudah login sesuai role apa blom
if ($_SESSION["role"] != "Member") {
    // alihkan ke halaman login
    header('Location:../login.php');
}
// sql select all data
$sql = "SELECT * FROM sampah GROUP BY jenis_sampah";
// query all data users with connection database
$query = mysqli_query($conn, $sql);
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
    <title>Order Service | Member</title>
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
                    <a href="./dash.php" class="nav-item nav-link btn">Dashboard</a>
                    <a class="nav-item active nav-link btn">Order Service</a>
                    <a class="nav-item nav-link btn">Nofitikasi</a>
                    <a href="../logout.php" class="nav-item nav-link btn btn-danger text-light px-3" style="margin-left: 10px;">Log out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <h5 class="mt-4 text-center">Jenis Sampah</h5>
        <div class="row d-flex flex-row justify-content-evenly mx-2" style="margin: 0 15px 0 0">
            <?php
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-3 my-3 mx-1">
                    <div class="card">
                        <div class="card-header text-center">
                            <h6><?= $data['jenis_sampah']; ?></h6>
                        </div>
                        <div class="card-body">
                            <p class="text-center">
                                <img src="../asset/img/<?= $data['jenis_img']; ?>" style="height: 150px;">
                            </p>
                        </div>
                        <div class="card-footer">
                            <button style="width: 100%; background: #67C5D2;" class="btn">
                                Lihat <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/splash.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>