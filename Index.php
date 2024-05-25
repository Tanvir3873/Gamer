<?php
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer</title>
    <link rel="stylesheet" href="Gamer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;600;700;800&display=swap" />

</head>

<body>

    <nav class="nav-section">
        <ul class="left">
            <li><img class="main-icon" src="./images/Frame.png" alt="icon"></li>
            <li>
                <h1><span>G</span>amer</h1>
            </li>
        </ul>

        <ul class="right">
            <li> <a href="about.html">About Us</a></li>
            <li><a href="me.html">Developer</a></li>
            <li id="follow">
                <p class="follow">Follow Us On <a href="https://www.youtube.com/@KCityGaming"><i class="fa-brands fa-youtube"></i></a> <a href=""><i
                            class="fa-brands fa-tiktok"></i></a> </p>
            </li>
        </ul>
    </nav>

    <div class="first">
        <div class="left">
            <div class="left-text">
                <p class="upercase">Play Like the</p>
                <p id="goat" class="upercase">G.O.A.T.</p>
                <p><i class="fa-regular fa-circle-play"> </i> 1-click instant play</p>
                <p><i class="fa-solid fa-circle-arrow-down"></i> No Download</p>
                <p><i class="fa-solid fa-user-group"></i> 1000s of supported online game</p>
                <div class="banner-button">
                    <button class="sign-in"><a href="Registration.php">SIGN UP</a></button>
                    <button id="scroll-target" onclick="smoothScrollToBottom()">GO ROGUE</button>             
                
                    <script src="scroll.js"></script>
                
                </div>

            </div>
        </div>

        <div class="right">
            <div class="right-imag">
                <img class="grp-18" src=".//images/Group 18.png" alt="">
            </div>
        </div>
    </div>

    <div class="secoend">
        <div class="img">
            <img src=".//images/pngwing 4.png" alt="">
        </div>

        <div class="gamer">
            <h1>We are gamer</h1>
            <p>An international digital games and entertainment <br>
                company. We develop, publish and distribute multiplayer <br>
                mobile games. We reach over 400 million players each <br>
                month and our audience keeps growing.</p>
            <br><br>
            <a href="">KNOW MORE</a>
            <br> <br>
            <P class="purpose">Our purpose...</P>
            <h4>"unleash the gamer in everyone"</h4>
        </div>
    </div>

    <div class="online-game">
        <h1 class="online"><span class="black">Online Games</span> Funny Videos
        </h1>
        <p>A Collection of Hilarious Videos to Brighten Your Day</p> <br>
        <div class="games">
            <div class="games-img"><img src=".//images/Rectangle 4.png" alt="">
               <a class="play-button" href="https://www.crazygames.com/game/vortex-io">Play Now</a>
                <p>No Download. No Installs. Play <br>
                    games Instantly on Gamer.io</p>
            </div>
            <div class="games-img"><img src=".//images/Rectangle 5.png" alt="">
                <a class="play-button" href="https://www.crazygames.com/game/vortex-io">Play Now</a>
                <p>Did you score? #unblockedgames <br>
                    #school</p>
            </div>
            <div class="games-img"><img src=".//images/Rectangle 7.png" alt="">
                <a class="play-button" href="https://www.crazygames.com/game/vortex-io">Play Now</a>
                <p>Breaking game records <br>
                    like OG</p>
            </div>
            <div class="games-img"><img src=".//images/Rectangle 6.png" alt="">
                <a class="play-button" href="https://www.crazygames.com/game/vortex-io">Play Now</a>
                <p>Busted gaming on school laptop, <br>
                    but you are still lit.</p>
            </div>

        </div>
    </div>


    <div class="third-banner">
        <div class="play">
            <h1>Play Instantly, <br>
                <span class="black">No Downloads <br>
                    No Installs.
            </h1></span>
            <p>Play games online for free without <br>
                downloading. Just click the Play button <br>
                and play instantly in your browser.</p>

        </div>

        <div class="third-img">
            <img class="overflow-main-img" src=".//images/Rectangle 55.png" alt="">
            <img class="overflow-img" src=".//images/Rectangle 66.png" alt="">

        </div>
    </div>

    <div class="demo">
        <div class="careers">
            <h1 class="white">Careers</h1>
            <p class="white">Gamer is driven to create the best and most fun games for our millions of <br>
                players all around the world, and we,re always on the lookout for more top <br>
                talent to join our growing team. If you,d like to help us make great games <br>
                and be a part of Gamers bright future, we,d love to hear from you.</p>

            <div class="country">

                <div class="country-left">
                    <p>Multimedia Artisr +</p>
                    <p>Data Engineer +</p>
                    <p>Adroid Engineer +</p>
                    <p>Server Developer +</p>
                    <p>Group Financial Accountant + </p>
                    <p>Senior User Acuisition Specialist +</p>
                </div>
                <div class="country-right">
                    <p>Lisbon, Portugal</p>
                    <p>Lisbon, Portugal</p>
                    <p>Zoetermeer, Netherlands</p>
                    <p>Lisbon, Portugal</p>
                    <p>London, United Kingdom </p>
                    <p>Lisbon, Portugal</p>
                </div>
            </div>
            <a href="">See All Position</a>

        </div>

        <div class="fourth-img">
            <img src=".//images/Group 65.png" alt="">
        </div>
    </div>

    <div class="game-link">
        <div class="top-links">
            <a href="https://store.epicgames.com/en-US/c/action-games?sortBy=releaseDate&sortDir=DESC&count=40" class="list"><img src=".//images/Rectangle 11.png" alt="">Action Games</a>
            <a href="https://store.epicgames.com/en-US/c/adventure-games?sortBy=releaseDate&sortDir=DESC&count=40" class="list"><img src=".//images/Rectangle 12.png" alt="">Adventure Games</a>
            <a href="" class="list"><img src=".//images/Rectangle 13.png" alt="">Arcade Games</a>
            <a href="" class="list"><img src=".//images/Rectangle 14.png" alt="">Educational Games</a>
            <a href="" class="list"><img src=".//images/Rectangle 15.png" alt="">Word Games</a>

        </div>
        <div class="bottom-links">
            <a href="" class="list"><img src=".//images/Rectangle 16.png" alt="">Role Playing Games</a>
            <a href="" class="list"><img src=".//images/Rectangle 17.png" alt="">Music & Audio Games</a>
            <a href="" class="list"><img src=".//images/Rectangle 18.png" alt="">Puzzle Games</a>
            <a href="" class="list"><img src=".//images/Rectangle 19.png" alt="">Strategy Games</a>
        </div>
    </div>


    <footer>
        <div class="end">
            <div class="end-icon">
                <img class="last-icon" src="./images/Frame.png" alt="icon">

                <h1><span>G</span>amer</h1>
            </div>
            <div class="six-link">
                <a href="">Our Story</a>
                <a href="">Games</a>
                <a href="">Web Gamer</a>
                <a href="">Careers</a>
                <a href="">Support</a>
                <a href="./me.html">My Account</a>
            </div>


            <div class="social-link">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.facebook.com/groups/731944476892881/"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/@KCityGaming"><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-apple"></i></a>
            </div>

            <div class="term">
                <a href="">Terms and Conditions </a>
                <a href="">Privacy Policy</a>
                <a href="">Cookie Policy</a>
                <a href="">Privacy Settings</a>

            </div>
            <P class="last">Play Games @ Gamer @ 2022-2024 Gamer Bangladesh
            </P>

        </div>

    </footer>

</body>

</html>