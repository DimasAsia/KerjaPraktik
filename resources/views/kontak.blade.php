<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-about.css">
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

    <div class="container-contact">
        <span class="big-circle"></span>
        <img src="image/shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text-about">
                    Hubungi Kami jika anda memiliki pertanyaan tentang paket perusahaan, harga, atau keamanan
                    Virtusee
                </p>

                {{-- <div class="info">
                    <div class="information">
                        <iconify-icon icon="akar-icons:map" style=" color: #007dff;" width="30"></iconify-icon>
                        <p>Jl. Penjaringan Sari YKP Pandugo 2 No.1, Jawa Timur 60297</p>
                    </div>
                    <div class="information">
                        <iconify-icon icon="ic:outline-email" style=" color: #007dff;" width="30"></iconify-icon>
                        <p>virtusee@gmail.com</p>
                    </div>
                    <div class="information">
                        <iconify-icon icon="eva:phone-call-outline" style=" color: #007dff;" width="30">
                        </iconify-icon>
                        <p>081111111111</p>
                    </div>
                </div> --}}

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class='bx bxs-phone'></i>
                        </a>
                        <a href="https://www.instagram.com/virtusee/" target="_blank">
                            <i class='bx bxl-instagram-alt'></i>
                        </a>
                        <a href="https://www.linkedin.com/company/virtuseeweb/?originalSubdomain=id" target="_blank">
                            <i class='bx bxl-linkedin'></i>
                        </a>
                        <a href="https://goo.gl/maps/iWfS13NtmQv4qgVx5" target="_blank">
                            <i class='bx bx-map-alt'></i>
                        </a>
                        <a href="mailto:tes@contoh.com">
                            <i class='bx bx-envelope'></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle-contact one"></span>
                <span class="circle-contact two"></span>

                <form method="post" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" placeholder="Username" />
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" placeholder="Email" />
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" placeholder="Phone" />
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input" placeholder="Message"></textarea>
                    </div>
                    <input type="submit" value="Send" class="btn-form" />
                </form>
            </div>
        </div>
    </div>

    <section>
        <div class="myh2">
            Kantor Kami
        </div>
        <div class="tabs">
            <iframe class="map-wrapper"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3259286952734!2d112.78667005031518!3d-7.317236394693174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa92e2895ff3%3A0x738868d76a74a8f!2sInosoft%20Trans%20Sistem!5e0!3m2!1sen!2sid!4v1663510731272!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
</body>

</html>
