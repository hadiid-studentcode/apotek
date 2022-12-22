<?php
// koneksi ke database
// mengaktifkan session pada php
session_start();

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_apotik");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambahBarang($data){
    
}




?>