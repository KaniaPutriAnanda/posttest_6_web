<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM kacans");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kacans.css?v4">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Document</title>
</head>
<body>
<div class="logo">
        <a href="kacans.html"><h3>Kacansg</h3></a>
        </div>

    <i class="bi bi-brightness-high-fill" id="toggleDark"></i>

    <nav class="navi">
        <a href="joinUs.php">Join Us</a>
        <a href="contact_kacans.php">Contact</a>
        <a href="about_kacans.php">About Me</a>
        <a href="category.php">Category</a>
        <a href="kacans.php">Home</a>
    </nav>

    <table border='1'>

        <tr>
            <th colspan='12'>--*Order List*--</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name of Buyer</th>
            <th>Number Phone</th>
            <th>Category</th>
            <th>Album Version</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Order Date</th>
            <th>Address</th>
            <th>Payment</th>
            <th colspan='2'>action</th>
        </tr>
        <?php 
            $i = 1;
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$i; ?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['nohp']?></td>
            <td><?=$row['kategori']?></td>
            <td><?=$row['versi']?></td>
            <td><?=$row['kuantitas']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['alamat']?></td>
            <td><?=$row['pembayaran']?></td>
            <td><a href="edit.php?id=<?=$row['id']?>"> edit </a></+td>
            <td><a href="hapus.php?id=<?=$row['id']?>">hapus</a></td>
        </tr>
            <?php 
             $i++;
                }
            ?>
    </table>

    <script src="kacans.js"></script>

</body>
</html>