<?php
include 'includes/header.php';
$page = 'About Us';
?>


<main>

    <!-- ABOUT US -->

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About US</span>
                            <h2>Best Assignment Help in Karachi - Your Path to Academic Success!</h2>
                        </div>
                        <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel itaque tenetur ratione fugit dolores, vero similique repudiandae officia culpa nobis nam sed natus aspernatur totam necessitatibus soluta commodi placeat autem.</div>
                        <div class="text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel itaque tenetur ratione fugit dolores, vero similique repudiandae officia culpa nobis nam sed natus aspernatur totam necessitatibus soluta commodi placeat autem.
                        </div>
                        <div class="btn-box">
                            <a href="contact.php" class="theme-btn btn-style-one">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="author-desc">
                            <h2>Best Assignment Help in Karachi</h2>
                            <span>Your Path to Academic Success!</span>
                        </div>
                        <figure class="image-1"><a href="index.php" class="lightbox-image"><img
                                    title="Best Assignment Help in Karachi" src="./images/webp-folder/banner-boy.png"
                                    alt="">
                                </a></figure>

                    </div>
                </div>

            </div>
            <div class="sec-title">
                <span class="title">Our Future Goal</span>
                <h2>Your Path to Academic Success!</h2>
            </div>
            <div class="text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel itaque tenetur ratione fugit dolores, vero similique repudiandae officia culpa nobis nam sed natus aspernatur totam necessitatibus soluta commodi placeat autem.
            </div>
            <div class="text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel itaque tenetur ratione fugit dolores, vero similique repudiandae officia culpa nobis nam sed natus aspernatur totam necessitatibus soluta commodi placeat autem.
            </div>
            <div class="text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel itaque tenetur ratione fugit dolores, vero similique repudiandae officia culpa nobis nam sed natus aspernatur totam necessitatibus soluta commodi placeat autem.
            </div>
            <div class="text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel itaque tenetur ratione fugit dolores, vero similique repudiandae officia culpa nobis nam sed natus aspernatur totam necessitatibus soluta commodi placeat autem.
            </div>
            <div class="text">

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel itaque tenetur ratione fugit dolores, vero similique repudiandae officia culpa nobis nam sed natus aspernatur totam necessitatibus soluta commodi placeat autem.
            </div>
        </div>
    </section>


    <style>
    .sec-title {
        position: relative;
        z-index: 1;
        margin-bottom: 60px;
    }

    .sec-title .title {
        position: relative;
        display: block;
        font-size: 18px;
        line-height: 24px;
        color: #01a544;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .sec-title h2 {
        position: relative;
        display: block;
        font-size: 40px;
        line-height: 1.28em;
        color: #222222;
        font-weight: 600;
        padding-bottom: 18px;
        font-family: 'Gentium Book Plus', serif;
    }

    .sec-title h2:before {
        position: absolute;
        content: '';
        left: 0px;
        bottom: 0px;
        width: 50px;
        height: 3px;
        background-color: #d1d2d6;
    }

    .sec-title .text {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
        margin-top: 35px;
    }

    .sec-title.light h2 {
        color: #ffffff;
    }

    .sec-title.text-center h2:before {
        left: 50%;
        margin-left: -25px;
    }

    .list-style-one {
        position: relative;
    }

    .list-style-one li {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #222222;
        font-weight: 400;
        padding-left: 35px;
        margin-bottom: 12px;
    }

    .list-style-one li:before {
        content: "\f058";
        position: absolute;
        left: 0;
        top: 0px;
        display: block;
        font-size: 18px;
        padding: 0px;
        color: #ff2222;
        font-weight: 600;
        -moz-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1.6;
        font-family: "Font Awesome 5 Free";
    }

    .list-style-one li a:hover {
        color: #44bce2;
    }

    .btn-style-one {
        position: relative;
        display: inline-block;
        font-size: 17px;
        line-height: 30px;
        color: #ffffff;
        padding: 10px 20px;
        font-weight: 600;
        overflow: hidden;
        letter-spacing: 0.02em;
        background-color: #01a544;
        border-radius: 30px;
        border: 2px solid #01a544;
    }

    .btn-style-one:hover {
        transition: 0.5s;
        background-color: #fff;
        color: #01a544;
        border-color: #01a544;
    }

    .about-section {
        position: relative;
        padding: 250px 0 70px;
    }

    .about-section .sec-title {
        margin: 70px 0 50px;
    }

    .about-section .content-column {
        position: relative;
        margin-bottom: 50px;
    }

    .about-section .content-column .inner-column {
        position: relative;
        padding-left: 30px;
    }

    .about-section .text {
        margin-bottom: 20px;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
        font-family: 'Rubik', sans-serif;
    }

    .about-section .list-style-one {
        margin-bottom: 45px;
    }

    .about-section .btn-box {
        position: relative;
    }

    .about-section .btn-box a {
        padding: 15px 50px;
    }

    .about-section .image-column {
        position: relative;
    }

    .about-section .image-column .text-layer {
        position: absolute;
        right: -110px;
        top: 50%;
        font-size: 325px;
        line-height: 1em;
        color: #ffffff;
        margin-top: -175px;
        font-weight: 500;
    }

    .about-section .image-column .inner-column {
        position: relative;
        padding-left: 80px;
        padding-bottom: 0px;
    }

    .about-section .image-column .inner-column .author-desc {
        position: absolute;
        bottom: 16px;
        z-index: 1;
        background: #01a544;
        padding: 10px 15px;
        left: 96px;
        width: calc(100% - 152px);
        border-radius: 50px;
    }

    .about-section .image-column .inner-column .author-desc h2 {
        font-size: 21px;
        letter-spacing: 1px;
        text-align: center;
        color: #fff;
        margin: 0;
        font-family: 'Gentium Book Plus', serif;
    }

    .about-section .image-column .inner-column .author-desc span {
        font-size: 16px;
        text-align: center;
        color: #fff;
        display: block;
        font-weight: 400;
        font-family: 'Rubik', sans-serif;
    }

    .about-section .image-column .inner-column:before {
        content: '';
        position: absolute;
        width: calc(50% + 80px);
        height: calc(100% + 160px);
        top: -80px;
        left: -3px;
        background: transparent;
        z-index: 0;
        border: 44px solid #01a544;
    }

    .about-section .image-column .image-1 {
        position: relative;
    }

    .about-section .image-column .image-2 {
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .about-section .image-column .image-2 img,
    .about-section .image-column .image-1 img {
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        border-radius: 46px;
    }

    .about-section .image-column .video-link {
        position: absolute;
        left: 70px;
        top: 170px;
    }

    .about-section .image-column .video-link .link {
        position: relative;
        display: block;
        font-size: 22px;
        color: #191e34;
        font-weight: 400;
        text-align: center;
        height: 100px;
        width: 100px;
        line-height: 100px;
        background-color: #ffffff;
        border-radius: 50%;
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .about-section .image-column .video-link .link:hover {
        background-color: #191e34;
        color: #fff;
    }
    </style>

    <!-- ABOUT US -->












</main>
<?php
include 'includes/footer.php';
$page = 'About Us';
?>