<?php

require_once "koneksi.php";

$passwordlama = $_POST['passwordlama'];
$passwordbaru = $_POST['passwordbaru'];
$konfirmasipassword = $_POST['konfirmasipassword'];

$username = $_POST['username'];

$querycekuser = mysqli_query($koneksi, "SELECT * from tbl_user where username = '$username' and password = '$passwordlama'");

$count = mysqli_num_rows($querycekuser);

if ($count >= 1){

$updatequery = mysqli_query($koneksi, "update tbl_user set password = '$passwordbaru' where username = '$username'");

if($updatequery)

{

"Password telah diganti menjadi $passwordbaru";

}

}

?>