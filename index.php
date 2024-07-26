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
  <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    /> -->
  <link rel="stylesheet" href="./styles/bootstrap5Fake.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <!-- Hero -->
  <!-- 預約占卜 -->
  <section class="et-hero-tabs">
    <!-- <h1>STICKY SLIDER NAV</h1> -->
    <div class="logo">
      <a href="#">
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
            <img class="card-img-top" src="./images/products/crystal-1.avif" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">黑髮晶銀曜石白水晶手錬</h4>
              <p class="card-text">Some example text. John Doe is an architect</p>
              <a href="#tab-es6" class="btn btn-primary">See Profile</a>
            </div>
          </div>

          <div class="card" style="width:200px">
            <img class="card-img-top" src="./images/products/magicCandle.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">魔法蠟燭</h4>
              <p class="card-text">Some example text. John Doe is an architect</p>
              <a href="#tab-es6" class="btn btn-primary">See Profile</a>
            </div>
          </div>

          <div class="card" style="width:200px">
            <img class="card-img-top" src="./images/products/" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">聖杯 王牌</h4>
              <p class="card-text">Some example text. John Doe is an architect</p>
              <a href="#tab-es6" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 服務 -->
    <section class="et-slide" id="tab-service">
      <h1>Angular</h1>
      <h3>something about angular</h3>
    </section>

  </main>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="./script/stickyNavigation.js"></script>
</body>

</html>