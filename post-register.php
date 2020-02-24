<?php
include './koneksi.php';
$Nama = $_POST['Nama'];
$No_Meja = $_POST['No_Meja'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$query = "INSERT INTO Menu (Nama, No_Meja, Username, Password)
        VALUES ('$Nama','$No_Meja','$Username','$Password')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num>0){
    echo "Berhasil Login";
}else{
    echo "Login Gagal : ".mysqli_error($connect);
}
?>