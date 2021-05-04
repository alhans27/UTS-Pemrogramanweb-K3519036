Bismillah. Perkenalkan saya Hanif Sajid Al Amna, mahasiswa PTIK 2019 kelas Genap(B) dengan nim K3519036.
Aplikasi Game Matematika Penjumlahan Sederhana ini merupakan sebuah game sederhana berbasis website yang dibuat untuk memenuhi tugas UTS Pemrograman Desktop yang diampu oleh Dosen Bapak Rosihan Ari Yuana.

Berikut URL website untuk aplikasi ini : http://gamepenjumlahanhanif.atwebpages.com/
===========================================

******Cara Kerja Aplikasi : ******
//------------------//
1. Ketika pengguna mengakses website http://gamepenjumlahanhanif.atwebpages.com/ , apabila pengguna sudah pernah melakukan login nama dan email, maka pengguna akan diarahkan ke halaman "index.php" yang mana halaman ini merupakan tampilan awal dari permainan. Apabila pengguna belum pernah melakukan login nama dan email, maka pengguna akan dialihkan ke halaman "login.php" yang merupakan halaman tampilan form LOGIN.
2. Di halaman "login.php", pengguna diminta mengisi nama lengkap dan email. Apabila pengguna menekan tombol "Sign In" maka sistem akan membuat COOKIE nama dan COOKIE email, lalu pengguna akan diarahkan ke halaman "index.php" yang merupakan halaman awal dari permainan.
3. Pada halaman "index.php" terdapat tombol "Mulai Bermain" untuk memulai permainan dan ada pilihan "Bukan Anda? Klik Disini" apabila pengguna ingin menggunakan nama dan email lain. Apabila pengguna memilih tombol "Mulai Bermain", maka pengguna akan diarahkan ke halaman "game.php" yang merupakan halaman yang menampilkan permainan dalam aplikasi ini. Apabila pengguna memilih pilihan "Bukan Anda? Klik Disini", pengguna akan diarahkan kembali ke halaman "login.php".
4. Pada halaman "game.php" atau halaman permainan, Aplikasi akan menyapa pengguna sesuai dengan nama lengkap yang pengguna inputkan di form LOGIN (sesuai yang tercatat dalam COOKIE browser pengguna). Untuk memulai permainan, mula-mula pengguna akan diberi lives 5 dan score awal 0. Kemudian sistem merandom 2 angka secara acak dari 0 sampai 20. Pengguna diminta menjawab hasil penjumlahan dari kedua bilangan acak tersebut. 
5. Apabila jawaban pengguna BENAR, maka score pengguna akan bertambah 10 dan akan muncul tampilan berisi "Selamat Jawaban Kamu BENAR" dan juga tampilan lives dan score sementara dari pengguna. Di dalam halaman ini terdapat pilihan tombol "Game Selanjutnya" dan "Berhenti Bermain". Apabila pengguna memilih "Game Selanjutnya" maka sistem akan merandom 2 angka kembali secara acak dari 0 sampai 20 dan pengguna diminta menjawab hasil dari penjumlahan kedua bilangan acak tersebut. Apabila pengguna memilih "Berhenti Bermain", maka pengguna akan diarahkan kembali ke halaman awal permainan(yaitu halaman "index.php").
6. Apabila jawaban pengguna SALAH, maka lives pengguna akan berkurang 1 dan score pengguna akan berkurang 2, dan akan muncul tampilan berisi "Sayang Sekali Jawaban Kamu SALAH" dan juga tampilan lives dan score sementara dari pengguna. Di dalam halaman ini juga terdapat pilihan tombol "Game Selanjutnya" dan "Berhenti Bermain". Apabila pengguna memilih "Game Selanjutnya" maka sistem akan merandom 2 angka kembali secara acak dari 0 sampai 20 dan pengguna diminta menjawab hasil dari penjumlahan kedua bilangan acak tersebut. Apabila pengguna memilih "Berhenti Bermain", maka pengguna akan diarahkan kembali ke halaman awal permainan(yaitu halaman "index.php").
7. Game akan berhenti ketika lives pengguna mencapai 0. Apabila pengguna SALAH menjawab sebanyak 5 kali (lives pengguna mencapai 0) maka akan tampil halaman bertuliskan "Sayang Permainan Sudah Selesai.". Halaman ini menampilkan score akhir yang diperoleh pengguna dan juga menampilkan 10 pengguna teratas dengan score terbanyak. Pada halaman ini terdapat pilihan "Main Lagi" dan "Berhenti Bermain". Apabila pengguna memilih "Main Lagi" maka pengguna akan diarahkan ke halaman "index.php" (halaman awal permainan). Apabila pengguna memilih "Berhenti Bermain" maka pengguna akan diarahkan kembali ke halaman "login.php" (halaman form LOGIN).
8. Dalam permainan ini, antar pengguna bersaing untuk mendapatkan score tertinggi dan masuk dalam daftar 10 pengguna teratas di akhir permainan.
//------------------//


******Kegunaan File : ******
//------------------//
index.php           -> tampilan awal permainan
login.php           -> form login bagi pengguna yang belum melakukan LOGIN
game.php            -> tampilan permainan, dimana sistem juga merandom angka yang akan ditanyakan
cek.php             -> untuk mencegah terjadinya by pass oleh pengguna yang ingin langsung mengakses file-file lain tanpa melalui index.php dan mencegah pemain yang memiliki lives 0 dan kurang dari 0 agar tidak bisa mengakses permainan lagi
prosesbenar.php     -> tampilan apabila pengguna menjawab dengan jawaban yang BENAR
prosessalah.php     -> tampilan apabila pengguna menjawab dengan jawaban yang SALAH
gameover.php        -> tampilan apabila lives pengguna mencapai 0 (game berakhir)
dbparameter.php     -> untuk mendeskripsikan variabel-variabel yang digunakan sebagai paramater untuk koneksi ke Database
dbconnect.php       -> untuk mengkoneksikan ke Database, Menginput nama pengguna dan score akhir yang diperoleh ke dalam Database dan menampilkan 10 pengguna dengan score teratas
header.html         -> file berisi bagian header dari sebuah tag html(bootstrap, title, css dan lain-lain dan tag pembuka untuk body) untuk mempersingkat penggunaan kode program
footer.html         -> file berisi bagian footer dari sebuah tag html(tag penutup dari body dan html)
//------------------//

LINK WEBSITE    : http://gamepenjumlahanhanif.atwebpages.com/
LINK GITHUB     : https://github.com/hanif26/UTS-Pemrogramanweb-K3519036

*****************************************************************************************************************
DEMIKIAN PENJELASAN MENGENAI APLIKASI GAME MATEMATIKA PENJUMLAHAN SEDERHANA YANG SAYA BUAT. MOHON MAAF APABILA BANYAK KESALAHAN. TERIMAKASIH

=====================================================================
BIODATA MAHASISWA
NAMA        : HANIF SAJID AL AMNA
NIM         : K3519036
KELAS       : GENAP / B
MATKUL      : PEMROGRAMAN WEBSITE & PRAKTIKUM PEMROGRAMAN WEBSITE
SEMESTER    : IV (GENAP)
=====================================================================