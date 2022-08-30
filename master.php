<?php 

include "koneksi.php";
$menu = $_GET['menu'];
$act = $_GET['act'];

if($menu == 'weding' && $act == 'simpan')
{
    mysqli_query($db,"INSERT INTO user (name, komentar, hadir) VALUES 
    ('$_POST[name]', '$_POST[komentar]', '$_POST[hadir]')");
    header("location:index.php");
}

?>