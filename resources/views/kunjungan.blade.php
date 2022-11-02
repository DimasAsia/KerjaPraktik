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
                Kunjungan Tim Lapangan
            </div>
        </div>
        <img src="image/kunjungan.svg" class="head-img">
    </section>

    <section class="container-fluid px-5">
        <div class="row flex-column px-5 mt-0">
            <div class="col text-title">
                situasi
            </div>
            <p class="col text-description">Sebuah perusahaan penyedia minuman kemasan memiliki 1.000 outlet yang
                tersebar
                di seluruh Indonesia. Perusahaan memiliki 200 sales lapangan yang bertugas untuk memantau ketersediaan
                stok produknya. Setiap sales bertugas untuk memberikan data jumlah stok setiap produk dengan tepat dan
                dalam waktu secepatnya.</p>
            <div class="col text-title">
                Latar Belakang
            </div>
            <p class="col text-description">
                Perusahaan memiliki kendala dalam proses rekapitulasi karena banyaknya jumlah data yang masuk.
                Perusahaan tersebut membutuhkan tiga orang admin untuk merekap semua data ke dalam sebuah file Excel.
                Hal ini membutuhkan waktu yang cukup lama karena sales harus mengirimkan data mereka melalui aplikasi
                messenger ke setiap admin. Selain waktu yang lama, masalah yang sering terjadi adalah kekeliruan admin
                dalam memasukkan data, serta duplikasi data yang terjadi karena admin memasukkan data yang sama ke dalam
                file Excel, hal ini dapat menyebabkan perbedaan data saat rekap data lapangan dilakukan.<br><br>
                Masalah kedua yang sering dialami adalah kecurangan yang dilakukan oleh tim lapangan dengan cara
                memberikan data palsu atau data pada hari sebelumnya. Mengapa ini bisa terjadi? Karena perusahaan tidak
                memiliki kemampuan untuk mengetahui posisi tim sales saat memberikan data. Hal seperti ini dapat membuat
                perusahaan sulit mengambil keputusan bisnis dan tentu saja dapat menyebabkan kerugian karena tidak
                mendapatkan data yang akurat.
            </p>
            <div class="col text-title">
                Rumusan Masalah
            </div>
            <p class="col text-description">
                1. Perusahaan kesulitan dalam melakukan rekap data kunjungan tim sales.<br><br>
                2. Ketidakakuratan data karena dikerjakan manual oleh beberapa orang admin yang berbeda.<br><br>
                3. Perusahaan tidak dapat mendeteksi kecurangan tim sales lapangan karena tidak mengetahui posisi mereka
                saat memberikan data.
            </p>
            <div class="col text-title">
                Tujuan
            </div>
            <p class="col text-description">
                1. Perusahaan menginginkan rekapitulasi data kunjungan dari tim sales secara real-time.<br><br>
                2. Perusahaan menginginkan akurasi data yang tinggi dan menurunkan tingkat kemungkinan kesalahan data
                akibat proses input manual.<br><br>
                3. Perusahaan tidak ingin adanya kecurangan (fake location) yang dilakukan oleh tim lapangan.

            </p>
            <div class="col text-title">
                Alur Tanpa Virtusee
            </div>
            <p class="col text-description">
                <img src="image/unusevirtusee2.png">
                Pada alur yang digunakan saat ini, data yang diberikan oleh tim sales akan diproses secara manual oleh
                admin, kemudian data akan digabungkan dan di rekapitulasi pada proses akhir. Proses ini membutuhkan
                empat langkah, yaitu :
                1. Tim sales mengirimkan data kunjungan kepada admin melalui aplikasi WhatsApp.<br><br>
                2. Team Leader memasukkan data ke dalam Excel secara manual.<br><br>
                3. Menggabungkan semua file Excel dari setiap Team Leader menjadi satu.<br><br>
                4. Proses analisa data & penentuan strategi bisnis oleh supervisor maupun stakeholder terkait.
            </p>
            <div class="col text-title">
                Alur Menggunakan Virtusee
            </div>
            <p class="col text-description">
                <img src="image/usevirtusee2.png">
                Dengan menggunakan Virtusee, input data secara manual tidak perlu lagi dilakukan, karena Virtusee
                memiliki beberapa fitur, seperti :<br><br>
                <strong class="col text-description">Real Time Data Acquisition</strong> : Ketika tim sales memasukkan
                data
                melalui aplikasi mobile Virtusee, secara
                otomatis data tersebut akan tersinkronisasi dengan data di web admin Virtusee. Dengan teknologi GPS,
                admin dapat memantau waktu pengiriman data dan titik lokasi saat tim sales memasukkan data.<br><br>
                <strong class="col text-description">Complete and Accurate Data</strong> : Saat data sudah
                tersinkronisasi
                dengan web admin, data akan otomatis
                tersusun dengan rapi dan hasilnya dapat di unduh kembali menjadi sebuah file Excel sesuai tanggal yang
                diinginkan.<br><br>
                Dengan menggunakan Virtusee, perusahaan dapat memangkas proses dari empat langkah menjadi dua langkah,
                yaitu :<br><br>
                1. Tim sales mengisi data yang dibutuhkan menggunakan Virtusee Mobile App.<br><br>
                2. Proses analisa dan penentuan strategi bisnis menggunakan Virtusee Web.
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
