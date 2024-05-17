<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Gagal konek ke database: ". mysqli_connect_error());
}
echo "Connected successfully";

function getAllData($conn)
{
    $sql="SELECT * FROM gunung";
    $result = mysqli_query($conn, $sql);

    $data= [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
     }
    
return $data;


}



function datagunung($conn, $data)
{
    $sql = "INSERT INTO gunung
    (id, tahun_pendakian, nama_gunung, ketinggian, created_at, update_at)
    VALUES (
        {$data['id']}, 
        '{$data['tahun_pendakian']}', 
        '{$data['nama_gunung']}', 
        '{$data['ketinggian']}', 
        NOW(), 
        NOW()
    );";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}

function findgunung ($conn, $id){
    $sql = "SELECT * FROM gunung WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        return $row;
      }
    }
  
    return null;
  }