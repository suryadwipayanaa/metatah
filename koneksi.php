<?php 
$db = mysqli_connect("localhost","root","","weding");

function query($query){
    global $db;

    $hasil = mysqli_query($db,$query);
    $rows = [];
    while($row=mysqli_fetch_array($hasil)){
        $rows [] = $row;
    }
    return $rows;
}

?>