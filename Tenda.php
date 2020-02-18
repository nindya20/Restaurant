<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelanggan</title>
    <link rel="Stylesheet" type="text/css" href="Resto.css">
</head>
<body>
    <table>
        <tr>
        <td>Nama</td> <td>: <?php echo $_GET['Nama'] ?? ''?></td>
        </tr>
        <tr>
        <td>No. Meja</td> <td>: <?php echo $_GET['No_Meja'] ?? ''?></td>
        </tr>
        </table>
    <div class="header">
        <h1>Warung Tenda Nindayy</h1>
    </div>
    <div class="navigator">
        <ul>
            <li><a href="Makanan.php">Makanan</a></li>
            <li><a href="Minuman.php">Minuman</a></li>
        </ul>
    </div>
</body>
</html>