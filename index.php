<?php include_once "./api/base.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    /> -->
  <link rel="stylesheet" href="./styles/bootstrap5Fake.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <title>隨風而來</title>
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
</head>

<body>
  <style>
    .index-top-bar {
      display: flex;
    }
  </style>
  <!-- Hero -->
  <!-- 預約占卜 -->
  <section class="et-hero-tabs">
    <!-- <h1>STICKY SLIDER NAV</h1> -->
    <div class="index-top-bar">
      <!-- <div class="blank"></div> -->
      <div class="logo">
        <a href="#" class='header-logo-a-tag'>
          <img src="./images/bywindLogo-2.png" alt="">
        </a>
      </div>

      <?php
      if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') {

        echo "<div class='button-container'>";
        echo "<h3 style='margin-bottom:2%;margin-right:2%;'>~~歡迎admin~~ </h3>";
        echo "<button style='width:125px; margin-right:10px;' id='adminBtn'>返回管理頁面</button>";
        echo "<button style='width:125px;' id='index-logout'>登出</button>";
        echo "</div>";
      } else {
        // button 開login modal
        echo "<div class='button-container'>";
        #<button onclick="document.getElementById('id01').style.display='block'" id="login">登入</button>
        echo "<button id='login'>登入</button>";
        echo "</div>";
      }
      ?>
      <!-- button 開login modal -->
      <!-- <div class="button-container"> -->
      <!-- <button onclick="document.getElementById('id01').style.display='block'" id="login">登入</button> -->
      <!-- <button id="login">登入</button> -->
      <!-- </div> -->
      <!-- Login Modal開始 -->
      <div id="id01" class="modal" style="z-index:100;">

        <form class="modal-content animate" action="./api/login.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="./images/img_avatar2.png" alt="Avatar" class="avatar">
          </div>

          <div class="modal-container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
      </div>
      <!-- Login Modal結束 -->
    </div>
    <div class="et-hero-tabs-container">
      <a class="et-hero-tab" href="#tab-reserve">預約占卜</a>
      <a class="et-hero-tab" href="#tab-card-meaning">牌義 • 教學</a>
      <a class="et-hero-tab" href="#tab-testimonials">客戶回饋</a>
      <a class="et-hero-tab" href="#tab-product">商品</a>
      <a class="et-hero-tab" href="#tab-service">服務</a>
      <span class="et-hero-tab-slider"></span>
    </div>
    <!-- background-image -->
    <!-- <div class="img-container" id="tab-reserve"> -->
    <!-- <h2>塔羅，遇見你的內在天賦之旅</h2> -->
    <!-- <img src="./images/tarotHeroSec.jpg" alt=""> -->
    <!-- <button id="reserveBtn">立即預約占卜</button> -->
    <!-- </div> -->
    <?php
    $rows = $Reserves->all(['sh' => '1']);
    foreach ($rows as $row) {
    ?>
      <div class="img-container" id="tab-reserve" data-img-src="<?= $row['img'] ?>">
        <!-- <img src="./images//tarotsSection/tarotHeroSec.jpg" alt=""> -->
        <h2><?= $row['title'] ?></h2>
        <!-- <img src="./images/tarotHeroSec.jpg" alt=""> -->
        <button id="reserveBtn"><?= $row['btnText'] ?></button>
      </div>
    <?php
    }
    ?>
  </section>

  <!-- Main -->
  <main class="et-main">
    <!-- 牌義 • 教學 -->
    <section class="et-slide container-fluid" id="tab-card-meaning">
      <div class="row justify-content-center">

        <?php
        $rows = $Cardmeanings->all(['sh' => 1]);
        foreach ($rows as $row) {
        ?>
          <div class="col-4 card-col">
            <!-- <h2>Card Image</h2>
            <p>Image at the top (card-img-top):</p> -->
            <div class="card" style="width:200px">
              <img class="card-img-top" src="./images/tarots/<?= $row['img'] ?>" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title"><?= $row['title'] ?></h4>
                <p class="card-text"><?= $row['contents'] ?></p>
                <a href="#tab-es6" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

      </div>
    </section>

    <!-- 客戶回饋 -->
    <section class="et-slide" id="tab-testimonials">
      <h1>客戶回饋</h1>
      <div class="row gy-5 gx-4">
        <?php
        $rows = $Testimonials->all(['sh' => 1]);
        foreach ($rows as $row) {
        ?>
          <div class="col-sm-6 col-lg-4" data-aos="fade-down" data-aos-delay="150">
            <div class="review">
              <div class="review-head p-4 bg-white theme-shadow">
                <div class="text-warning">
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                </div>
                <p>
                  <?= $row['contents'] ?>
                </p>
              </div>
              <div class="review-person mt-4 d-flex align-items-center">
                <div class='review-img-container'>
                  <img class="rounded-circle" src="./images/testimonials/<?= $row['img'] ?>" alt="" />
                </div>
                <div class="  ">
                  <h5 style="margin-left: 5px;"><?= $row['name'] ?></h5>
                  <small><?= $row['jbTitle'] ?></small>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

      </div>
    </section>

    <!-- 商品 -->
    <section class="et-slide" id="tab-product">
      <h1>商品</h1>
      <h3>療育 你的內在</h3>
      <div class="row justify-content-center">
        <?php
        $rows = $Product->all(['sh' => 1]);
        foreach ($rows as $row) {
        ?>
          <div class="col-4 card-col">
            <div class="card" style="width:200px">
              <img class="card-img-top" src="./images/product/<?= $row['img'] ?>" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title"><?= $row['title'] ?></h4>
                <p class="card-text"><?= $row['contents'] ?></p>
                <a href="#tab-es6" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

    </section>

    <!-- 服務 -->
    <section class="et-slide" id="tab-service">
      <h1>服務</h1>
      <div class="row justify-content-center">
        <?php
        $rows = $Service->all(['sh' => 1]);
        foreach ($rows as $row) {
        ?>
          <div class="col-4 card-col">
            <div class="card" style="width:200px">
              <img class="card-img  bg-transparent" src="./images/service/<?= $row['img'] ?>" alt="Card image" style="width:100%">
              <div class="card-body card-img-overlay d-flex justify-content-center flex-column">
                <div class="bg-darkgray">
                  <h4 class="card-title"><?= $row['title'] ?></h4>
                  <p class="card-text"><?= $row['contents'] ?></p>
                  <a href="#tab-es6" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </section>

  </main>

  <!-- footer -->
  <section class="footer">
    <section class="footer-top" id='footer'>
      <section class="footer-left">
        <div class="logo">
          <a href="#" class='footer-logo-a-tag'>
            <img src="./images/bywindLogo.png" alt="">
            <h3>隨風而來</h3>
          </a>
          <a href="#">
            <h3>聯絡我們</h3>
          </a>
          <a href="#">
            <h3>常見問題</h3>
          </a>
        </div>
      </section>
      <section class="footer-middle">
        <!-- php foreach -->
        <!-- 預約占卜
牌義 • 教學
客戶回饋
商品
服務 -->
        <div class="row align-items-center" style="margin-top:2rem; margin-left:1rem;">

          <!-- foreach $mainFooters -->
          <?php
          $mainFooters = $Footer->all(['sh' => 1, "main_id" => 0]);
          foreach ($mainFooters as $mainFooter) {
          ?>
            <div class="col footer-nav">
              <a href="<?= $mainFooter['href'] ?>" class="footer-a">
                <h3><?= $mainFooter['title'] ?></h3>
              </a>
              <ul>

                <!-- foreach $subFooters -->
                <?php
                $subFooters = $Footer->all(['sh' => 1, "main_id" => $mainFooter['id']]);
                foreach ($subFooters as $subFooter) {
                ?>
                  <a href="<?= $subFooter['href'] ?>">
                    <li><?= $subFooter['title'] ?></li>
                  </a>
                <?php
                }
                ?>
                <!-- end of foreach -->

              </ul>
            </div>
          <?php
          }
          ?>
          <!-- end of foreach -->


      </section>

    </section>

    <hr class='footer-hr'>

    <section class="footer-bottom">
      <section class='sign-up'>
        <p style="margin-right:20px;">免費註冊！！:</p>
        <button class='footer-button'>Sign Up</button>
      </section>


      <hr class='footer-hr'>
      <!-- Section: Social Media -->
      <section class="social-media">
        <!-- Facebook -->
        <a class="btn btn-outline-light rounded-circle m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light rounded-circle m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light rounded-circle m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light rounded-circle m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light rounded-circle m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light rounded-circle m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
      </section>
      <!--End of Section: Social media -->
      <section class="copyright">
        © 2024 Copyright: Michael Zhan
      </section>
    </section>
  </section>

  <!-- top fixed circle -->
  <a href="#">
    <div class="top-container">
      <h3 class="top-text">top</h3>
    </div>
  </a>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="./script/stickyNavigation.js"></script>

  <script>
    $(document).ready(function() {
      const imgName = $(".img-container").data('img-src');
      $(".img-container").css('backgroundImage',
        `linear-gradient(rgba(70, 70, 70, 0.8), rgba(70, 70, 70, 0.8)),url("./images/tarotsSection/${imgName}")`)

      const loginBtn = $("#login");
      loginBtn.on('click', () => {
        $("#id01").show();
      })
    })

    // 跟Login Modal有關的code
    // Get the modal
    const modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    // 返回管理頁面 跳到
    $("#adminBtn").on('click', function() {
      location.href = "admin.php?do=reserves";
    })

    //登出按鈕 登出
    $("#index-logout").on('click', function() {
      location.href = "./api/logout.php";
    })
  </script>
</body>



</html>