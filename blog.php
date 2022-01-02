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
    <link rel="stylesheet" href="css/blog.css">
    
    
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My blogs - WordNest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navigation max-width-1 ma-auto" style="margin-top: 31px;
    font-family: var(--font1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: 126px;">
        <div class="nav-left" style="margin-left: 3px;
        margin-top: 1px;">
            <a href="index.php">
                <span><img src="img/logo.jpg" width="94px" alt="" style="    border: 2px solid black;
                    border-radius: 31px;
                    padding: 2px;
                    width: 56px;
                    height: 56px;
                    margin-top: -15px;
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


        <div class="nav-right" style="margin-top: -18px">
            <form action="/search.html" method="get" style="margin-top: -13px;">
                <input class="form-input" type="text" name="query" placeholder="Article Search" style="padding: 4px 9px;
                padding-top: 7px;
                font-size: 16px;
                border: 2px solid black;
                border-radius: 4px;
                margin: 0 13px;
                font-family: var(--font1);
                
            ">
                <button class="butt" style="cursor: pointer;
                padding: 4px 20px;
                margin-right: 51px;
                padding-top: 8px;
                border: 2px solid black;
                border-radius: 5px;
                font-family: var(--font1);
                font-size: 16px;
                transition: all 0.3s ease-in-out;
                margin-top: 20px;">Search</button>
            </form>
        </div>
        <div class="action" style="margin-top: -2px;">
            <div class="profile" onclick="menuToggle();">
                <img src="img/user.png" style="width: 39px;">
            </div>
            <div class="menu">
                <h3><?php echo $_SESSION['username']; ?><br><span>Blogs</span></h3>
                <ul>
                    <li><img src="img/profile.jpg" style="width: 40px;"><a href="blog.php">My blogs</a></li>
                    <li><img src="img/logout.png" style="width: 40px;"><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
            
            
                </nav>
        </div>

    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="container my-3" style="width: 60%;">
        <h1 style="margin-top: 82px;">My blogs</h1>
        <div class="card" style="margin-top: 29px;" >
           
                    <div class="card-body">
                        <div class="form-group">
                            <h5 class="card-title">Add title</h5>
                            <input type="text" class="form-control" id="addTitle" aria-describedby="title"
                                placeholder="Enter title">
                        </div>
                        <h5 class="card-title">Add a blog</h5>
                        <div class="form-group">
                            <textarea class="form-control" id="addTxt" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary" id="addBtn">Add a blog</button>
                    </div>
                </div>
                <hr>
                <h1>Your Blogs</h1>
                <hr>
                <div id="notes" class="row container-fluid"> </div>
            </div>
        
            
            

    <div class="footer-f">
        <p style="margin-top: 21px;">Copyright &copy; wordnest.com </p>
        <p style="margin-top: -17px;";>2021-2022</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    
    <script src="js/app.js"></script>
    
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