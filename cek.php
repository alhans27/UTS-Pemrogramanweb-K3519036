<?php

// Apabila belum pernah LOGIN maka akan diredirect ke form LOGIN
if (!isset($_COOKIE['email'])){
    header("Location: login.php");
    exit();
} else if ($_SESSION['lives'] <= 0){
    // Untuk mencegah by pass ke permainan saat lives sudah mencapai 0
    // Apabila lives mencapai 0 dan mencoba mengakses permainan, maka akan diredirect ke tampilan awal permainan
    header("Location: index.php");
    exit();
}
?>