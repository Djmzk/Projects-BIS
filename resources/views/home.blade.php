<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website | BIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <!-- navbar -->
    <header>
        <a href="#" class="brand">BIS</a>
        <div class="menu-btn">
            <div class="navigation">
                <div class="navigation-items">
                    <a href="#home">Home</a>
                    <a href="#About">About</a>
                    <a href="#feature">Feature</a>
                    <a href="#">Gallery</a>
                    <a href="{{route('postingan')}}">Berita</a>
                </div>
            </div>
        </div>
    </header>

    <!-- slide image -->
    <section class="home" id="home">
        <img decoding="async" class="img-slide active" src="image/a.png"></img>
        <img decoding="async" class="img-slide" src="image/b.png"></img>
        <div class="content active">
            <h1>Badan Intelegen.<br><span>Sekolah</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna anime. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut farhan ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum daily web
                design nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <a href="#team">Read More</a>
        </div>
        <div class="content">
            <h1>Hot News.<br><span>Toket</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna anime. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut farhan ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum daily web
                design nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <a href="#">Read More</a>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
        </div>
    </section>

    <!-- content -->

    <section class="About">
        <div class="nomer-harum">
            <h2>001</h2>
            <h1 id="About">About</h1>
        </div>
        <div class="rio">
            <p>BIS adalah sebuah organisasi yang tercipta pada tahun 2023,BIS diciptakan oleh 6 orang pemuda berusia
                rata rata 16 tahun</p>
        </div>
        <div class="angel">
            <p>BIS diciptakan dan dibentuk dengan tujuan untuk memberikan informasi seputar siswa di suatu sekolah atau
                universitas</p>
        </div>
    </section>

    <section class="feature">
        <div class="nomer-harum2">
            <h2>002</h2>
            <h1 id="feature">Feature</h1>
        </div>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="bahan/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="bahan/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="bahan/3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="bahan/4.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="bahan/5.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>

    </section>

    <!-- team member -->
    <section class="team">
        <div class="nomer-harum3">
            <h2>003</h2>
            <h1 id="team">Team Member</h1>
        </div>
        <div class="container">
            <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleSlidesOnly">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="box front">
                                        <img alt="" src="image/dugong.jpg">
                                        <h2>Alif Febriandi</h2>
                                        <h4>Ui/Ux</h4>
                                    </div>
                                    <div class="box back">
                                        <span class=""></span>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores soluta
                                            quidem dolorem debitis. Minima, optio illum magni exercitationem eum
                                            laborum! Incidunt sequi repellat vero.
                                        </p>
                                        <p class="socials">
                                            <a href="com.google"><i class=" fa fa-github"></i></a>
                                            <a href="https://www.instagram.com/alif.fbriandi"><i
                                                    class="fa fa-instagram"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="box front">
                                        <img alt="" src="image/cireng.jpg">
                                        <h2>Ahmad Ihksan</h2>
                                        <h4>Ui/Ux</h4>
                                    </div>
                                    <div class="box back">
                                        <span class=""></span>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores soluta
                                            quidem dolorem debitis. Minima, optio illum magni exercitationem eum
                                            laborum! Incidunt sequi repellat vero.
                                        </p>
                                        <p class="socials">
                                            <a href="com.google"><i class=" fa fa-github"></i></a>
                                            <a href="https://www.instagram.com/sann0412_"><i
                                                    class="fa fa-instagram"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="box front">
                                        <img alt="" src="image/engkong.jpg">
                                        <h2>Melky Herdianto</h2>
                                        <h4>Asisten</h4>
                                    </div>
                                    <div class="box back">
                                        <span class=""></span>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores soluta
                                            quidem dolorem debitis. Minima, optio illum magni exercitationem eum
                                            laborum! Incidunt sequi repellat vero.
                                        </p>
                                        <p class="socials">
                                            <a href="com.google"><i class=" fa fa-github"></i></a>
                                            <a href="https://www.instagram.com/herdianto.melky/"><i
                                                    class="fa fa-instagram"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="box front">
                                        <img alt="" src="image/agus.jpg">
                                        <h2>Bagus Santoso</h2>
                                        <h4>Front end</h4>
                                    </div>
                                    <div class="box back">
                                        <span class=""></span>
                                        <p>
                                            Saya Bagus Santoso lahir di Bandung pada tahun 2006. Saya kelas XII-RPL
                                            tahun 2023 ini tahun terakhir saya belajar di SMK PI, karena saya akan
                                            melanjutkan kuliah di tahun depan dan akan meraih cita-cita saya di masa
                                            depan.
                                        </p>
                                        <p class="socials">
                                            <a href=""><i class=" fa fa-github"></i></a>
                                            <a href="https://www.instagram.com/rillgoodd/"><i
                                                    class="fa fa-instagram"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="box front">
                                        <img alt="" src="image/bogay.jpg">
                                        <h2>Fikri Raditya</h2>
                                        <h4>Full Stack Dev</h4>
                                    </div>
                                    <div class="box back">
                                        <span class=""></span>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores soluta
                                            quidem dolorem debitis. Minima, optio illum magni exercitationem eum
                                            laborum! Incidunt sequi repellat vero.
                                        </p>
                                        <p class="socials">
                                            <a href="com.google"><i class=" fa fa-github"></i></a>
                                            <a href="https://www.instagram.com/raditya_hutama_14"><i
                                                    class="fa fa-instagram"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="box front">
                                        <img alt="" src="image/jawir.jpg">
                                        <h2>Dimas Dwi A</h2>
                                        <h4>Full Stack Dev</h4>
                                    </div>
                                    <div class="box back">
                                        <span class=""></span>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores soluta
                                            quidem dolorem debitis. Minima, optio illum magni exercitationem eum
                                            laborum! Incidunt sequi repellat vero.
                                        </p>
                                        <p class="socials">
                                            <a href="#"><i class="fab fa-github"></i></a>
                                            <a href="https://www.instagram.com/djmzk_"><i
                                                    class="fa fa-instagram"></i></a>
                                            <a href="com.google"><i class="fa fa-telegram"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- 004 -->

    <section class="004" id="team">
        <div class="nomer-harum4">
            <h2>004</h2>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="main.js" defer data-deferred="1"></script>
</body>

</html>
