<?php


$conn = mysqli_connect("localhost", "root", "", "und_nindihaerul");

if (!$conn)
{
    echo "koneksi tidak berhasil".mysqli_connect_error();
}

mysqli_set_charset($conn,"utf8mb4");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }

    return $data;
}