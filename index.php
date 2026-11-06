
<?php
// Data Profil
$nama = "Khairul Adi Extrana";
$jurusan = "Informatika";
$kampus = "Sekolah Tinggi Teknik Pati";

$deskripsi = "Saya adalah mahasiswa Informatika yang
memiliki ketertarikan pada dunia teknologi, pemrograman,
dan pengembangan website.";

// Data Skills
$skills = ["HTML", "CSS", "PHP", "JavaScript", "Python", "MySQL"];

// Data Kontak
$email = "irulslwy@gmail.com";
$instagram = "@irulslwy";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profil - <?php echo $nama; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar">

            <div class="brand">
                <img src="gambar/logosttp.png" alt="Logo STTP">
                <h2 class="logo">BIODATA</h2>
            </div>

            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

        </nav>
    </header>

    <!-- Home -->
    <section id="home" class="hero">

        <div class="hero-text">
            <h4>WELCOME TO MY WEBSITE</h4>

            <h1>Halo, Saya <span><?php echo $nama; ?></span></h1>

            <h3><?php echo $jurusan; ?></h3>

            <p>
                Selamat datang di website profil pribadi saya.
                Mari mengenal saya lebih dekat.
            </p>

            <a href="#about" class="btn">Tentang Saya</a>
        </div>

        <div class="hero-image">
            <img src="gambar/fotoMe1.jpeg" alt="Foto Profil">
        </div>

    </section>

    <!-- About -->
    <section id="about" class="about">

        <h2>About Me</h2>

        <div class="about-content">
            <h3><?php echo $nama; ?></h3>

            <p><?php echo $deskripsi; ?></p>

            <p>
                <strong>Jurusan:</strong>
                <?php echo $jurusan; ?>
            </p>

            <p>
                <strong>Kampus:</strong>
                <?php echo $kampus; ?>
            </p>
        </div>

    </section>

    <!-- Skills -->
    <section id="skills" class="skills">

        <h2>My Skills</h2>

        <p class="subtitle">
            Beberapa kemampuan yang sedang saya pelajari.
        </p>

        <div class="skill-container">

            <?php foreach ($skills as $skill) { ?>

                <div class="skill-card">
                    <h3><?php echo $skill; ?></h3>
                    <p>Basic Programming</p>
                </div>

            <?php } ?>

        </div>

    </section>

    <!-- Contact -->
    <section id="contact" class="contact">

        <h2>Contact Me</h2>

        <p>Silakan hubungi saya melalui kontak berikut.</p>

        <div class="contact-info">
            <p>Email: <?php echo $email; ?></p>
            <p>Instagram: <?php echo $instagram; ?></p>
        </div>

    </section>

    <!-- Footer -->
    <footer>
        <p>
            &copy; <?php echo date("Y"); ?>
            <?php echo $nama; ?>. All Rights Reserved.
        </p>
    </footer>

</body>
</html>
