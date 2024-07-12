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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">

    <!-- icons link -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="app.js"></script>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <div class="video-container">
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
                <ul class="icon-list">
                    <li>
                        <a href="#">
                            <box-icon name='search' class="icon" color="white"></box-icon><span>Search</span>
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
            <h3>the choice of a lifetime</h3>
            <h1>Buying a Rolex</h1>
        </div>


        <div class="container" class="dark-theme css-s30hrt e1rkjwns2" style="opacity: 0.904255;">
            <div class="row featurette my-4">
                <div class="col-md-7">
                    <h1 class="featurette-heading">New and genuine Rolex <br>watches are exclusively <br>sold by official Rolex <br>Jewelers. They warrant <br>the authenticity of your <br>Rolex and ensure that it <br>enjoys a five-year <br> international guarantee.</h1>
                    <div class="spacer">
                        <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 100px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="con3">
            <h2 class="d1" style="font-size: 50px;">Experiencing a Rolex</h2>
            <p class="d2" style="font-size: 20px;">At Rolex we are proud of our work and we believe that nothing beats experiencing first-hand the meticulous details, the balanced weight, the comfort and simply the feel of a Rolex.</p>
            <img src="img/conex.jpg" alt="" style="height: 750px; width: 600px;" class="i1">
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
                </div>
            </div>
        </div>

        <img src="img/con2.jpg" alt="" style="width: 100%;">
    </div>

    <div class="box">
        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 2pc;">
            </div>
        </div>
        <h2 class="head2">CONTACT FORM</h2>

        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 5pc;">
            </div>
        </div>
        <div class="container-fluid">
            <div class="contact-form">
                <div class="col-md-7 order-md-1">
                    <form id="contactForm" class="needs-validation" novalidate="">

                        <div class="col-md-17 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" fdprocessedid="wp6ku">
                            <span class="error" id="firstNameError"></span>
                        </div>
                        <div class="col-md-17 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" fdprocessedid="7vx5le">
                            <span class="error" id="lastNameError"></span>
                        </div>


                        <div class="col-md-17 mb-3">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" id="username" placeholder="Username" required="" fdprocessedid="sgegi9">
                            </div>
                            <span class="error" id="usernameError"></span>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" fdprocessedid="mlv06">
                            <span class="error" id="emailError"></span>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" fdprocessedid="cgydz">
                            <span class="error" id="addressError"></span>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted" style="font-size: 18px;">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" fdprocessedid="u6yf3">
                            <span class="error" id="addressError2"></span>
                        </div>

                        <div class="col-md-17 mb-3">
                            <label for="district">Country</label>
                            <select class="custom-select d-block w-100" id="district" required="" fdprocessedid="v2vz1q">
                                <option value="">Choose...</option>
                                <option>United States</option>
                                <option>India</option>
                                <option>Dubai</option>
                                <option>United Kingdom</option>
                                <option>Russia</option>
                                <option>Germany</option>
                                <option>Canada</option>
                                <option>Egypt</option>
                                <option>Indonesia</option>
                                <option>Africa</option>
                                <option>Australia</option>
                                <option>South Koriya</option>
                                <option>Brazil</option>
                                <option>UK</option>
                            </select>
                            <span class="error" id="districtError"></span>
                        </div>

                        <div class="col-md-17 mb-3">
                            <label for="Mobile">Mobile Number</label>
                            <input type="number" class="form-control" id="mono" placeholder="" value="" required="" fdprocessedid="7vx5le">
                            <span class="error" id="monoError"></span>
                        </div>

                        <!-- <div class="col-md-17 mb-3">
                                <label for="Gender">Gender</label> <br>
                                <input type="radio" name="Gender" id="male">Male
                                <input type="radio" name="Gender" id="female" style="margin-left: 10px;">Female <br>
                                <span class="error" id="genderError"></span>
                            </div> -->

                        <div class="mb-3">
                            <label for="address">Type enquiry here</label>
                            <input type="text" class="form-control" id="address" required="" fdprocessedid="cgydz">
                        </div>

                        <div class="spacer">
                            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 50px;">
                            </div>
                        </div>

                        <p class="p1">Please keep me informed, so i can recive:</p>
                        <span href="#" class="js-rrmc-form-more-information rrmc-form-more-information"><abbr title="More Information About Marketing Communications
                    You agree that Gujarat Tourism Limited (‘us’, ‘our’, ‘we’),  Such communications may include requests to participate in customer experience feedback sessions.
                    In order to ensure that you receive relevant and personalised communications, we will use data we hold about you to create an individual customer profile. This may include but is not limited to data you have provided to us or which is generated by your use of our products, Further information about these customer profiles can be found in our Privacy Policy." style="text-decoration: none; font-size: 19px;">More Information</abbr></span>

                        <div class="spacer">
                            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 10px;">
                            </div>
                        </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address"><br><br>
                            <label class="custom-control-label" for="same-address"> I would like to recive all the
                                information of Rolex and I agree With All the terms & conditions of Rolex
                            </label>
                        </div>


                        <hr class="mb-4">
                        <button id="submit-btn" class="btn btn-info btn-lg btn-block" type="submit" fdprocessedid="1ykd7s">Submit</button>
                        <div class="spacer">
                            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 2pc;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="con3">
            <h2 class="d1" style="font-size: 50px;">A symbol of giving</h2>
            <p class="d2" style="font-size: 20px;">Every Rolex is delivered in a beautiful presentation box that is both protector and keeper of the jewel that nests inside it. As the presentation box is also a symbol of giving, it is important to us, if you are purchasing a gift, that the recipient’s first contact with their Rolex sets the stage for revealing what lies within.</p>
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
                </div>
            </div>
        </div>
    </div>
    <div class="video-container21">
        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 30px;">
            </div>
        </div>
        <video autoplay muted loop id="myVideo21">
            <source src="img/rollcon.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 50px;">
            </div>
        </div>
    </div>

    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="img/conc1.jpg" alt="Card image cap">
        </div>
        <div class="card">
            <img class="card-img-top" src="img/conc2.jpg" alt="Card image cap">
        </div>
        <div class="card">
            <img class="card-img-top" src="img/conc3.jpg" alt="Card image cap">
        </div>
        <div class="card">
            <img class="card-img-top" src="img/conc4.jpg" alt="Card image cap">
        </div>
    </div>
    <div class="spacer">
        <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 50px;">
        </div>
    </div>

    <div class="bg" style="background-color: white;">
        <h1 style="justify-content: center; align-items:center; text-align:center; font-size:65px; font-weight:700;">Rolex Privacy Notice</h1><br><br>
        <div class="hw" style="margin-left: 18pc;">
            <h2 style="font-size: 24px; font-weight:600;">How is your personal data collected?</h2><br><br>
            <p>We use different methods to collect data from and about you including through:</p>
            <p>• <span style="font-weight: 600;">Direct interactions.</span> You may give us your Identity, Contact and Marketing and Communications Data by filling in forms or by corresponding <br> with us by post, phone, email or otherwise.</p>
            <p>• <span style="font-weight: 600;">Automated technologies or interactions.</span> As you interact with our website, we will automatically collect Technical Data about your <br>equipment, browsing actions and patterns. We collect this personal data by using cookies, server logs and other similar technologies. <br>Please see our cookie policy for further details.</p>


            <p> • <b>Third Parties.</b> We will receive personal data about you from various third parties as set out below:</p>
            <ul class="css-8sbof e13gg2f81" style="margin-left: 4pc;">
                <li class="css-0 e13gg2f80">
                    <p class="css-hd25mm e1x8fqd30">Analytics solutions from the following parties:</p>
                    <ul class="css-8sbof e13gg2f81" style="margin-left: 4pc;">
                        <li class="css-0 e13gg2f80">
                            <p class="css-hd25mm e1x8fqd30">Adobe Analytics based in Ireland</p>
                        </li>
                        <li class="css-0 e13gg2f80">
                            <p class="css-hd25mm e1x8fqd30">Content Square based in France</p>
                        </li>
                    </ul>
                </li>
                <li class="css-0 e13gg2f80">
                    <p class="css-hd25mm e1x8fqd30">Technical monitoring solution from the following party:</p>
                    <ul class="css-8sbof e13gg2f81" style="margin-left: 4pc;">
                        <li class="css-0 e13gg2f80">
                            <p class="css-hd25mm e1x8fqd30">New Relic based in the USA</p>
                        </li>
                    </ul>
                </li>
                <li class="css-0 e13gg2f80">
                    <p class="css-hd25mm e1x8fqd30">Maps services from the following parties:
                    </p>
                    <ul class="css-8sbof e13gg2f81" style="margin-left: 4pc;">
                        <li class="css-0 e13gg2f80">
                            <p class="css-hd25mm e1x8fqd30">Google Maps based in the USA
                            </p>
                        </li>
                        <li class="css-0 e13gg2f80">
                            <p class="css-hd25mm e1x8fqd30">Baidu Maps based in China</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="spacer">
            <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
            </div>
        </div>
        <div class="hw" style="margin-left: 18pc;">
            <h2 style="font-size: 24px; font-weight:600;">Contact Rolex</h2><br><br>
            <p>If you have any questions or concerns regarding this Policy, our privacy practices or your communication with Rolex, please contact <br>Rolex in writing or by telephone:</p><br>
            <p>ROLEX SA <br>
                Rue François-Dussaud, 3-5-7 <br>
                1211 Genève 26 – Switzerland <br>
                +41 22 302 22 00</p>
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 130px;">
                </div>
            </div>
            <p>Email: privacy@rolex.com <br>
                ROLEX SA only responds to enquiries concerning data protection. Please send any communications in either English or French.
            </p>
            <p>Enquiries: enquiries@rolex.com <br>
                ROLEX SA only responds to enquiries concerning its after-sales service. Please send any communications in either English or French. <br>For any other questions, please get in touch with your jeweler.</p>
            <p>Date that this Policy was updated: April 2021</p>
        </div>
    </div>
    <img src="img/conlast.jpg" alt="" style="width: 100%;">

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

    <div class="box101">
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

    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1000,
            delay: 300
        });
        ScrollReveal().reveal(' .con1, .pi, .content1, .new, .container, .container-fluid, .pi, .d1, .d2, .e1, .e2, .tc1, .d12, .d11', {
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
                    content1.classList.add('hide');
                    newElement.classList.add('show');
                    featuretteText.classList.remove('light-text');
                    featuretteText.classList.add('dark-text');
                } else {
                    content1.classList.remove('hide');
                    newElement.classList.remove('show');
                    featuretteText.classList.remove('dark-text');
                    featuretteText.classList.add('light-text');
                }

                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;

                if (scrollTop > 50) {
                    fixedVideo.classList.add('dark-mode');
                } else {
                    fixedVideo.classList.remove('dark-mode');
                }
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

    <!-- Contact -->
    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault();
                $('.error').text('');

                var firstName = $('#firstName').val();
                var lastName = $('#lastName').val();
                var username = $('#username').val();
                var email = $('#email').val();
                var address = $('#address').val();
                var address2 = $('#address2').val();
                var country = $('#district').val();
                var MobileNO = $('#mono').val().replace(/\D/g, '');

                if (firstName === '') {
                    $('#firstNameError').text(' Valid first name is required.');
                }

                if (lastName === '') {
                    $('#lastNameError').text(' Valid last name is required.');
                }

                if (username === '') {
                    $('#usernameError').text(' Valid username is required.')
                } else if (!isValidUsername(username)) {
                    $('#usernameError').text(' Invalid username format');
                }

                if (email === '') {
                    $('#emailError').text('Valid Email and chipped text is required');
                } else if (!isValidEmail(email)) {
                    $('#emailError').text('Invalid email format');
                }

                if (address === '') {
                    $('#addressError').text('Please enter your shipping address.');
                } else if (address2 === '') {
                    $('#addressError2').text('its compulsory');
                }

                if (country === '') {
                    $('#districtError').text('Please enter a Valid country');
                }

                if (MobileNO === '') {
                    $('#monoError').text('Mobile number is required');
                } else if (MobileNO.length !== 10) {
                    $('#monoError').text('Mobile number must be 10 digits long');
                }
            });

        });

        $(document).ready(function() {
            $('#submit-btn').click(function() {
                $('.error').text('');
                if ($('.error:empty').length === $('.error').length) {
                    var message = "Form submitted with the following information:\n\n";
                    message += "First Name: " + $('#firstName').val() + "\n";
                    message += "Last Name: " + $('#lastName').val() + "\n";
                    message += "Username: " + $('#username').val() + "\n";
                    message += "Email: " + $('#email').val() + "\n";
                    message += "Address: " + $('#address').val() + "\n";
                    message += "Country: " + $('#district').val() + "\n";
                    message += "Mobile Number:" + $('#mono').val() + "\n";
                    message += "Gender:" + ($('input[name="Gender"]:checked').val() || 'Not specified') + "\n";


                    alert(message);

                    //Reset the form after displaying the alert
                    document.getElementById('contactForm').reset();
                }
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>