<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <title>VirtuSee</title>
    <!-- Source Code in the description -->
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
        <div class="head-title">
            <div class="myh4">
                CONTOH PENERAPAN VIRTUSEE
            </div>
            <div class="myh3">
                Absensi Online
            </div>
        </div>
        <img src="image/absensi.svg" class="head-img">
    </section>

    <section class="container-fluid px-5">
        <div class="row flex-column px-5 mt-0">
            <div class="col text-title">
                situasi
            </div>
            <p class="col text-description">Sebuah perusahaan penyedia sales memiliki lebih dari 5.000 karyawan (Sales)
                yang
                tersebar di seluruh Indonesia. Perusahaan ini memberikan upah harian kepada setiap karyawannya sesuai
                dengan
                jumlah jam kerja yang dihitung mulai dari pukul 07:00 sampai 18:00. Perusahaan memiliki 34 team leader
                yang
                bertugas untuk mencatat dan memastikan kehadiran setiap sales setiap harinya.</p>
            <div class=" col text-title">
                Latar Belakang
            </div>
            <p class="col text-description">
                Perusahaan memiliki 34 team leader yang bertugas untuk mencatat dan memastikan kehadiran sales setiap
                harinya. Cara yang dilakukan adalah team leader memberikan Google Form kepada setiap sales untuk diisi
                setiap pagi & sore sebagai bukti kehadiran mereka.<br><br>
                Selanjutnya tugas setiap team leader adalah merekap data tersebut menggunakan Excel dan digabungkan
                dengan
                data team leader lainnya. Proses ini membuat proses rekap data absen menjadi tidak efisien, rawan
                terjadi
                kesalahan input data dan kemungkinan adanya kecurangan oleh tim sales.
            </p>
            <div class="col text-title">
                Rumusan Masalah
            </div>
            <p class="col text-description">
                1. Perusahaan menghabiskan lebih banyak waktu karena harus merekap data absen secara manual meggunakan
                Google Form & Excel.<br><br>
                2. Perusahaan kesulitan menentukan jumlah jam kerja karyawan karena berpatokan dengan waktu saat
                karyawan
                mengisi Google Form.
            </p>
            <div class="col text-title">
                Tujuan
            </div>
            <p class="col text-description">
                1. Perusahaan ingin mendapatkan data absensi secara real-time dan akurat.<br><br>
                2. Perusahaan ingin menentukan jumlah upah yang didapatkan karyawan dengan lebih mudah dan tepat.
            </p>
            <div class="col text-title">
                Alur Tanpa Virtusee
            </div>
            <p class="col text-description">
                <img src="image/unusevirtusee.png">
                Pada alur yang digunakan saat ini, data yang diberikan oleh tim sales akan diproses secara manual oleh
                setiap admin, kemudian data akan digabungkan dan di rekapitulasi pada proses akhir. Proses ini
                membutuhkan empat langkah, yaitu :<br><br>
                1. Tim sales mengirimkan data absen melalui Google Form.<br><br>
                2. Admin melakukan export data dari setiap form pada pukul 18:00.<br><br>
                3. Menggabungkan semua file Excel dari setiap admin menjadi satu.<br><br>
                4. Proses perhitungan jam kerja setiap karyawan.

            </p>
            <div class="col text-title">
                Alur Menggunakan Virtusee
            </div>
            <p class="col text-description">
                <img src="image/usevirtusee.png">
                Dengan menggunakan Virtusee, input data secara manual tidak perlu lagi dilakukan, karena Virtusee
                memiliki beberapa fitur, seperti :<br><br>
                <strong class="col text-description">Real Time Data Acquisition</strong> : Ketika tim sales memasukkan
                data
                melalui aplikasi mobile
                Virtusee, secara otomatis data tersebut akan tersinkronisasi dengan data di web admin Virtusee. Dengan
                teknologi GPS,
                admin dapat memantau waktu pengiriman data dan titik lokasi saat tim sales memasukkan data.<br><br>
                <strong class="col text-description">Working Hours Menu</strong> : Pada menu ini total working hour akan
                otomatis dihitung oleh sistem
                sesuai dengan waktu check in & check out tim lapangan.<br><br>
                <strong class="col text-description">Custom Dashboard</strong> : Virtusee memberikan layanan pembuatan
                dashboard seperti trendline
                pengeluaran untuk upah karyawan, jumlah jam kerja rata &#45; rata setiap karyawan dengan rentang waktu
                tertentu dll.<br><br>

            </p>
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
                        <a href="https://www.linkedin.com/company/virtuseeweb/?originalSubdomain=id" target="_blank"><i
                                class='bx bxl-linkedin-square'></i></a>
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
<script src="js/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
</body>

</html>
