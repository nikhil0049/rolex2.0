<!-- transliterator_create_from_rules -->


<?php
$menuItems = [
    ['label' => 'Home', 'link' => '#'],
    ['label' => 'About', 'link' => '#'],
    ['label' => 'Services', 'link' => '#'],
    ['label' => 'Contact', 'link' => '#'],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolex - Find The Time Of Your Life</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'sans-serif';
    }

    body {
        background-color: aliceblue;
        /* overflow-x: hidden; */
        /* overflow-y: auto; */
    }

    .video-container {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    #myVideo {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    header {
        position: absolute;
        top: 0;
        width: 100%;
        transition: height 0.3s ease;
        z-index: 10;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: rgba(0, 0, 0, 0.5);
        height: 70px;
        transition: height 0.3s ease-in-out;
    }

    /* .navbar.open {
            height: 100vh; 
            background-color: rgba(0, 0, 0, 0.5); 
        }
         */
    .navbar .logo {
        font-size: 1.5em;
        color: white;
    }

    .logo img {
        height: 45px;
        width: 45px;
        margin-left: 40pc;
    }

    .navbar .lg img {
        width: 50px;
    }

    input {
        display: none;
    }

    .toggle {
        position: absolute;
        height: 30px;
        width: 30px;
        z-index: 1;
        cursor: pointer;
        top: 20px;
        left: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .toggle .line {
        height: 3px;
        background-color: white;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .slide {
        position: absolute;
        top: 0;
        left: -200px;
        width: 200pc;
        height: 13pc;
        /* background-color: rgba(0, 0, 0, 0.8); */
        padding: 50px 20px;
        transition: left 0.3s ease;
    }

    input:checked~.slide {
        left: 0;
    }

    .slide ul {
        list-style: none;
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

    input:checked~.toggle .line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    input:checked~.toggle .line:nth-child(2) {
        opacity: 0;
    }

    input:checked~.toggle .line:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
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

    .con {
        padding: 20px;
        margin-top: 100vh;
        background-color: white;
        margin-top: 100vh;
        z-index: 5;
    }

    .bg-team {
        width: 100%;
        margin: 0px 0px 0px;
        flex-direction: row;
    }

    .bg-team .team-title {
        margin-bottom: 50px;
        text-align: center;
        color: #FFF;
        background: var(--main-color);
        height: 520px;
        padding: 100px 0px;
    }

    .team-title section {
        text-transform: uppercase;
        font-size: 15px;
    }

    .team-title h2 {
        font-weight: 600;
        cursor: pointer;
        font-family: 'sans-serif';
    }

    .team-title hr {
        margin: 15px auto;
        width: 110px;
        background: #FFF;
    }

    .bg-team .team-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        width: 90%;
        margin: 0 auto;
        margin-top: -360px;
        margin-bottom: 100px;
    }

    .team-flex .team-one {
        width: 32%;
    }

    .team-flex .team-one img {
        width: 100%;
    }

    .team-flex .team-one h4 {
        text-transform: capitalize;
        font-size: 19px;
        margin-top: 10px;
        cursor: pointer;
    }

    .swiper-wrapper {
        margin-top: 160px;
        cursor: pointer;
    }

    .team-flex .team-one h4:hover {
        cursor: pointer;
        /* color: #e6831a; */
    }

    @media(max-width: 1200px) {
        .team-flex .team-one h4 {
            font-size: 19px;
        }
    }

    @media(max-width: 1022px) {
        .team-flex .team-one h4 {
            font-size: 18px;
        }
    }

    @media(max-width: 980px) {
        .team-flex .team-one h4 {
            font-size: 17px;
        }
    }





    .menu-toggle {
        cursor: pointer;
        display: none;
    }

    .menu-toggle .line {
        width: 25px;
        height: 3px;
        background-color: #fff;
        margin: 5px 0;
    }

    .menu-items {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    .menu-items li {
        margin-right: 20px;
    }

    .menu-items li:last-child {
        margin-right: 0;
    }

    .menu-items li a {
        text-decoration: none;
        color: #fff;
        transition: color 0.3s ease;
    }

    .menu-items li a:hover {
        color: #ccc;
    }

    .swiper-container {
        width: 100%;
        margin-top: 20px;
    }

    .swiper-slide {
        display: flex;
        align-items: center;
        margin: 10px 8px 7px 8px;
        justify-content: center;
    }

    .swiper-slide img {
        max-width: 100%;
        height: auto;
        width: 300px;
        height: 300px;
        padding: 10px 11px 15px 14px;
    }

    @media (max-width: 768px) {
        .menu-toggle {
            display: block;
        }

        .menu-items {
            display: none;
            flex-direction: column;
            background-color: #333;
            padding: 20px;
            position: absolute;
            top: 60px;
            left: 0;
            right: 0;
        }

        .menu-items.active {
            display: flex;
        }

        .menu-items li {
            margin: 10px 0;
        }
    }


    element.style{
        opacity: 0.823877;
    }
    .css-s30hrt{
        position: relative;
        display: grid;
        column-gap: var(--grid-gap);
        grid-template-columns: [col] repeat(var(--grid-col-num), [col] minmax(0,1fr)) [col];
        grid-template-rows: min-content min-content;
        grid-column: main;
        grid-row: skyline;
    }
    .dark-theme{
        color: rgb(var(--pure-white));
    }
    *{
        -webkit-tap-highlight-color: transparent;
    }
    style attribute{
        --row-h: 150vh;
    }
    
</style>

<body>
    <div class="video-container">
        <video autoplay muted loop id="myVideo">
            <source src="img/professional-watches-submariner-flagship-video-per-flag-submariner-21-a-60-uk-16x9-en-py-ly-cl-no-clock.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <header>
            <nav class="navbar">
                <div class="logo">
                    <img src="img/lr.png" alt="">
                </div>
                <label for="menu-toggle" class="toggle">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </label>
                <input type="checkbox" id="menu-toggle">
                <div class="slide">
                    <ul>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($menuItems as $item) {
                                    echo "<li><a href='{$item['link']}'>{$item['label']}</a></li>";
                                }
                                ?>
                                <?php
                                // Assume $images is an array containing image paths
                                $images = ['img/r1.jpg', 'img/r2.jpeg', 'img/r3.jpg', 'img/r4.jpg', 'img/r5.jpg', 'img/r6.jpg', 'img/r7.jpg', 'img/r8.jpg', 'img/r9.jpg'];
                                $slideCount = ceil(count($images) / 3); // Calculate the number of slides required
                                for ($k = 0; $k < $slideCount; $k++) {
                                    echo "<div class='swiper-slide'>";
                                    for ($i = $k * 3; $i < min(($k * 3) + 3, count($images)); $i++) {
                                        echo "<img src='{$images[$i]}' alt='Slide'>";
                                    }
                                    echo "</div>";
                                }
                                ?>
                            </div>
                            <!-- Add pagination and navigation buttons if required -->
                        </div>

                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <div class="con">
        <p>Lorem, ipsumlorem89210 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius numquam perferendis tempora commodi illum voluptas magnam. Impedit aliquid alias mollitia provident ipsum labore, dolores perferendis reprehenderit nostrum, magnam dolore vitae ea voluptatem. Doloribus, dicta. Quod veniam ullam nemo quisquam aliquam perferendis ipsa voluptatum neque eligendi a nostrum laudantium consequatur alias illum reprehenderit, quis est itaque quidem facilis. Asperiores, dolores quidem veniam odio nulla ratione debitis aut. Facere dignissimos necessitatibus sapiente expedita, temporibus nostrum cumque quisquam nam tenetur dolorem numquam quam iusto et maxime obcaecati repellendus iure culpa aperiam impedit neque beatae unde. Eius excepturi quidem facere debitis ut reprehenderit veritatis aperiam nihil qui eligendi laudantium illum est facilis dicta maiores quos doloremque, dolores libero ducimus necessitatibus aliquid! Debitis quis minus odio id voluptas molestias eaque esse nam alias velit fuga reiciendis cumque quas deserunt dolores a possimus perspiciatis assumenda, sed quaerat at! Numquam doloribus neque voluptate, autem ullam quam laboriosam? Earum quod expedita ab consequatur quia rem accusantium iure dolorum cupiditate explicabo voluptatum magnam voluptate impedit quos fugiat, nemo excepturi doloribus dolorem consectetur pariatur est voluptatibus animi id? Magnam quaerat hic nobis vitae exercitationem. Laborum vitae excepturi aperiam recusandae vero deserunt, similique quo. Accusamus nobis placeat eos vel sequi a adipisci sapiente facere nulla iusto fugit, est, sunt illo quia ab nemo soluta corrupti. Fugit, facere, ipsam iste voluptas, earum doloribus expedita pariatur aliquam provident cupiditate rem praesentium nobis nesciunt magni neque nihil nemo ex inventore nisi? Non, consequuntur. Consequatur architecto, ab expedita aut sed dicta, dolorum quibusdam sapiente, eius minima excepturi in ipsam officiis? Asperiores nobis laborum similique recusandae eaque soluta placeat, fugit vel quae animi minus ex quibusdam ab perspiciatis magni dicta, dolore nihil obcaecati facere repudiandae sapiente assumenda! Veniam, atque blanditiis natus sunt dolores hic eius consectetur optio commodi tempore odit tenetur odio dicta labore inventore magni nostrum accusantium, quibusdam tempora magnam necessitatibus, ex officia autem! Ab iste praesentium architecto harum? Similique, magnam! Neque esse itaque sit non commodi, officia iusto, tempore debitis dolorem odio fugit error veniam repellendus sequi similique amet ea? Quibusdam impedit distinctio alias vel cumque quod incidunt modi voluptate officiis, recusandae voluptatibus ullam veniam hic nulla vitae expedita? Dolorem quas ea odit nesciunt molestias delectus rerum numquam porro mollitia soluta, similique accusamus et ipsa odio deleniti assumenda perferendis recusandae provident cum?</p>
    </div>


    <div class="bg-team" id="team">
        <div class="team-title">
            <section>GUJARAT BUSSINESS</section>
            <h2>Bussiness Opportunities - Welcome To Gujarat</h2>
            <hr>
        </div>
        <div class="team-flex swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="team-one swiper-slide">
                    <img src="img/r1.jpg" alt="" style="height: 320px;">
                    <h4>Cinematic Tourism Policy GR</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r2.jpeg" alt="" style="height: 320px;">
                    <h4>Tender List</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r3.jpg" alt="" style="height: 320px;">
                    <h4>Investor Application Guide - Heritage Tourism Policy</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r4.jpg" alt="" style="height: 320px;">
                    <h4>Application For Registration under Gujarat Tourism Policy</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r5.jpg" alt="" style="height: 320px;">
                    <h4>Investor Facilitation Kit for Tourism Policy(2015-2020)</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r6.jpg" alt="" style="height: 320px;">
                    <h4>Heritage Sites visitors</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r7.jpg" alt="" style="height: 320px;">
                    <h4>Heritage Policy GR</h4>
                </div>
                <div class="team-one swiper-slide">
                    <img src="img/r8.jpg" alt="" style="height: 320px;">
                    <h4>Tourism Policy GR</h4>
                </div>
            </div>
        </div>
    </div>


    <div class="dark-theme css-s30hrt e1rkjwns2" style="opacity: 0.904255;"><h3 class="chapo css-1t72yy3 css-1btqc4 e1qasnby0">No one day is like another</h3><p class="css-jgi3jo e1rkjwns0">Any day can leave a lasting mark on our lives and set the stage for new aspirations. Since its creation in 1945, the Datejust has continued to reinvent itself while symbolizing Rolex’s definition of classic elegance. A milestone in watchmaking history, it was the first self-winding waterproof chronometer wristwatch to feature a window displaying the date. Magnified by the Cyclops lens, these numbers are a reminder that though 24 hours mark a day, it’s on us to make those a date to remember.</p></div>
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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30
                }
            }
            // Add pagination and navigation options if required
        });

        // Hamburger menu toggle
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.menu-items').classList.toggle('active');
        });
    </script>
</body>

</html>