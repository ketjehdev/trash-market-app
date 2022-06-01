<?php
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_pengepul.php");
}
$result = mysqli_query($conn, "SELECT * FROM data_pickup_member");

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
    <style>
        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table {
            margin-left: 20px;
        }

        .content-table thead tr {
            background-color: #2F8F9D;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 20px 45px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #040404;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #3BACB6;
        }

        .content-table tbody tr {
            font-weight: bold;
            color: #040404;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <h2>market sampah.</h2>
            </div>
            <i class="fas fa-bell"></i>
            <div class="user">
                <img src="profil.png" alt="">
            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="dashpengepul.php">
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
                    <a href="Tentang Kami.html">
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
                        <div class="number">PICK UP</div>
                        <div class="card-name">Jumlah permintaan</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-dolly"></i>
                    </div>
                </div>
            </div>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Total</th>
                        <th>No.Telpon</th>
                        <th>Layanan</th>
                        <th>Jenis sampah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?php echo $row["nama"] ?></td>
                            <td><?php echo $row["alamat"] ?></td>
                            <td><?php echo $row["total"] ?></td>
                            <td><?php echo $row["no_hp"] ?></td>
                            <th><?php echo $row["layanan"] ?></th>
                            <th><?php echo $row["informasi"] ?></th>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="chart1.js"></script>
    <script src="chart2.js">
        < /script < /
        body > <
            /html>