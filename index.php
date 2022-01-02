<?php

session_start();


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>WordNest - Heaven for bloggers</title>
</head>

<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="index.php">
                <span><img src="img/logo.jpg" width="94px" alt="" style="border-radius: 55px;     border: 2px solid black;
    border-radius: 31px;
    padding: 2px;
    width: 56px;
    height: 56px;"></span>
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blogs</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>



        <div class="nav-right">
            <form action="/search.html" method="get" style="margin-top: -17px;">
                <input class="form-input" id="myInput" type="text" name="query" placeholder="Article Search" onkeyup="searchContent()" style="padding: 2px 6px;">
                <button class="btn" style="padding-top: 3px;
                margin-top: 7px;
                background-color: cyan;">Search</button>
            </form>
            <div class="action" style="top: 2px;">
                <div class="profile" onclick="menuToggle();">
                    <img src="img/user.png" style="width: 39px;">
                </div>
                <div class="menu" style="margin-right: 14px;">
                    <h3><?php echo $_SESSION['username']; ?><br><span>Blogs</span></h3>
                    <ul>
                        <li><img src="img/profile.jpg" style="width: 40px;"><a href="blog.php">My blogs</a></li>
                        <li><img src="img/logout.png" style="width: 40px;"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>


    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="m-auto content max-width-1 my-2">
        <div class="content-left">
            <h1>Hello <?php echo $_SESSION['username']; ?>, Welcome to The world of blogs.</h1>

            <p>
                Wordnest Blogs gives you a platform to share your thoughts with others.We have made it in such a way
                that the user does not have to face any kind of confusion while writing his thoughts.Writing a blog is
                no less than an art. Choosing the right words, writing in such a way that a reader can take every word
                to heart.<br> That's it from our side . Happy blogging. Thank You.</p>
        </div>
        <div class="content-right">
            <img src="img/home.svg" alt="iBlog">
        </div>
    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>Featured Articles</h2>
       
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/tea.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a target="_blank" href="https://followtheboat.com/sabah-tea/">
                    <h3>SABAH TEA AND HOT SPRINGS
                    </h3>
                </a>

                <div>Liz and Jamie</div>
                <span>August 1, 2021 | 5 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/sailing.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a target="_blank" href="https://followtheboat.com/slow-sailing-and-slow-fishing/">
                    <h3>SLOW SAILING AND SLOW FISHING</h3>
                </a>

                <div>Liz and Jamie</div>
                <span>August 15, 2021 | 8 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/tesla.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a target="_blank" href="https://www.theverge.com/2021/8/20/22633958/tesla-bot-elon-musk-ai-day">
                    <h3>Don’t overthink it: Elon Musk’s Tesla Bot is a joke.</h3>
                </a>

                <div>James Vincent </div>
                <span>Aug 20, 2021 | 10 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/spotify.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a target="_blank" href="https://techcrunch.com/2021/08/20/spotify-to-spend-1b-buying-its-own-stock/">
                    <h3>Spotify to spend $1B buying its own stock</h3>
                </a>

                <div>Alex Wilhelm</div>
                <span>August 20, 2021 | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/communications.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a target="_blank" href="https://techcrunch.com/2021/08/20/communication-software-startup-channels-takes-on-event-management-with-text-workflow/">
                    <h3>Communication software startup Channels takes on event management with text workflow</h3>
                </a>

                <div>Christine Hall</div>
                <span>August 20, 2021 | 9 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/nasa.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a target="_blank" href="https://gizmodo.com/jeff-bezos-instigates-potentially-crushing-delay-of-nas-1847524983">
                    <h3>Jeff Bezos Instigates Potentially Crushing Delay of NASA Lunar Lander</h3>
                </a>

                <div>Alister Robi</div>
                <span>August 20, 2021 | 7 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/yoga.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a target="_blank" href="https://www.nerdfitness.com/blog/a-nerds-guide-to-yoga-4-movements-to-try-today/">
                    <h3>21 Basic Yoga Poses for Beginners: Plus Videos of Complete Routines
                    </h3>
                </a>

                <div> Steve Kamb</div>
                <span>August 19, 2021 | 15 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/wieght.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a target="_blank" href="https://breakingmuscle.com/news/the-lifting-game-weightlifters-versus-crossfit-athletes">
                    <h3>The Lifting Game: Weightlifters Versus CrossFit Athletes</h3>
                </a>

                <div>Douglas Perry</div>
                <span>August 19, 2021 | 10 min read</span>
            </div>
        </div>

    </div>

    <div class="footer">
        <p>Copyright &copy; wordnest.com </p>
        <p>2021-2022</p>
    </div>
    <script>
        var dd_main = document.querySelector(".dd_main");

        dd_main.addEventListener("click", function() {
            this.classList.toggle("active");
        })

        function menuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
</body>

</html>