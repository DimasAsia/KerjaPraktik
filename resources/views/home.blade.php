<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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

    <section class="home">
        <div class="row m-0 flex-arrow">
            <div class="col px-0 align-items-start">
                <h1 class="intro-title">Solusi monitoring & tracking kinerja tim
                    lapangan Anda
                </h1>
                <p class="intro-desc">
                    Aplikasi berbasis Web & Android untuk memantau kinerja
                    tim lapangan Anda. Dilengkapi dengan teknologi GPS &
                    custom form.
                </p>
                <div class="count-wrapper">
                    <div class="count-container">
                        <i class="fa-solid fa-users"></i>
                        <span class="num" data-val="225">0</span>
                        <span class="text">Pengguna Total</span>
                    </div>
                    <div class="count-container">
                        <i class="fa-solid fa-user"></i>
                        <span class="num" data-val="280">0</span>
                        <span class="text">Pengguna Aktif</span>
                    </div>
                    <div class="count-container">
                        <i class="fa-solid fa-building"></i>
                        <span class="num" data-val="340">0</span>
                        <span class="text">Jumlah Perusahaan</span>
                    </div>
                </div>
                <button class="intro-button" onclick="window.location.href='mailto:info@virtusee.com'">Contact
                    Us</button>
            </div>
            <div class="col px-0 align-items-end">
                <img src="image/circle-cover.svg" alt="" class="img-intro-1">
                <img src="image/Deco.png" class="img-intro-2">
            </div>
        </div>
    </section>

    <section>
        <div class="myh2">
            Fitur Virtusee
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card-container swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/Tracking.svg" alt="" class="card-img" />
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-fitur">Tracking Karyawan </h2>
                            <p class="description">
                                Dengan fitur tracking dari Virtusee, admin dapat meninjau seluruh laporan kunjungan dari
                                tim lapangan. Laporan kunjungan dapat berisi koordinat lokasi, waktu masuk, durasi
                                kunjungan, dan waktu keluar.
                            </p>

                            <button class="button" onclick="window.location.href='/fitur'">View More</button>
                        </div>
                    </div>
                    <div class="card-container swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/Kuisioner.svg" alt="" class="card-img" />
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-fitur">Customer Kuesioner</h2>
                            <p class="description">
                                Buat kuesioner custom sesuai dengan kebutuhan perusahaan Anda. Format data kuesioner
                                dapat berupa text, angka, multiple selection, single selection, foto, audio, tanggal dan
                                juga tanda tangan digital.
                            </p>
                            <button class="button" onclick="window.location.href='/fitur'">View More</button>
                        </div>
                    </div>
                    <div class="card-container swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/Lokasi.svg" alt="" class="card-img" />
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-fitur">Pendataan Lokasi Baru</h2>
                            <p class="description">
                                Tambahkan lokasi toko baru yang telah dikunjungi oleh tim lapangan ke dalam sistem
                                manajemen Anda.
                            </p>

                            <button class="button" onclick="window.location.href='/fitur'">View More</button>
                        </div>
                    </div>
                    <div class="card-container swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/Jadwal.svg" alt="" class="card-img" />
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-fitur">Pengaturan Jadwal Kunjungan</h2>
                            <p class="description">
                                Dengan Virtusee, Anda dapat memantau dan mengatur jadwal kunjungan tim lapangan ke
                                outlet atau toko Anda.
                            </p>

                            <button class="button" onclick="window.location.href='/fitur'">View
                                More</button>
                        </div>
                    </div>
                    <div class="card-container swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/Report.svg" alt="" class="card-img" />
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-fitur">Data Repot Kunjungan</h2>
                            <p class="description">
                                Anda dapat mengunduh seluruh data laporan dari form kuesioner ke dalam bentuk file Excel
                                berdasarkan rentang tanggal yang ditentukan.
                            </p>

                            <button class="button" onclick="window.location.href='/fitur'">View More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section>
        <div class="intro-text">
            <div class="myh2">keunggulan yang ada di virtusee</div>
        </div>
        <div class="box-card">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="box-card-img">
                            <i class="bx bxs-dashboard icon-size"></i>
                        </div>
                        <div>
                            <h3 class="flip-card-info">Custom Dashboard</h3>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="text-flip">Buat custom dashboard sesuai data Anda untuk memantau seluruh aktivitas
                            dalam satu halaman.
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="box-card-img">
                            <i class="bx bxs-bar-chart-square icon-size"></i>
                        </div>
                        <div>
                            <h3 class="flip-card-info">Custom Data Report</h3>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="text-flip">
                            Virtusee memfasilitasi pembuatan tampilan report custom sesuai dengan data yang Anda
                            miliki.
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="box-card-img">
                            <i class="bx bx-current-location icon-size"></i>
                        </div>
                        <div>
                            <h3 class="flip-card-info">Teknologi GPS</h3>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="text-flip">Rekam setiap lokasi yang telah dikunjungi oleh tim lapangan lengkap
                            beserta
                            dengan
                            koordinatnya.
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="box-card-img">
                            <i class="bx bxs-webcam icon-size"></i>
                        </div>
                        <div>
                            <h3 class="flip-card-info">Foto Langsung Dari Kamera</h3>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="text-flip">
                            Virtusee hanya menerima foto yang langsung diambil dari kamera handphone
                            user pada saat
                            melakukan kunjungan.
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="box-card-img">
                            <i class="bx bxs-data icon-size"></i>
                        </div>
                        <div>
                            <h3 class="flip-card-info">Penyimpanan Data Unlimited</h3>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="text-flip">
                            Simpan data Anda di Virtusee tanpa ada maksimum ukuran dan jangka waktu kedaluwarsa.
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="box-card-img">
                            <i class="bx bx-wifi-off icon-size"></i>
                        </div>
                        <div>
                            <h3 class="flip-card-info">Bekerja Walau Tanpa Internet</h3>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="text-flip">
                            Virtusee dapat digunakan walau tidak ada koneksi internet dan akan melakukan sinkronisasi
                            setelah terhubung kembali.
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="box-card-img">
                            <i class="bx bxs-map-alt icon-size"></i>
                        </div>
                        <div>
                            <h3 class="flip-card-info">Cakupan Area Luas</h3>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="text-flip">
                            Dengan menggunakan Virtusee, Anda dapat memantau seluruh pekerjaan tim di seluruh Indonesia
                            bahkan di seluruh dunia.
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="box-card-img">
                            <i class="bx bx-support icon-size"></i>
                        </div>
                        <div>
                            <h3 class="flip-card-info">Active Customer Support</h3>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="text-flip">
                            Tim support kami akan selalu siap membantu dalam setiap kendala saat Anda menggunakan
                            Virtusee.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="myh2">
            Virtusee dapat digunakan di berbagai industri
        </div>
        <div class="field-container">
            <div class="card-field">
                <div>
                    <img src="https://img.icons8.com/bubbles/200/1FB141/shop.png" class="field-icon" />
                </div>
                <div class="field-title">
                    Retail
                </div>
            </div>
            <div class="card-field">
                <div>
                    <img src="https://img.icons8.com/clouds/200/1FB141/favorite-cart.png" alt=""
                        class="field-icon">
                </div>
                <div class="field-title">
                    FMCG
                </div>
            </div>
            <div class="card-field">
                <div>
                    <img src="https://img.icons8.com/clouds/200/1FB141/manufacturing.png" alt=""
                        class="field-icon">
                </div>
                <div class="field-title">
                    Manufaktur
                </div>
            </div>
            <div class="card-field">
                <div>
                    <img src="https://img.icons8.com/clouds/200/1FB141/suitcase.png" alt=""
                        class="field-icon">
                </div>
                <div class="field-title">
                    Pariwisata
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="myh2">
            Berita
        </div>
        <div class="container">
            <div>
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="image/news1.png" alt="">
                                <div class="single-blog-img-overlay"></div>
                            </div>
                            <div class="single-blog-txt">
                                <h2><a href="#">Balai Besar Disabilitas "Kartini" Respon Disabilitas Intelektual
                                        Terlantar</a></h2>
                                <h3>20 April 2021</h3>
                                <p>
                                    Balai Besar Disabilitas "Kartini" Temanggung merespon kasus keterlantaran yang
                                    menimpa Penyandang Disabilitas Intelektual di Kabupaten Brebes.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <a
                                href="https://perangkatdaerah.polmankab.go.id/Dinsos/kegiatandetail/choaching-melalui-aplikasi-virtusee-data-anak-yatim-dan-yatim-piatu-covid-19">
                                <div class="single-blog-img">
                                    <img src="image/news2.png">
                                    <div class="single-blog-img-overlay"></div>
                                </div>
                            </a>
                            <div class="single-blog-txt">
                                <h2>
                                    <a
                                        href="https://perangkatdaerah.polmankab.go.id/Dinsos/kegiatandetail/choaching-melalui-aplikasi-virtusee-data-anak-yatim-dan-yatim-piatu-covid-19">Why
                                        Choaching Melalui Aplikasi Virtusee Data Anak Yatim dan Yatim Piatu Covid 19
                                    </a>
                                </h2>
                                <h3>20 September 2021</h3>
                                <p>
                                    Kepala Seksi Rehabilitasi Lansia dan Anak Bersama Peksos dan Pendamping PD Melakukan
                                    Choaching Melalui Aplikasi Virtusee Data Anak Yatim dan Yatim Piatu Covid-19 di Desa
                                    Sidorejo dan Kelurahan Sidodadi Kecamatan Wonomulyo
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="image/news3.png">
                                <div class="single-blog-img-overlay"></div>
                            </div>
                            <div class="single-blog-txt">
                                <h2><a href="#">136 Anak Yatim Korban Covid di Kota Malang Diajukan Dapat Bantuan
                                        dari Kementerian Sosial</a></h2>
                                <h3>03 November 2021</h3>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="cloud cloud-background">
            <img src="/image/awan.svg" alt="" class="cloud-img">
            <div class="cloud-content">
                <h1>Akselerasi bisnis Anda dengan Virtusee</h1>
                <p>Semua pekerjaan yang membutuhkan form, info lokasi, dan kecepatan
                    mendapatkan data membutuhkan Virtusee</p>
                <button class="btn-cloud" onclick="window.location.href='/penerapan'">Lihat Penerapan
                    Virtusee</button>
            </div>
        </div>
        </div>
    </section>

    <footer>
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
                        <a href="https://www.linkedin.com/company/virtuseeweb/?originalSubdomain=id"
                            target="_blank"><i class='bx bxl-linkedin-square'></i></a>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
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

    </footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</html>
