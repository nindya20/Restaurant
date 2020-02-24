<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
</head>
<body style="background-image:url(bg.jpg); background-size:100%;color: white">
    <h1 style="font-family:helvetica; font-size:350%" >Selamat Datang</h1>
    <p style="font-size:120%">Kepuasan pelanggan adalah harapan kami :)</p>

    <form action = "Tenda.php" method = "$_GET">
    <table>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name = "Username" placeholder = "Username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name = "Password" placeholder = "Password"></td>
    </tr>
    <tr>
        <td><button type = "submit">Login></button></td>
    </tr>
    </table>
    </form>
</body>
</html>