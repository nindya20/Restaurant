<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<style media="screen">
    body{
    background-color:chocolate;
    background-size: 100%;
    color: black;
}

div.box{
    display:inline-block;
    width:250px;
    border: 2px solid grey;
    margin: 10px;
    margin-left:12px;
    margin-right:1;
}
div.box img{
    width:250px;
    height:250px;
}
div.box:hover{
    border: 2px solid grey;
}
div.box div.deskripsi{
    padding: 15px;
    text-align:center;
    background-color:grey;
}
</style>
<body>
        <div class="box">
        <img src="soto.jpeg">
        <div class="deskripsi">Rujak Soto</div>
        </div>
        <div class="box">
        <img src="tahu.jpg">
        <div class="deskripsi">Tahu Lontong</div>
        </div> 
        <div class="box">
        <img src="lontong.png">
        <div class="deskripsi">Rujak Lontong</div>
        </div>
        <div class="box">
        <img src="buah.jpg">
        <div class="deskripsi">Rujak Buah</div>
        </div>
    
    <form action = "Akhir.php" method = "$_GET">
    <input type="text" name = "Pesan" placeholder = "Pesan apa?">
    <br>
    <button type = "submit">Klik Disini></button>
</body>
</html>