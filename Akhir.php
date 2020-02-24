<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body style="background-image: url(papan1.webp);
             background-size:100%; 
             background-position:60%;
             color:white">
<table>
        <tr>
        <td>Pesanan</td> <td>: <?php echo $_GET['Pesan'] ?? ''?></td>
        </tr>
        <form action = "Tenda.php" method = "$_GET">
        <tr>
        <td><button type = "submit">Tambah Pesanan</button></td>
        </tr>
        </table>
</body>
</html>