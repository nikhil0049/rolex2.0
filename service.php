<?php
$menuItems = [
    ['label' => 'Home', 'link' => 'index.php'],
    ['label' => 'About', 'link' => 'about.php'],
    ['label' => 'Services', 'link' => 'service.php'],
    ['label' => 'Contact', 'link' => 'contact.php'],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolex - Find The Time Of Your Life</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">

    <!-- icons link -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="app.js"></script>
    <link rel="stylesheet" href="service.css">
</head>
<style>
    * {
        box-sizing: border-box;
    }

    #search:hover .navbar {
        /* left: 0; */
        /* top: -10pc; */
        padding-bottom: 20pc;
        opacity: 0;
        transition: 2s;
    }

    form {
        /* border: 2px solid red; */
        margin: pc 0pc;
        z-index: -1;
        position: absolute;
    }

    #fm {
        display: block;
        z-index: 1;
        opacity: 1;
        margin-top: -10pc;
        transition: 2s;
        margin-right: 20pc;
    }

    #in input {
        display: block;
        color: white;
    }

    input {
        display: inline-block;
    }

    #sub input {
        display: block;
    }

    /*the container must be positioned relative:*/
    .autocomplete {
        position: relative;
        display: inline-block;
    }

    input {
        border: 1px solid transparent;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 16px;
    }

    input[type=text] {
        background-color: #f1f1f1;
        width: 100%;
    }

    input[type=submit] {
        background-color: DodgerBlue;
        color: #fff;
        cursor: pointer;
    }

    .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
        background-color: #e9e9e9;
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
        background-color: DodgerBlue !important;
        color: #ffffff;
    }

    input {
        display: none;
        display: inline-block;
    }

    #menu {
        font-family: "DM Sans", sans-serif;
        position: absolute;
        margin: 13px 8pc;
        font-size: 19px;
    }

    .toggle {
        position: absolute;
        height: 9px;
        width: 30px;
        z-index: 1;
        cursor: pointer;
        top: 38px;
        left: 110px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: 3s;
    }

    .toggle .line {
        height: 3px;
        width: 24px;
        background-color: white;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .slide {
        position: absolute;
        top: -20pc;
        left: -2pc;
        width: 0pc;
        height: 13pc;
        opacity: 0;
        padding: 50px 20px;
        overflow: hiden;
        transition: 2s;
    }

    input:checked~.slide {
        /* left: 0; */
        top: 0pc;
        opacity: 1;
        transition: 2s;
    }

    #search:checked~#in {
        opacity: 1;
    }

    .slide ul {
        list-style: none;
        display: inline-block;
        padding: 1pc 0pc;
        padding-left: 5pc;
        padding-right: 2952px;
        margin-top: 20px;
        background: linear-gradient(to right, rgb(0, 78, 50), rgb(6, 146, 95));
        transition: 3s;
    }

    .slide ul li {
        margin: 20px 0;
    }

    .slide ul li a {
        color: white;
        text-decoration: none;
        font-size: 1.2em;
        display: block;
    }

    .slide ul li a:hover {
        color: rgb(116, 241, 195);
    }

    input:checked~.toggle .line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
        transition: 3s;
    }

    input:checked~.toggle .line:nth-child(2) {
        opacity: 0;
        transition: 3s;
    }

    input:checked~.toggle .line:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
        transition: 3s;
    }

    @media (max-width: 768px) {
        .slide {
            left: -100%;
            width: 100%;
            transition: left 0.3s ease;
        }

        input:checked~.slide {
            left: 0;
        }

        .toggle {
            left: 100px;
        }
    }

    .box {
        margin-left: 140px;
        margin-right: 180px;
        border-radius: 20px;
        margin-bottom: 30px;
    }

    html {
        scroll-behavior: smooth;
    }

    #searchMenu {
        margin-top: 10px;
    }

    #searchMenu label {
        font-size: 16px;
        margin-right: 10px;
    }

    #searchMenu input {
        width: 200px;
        height: 25px;
        padding: 5px;
        margin-right: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        display: block;
    }

    #searchMenu button {
        padding: 5px 10px;
        background-color: #45DEF1;
        border: none;
        color: white;
        cursor: pointer;
        border-radius: 4px;
    }

    #searchMenu button:hover {
        background-color: #2CA9C9;
    }

    #ticketDetails {
        margin-top: 10px;
    }

    #searchMenu input {
        opacity: 1;
    }

    #myInput {
        color: white;
        background-color: #ffffff2b;
        width: 40pc;
        height: 42px;
        border-radius: 3pc;
        outline: none;
    }

    #myInput placeholder {
        color: white;
    }

    #sub {
        position: absolute;
        background-color: transparent;
        color: white;
        margin: -1px 10pc;
    }

    #search {
        transition: 4s;
    }

    .icon-list li {
        display: flex;
        align-items: center;
        margin: 0 10px;
    }

    li {
        unicode-bidi: isolate;
    }

    input[type="checkbox"] {
        opacity: 0;
    }
