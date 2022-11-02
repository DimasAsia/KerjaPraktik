<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-penerapan.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <title>VirtuSee</title>
</head>

<body>
    <nav class="nav">
        <div class="navbar-brand">
            <a href="/">
                <img src="image/logo.svg" class="logo-img">
            </a>
        </div>
        <span class="navTrigger">
            <i></i>
            <i></i>
            <i></i>
        </span>
        <div id="mainListDiv" class="main_list">
            <ul class="justify-content-end">
                <li class="nav-link"><a href="/">Home</a></li>
                <li class="nav-link"><a href="/penerapan">Penerapan</a></li>
                <li class="nav-link"><a href="/fitur">Fitur</a></li>
                <li class="nav-link"><a href="/kontak">Contact</a></li>
                <li class="nav-link"><a class="isDisable">Afiliasi</a></li>
                <button onclick="window.location.href='/welcome'">Login</button>
            </ul>
        </div>
    </nav>

    <section class="head">
        <div class="myh1">Penerapan Virtusee</div>
    </section>

    <section class="timeline">
        <ul>
            <li>
                <div class="timeline-box">
                    <div class="timeline-container">
                        <img src="image/absensi.svg" alt="" class="timeline-img">
                        <div class="timeline-card">
                            <div class="discovery">
                                <h1 class="time-title">Absensi Online</h1>
                            </div>
                            <div class="scientist">
                                <img src="image/absensi.svg" class="img-time" />
                                <p class="time-desc">
                                    Sebuah perusahaan penyedia sales memiliki lebih dari 5.000 karyawan (Sales) yang
                                    tersebar di seluruh Indonesia. Perusahaan ini memberikan upah harian kepada
                                    setiap
                                    karyawannya sesuai dengan jumlah jam kerja yang dihitung mulai dari pukul 07:00
                                    sampai 18:00. Perusahaan memiliki 34 team
                                </p>
                                <button onclick="window.location.href='/absensi'" class="time-button">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-box">
                    <div class="timeline-container">
                        <div class="timeline-card">
                            <div class="discovery">
                                <h1 class="time-title">Kunjungan Tim Lapangan</h1>
                            </div>
                            <div class="scientist">
                                <img src="image/kunjungan.svg" class="img-time" />
                                <p class="time-desc">
                                    Sebuah perusahaan penyedia minuman kemasan memiliki 1.000 outlet yang tersebar
                                    di seluruh Indonesia. Perusahaan memiliki 200 sales lapangan yang bertugas untuk
                                    memantau ketersediaan stok produknya. Setiap sales bertugas untuk memberikan
                                    data jumlah stok setiap produk dengan tepat dan dalam waktu secepatnya.
                                </p>
                                <button class="time-button" onclick="window.location.href='/kunjungan'">Read
                                    More</button>
                            </div>
                        </div>
                        <img src="image/kunjungan.svg" alt="" class="timeline-img">
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-box">
                    <div class="timeline-container">
                        <img src="image/pendataan.svg" alt="" class="timeline-img">
                        <div class="timeline-card">
                            <div class="discovery">
                                <h1 class="time-title">Pendataan Lokasi Baru</h1>
                            </div>
                            <div class="scientist">
                                <img src="image/pendataan.svg" class="img-time" />
                                <p class="time-desc">
                                    Sebuah perusahaan FMCG memiliki 200 orang petugas lapangan yang melakukan
                                    pendataan
                                    untuk outlet baru. Setiap petugas harus mendata 25 outlet baru yang belum
                                    menjual
                                    produk mereka. Dari hasil pendataan tersebut, outlet yang setuju untuk menjual
                                    produk mereka akan ditambahkan sebagai outlet baru dalam sistem.
                                </p>
                                <button class="time-button isDisable">Coming Soon</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </section>

    {{-- <section>
        <div class="cloud cloud-background">
            <img src="/image/awan.svg" alt="" class="cloud-img">
            <div class="cloud-content">
                <h1>Pantau kinerja tim lapangan Anda dengan lebih mudah</h1>
                <button class="btn-cloud" onclick="window.location.href='mailto:info@virtusee.com'">Request
                    Demo</button>
            </div>
        </div>
        </div>
    </section> --}}

    {{-- <footer>
        <div class="footer">
            <div class="row m-0">
                <div class="col-lg-8 col-md-7 ms-4 mb-4">
                    <a href="/"><img src="image/logofoot.svg"></a>
                    <p>Virtusee dibuat untuk mengakselerasi bisnis, khususnya untuk monitoring & tracking data yang
                        diberikan oleh tim lapangan.
                    </p>
                    <p>
                        JL. Penjaringan Sari, YKP Pandugo 2 Blok P No. 1, Penjaringan Sari, Kec. Rungkut, Kota Surabaya,
                        Jawa Timur. Indonesia
                    </p>
                    <div class="socials">
                        <a href="#"><i class='bx bxs-phone'></i></a>
                        <a href="https://www.instagram.com/virtusee/" target="_blank"><i
                                class='bx bxl-instagram-alt'></i></a>
                        <a href="https://www.linkedin.com/company/virtuseeweb/?originalSubdomain=id" target="_blank"><i
                                class='bx bxl-linkedin-square'></i></a>
                    </div>
                </div>
                <div class="col">
                    <div class="row m-0">
                        <div class="col-lg-5 col-md-4 col-sm-5">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/fitur">Fitur</a></li>
                                <li><a href="/penerapan">Penerapan</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-5 me-5">
                            <ul>
                                <li><a href="/kontak">Kontak</a></li>
                                <li><a href="/Login">Login</a></li>
                                <li><a
                                        href="https://play.google.com/store/apps/details?id=com.virtusee.core&hl=en&gl=US"><img
                                            src="image/googleplay.svg" alt="" target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-line"></div>
            <div class="col">
                <p class="text-copy">Copyright &copy;2021 PT. Virtusee Peta Sukses</p>
            </div>
        </div>

    </footer> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
