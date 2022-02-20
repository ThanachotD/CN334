<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .typewriter h1 {
            overflow: hidden; /* Ensures the content is not revealed until the animation */
            border-right: .15em solid orange; /* The typwriter cursor */
            white-space: nowrap; /* Keeps the content on a single line */
            margin: 0 auto; /* Gives that scrolling effect as the typing happens */
            letter-spacing: .15em; /* Adjust as needed */
            animation:
                typing 3.5s steps(40, end),
                blink-caret .75s step-end infinite;
        }

        /* The typing effect */
        @keyframes  typing {
            from { width: 0 }
            to { width: 100% }
        }

        /* The typewriter cursor effect */
        @keyframes  blink-caret {
            from, to { border-color: transparent }
            50% { border-color: orange; }
        }

        .skills {
            margin-top:530px;
            position: absolute;
            top: 31.3%;
            left: 78%;
            transform: translate(-50%, -50%);
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
        }

        .skills-bar {
            padding: 25px 30px;
        }

        .skills-bar .bar {
            margin: 25px 0;
        }

        .skills-bar .bar .info span {
            font-size: 1rem;
            font-weight: 500;
        }

        .skills-bar .bar .info {
            margin-bottom: 8px;
            color: #07374a;
        }

        .skills-bar .bar .progress-line {
            position: relative;
            height: 10px;
            width: 550px;
            background: #f0f0f0;
            border-radius: 10px;
            transform: scaleX(0);
            transform-origin: left;
            animation: animate 1s cubic-bezier(1, 0, 0.5, 1) forwards;
        }

        .bar .progress-line span {
            position: absolute;
            background: #057ba5;
            height: 100%;
            border-radius: 10px;
            transform: scaleX(0);
            transform-origin: left;
            text-transfrom : uppercase;
            animation: animate 1s 1s cubic-bezier(1, 0, 0.5, 1) forwards;
        }

        @keyframes  animate {
            100% {
                transform: scaleX(1);
            }
        }

        .progress-line .html {
            width: 80%;
        }
        .progress-line .css {
            width: 70%;
        }
        .progress-line .bootstrap {
            width: 82%;
        }
        .progress-line .javascript {
            width: 62%;
        }
        .progress-line .c {
            width: 90%;
        }

        .bar .progress-line span::before {
            position: absolute;
            content: "";
            height: 0;
            right: 0;
            top: -14px;
            width: 0;
            border: 7px solid transparent;
            border-bottom-width: 0px;
            border-right-width: 0px;
            border-top-style: #f0f0f0;
            border-top-color: #07374a;
        }

        .bar .progress-line span::after {
            position: absolute;
            right: 0;
            top: -28px;
            color: #f0f0f0;
            font-size: 12px;
            font-weight: 700;
            background: #07374a;
            padding: 1px 8px;
            border-radius: 3px;
        }


        .progress-line .html::after {
            content: "60%";
        }
        .progress-line .css::after {
            content: "50%";
        }
        .progress-line .bootstrap::after {
            content: "30%";
        }
        .progress-line .javascript::after {
            content: "40%";
        }
        .progress-line .c::after {
            content: "99%";
        }

        /* ////........Media Query........//// */

        @media (max-width: 700px) {
            .skills{
                width: 80%;
            }

            .skills-bar .bar .progress-line{
                width: 100%;
            }
        }
        html {
            scroll-behavior: smooth;
        }

        #section1 {
            height: 1200px;
            background-color: pink;
        }

        #section2 {
            height: 600px;
        }

        h4 {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            line-height: 250%;
            font-weight: lighter
        }

        #divsection {
            width:610px;
            height:410px;
            background-color: white;
            border-radius: 10px;
            border: 7px solid transparent;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgb(9, 67, 91)

        }


    </style>
    <title>Portfolio</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Bhuwich</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#section1" style="color:white">Portfolio</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#section2" style="color:white">About</a></li>
            </ul>
        </div>
            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <?php echo e(Auth::user()->name); ?>

            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
    </div>
</nav>
<section style="width:100%;height:520px;background-color:#09435b" id="section1">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" style="width:300px;height:300px;margin-top:50px" src="<?php echo e(asset('mypicture.jpg')); ?>">
        <!-- Masthead Heading-->
        <div class = "typewriter">
            <h1 class="masthead-heading text-uppercase mb-0" style="color:white">My Portfolio</h1>
        </div>
        <!-- Icon Divider-->
            <div class="divider-custom divider-light" >
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0" style="font-size: 32px;color:white">Bhuwich Winyutrakul</p>
    </div>
</section>
<div id="section2">
    <div class="container" style="margin-top:32px">
        <div class="row" style="margin-left:-150px;">
            <div class="col-md-4" id="divsection" style="height:400px"><h2 style="text-align:center">My profile</h2><br>
                <h4>Name : Bhuwich Winyutrakul<br>
                    Age : 20 years old <br>
                    Email : bhuwich.win@dome.tu.ac.th <br>
                    Phone : 0855555555 <br>
                    Hobby : play game, listen to music
                </h4>
            </div>
        </div>
    </div>
</div>
<div class="skills">
    <div class="skills-bar">
        <div class="bar">
            <div class="info">
                <span>Python</span>
            </div>
            <div class="progress-line"><span class="html"></span></div>
            <div class="bar">
                <div class="info">
                    <span>Java</span>
                </div>
                <div class="progress-line"><span class="css"></span></div>
                <div class="bar">
                    <div class="info">
                        <span>ML</span>
                    </div>
                    <div class="progress-line"><span class="bootstrap"></span></div>
                    <div class="bar">
                        <div class="info">
                            <span>Laravel</span>
                        </div>
                        <div class="progress-line">
                            <span class="javascript"></span>
                        </div>
                        <div class="bar">
                            <div class="info">
                                <span>Play game</span>
                            </div>
                            <div class="progress-line"><span class="c"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #09435b;color:white">
        © 2022 Copyright Bhuwich All right reserved
    </div>
    <!-- Copyright -->
</footer>
</html>
<?php /**PATH C:\xamppp\htdocs\CN334\6310742793\resources\views/pages/main.blade.php ENDPATH**/ ?>