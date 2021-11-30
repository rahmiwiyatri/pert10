<?php

includ "../config/koneksi.php";

$data = [];

$query = mysqli_query($kon,"SELECT * FROM `barang`ORDER BY id DESC");

if($query){
    $status = true;
    $pesan = "reaquest success"';
    while($row = mysqli_fetch_assoc($query)){
        arry_push($data , $row);
    }
}else{
    $status = false;
    $pesan = "reaquest failed";
}

$json = [
    "status"=> $status,
    "pesan" => $pesan,
    "data" => $data
];

header("Content-Type: application/josn");
echo json_encode($json);

?>