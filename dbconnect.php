<?php

// Memanggil parameter-parameter yang digunakan untuk koneksi database
include("dbparameter.php");

// Koneksi database MYSQL menggunakan model PBO
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Conditional untuk mengatasi error koneksi ke database
if ($conn->connect_error){
    // Tampilan apabila terjadi error
    die("Koneksi Database GAGAL : " . $conn->connect_error);
} else {
    // Apabila tidak terjadi error koneksi
    // Mengambil nama dan score akhir pemain
    $nama = $_COOKIE['nama'];
    $score = $_SESSION['score'];

    // Membuat query untuk insert data ke dalam database
    $query = "INSERT INTO score (nama_user, score_user) VALUES ('$nama', '$score')";

    // Melakukan insert data sekaligus menyimpan status insertnya dalam result
    $result = $conn->query($query);

    // Conditional untuk mengatasi error insert data ke database
    if (!$result){
        // Tampilan apabila gagal melakukan insert data
        die("Insert Database GAGAL". $conn->error);
    } else {
        // Apabila berhasil melakukan insert data
        // Menampilkan semua isi data dalam tabel score

        // Membuat query untuk mengambil semua data dalam tabel score
        $query2 = "SELECT * FROM score ORDER BY score_user DESC";

        // Mengambil semua data dalam tabel score dan menyimpan statusnya dalam result2 
        $result2 = $conn->query($query2);

        // Conditional pengambilan data
        // Apabila tabel tidak kosong
        if ($result2->num_rows > 0){
            // Pembuatan Tampilan Tabel
            echo "
            <table class='table'>
                <thead class='bg-warning'>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Score</th>
                    </tr>
                </thead>
                <tbody> ";

            // Untuk penomoran dalam tabel
            $i = 1;

            // Mengambil 10 data dengan score tertinggi dalam tabel score di database dan menampilkannya
            while($i <= 10){
                $data = $result2->fetch_assoc();
                echo "
                <tr>
                    <th scope='row'>".$i."</th>
                    <td>".$data['nama_user']."</td>
                    <td>".$data['score_user']."</td>
                </tr>";

                // Increment untuk penomoran tabel
                $i += 1;
            }
            echo "
                </tbody>
            </table>";
        } else {
            // Apabila tabel kosong
            echo "<p>Data Tidak Ditemukan</p>";
        }        
    }
}

// Menutup koneksi database
$conn->close();

?>