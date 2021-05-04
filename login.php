<?php

// Membuat COOKIE
if (isset($_POST['submit'])){
  // Mengambil inputan nama dan email
  $nama = $_POST['nama'];
  $email = $_POST['email'];

  // Mengatur COOKIE untuk nama dan email
  setcookie("nama", $nama, time()+30*24*3600, "/");
  setcookie("email", $email, time()+30*24*3600, "/");
  header("Location: index.php");
  exit();
}

// Header html
include("header.html");

?>

<!-- Menampilkan form LOGIN -->
<form class="content" method="post" action="login.php">
  <!-- Logo Permainan -->
  <img class="mb-4" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.vexels.com%2Fmedia%2Fusers%2F3%2F139161%2Fisolated%2Fpreview%2Fc76ee72de9a5b980c5f0e0d6b7bac0e0-cruce-adem-s-a-adir-by-vexels.png&f=1&nofb=1" alt="Logo Penjumlahan" width="72" height="72">

  <!-- Kalimat Pembuka -->
  <h1 class="h3 mb-3 font-weight-normal">Kali Pertama Anda Bermain? Harap Login Terlebih Dahulu</h1>

  <!-- Form LOGIN -->
  <input type="text" class="form-control mb-2" placeholder="Nama Lengkap" name="nama" required>
  <input type="email" class="form-control mb-2" placeholder="Email Address" name="email" required>  
  <input class="btn btn-lg btn-warning btn-block" type="submit" name="submit" value="Sign in">

  <!-- Copyright -->
  <p class="mt-5 mb-3 text-muted">© Pemrograman Website 2021</p>
</form>

<!-- Footer html -->
<?php include("footer.html");?>