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
  <!-- Hero -->
  <!-- 預約占卜 -->
  <section class="et-hero-tabs">
    <!-- <h1>STICKY SLIDER NAV</h1> -->
    <div class="logo">
      <a href="#" class='header-logo-a-tag'>
        <img src="./images/bywindLogo.png" alt="">
      </a>
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
    <div class="img-container" id="tab-reserve">
      <h2>塔羅，遇見你的內在天賦之旅</h2>
      <!-- <img src="./images/tarotHeroSec.jpg" alt=""> -->
      <button id="reserveBtn">立即預約占卜</button>
    </div>
  </section>

  <!-- Main -->
  <main class="et-main">
    <!-- 牌義 • 教學 -->
    <section class="et-slide container-fluid" id="tab-card-meaning">
      <!-- <h1>ES6</h1>
      <h3>something about es6</h3> -->
      <!-- <div class="container-fluid"> -->
      <div class="row justify-content-center">

        <div class="col-4 card-col">
          <!-- <h2>Card Image</h2>
            <p>Image at the top (card-img-top):</p> -->
          <div class="card" style="width:200px">
            <img class="card-img-top" src="./images/tarots/rws_tarot_00_fool.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">愚人</h4>
              <p class="card-text">Some example text. John Doe is an architect</p>
              <a href="#tab-es6" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-4 card-col">
          <!-- <h2>Card Image</h2>
            <p>Image at the top (card-img-top):</p> -->
          <div class="card" style="width:200px">
            <img class="card-img-top" src="./images/tarots/rws_tarot_02_high_priestess.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">女祭司</h4>
              <p class="card-text">Some example text. John Doe is an architect</p>
              <a href="#tab-es6" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-4 card-col">
          <!-- <h2>Card Image</h2>
            <p>Image at the top (card-img-top):</p> -->
          <div class="card" style="width:200px">
            <img class="card-img-top" src="./images/tarots/cups01.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">聖杯 王牌</h4>
              <p class="card-text">Some example text. John Doe is an architect</p>
              <a href="#tab-es6" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-4">456</div>
          <div class="col-4">789</div> -->
      </div>
      <!-- </div> -->
    </section>

    <!-- 客戶回饋 -->
    <section class="et-slide" id="tab-testimonials">
      <h1>客戶回饋</h1>
      <div class="row gy-5 gx-4">
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
                Amazing theme ipsum dolor sit amet consectetur adipisicing
                elit. Assumenda eum animi rerum ipsam impedit dicta
                voluptatem.
              </p>
            </div>
            <div class="review-person mt-4 d-flex align-items-center">
              <img class="rounded-circle" src="./images/avatar-1.jpg" alt="" />
              <div class="  ">
                <h5>Dianne Russell</h5>
                <small>UX Architect</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
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
                Amazing theme ipsum dolor sit amet consectetur adipisicing
                elit. Assumenda eum animi rerum ipsam impedit dicta
                voluptatem.
              </p>
            </div>
            <div class="review-person mt-4 d-flex align-items-center">
              <img class="rounded-circle" src="./images/avatar-1.jpg" alt="" />
              <div class="  ">
                <h5>Dianne Russell</h5>
                <small>UX Architect</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
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
                Amazing theme ipsum dolor sit amet consectetur adipisicing
                elit. Assumenda eum animi rerum ipsam impedit dicta
                voluptatem.
              </p>
            </div>
            <div class="review-person mt-4 d-flex align-items-center">
              <img class="rounded-circle" src="./images/avatar-1.jpg" alt="" />
              <div class="  ">
                <h5>Dianne Russell</h5>
                <small>UX Architect</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
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
                Amazing theme ipsum dolor sit amet consectetur adipisicing
                elit. Assumenda eum animi rerum ipsam impedit dicta
                voluptatem.
              </p>
            </div>
            <div class="review-person mt-4 d-flex align-items-center">
              <img class="rounded-circle" src="./images/avatar-1.jpg" alt="" />
              <div class="  ">
                <h5>Dianne Russell</h5>
                <small>UX Architect</small>
              </div>
            </div>
          </div>
        </div>

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
                Amazing theme ipsum dolor sit amet consectetur adipisicing
                elit. Assumenda eum animi rerum ipsam impedit dicta
                voluptatem.
              </p>
            </div>
            <div class="review-person mt-4 d-flex align-items-center">
              <img class="rounded-circle" src="./images/avatar-1.jpg" alt="" />
              <div class="  ">
                <h5>Dianne Russell</h5>
                <small>UX Architect</small>
              </div>
            </div>
          </div>
        </div>

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
                Amazing theme ipsum dolor sit amet consectetur adipisicing
                elit. Assumenda eum animi rerum ipsam impedit dicta
                voluptatem.
              </p>
            </div>
            <div class="review-person mt-4 d-flex align-items-center">
              <img class="rounded-circle" src="./images/avatar-1.jpg" alt="" />
              <div class="  ">
                <h5>Dianne Russell</h5>
                <small>UX Architect</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- 商品 -->
    <section class="et-slide" id="tab-product">
      <h1>商品</h1>
      <h3>療育 你的內在</h3>
      <div class="row justify-content-center">
        <div class="col-4 card-col">
          <!-- <h2>Card Image</h2>
            <p>Image at the top (card-img-top):</p> -->
          <div class="card" style="width:200px">
            <img class="card-img-top" src="./images/product/crystal-1.avif" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">黑髮晶銀曜石白水晶手錬</h4>
              <p class="card-text">Some example text. John Doe is an architect</p>
              <a href="#tab-es6" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-4 card-col">
          <div class="card" style="width:200px">
            <img class="card-img-top" src="./images/product/magicCandle.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">魔法蠟燭</h4>
              <p class="card-text">Some example text. John Doe is an architect</p>
              <a href="#tab-es6" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-4 card-col">
          <div class="card" style="width:200px">
            <img class="card-img-top" src="./images/product/incense.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">移動式無線擴香儀</h4>
              <p class="card-text">Some example text. John Doe is an architect</p>
              <a href="#tab-es6" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 服務 -->
    <section class="et-slide" id="tab-service">
      <h1>服務</h1>
      <div class="row justify-content-center">
        <div class="col-4 card-col">
          <div class="card" style="width:1000px">
            <img class="card-img  bg-transparent" src="./images/tarotsSection/tarot-2.jpg" alt="Card image" style="width:100%">
            <div class="card-body card-img-overlay d-flex justify-content-center flex-column">
              <div class="bg-darkgray">
                <h4 class="card-title">塔羅</h4>
                <p class="card-text">療育 你的內在小孩</p>
                <a href="#tab-es6" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-4 card-col">
          <div class="card" style="width:200px">
            <img class="card-img  bg-transparent" src="./images/services/ziWei.webp" alt="Card image" style="width:100%">
            <div class="card-body card-img-overlay d-flex justify-content-center flex-column">
              <div class="bg-darkgray">
                <h4 class="card-title">紫微斗數</h4>
                <p class="card-text">遇見更好的自己</p>
                <a href="#tab-es6" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-4 card-col">
          <div class="card" style="width:200px">
            <img class="card-img  bg-transparent" src="./images/services/name-1.jpeg" alt="Card image" style="width:100%">
            <div class="card-body card-img-overlay d-flex justify-content-center flex-column">
              <div class="bg-darkgray">
                <h4 class="card-title">姓名學</h4>
                <p class="card-text">取名與改名</p>
                <a href="#tab-es6" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
        </div>
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
          <div class="col footer-nav">
            <h3>預約占卜</h3>
            <ul>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
            </ul>
          </div>

          <div class="col footer-nav">
            <h3>牌義 • 教學</h3>
            <ul>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
            </ul>
          </div>

          <div class="col footer-nav">
            <h3>客戶回饋</h3>
            <ul>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
            </ul>
          </div>

          <div class="col footer-nav">
            <h3>商品</h3>
            <ul>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
            </ul>
          </div>

          <div class="col footer-nav">
            <h3>服務</h3>
            <ul>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
              <a href="">
                <li>link</li>
              </a>
            </ul>
          </div>
        </div>

        <!-- end of php foreach -->
      </section>

    </section>

    <hr class='footer-hr'>

    <section class="footer-bottom">
      <section class='sign-up'>
        <p style="margin-right:20px;">免費註冊！！:</p>
        <button>Sign Up</button>
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
</body>

</html>