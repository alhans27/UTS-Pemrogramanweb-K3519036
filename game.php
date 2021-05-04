<?php 

session_start();

// Mengecek keberadaan COOKIE dan jumlah lives yang dimiliki agar tidak terjadi by pass
include_once("cek.php");

// Menyimpan nilai lives dan score sementara
$lives = $_SESSION['lives'];
$score = $_SESSION['score'];

// Mengoreksi Jawaban
if (isset($_POST['submit'])){
  $hasil = $_SESSION['hasil'];
  $jawaban = $_POST['jawaban'];
  if ($jawaban == $hasil){
    // Apabila jawaban benar maka score di tambah 10
    $_SESSION['score'] += 10;
    include_once("prosesbenar.php");
    exit();
  } else {
    // Apabila jawaban salah maka lives dikurangi 1 dan score dikurangi 2
    $_SESSION['lives'] -= 1; 
    $_SESSION['score'] -= 2;
    if ($_SESSION['lives'] > 0){
      include_once("prosessalah.php");
      exit();
    } else {
      include_once("gameover.php");
      exit();
    }
  }
}

// Merandom angka x dan y
$x = random_int(0, 20);
$y = random_int(0, 20);

// Menyimpan hasil penjumlahan x + y dalam SESSION
$_SESSION['hasil'] = $x + $y;

// Header html
require("header.html");

?>

<!-- Tampilan Permainan -->
<form class="content" method="post" action="game.php">
  <!-- Logo Permainan -->
  <img class="mb-4" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.vexels.com%2Fmedia%2Fusers%2F3%2F139161%2Fisolated%2Fpreview%2Fc76ee72de9a5b980c5f0e0d6b7bac0e0-cruce-adem-s-a-adir-by-vexels.png&f=1&nofb=1" alt="Logo Penjumlahan" width="72" height="72">

  <!-- Kalimat Pembuka -->
  <h1 class="h3 mb-3 font-weight-normal">Hello<br><?= $_COOKIE['nama'];?></h1>
  <h2 class="h4 mb-3 font-weight-normal">Semangat, YOU CAN DO IT</h2>

  <!-- Menampilkan lives dan score saat ini -->
  <p>Lives : <?= $lives;?> | Score : <?= $score;?></p>
  
  <!-- Menampilkan soal -->
  <h3 class='h6 mb-3 font-weight-normal'><?= $x ;?> + <?= $y;?> = ... </h3>
  
  <!-- Tempat input jawaban -->
  <input type="text" class="form-control mb-2" placeholder="Jawaban Kamu" name="jawaban">
  <input class="btn btn-lg btn-warning btn-block" type="submit" name="submit" value="Submit">

  <!-- Copyright -->
  <p class="mt-5 mb-3 text-muted">© Pemrograman Website 2021</p>
</form>

<!-- Footer html -->
<?php require("footer.html"); ?>