<?php

require "config.php";

if (isset($_POST['tombolKirim']))
{
    $nama_tamu = htmlspecialchars($_POST['namaTamu']);
    $pesan_tamu = htmlspecialchars($_POST['ucapanTamu']);
    $result = mysqli_query($conn, "INSERT INTO buku_tamu VALUES (NULL, '$nama_tamu', '$pesan_tamu')");

    if ($result)
    {
        echo "
        <script>
        alert ('pesan berhasil dikirim!');
        document.location.href='index.php#rsvp';
        </script>
        ";
    }else
    {
        echo "
        <script>
        alert ('pesan tidak berhasil dikirim!');
        // document.location.href='index.php#rsvp';
        </script>
        ";
    }
}

