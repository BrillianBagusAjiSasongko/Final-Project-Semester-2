<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensiklopedia Teknologi</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">Ensiklopedia Tekno</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#category">Category</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#search">Search</a></li>
                    <li>
                        <?php
                            if(isset($_SESSION['user_username'])){
                                echo $_SESSION['user_username']. " |<a href='logout.php'>Logout</a>";
                            }else{?>
                                <a href="login.php" class="tbl-signup">Login</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- Untuk Home -->
        <section id="home">
            <img src="https://img.freepik.com/free-vector/illustration-social-media-concept_53876-17855.jpg?size=626&ext=jpg&ga=GA1.2.1854560466.1654496078"/>
            <div class="kolom">
                <p class="deskripsi">Ketahui segala hal tentang Teknologi di sini.</p>
                <h2>Tetap sehat dan Terus Belajar Setiap Saat.</h2>
                <p class="quote">"Jangan pernah berhenti belajar, karena hidup tak pernah berhenti mengajarkan."</p>
                <p></p><a href="" class="tbl-biru">Pelajari Lebih Lanjut. Klik Disini >>></a></p> 
            </div>
        </section>
        
        <!-- Untuk Category -->
        <section id="category">
            <div class="kolom">
                <p class="deskripsi">Mungkin Saya Tahu Yang Sedang Kamu Cari.</p>
                <div class="cat">
                    <a href="">News/Berita</a>
                    <p class="opsi">Ketahui Berita Terbaru Tentang Teknologi Disini</p>
                    <a href="">Pengetahuan</a>
                    <p class="opsi">Mau Tahu Sesuatu? Cek Disini</p>
                    <a href="">Tutorial</a>
                    <p class="opsi">Cari Tutorial Yang berhubungan Dengan Teknologi disini</p>
                    <a href="">Lainnya</a>
                    <p class="opsi">Tidak Sesuai Yang Kamu Cari? Coba Klik "Searc" Diatas.</p>
                </div>
            </div>
            <img src="https://img.freepik.com/free-vector/illustration-social-media-concept_53876-18146.jpg?size=626&ext=jpg&ga=GA1.2.1854560466.1654496078"/>
        </section>

        <!-- Untuk About -->
        <section id="about">
            <img src="https://img.freepik.com/free-vector/set-people-using-modern-technologies_74855-1744.jpg?size=626&ext=jpg&ga=GA1.2.1854560466.1654496078"/>
            <div class="kolom">
                <p class="tentang">Profil Developer</p>
                <p class="profile">Nama     : Brillian Bagus Aji Sasongko</p>
                <p class="profile">Nrp      : 3121510412</p>
                <p class="profile">Prodi    : D3 Teknik Informatika</p>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Bagus Aji</h3>
                    <p>Bismillah Dapet Nilai Bagus Semester ini. :)</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jln. Diponegoro Menggare, Slahung, Ponorogo</p>
                    <p>Kode Pos : 63463</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Whats App : 082337736346</p>
                    <p>Instagram : @Maz_Aji.18</p>
                    <p>Twitter : @Faylyne_Dotta</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>Brillian Bagus Aji Sasongko</b> All Right Reserved.
        </div>
    </div>
</body>
</html>