</style>

<body>
    <div class="video-container">
        <video autoplay muted loop id="myVideo">
            <source src="img/ser.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <header>
            <nav class="navbar fixed-top">
                <div class="logo"><span id="menu">Menu</span>
                    <img src="img/lr.png" alt="" style="margin-left: 45pc;">
                </div>
                <label for="menu-toggle" class="toggle">
                    <span class="line"></span>
                    <!-- <span class="line"></span> -->
                    <span class="line"></span>
                </label>
                <input type="checkbox" id="menu-toggle">
                <div class="slide">
                    <ul>
                        <?php
                        foreach ($menuItems as $item) {
                            echo "<li><a href='{$item['link']}'>{$item['label']}</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <form autocomplete="off" action="" id="fm" style="margin-left: 16pc;">
                    <div class="autocomplete" style="width:300px;">
                        <input id="myInput" type="text" name="myCountry" placeholder="Country" id="in">
                    </div>
                    <input type="submit" id="sub">
                </form>
                <ul class="icon-list">
                    <li>
                        <a href="javascript:void(0);" id="searchLink">
                            <box-icon name='search' class="icon" color="white"></box-icon><span id="search">Search</span>
                        </a>

                    </li>
                    <li>
                        <a href="/en-us/store-locator">
                            <svg viewBox="0 0 15 15" class="icon" height="18" width="18">
                                <path d="M7.5,0.5c-3,0-5.4,2.4-5.4,5.4c0,1.1,0.7,2.6,1.7,4c1.7,2.3,3.7,4.6,3.7,4.6s2-2.4,3.7-4.6c0.9-1.4,1.7-2.9,1.7-4
                             C12.9,2.9,10.5,0.5,7.5,0.5z M7.5,8.4C6.1,8.4,5,7.2,5,5.9c0-1.4,1.1-2.5,2.5-2.5S10,4.5,10,5.9S8.9,8.4,7.5,8.4z"></path>
                            </svg><span>Store locator</span>
                        </a>
                    </li>

                    <li>
                        <a href="fav.php">
                            <svg class="icon" height="18" width="18" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                                <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z"></path>
                            </svg><span>Favourites</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="content1">
            <h3>care and servicing your rolex</h3>
            <h1>Quality and reliability</h1>
        </div>
    </div>

    <div class="container1" class="dark-theme css-s30hrt e1rkjwns2" style="opacity: 0.904255;">
        <div class="row featurette my-4">
            <div class="col-md-7">
                <h1 class="featurette-heading">Rolex watches are <br>designed and built to last</h1>
            </div>
            <div class="col-md-5 order-md-1">
                <p class="lead"><span style="font-weight: 700; font-size: 18px; font-style: bold;">Hans Wilsdorf instilled a philosophy of perpetual excellence on which the brand has forged its reputation.</span><br><br>From the outset, the founder of Rolex established a network of watchmaking workshops around the world, tasked with ensuring that all of the brand’s watches could receive the best possible servicing and so preserve their excellent technical performance and pristine appearance. As a result, there is no limit on how long a Rolex watch can keep working, being handed down from one generation to the next, and living several lives.
                </p>
                <div class="spacer">
                    <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 60px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="bg2">
        <div class="video-container2">
            <video autoplay muted loop id="myVideo2">
                <source src="img/embb.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>

    <div class="box11">
        <div class="con1">
            <h2 class="h2">Servicing Your Rolex</h2>
            <div class="ml-auto">
                <p class="pb" style="font-size: 23px; letter-spacing: 0.3px;">Rolex watches are exceptional. They are designed <br> to function perfectly today, tomorrow and into <br> the future. </p>
                <a href="serrolex.php" class="dislink">Discover More ></a>
            </div>
        </div>
    </div>

    <div class="box9">
        <div class="con1">
            <h2 class="h2">The anatomy of a Rolex</h2>
            <div class="ml-auto">
                <p class="pb" style="font-size: 23px; letter-spacing: 0.3px;">Everithing you always wanted to know about<br> Rolex Watches. </p>
                <a href="seranatomy.php" class="dislink">Discover More ></a>
            </div>
        </div>
    </div>

    <div class="bg7">
        <img src="img/serpart.jpg" alt="" style="margin-left: 26pc; height:580px; width:600px; margin-top: 4pc;">
    </div>
    <div class="con3">
        <h2 class="d1s" style="font-size: 52px; color:black; font-weight:700; margin-left: 26pc; margin-top: 3pc;">Training and after- <br>sales service</h2>
        <p class="d2" style="font-size: 18px; margin-left: 26pc;">In order to recruit some of the best newly qualified watchmakers for its <br>after-sales service centres, Rolex is strongly committed to supporting <br> those wishing to pursue a career in watchmaking. The brand <br> contributes to training in a variety of ways depending on geographical <br>location, as not all regions of the world have the same watchmaking <br>heritage.</p>


        <button style="margin-left: 30pc;" id="submit-btn" type="button" aria-label="Our commitments" class="undefined light-theme filled translucent-light css-19az226 e65s4520" style="opacity:1; border:none;"><svg class="undefined css-1emgvlg e10fsun60" height="15" width="15" viewBox="0 0 15 15" role="img" aria-hidden="true" alt="">
                <path d="M13.5,8.5h-5v5h-2v-5h-5v-2h5v-5h2v5h5V8.5z"></path>
            </svg></button>

        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 60px;">
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modalContent">
                <img src="img/conser.jpg" alt="" style="height: 800px; width:100%; object-fit:cover;  border-top-left-radius: 2pc; border-top-right-radius: 2pc;">

            <h2 class="d1s" style="font-size: 52px; color:black; font-weight:700; margin-left: 22pc; margin-top: 3pc;">Training and after- <br>sales service</h2>
            <p style="font-size: 18px; margin-left: 22pc; color:black;">In order to recruit some of the best newly qualified <br>watchmakers for its after-sales service centres, Rolex is <br> strongly committed to supporting those wishing to <br>pursue a career in watchmaking. The brand contributes <br> to training in a variety of ways depending on geographical <br>location, as not all regions of the world <br>have the same watchmaking heritage.</p>

            <img src="img/rolser4.jpg" alt="" style="margin-left: 22pc; height:600px; width:520px;">

            <p style="font-size: 18px; margin-left: 22pc; color:black; margin-top:2pc;">Certain countries have watchmaking schools that work <br>regulary with Rolex to ensure the contiunity and even <br>development of their courses. The brand also provides <br>them with watches for apprentics to practise on. As a <br>result, it apprentices join a Rolex service centre once <br>they have finished their training, they will already be <br>familiar with the nature and technical details of the <br>brand's timepieces.</p>
            </p>

            <p style="font-size: 18px; margin-left: 22pc; color:black; margin-top:2pc;">As part of its latest initiative, Rolex presented in 2018 its <br>own watchmaking training programme, combining <br>practical and theoretical instruction. Provided under the <br>auspices of Rolex World Service, this course takes place <br>at affiliates and is designed for those wishing to <br>specialize in the maintenance of Rolex watches. At the <br>end of the training course and following a series of <br>examinations at the world headquaters in Geneva,<br>graduates join one of the brand’s after-sales service <br>workshops.</p>
            </p>
            <img src="img/rolser5.jpg" alt="" style="width: 100%; border-bottom-left-radius: 2pc; border-bottom-right-radius: 2pc;">
            <!-- <a href="absustain.php" style="text-decoration: none;"> <button class="btn-block" id="back">CONFIRM</button></a> -->
        </div>
    </div>

    <div class="container">
        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Manually winding <br>your watch</h2><br><br>
                <p class="lead" style="font-size: 18px;">When you wear your Rolex daily, you don’t need to wind it. <br>If you take it off and set it aside, the watch will retain its <br>“charge” for two days or more, depending on the model. <br>However, if you haven’t worn your Rolex for more than a <br>couple of days and the watch has stopped, we <br>recommend that you manually wind it when you set the <br> time before putting it on.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="img/serc1.jpg" data-holder-rendered="true" style="width: 600px; height: 500px;">
            </div>
        </div>

        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
            </div>
        </div>
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading" style="margin-left: 10pc;">Setting the time <br> and date</h2><br><br>
                <p class="lead" style="font-size: 18px; margin-left: 10pc;">Rolex watches can be set by unscrewing the crown and <br> pulling it out to the second notch. The seconds hand is <br>stopped, allowing you to set the time. Each model has its <br> own detailed user guide and functions that may vary. <br> Please download the appropriate guide.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="video-container2">
                    <video autoplay muted loop id="myVideo2" style="height: 670px; width:600px;">
                        <source src="img/serc2.webm" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
            </div>
        </div>
        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 40px;">
            </div>
        </div>
    </div>

    <div class="bg-team" id="team">
        <div class="team-title">
            <section style="font-variant: small-caps;">rolex watchmaking know-how</section>
            <h2>Excellence in the making</h2>
            <hr>
        </div>
        <div class="team-flex swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="team-one swiper-slide">
                    <img src="img/r10.jpg" alt="" style="height: 330px;">
                    <h4>Rolex Men's Watch</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/slide1.jpg" alt="" style="height: 330px;">
                    <h4>Emblematic Bracelet</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/slidebe.jpg" alt="" style="height: 330px;">
                    <h4>Behind The Seal</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/slidewat.jpg" alt="" style="height: 330px;">
                    <h4>Rolex Anatomy</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r1couple.jpg" alt="" style="height: 330px;">
                    <h4>Rolex Couple's Crown</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r1men.jpg" alt="" style="height: 330px;">
                    <h4>Submariner Men's Town</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r5.jpg" alt="" style="height: 330px;">
                    <h4>Explore The Golden Era's Time</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r7.jpg" alt="" style="height: 330px;">
                    <h4>Inchasing Your Own World</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r12.jpg" alt="" style="height: 330px;">
                    <h4>With Green Seal</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/rairm1.jpg" alt="" style="height: 330px;">
                    <h4>Air-King Black Devin</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/rdayjust8.jpg" alt="" style="height: 330px;">
                    <h4>Silver Jubilee Bracelet</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/rdayjustsingle.jpg" alt="" style="height: 330px;">
                    <h4>At A Single Glance</h4>
                </div>
            </div>
        </div>
    </div>

     <!-- footer -->
     <div class="container-fluid3">
        <div class="spacer" style="background-color: black; position:relative; display:block; unicode-bidi:isolate;">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 0.2px;">
            </div>
        </div>
        <div class="container">
            <video autoplay loop muted id="ph" class="pic">
                <source src="img/classic-watches-oyster-perpetual-1908-bold-origins_2023_november_expression_of_refinement.webm" type="video/mp4">
            </video>
            <div class="l1" id="a">
                <img src="img/insh.png" alt="" class="main">
                <img src="img/instagram (1).png" alt="" class="hov">
            </div>

            <div class="l1" id="bc">
                <img src="img/3app.png" alt="" class="main">
                <img src="img/4app.png" alt="" class="hov">
            </div>

            <div class="l1" id="c">
                <img src="img/twitter (2).png" alt="" class="main" style="margin-top: 23.2pc;">
                <img src="img/twitter.png" alt="" class="hov">
            </div>

            <div class="l1" id="d">
                <img src="img/telegram (1)0.png" alt="" class="main">
                <img src="img/telegram.png" alt="" class="hov">
            </div>

            <div class="l1" id="e">
                <img src="img/chrome (1).png" alt="" class="main">
                <img src="img/chrome.png" alt="" class="hov">
            </div>

            <video autoplay muted id="my">
                <source src="img/VID_20240627_183557_974.mp4" type="video/mp4">
            </video>

        </div>
        <div class="next">
            <div class="boxx" id="b">
                <img src="img/lr.png" alt="">
                ROLEX
            </div>
            <div class="boxx" id="b1">
                <h2>Rolex watches</h2><br><br>
                <p>New watches 2024</p>
                <p>Find your Rolex</p>
                <p>Configure your Rolex</p>
                <p>Men's Watches</p>
                <p>Women's Watches</p>
                <p>Gold Watches</p> <br>
                <h2>Rolex collections</h2><br>
                <p>Air-King</p>
                <p>Cosmograph Daytona</p>
                <p>Datejust</p>
                <p>Day-Date</p>
                <p>Explorer</p>
                <p>GMT-Master II</p>
                <p>Oyster Perpetual</p>
                <p>Sea-Dweller</p>
                <p>Deepsea</p>
                <p>Sky-Dweller</p>
                <p>Submariner</p>
            </div>

            <div class="boxx" id="b2">
                <h2>Rolex and sport</h2><br><br>
                <p>Tennis</p>
                <p>Golf</p>
                <p>Sailing</p>
                <p> Motor Sport</p>
                <p>Horse Riding</p><br>
                <h2>About Rolex</h2><br>
                <p>Sustainable Development </p>
                <p> Behind the Crown</p>
                <p> History</p><br><br>
                <h2>Buying a Rolex</h2><br>
                <p>Store Locator</p>
                <p>Buying a Rolex</p>
                <p>Rolex Certified Pre-Owned</p><br><br>
                <h2>Care</h2><br>
                <p>Service Center Locator</p>
                <p>Watch Care & Service</p>
            </div>

            <div class="boxx" id="b3">
                <h2>Services</h2><br><br>
                <p>frequently Asked question</p>
                <p> Your Favorite</p>
                <p>file a report</p>
                <p>Newsroom</p><br>
                <h2>Media</h2><br>
                <p>Wallpaper </p>
                <p>Brochures</p>
                <p>User Guide</p><br><br>
                <h2>Official channel</h2><br>
                <p>Facebook</p>
                <p>Instagram</p>
                <p>X</p>
                <p>Youtube</p>
                <p>Pinterest</p>

            </div>
            <!-- <br style="background-color: black; height: 3pc;"> -->
            <!-- <br id="br"><br><br> -->
        </div>
    </div>

    <div class="box111">
        <div class="con11">
            <h2 class="h3" style="text-align: center;">Discover Our Prepetual Initiatives</h2>
            <div class="ml-auto" style="text-align: center;">
                <a href="http
                s://www.rolex.org/" target="_blank" rel="noopener noreferrer" aria-label="open in new tab" class="text reverseIcon css-19az226 eob9b3y0">Visit Rolex.org <svg class="undefined rtl css-1emgvlg e10fsun60" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="M0.1,0.1v14.8h14.8V9h-2v3.7v0.2V13h-0.1h-0.2H2.3H2.1H2v-0.1v-0.2V2.4V2.2V2.1h0.1h0.2H6v-2H0.1z M8.7,0.1v2h2.1h0.5h0.3l-0.2,0.2L11,2.6L5.8,7.8l1.4,1.4L12.4,4l0.4-0.4l0.2-0.2v0.3v0.5v2.1h2V0.1H8.7z"></path>
                    </svg></a>

                <div class="spacer">
                    <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 156px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".container").hover(function() {

                $("#a").css("margin", "-22pc -20pc").css("position", "absolute").css("transition", "1s").css("opacity", "1");
                $("#bc").css("margin", "-22pc -10pc").css("position", "absolute").css("transition", "2s");
                $("#c").css("margin", "-22pc 2pc").css("position", "absolute").css("transition", "3s");
                $("#d").css("margin", "-22pc 12pc").css("position", "absolute").css("transition", "4s");
                $("#e").css("margin", "-22pc 22pc").css("position", "absolute").css("transition", "5s");
                // $("#ph").css("opacity", "1").css("margin", "-100pc -1pc").css("position", "absolute").css("transition", "4s ease-out");
            });

            $(".container").hover(function() {
                $(".next").css("margin-top", "-40pc").delay(5000).css("transition", "6s");

            });
        });
    </script>

    <!-- file -->

    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1000,
            delay: 300
        });
        ScrollReveal().reveal('.box, .con1, .pi, .content1, .new, .container, .container-fluid, .pi, .d1, .d2, .e1, .e2, .tc1, .d12, .d11', {
            delay: 500,
            origin: 'bottom'
        });
    </script>

    <!-- scrolling -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var content1 = document.querySelector('.content1');
            var newElement = document.querySelector('.new');
            var lastScrollTop = 0;

            window.addEventListener('scroll', function() {
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    // Scrolling down
                    content1.classList.add('hide');
                    newElement.classList.add('show');
                } else {
                    // Scrolling up
                    content1.classList.remove('hide');
                    newElement.classList.remove('show');
                }

                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
            });
        });
    </script>

    <script>
        let lastScrollTop = 0;
        const imageOverlay = document.querySelector('.image-overlay');
        let blurTimeout;

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            clearTimeout(blurTimeout);

            if (scrollTop > lastScrollTop) {
                blurTimeout = setTimeout(() => {
                    imageOverlay.classList.add('blur');
                }, 900);
            } else {
                imageOverlay.classList.remove('blur');
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });
    </script>

    <!-- model button -->
    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#submit-btn").click(function() {
                setTimeout(function() {
                    var modal = $("#myModal");
                    var modalContent = $("#modalContent");
                    modal.css("display", "block");
                    // modalContent.html("<h2>Our Commitments</h2>");
                    // $("#contactForm")[0].reset(); 
                }, 500); // Simulating a delay of 500ms
            });

            // Close the modal when the close button is clicked
            $(".close").click(function() {
                var modal = $("#myModal");
                modal.css("display", "none");
            });
        });
    </script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: true,
            speed: 600,
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>