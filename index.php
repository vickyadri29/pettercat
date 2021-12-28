<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="title">
        <h1>Petter Cat</h1>
        <p>Tempat Adopsi Kucing Terbaik Hanya Disini!</p>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="data.php">DATA</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="newcat.php">NEW CAT</a></li>
            </ul>
        </nav>
    </header>
    
    
    <main>
        <div id="content">
            <article id="gallery">
                <h2>Adopsi Kucing Yang Kamu Sukai</h2>
                <a href="#more"><button class="btn1">View More</button></a>
            </article>

            <article>
                <img src="cats/kucing.png" class="cats">
            </article>
        </div>

        <div id="more">
            <article id="viewmore">
                <h2>Kucing-kucing Sangat Lucu!</h2>
                <p>Sebagian orang sangat menyukai kucing. Oleh karena itu kami mempunyai ide untuk membuat suatu sistem kecil-kecilan tentang sebuah kucing.</p>
            </article>

            <article>
                <img src="cats/kucing2.png" class="cats">
            </article>
        </div>

        <div id="about-us">
            <h1>About Us</h1>
            <article id="about">
                <section class="card">
                    <h2>Muhammad Jindan</h2>
                    <p>F55119064</p>
                </section>

                <section class="card">
                    <h2>Vicky Herdiansyah Adri</h2>
                    <p>F55119069</p>
                </section>

                <section class="card">
                    <h2>Andri Irawan</h2>
                    <p>F55119061</p>
                </section>
            </article>
        </div>
    </main>

    <footer>
        <p>Tugas Praktikum UAS Pemograman Web 2</p>
    </footer>
</body>
</html>