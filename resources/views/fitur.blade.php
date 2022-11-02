<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-fitur.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
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

    <section class="head">
        <div class="myh1">
            Fitur Virtusee
        </div>
    </section>

    <section>
        <div class="tabs">

            <input type="radio" id="tab1" name="tab-control" checked>
            <input type="radio" id="tab2" name="tab-control">
            <input type="radio" id="tab3" name="tab-control">
            <input type="radio" id="tab4" name="tab-control">
            <input type="radio" id="tab5" name="tab-control">

            <ul>
                <li title="Tracking"><label for="tab1" role="button"><svg viewBox="0 0 24 24">
                            <path
                                d="M12 17L13 15V9.858C14.721 9.411 16 7.858 16 6C16 3.794 14.206 2 12 2C9.794 2 8 3.794 8 6C8 7.858 9.279 9.411 11 9.858V15L12 17Z" />
                            <path
                                d="M16.267 10.563L15.734 12.491C18.325 13.207 20 14.584 20 16C20 17.892 16.715 20 12 20C7.285 20 4 17.892 4 16C4 14.584 5.675 13.207 8.267 12.49L7.734 10.562C4.197 11.54 2 13.623 2 16C2 19.364 6.393 22 12 22C17.607 22 22 19.364 22 16C22 13.623 19.803 11.54 16.267 10.563Z" />
                        </svg><br><span class="font-tabs">Tracking</span></label></li>
                <li title="Kuesioner"><label for="tab2" role="button"><svg viewBox="0 0 24 24">
                            <path
                                d="M20.0477 8.01758L14.0477 2.01758H6.04773C5.5173 2.01758 5.00859 2.22829 4.63352 2.60336C4.25844 2.97844 4.04773 3.48715 4.04773 4.01758V20.0176C4.04773 20.548 4.25844 21.0567 4.63352 21.4318C5.00859 21.8069 5.5173 22.0176 6.04773 22.0176H18.0477C18.5782 22.0176 19.0869 21.8069 19.4619 21.4318C19.837 21.0567 20.0477 20.548 20.0477 20.0176V8.01758ZM9.04773 19.0176H7.04773V10.0176H9.04773V19.0176ZM13.0477 19.0176H11.0477V13.0176H13.0477V19.0176ZM17.0477 19.0176H15.0477V16.0176H17.0477V19.0176ZM14.0477 9.01758H13.0477V4.01758L18.0477 9.01758H14.0477Z" />
                        </svg><br><span class="font-tabs">Kuesioner</span></label></li>
                <li title="Report"><label for="tab3" role="button"><svg viewBox="0 0 24 24">
                            <path
                                d="M20 2H4C2.897 2 2 2.894 2 3.992V16.008C2 17.106 2.897 18 4 18H7V22L13.351 18H20C21.103 18 22 17.106 22 16.008V3.992C21.9984 3.46279 21.7869 2.95583 21.412 2.58237C21.037 2.20891 20.5292 1.99947 20 2ZM8.999 14.999H7V13L12.53 7.478L14.528 9.477L8.999 14.999ZM15.471 8.535L13.472 6.536L14.996 5.013L16.995 7.012L15.471 8.535V8.535Z" />
                        </svg><br><span class="font-tabs">Report</span></label></li>
                <li title="Lokasi"><label for="tab4" role="button"><svg viewBox="0 0 24 24">
                            <path
                                d="M12.0323 16.5366C14.2415 16.5366 16.0323 14.7458 16.0323 12.5366C16.0323 10.3275 14.2415 8.53662 12.0323 8.53662C9.82321 8.53662 8.03235 10.3275 8.03235 12.5366C8.03235 14.7458 9.82321 16.5366 12.0323 16.5366Z" />
                            <path
                                d="M13.0323 4.60562V2.53662H11.0323V4.60562C9.27265 4.8303 7.63732 5.63279 6.38292 6.88719C5.12852 8.14159 4.32603 9.77692 4.10135 11.5366H2.03235V13.5366H4.10135C4.3257 15.2965 5.12808 16.932 6.38254 18.1864C7.63701 19.4409 9.27252 20.2433 11.0323 20.4676V22.5366H13.0323V20.4676C14.7922 20.2434 16.4278 19.4411 17.6823 18.1866C18.9368 16.9321 19.7392 15.2965 19.9633 13.5366H22.0323V11.5366H19.9633C19.739 9.77679 18.9366 8.14128 17.6822 6.88682C16.4277 5.63236 14.7922 4.82997 13.0323 4.60562V4.60562ZM12.0323 18.5366C8.72335 18.5366 6.03235 15.8456 6.03235 12.5366C6.03235 9.22762 8.72335 6.53662 12.0323 6.53662C15.3413 6.53662 18.0323 9.22762 18.0323 12.5366C18.0323 15.8456 15.3413 18.5366 12.0323 18.5366Z" />
                        </svg><br><span class="font-tabs">Lokasi</span></label></li>
                <li title="Jadwal"><label for="tab5" role="button"><svg viewBox="0 0 24 24">
                            <path
                                d="M21 20V6C21 4.897 20.103 4 19 4H17V2H15V4H9V2H7V4H5C3.897 4 3 4.897 3 6V20C3 21.103 3.897 22 5 22H19C20.103 22 21 21.103 21 20ZM9 18H7V16H9V18ZM9 14H7V12H9V14ZM13 18H11V16H13V18ZM13 14H11V12H13V14ZM17 18H15V16H17V18ZM17 14H15V12H17V14ZM19 9H5V7H19V9Z" />
                        </svg><br><span class="font-tabs">Jadwal</span></label></li>
            </ul>

            <div class="slider">
                <div class="indicator"></div>
            </div>
            <div class="content">
                <div class="wrap-content">
                    <h2>Tracking</h2>
                    <div class="tab-content">
                        <img src="image/Tracking.svg" alt="">
                        <div class="tab-info">
                            <p>
                                Dengan fitur tracking dari Virtusee, admin dapat meninjau seluruh laporan kunjungan dari
                                tim
                                lapangan. Laporan kunjungan dapat berisi koordinat lokasi, waktu masuk, durasi
                                kunjungan, dan
                                waktu
                                keluar.
                            </p>
                            <div class="tab-icon">
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Rekam Laporan Harian</p>
                                </div>
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Tracking Lokasi dengan GPS</p>
                                </div>
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Absensi Online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-content">
                    <h2>Kuesioner</h2>
                    <div class="tab-content">
                        <img src="image/Kuisioner.svg" alt="">
                        <div class="tab-info">
                            <p>
                                Buat kuesioner custom sesuai dengan kebutuhan perusahaan Anda. Format data kuesioner
                                dapat
                                berupa
                                text, angka, multiple selection, single selection, foto, audio, tanggal dan juga
                                tanda
                                tangan
                                digital.
                            </p>
                            <div class="tab-icon">
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Fully Customizable</p>
                                </div>
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Berbagai Format Data</p>
                                </div>
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Multiple Form</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-content">
                    <h2>Report</h2>
                    <div class="tab-content">
                        <img src="image/Report.svg" alt="">
                        <div class="tab-info">
                            <p>
                                Anda dapat mengunduh seluruh data laporan dari form kuesioner ke dalam bentuk
                                file
                                Excel
                                berdasarkan
                                rentang tanggal yang ditentukan.
                            </p>
                            <div class="tab-icon">
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Custom Filter Data</p>
                                </div>
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Download Berbentuk Excel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-content">
                    <h2>Lokasi</h2>
                    <div class="tab-content">
                        <img src="image/Lokasi.svg" alt="">
                        <div class="tab-info">
                            <p>
                                Tambahkan lokasi toko baru yang telah dikunjungi oleh tim lapangan ke dalam
                                sistem
                                manajemen
                                Anda.
                            </p>
                            <div class="tab-icon">
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Atur Jarak Minimum Antar Toko</p>
                                </div>
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Pendaftaran Lokasi Toko Baru</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-content">
                    <h2>Jadwal</h2>
                    <div class="tab-content">
                        <img src="image/Jadwal.svg" alt="">
                        <div class="tab-info">
                            <p>
                                Dengan Virtusee, Anda dapat memantau dan mengatur jadwal kunjungan tim
                                lapangan
                                ke
                                outlet atau
                                toko
                                Anda.
                            </p>
                            <div class="tab-icon">
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Buat Jadwal Kunjungan Baru</p>
                                </div>
                                <div>
                                    <i class='bx bxs-check-circle'></i>
                                    <p> Atur Jadwal Kunjungan Tim Anda</p>
                                </div>
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
                <button class="btn-cloud">Lihat Penerapan Virtusee</button>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
