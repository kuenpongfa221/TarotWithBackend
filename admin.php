<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./script/opcl.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Lato", sans-serif;
            overflow: scroll;
        }

        .topbar {
            height: 12vh;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #ddd;
            overflow-x: hidden;

            display: flex;
        }

        .topbar>a {
            color: black
        }

        .topbar>a>.logo {
            width: 312px;
            height: 100%;
            background-color: khaki;

            display: flex;
            justify-content: start;
            align-items: center;
            padding-left: 30px;
        }

        .logo>img {
            width: 30%;
        }

        .topbar>.topbar-main {
            width: calc(100% - 312px);
            height: 100%;
            background-color: teal;
        }

        .topbar-main>.main-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            padding-left: 10px;
        }

        .main-container>i {
            font-size: 2rem;
        }

        .sidenav {
            height: calc(100% - 12vh);
            width: 312px;
            position: fixed;
            z-index: 1;
            top: 12vh;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 332px;
            margin-top: calc(12vh + 20px);
            /* Same as the width of the sidenav */
            font-size: 28px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Modal container -->
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">

            </div>
        </div>
    </div>

    <!-- Top Bar -->
    <section class="topbar">
        <a href="#">
            <div class="logo">
                <img src="./images/bywindLogo.png" alt="">
                <h3>隨風而來</h3>
            </div>
        </a>
        <div class="topbar-main">
            <div class="main-container"> <i class="ri-menu-line"></i></div>

        </div>
    </section>
    <!-- end of Top Bar -->


    <!-- sidenav -->
    <div class="sidenav">
        <a href="?do=reserve">預約占卜管理</a>
        <a href="?do=cardmeanings">牌義 • 教學管理</a>
        <a href="?do=testimonials">客戶回饋管理</a>
        <a href="?do=product">商品管理</a>
        <a href="?do=service">服務管理</a>
        <a href="?do=footer">footer管理</a>
    </div>
    <!-- end of sidenav -->

    <div class="main">
        <?php
        $do = $_GET['do']  ?? 'reserves';
        $file = "./backend/$do.php";
        if (file_exists($file)) {
            include_once($file);
        } else {
            include_once("./backend/reserve.php");
        }
        ?>
    </div>

</body>

</html>