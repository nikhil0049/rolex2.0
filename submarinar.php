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
    <link rel="stylesheet" href="sub.css">
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
            <source src="img/professional-watches-submariner-flagship-video-per-flag-submariner-21-a-60-uk-16x9-en-py-ly-cl-no-clock.webm" type="video/mp4">
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

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div id="searchMenu">
                                    <label for="trainIdInput">Enter Search ID:</label>
                                    <input type="text" id="trainIdInput" placeholder="Enter Search ID">
                                    <button id="submitSearch">Submit</button>
                                    <div id="ticketDetails"></div>
                                </div>
                            </div>
                        </div>
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
            <h3>oyster perpetual</h3>
            <h1>Submariner</h1>
        </div>
        <div class="new">
            <h1>Deep Confidence</h1>
        </div>
    </div>

    <div class="container" class="dark-theme css-s30hrt e1rkjwns2" style="opacity: 0.904255;">
        <div class="row featurette my-4">
            <div class="col-md-7">
                <h1 class="featurette-heading">Beneath the surface</h1>
            </div>
            <div class="col-md-5 order-md-1">
                <p class="lead">Launched in 1953, the Rolex Submariner is the first divers’ wristwatch to be waterproof to a depth of 100 metres (330 feet) – now 300 metres (1,000 feet). Its major features, such as the graduated rotatable bezel, the luminescent display, the large hands and hour markers, have been a driving force in the creation of the long line of Rolex divers’ watches which followed.

                    <br> <br> The Submariner is an iconic timepiece whose renown now extends beyond the professional world it was first designed for. The Submariner, the ultimate standard.
                </p>
                <div class="spacer">
                    <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 100px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-container2 image-overlay">
        <video autoplay muted loop id="myVideo2">
            <source src="img/submari.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="con4">
            <div class="overlay-text">
                <h2 class="e1">A true divers’ watch<br> by design</h2>
                <p class="e2">As an underwater survival tool, this watch’s design has been entirely dictated by the practical needs of divers. Since 1953, the Submariner has evolved technically and aesthetically as it has been endowed with features to improve overall functionality. The first watch was a pioneer and its subsequent versions have continued to set the benchmark for divers’ watches.
                <div class="spacer">
                    <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 180px;">
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <div class="bg2">
        <div class="con3">
            <h2 class="d1" style="font-size: 45px;">Monitor diving time</h2>
            <p class="d2" style="font-size: 20px;">The Submariner’s unidirectional rotatable bezel is key to the functionality of the watch. Its engraved 60-minute graduation allows divers to monitor their time underwater. Manufactured by Rolex from a hard, corrosion-resistant ceramic, the Cerachrom bezel insert is virtually scratchproof and its colour is unaffected by ultraviolet rays, seawater or water that is chlorinated. In addition, thanks to its chemical composition, the high-tech ceramic is inert and cannot corrode.</p>
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
                </div>
            </div>
        </div>

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="img/rsubmari6.jpg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img-top" src="img/rsubmari7.jpg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img-top" src="img/rsubmari8.jpg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img-top" src="img/rsubmari9.jpg" alt="Card image cap">
            </div>
        </div>

        <div class="con3">
            <h2 class="d12" style="font-size: 42px;">The Submariner’s unidirectional rotatable bezel has knurled edges that offer excellent grip when setting the dive time, even when wearing gloves. It rotates notch by notch, accompanied by distinctive clicks.</h2>
            <img src="img/rsubmari3.jpg" alt="" style="height: 750px; width: 600px;" class="i1">
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 30px;">
                </div>
            </div>
        </div>

        <div class="con3">
            <h3 class="d11" style="font-size: 43px;">Triple waterproofness system</h3>
            <p class="d2">The Submariner’s Oyster case, guaranteed waterproof to a depth of 300 metres (1,000 feet), provides the movement with optimal protection from water and dust. The Triplock winding crown – fitted with a triple waterproofness system – screws down securely against the case, ensuring watertight security.</p>
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
                </div>
            </div>
        </div>

        <div class="video-container2 image-overlay">
            <video autoplay muted loop id="myVideo2">
                <source src="img/submari2.webm" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="con4">
                <div class="overlay-text">
                    <h2 class="e11">Chromalight display</h2>
                    <p class="e21">The Chromalight display is an innovation that improves visibility in dark environments, an essential feature for divers. An innovative luminescent material emitting a blue glow is applied to the hands, hour markers and the capsule on the bezel. <br><br>The Chromalight display is an innovation that improves visibility in dark environments, an essential feature for divers. An innovative luminescent material emitting a blue glow is applied to the hands, hour markers and the capsule on the bezel.
                    <div class="spacer">
                        <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 180px;">
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <div class="con2">
                <p class="pi">
                    " I was wearing a <br>Submariner the first time <br> I saw the Titanic for real <br> through the porthole of a <br>submersible, and I was <br>wearing the same watch <br> in my black tie when I <br>went up on the stage to get <br> the Oscar for directing Titanic."
                    <br> <span>James Cameron</span>
                </p>
            </div>

            <div class="box9">
                <div class="con1">
                    <h2 class="h2">Mastering waterproofness</h2>
                    <div class="ml-auto">
                        <p class="pb" style="font-size: 23px; letter-spacing: 0.3px;">Hans Wilsdorf overcame The Challenge Of <br> Protecting watches from dust and moistuer by <br> Creating the first-ever waterproof wristwatch.</p>
                        <a href="#" class="dislink">Learn More ></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid1">
            <div class="ii1">
                <img src="img/rsubmari4.jpg" alt="" style="height: 700px; width: 750px;">
                <img src="img/rsubmari5.jpg" alt="" style="height: 700px; width: 763.5px;">
            </div>
        </div> -->
    </div>

    <div class="oo">
        <div class="container" style="margin-left: 6pc;">
            <img id="mg" src="img/file (4).png" alt="" style="margin-left: 27pc;"/>
            <div class="outer-circle" id="o">
                <div class="inner-circle" id="i">
                    <p class="text"></p>
                </div>
            </div>
            <div class="con">
                <div class="box" id="b1">
                    <p>Submariner</p>
                    <p style="font-size: 17px;">Oyster, 41mm, Oystersteel <br>Reference 124060</p>
                    <p style="font-size: 17px;">$9587.251</p>
                    <p style="font-size: 17px;">₹799,500</p>
                </div>
                <div class="box" id="b2">
                    <p>Oysterprepetual</p>
                    <p style="font-size: 17px;">SubmarinerOystersteel with a Cerachrom bezel insert in black ceramic and markers.</p>
                    <p style="font-size: 17px;">Deep Confidence</p>
                </div>
                <div class="box" id="b3">
                    <p style="font-size: 17px;">Rotatable is coveted for its <br> lustre and nobility. Steel <br>reinforces strength and <br>reliability. Together, they <br>harmoniously combine the <br>time and decompression.</p>
                    <p style="font-size: 17px;">An Underwater Tool</p>
                </div>
                <div class="box" id="b4">
                    <p style="font-size: 17px;">Dial’ sluminescent <br> Chromalightdisplay<br>improved visibility in dark an essential feature for divers.</p>
                    <p style="font-size: 17px;">UnidirectionalRotatable Bezel</p>
                </div>
            </div>
        </div>
        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 156px;">
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

    <div class="box11">
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
    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("body").hover(function() {
                $("#mg").css("position", "absolute");
                $("#b1")
                    .css("margin", "-34pc 3pc")
                    .css("position", "absolute")
                    .css("transition", "3s");
                $("#b2")
                    .css("margin", "-34pc 55pc")
                    .css("position", "absolute")
                    .css("transition", "3s");
                $("#b3")
                    .css("margin", "-14pc 3pc")
                    .css("position", "absolute")
                    .css("transition", "3s");
                $("#b4")
                    .css("margin", "-14pc 55pc")
                    .css("position", "absolute")
                    .css("transition", "3s");
            });

            $(".container").hover(function() {
                $(".next")
                    .css("margin-top", "-40pc")
                    .delay(5000)
                    .css("transition", "6s");
            });
        });
    </script>

    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1000,
            delay: 300
        });
        ScrollReveal().reveal('.card', {
            delay: 500,
            origin: 'right'
        });

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        function autocomplete(inp, arr) {
            var currentFocus;
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                this.parentNode.appendChild(a);
                for (i = 0; i < arr.length; i++) {
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        b = document.createElement("DIV");
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        b.addEventListener("click", function(e) {
                            inp.value = this.getElementsByTagName("input")[0].value;
                            closeAllLists();
                            var page = pageMapping[inp.value];
                            if (page) {
                                window.location.href = page;
                            }
                        });
                        a.appendChild(b);
                    }
                }
            });
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    currentFocus++;
                    addActive(x);
                } else if (e.keyCode == 38) {
                    currentFocus--;
                    addActive(x);
                } else if (e.keyCode == 13) {
                    e.preventDefault();
                    if (currentFocus > -1) {
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                if (!x) return false;
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }

            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }

        var countries = ["Datejust", "Submariner", "GMT-Master II", "Daydate", "Cosmograph-Daytona", "Yatch-Master", "Sea-Dweller", "DeepSea", "Air-King", "Oyster Prepetual"];

        var pageMapping = {
            "Datejust": "datejust.php",
            "Submariner": "submarinar.php",
            "GMT-Master II": "gmt.php",
            "Daydate": "daydate.php",
            "Cosmograph-Daytona": "cosmo.php",
            "Yatch-Master": "yatch.php",
            "Sea-Dweller": "sea.php",
            "DeepSea": "depsea.php",
            "Air-King": "air.php",
            "Oyster Prepetual": "oyster.php"
        };

        autocomplete(document.getElementById("myInput"), countries);
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#searchLink").click(function() {

                $("#fm").css({
                    "margin-top": "8pc"
                });
                $(".navbar").css({
                    "padding-bottom": "15pc"
                }).css({
                    "transition": "3s"
                });

            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $("#sub").click(function() {
                $("#fm").delay(5000).css({
                    "margin-top": "-5pc"
                });
                $(".navbar").css({
                    "padding-bottom": "4pc"
                }).css({
                    "transition": ".2s"
                });
            });

        });
    </script>



    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // $(".toggle").click(function() {
            //     $("#menu").css("color", "rgb(250, 300, 300)").html("Menu").css("transition", "2s");
            // });
            // $(".toggle").click(function() {
            //     $(".slide").css(" top", "-20pc").css("transition", "2s");
            //     $("#menu").css("rgb(250, 300, 300)");
            // });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>