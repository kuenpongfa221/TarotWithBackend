<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Lato", sans-serif;
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

        .topbar>.logo {
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
            margin-left: 312px;
            margin-top: 12vh;
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
    <!-- Top Bar -->
    <section class="topbar">
        <div class="logo">
            <img src="./images/bywindLogo.png" alt="">
            <h3>隨風而來</h3>
        </div>
        <div class="topbar-main">
            <div class="main-container"> <i class="ri-menu-line"></i></div>

        </div>
    </section>
    <!-- end of Top Bar -->


    <!-- sidenav -->
    <div class="sidenav">
        <a href="?do=reserve">預約占卜管理</a>
        <a href="?do=cardMeaning">牌義 • 教學管理</a>
        <a href="?do=testimonials">客戶回饋管理</a>
        <a href="?do=product">商品管理</a>
        <a href="?do=service">服務管理</a>
    </div>
    <!-- end of sidenav -->

    <div class="main">
        <!-- <h2>Sidebar</h2> -->
        <!-- <p>This sidebar is of full height (100%) and always shown.</p> -->
        <!-- <p>Scroll down the page to see the result.</p> -->
        <!-- <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p> -->
        <!-- <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p> -->
        <!-- <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p> -->
        <!-- <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p> -->
        <?php
        $do = $_GET['do']  ?? 'reserve';
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