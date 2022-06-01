<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_pengepul.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>market sampah</title>
</head>

<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <h2>market sampah.</h2>
            </div>
            <div class="search">
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
            </div>
            <i class="fas fa-bell"></i>
            <div class="user">
                <img src="profil.png" alt="">
            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="welcome.php">
                        <i class="fa-solid fa-house"></i>
                        <div>Dashbord</div>
                    </a>
                </li>
                <li>
                    <a href="Informasi Pengepul.html">
                        <i class="fa-solid fa-database"></i>
                        <div>Informasi pengepul</div>
                    </a>
                </li>
                <li>
                    <a href="Tentang_Kami.php">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Tentang kami</div>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <div>Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">Hi!</div>
                        <div class="card-name"><?php echo "<h3> " . $_SESSION['username'] . "</h3>"; ?></div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">0</div>
                        <div class="card-name">Permintaan pick up</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">0</div>
                        <div class="card-name">Permintaan drop off</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart">
                    <h2>Layanan pengepul</h2>
                    <canvas id="lineChart"></canvas>
                    <div class="cards">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-name"><a href="pickup_pengepul.php">Pick up</a></div>
                            </div>
                            <div class="icon-box">
                                <i class="fa-solid fa-box-archive"></i>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-name"><a href="dropoff_pengepul.php">Drop off</a></div>
                            </div>
                            <div class="icon-box">
                                <i class="fa-solid fa-dolly"></i>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-name">Point</div>
                            </div>
                            <div class="icon-box">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="chart doughnut-chart">
                    <h2>Informasi</h2>
                    <p><span>Pick up</span> : Pengelola sampah akan datang untuk menjeput sampah kerumahmu</p>
                    <br>
                    <p><span>Drop off </span>: Antarkan sampahmu ke tempat pengelola sampah terdekat</p>
                    <br>
                    <p><span>Point</span> : Setiap menjual sampah akan mendapatkan poin dan bisa ditukarkan menjadi barang</p>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
        <script src="chart1.js"></script>
        <script src="chart2.js"></script>
</body>

</html>