<?php

session_start();



?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>

  <link rel="stylesheet" href="css/utils.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<body>
  <nav class="navigation max-width-1 ma-auto" style="margin-top: 32px;
    font-family: var(--font1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: 124px;">
    <div class="nav-left" style="margin-left: 3px;
        margin-top: 1px;">
      <a href="index.php">
        <span><img src="img/logo.jpg" width="94px" alt="" style="    border: 2px solid black;
                    border-radius: 31px;
                    padding: 2px;
                    width: 56px;
                    height: 56px;
                    margin-top: -12px;
                    "></span>
      </a>
      <ul style="display: flex;
            align-items: center;
            margin: 0 77px;
            font-size: 22px;
            padding-bottom: 23px;">
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blogs</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>

    <div class="centerdiv">
      <a href="https://www.facebook.com/profile.php?id=100011188242156" target="_blank">
        <i class="fa fa-2x fa-facebook"></i>
      </a>


      <a href="https://www.instagram.com/harshit.knows/" target="_blank">
        <i class="fa fa-2x fa-instagram"></i>
      </a>

      <a href="https://github.com/harshit06-code" target="_blank">
        <i class="fa fa-2x fa-github"></i>
      </a>

    </div>
    <div class="nav-right" style="margin-top: -18px">

    </div>
    <div class="action" style="margin-top: -2px;">
      <div class="profile" onclick="menuToggle();">
          <img src="img/user.png" style="width: 35px;">
      </div>
    <div class="menu">
      <h3>
        <?php echo $_SESSION['username']; ?><br><span>Blogs</span>
      </h3>
      <ul>
        <li><img src="img/profile.jpg" style="width: 40px;"><a href="blog.php">My blogs</a></li>
        <li><img src="img/logout.png" style="width: 40px;"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    </div>

    </div>
  </nav>


  </nav>

  <div class="max-width-1 m-auto">
    <hr style="display: block;
        unicode-bidi: isolate;
        margin-block-start: 0.5em;
        margin-block-end: 0.5em;
        margin-inline-start: auto;
        margin-inline-end: auto;
        overflow: hidden;
        border-style: inset;
        border-width: 1px;">
  </div>

  <body>
    <img src="img/11.svg" alt="" style="position: absolute;
    width: 72%;
    height: inherit;
    border-radius: 17px;
    margin-left: 145px;
    opacity: 0.15;
    ">
  </body>
  <div class="imgContact"><img src="img/contactus.jpg" alt=""></div>
  <div class="wrapper">
    <h2>Contact us</h2>
    <div id="error_message">

    </div>
    <form id="myform" onsubmit="return validate();">
      <div class="input_field">
        <input type="text" placeholder="Name" id="name">
      </div>
      <div class="input_field">
        <input type="text" placeholder="Phone" id="phone">
      </div>
      <div class="input_field">
        <input type="text" placeholder="Email" id="email">
      </div>
      <div class="input_field">
        <textarea placeholder="Message" id="message" style="width: 289px;"></textarea>
      </div>
      <div class="btn-submit">
        <input type="submit">
      </div>
    </form>
  </div>


  <div class="footer">
    <p>Copyright &copy; wordnest.com </p>
    <p>2021-2022</p>
  </div>

  <script src="js/contact.js"></script>
  <script>
    var dd_main = document.querySelector(".dd_main");

    dd_main.addEventListener("click", function () {
      this.classList.toggle("active");
    })

    function menuToggle() {
      const toggleMenu = document.querySelector('.menu');
      toggleMenu.classList.toggle('active')
    }
  </script>


</body>

</html>