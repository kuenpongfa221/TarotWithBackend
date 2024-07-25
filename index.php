<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
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
  <section class="et-hero-tabs">
    <!-- <h1>STICKY SLIDER NAV</h1> -->
     <div class="logo">
      <a href="#">
        <img src="./images/bywindLogo.png" alt="">
      </a>
     </div>
    <div class="et-hero-tabs-container">
      <a class="et-hero-tab" href="#tab-home">預約占卜</a>
      <a class="et-hero-tab" href="#tab-es6">牌義 • 教學</a>
      <a class="et-hero-tab" href="#tab-flexbox">客戶回饋</a>
      <a class="et-hero-tab" href="#tab-react">商品</a>
      <a class="et-hero-tab" href="#tab-angular">服務</a>
      <span class="et-hero-tab-slider"></span>
    </div>
    <div class="img-container" id="tab-home">
      <h2>塔羅，遇見你的內在天賦之旅</h2>
      <!-- <img src="./images/tarotHeroSec.jpg" alt=""> -->
       <button id="reserveBtn">立即預約占卜</button>
    </div>
  </section>

  <!-- Main -->
  <main class="et-main">
    <section class="et-slide container-fluid" id="tab-es6">
      <!-- <h1>ES6</h1>
      <h3>something about es6</h3> -->
      <!-- <div class="container-fluid"> -->
        <div class="row">
          <div class="col-6">123</div>
          <div class="col-6">456</div>
        </div>
        <div class="row">
          <div class="col-4">  
            <h2>Card Image</h2>
            <p>Image at the top (card-img-top):</p>
            <div class="card" style="width:400px">
              <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
          
          <div class="col-4">456</div>
          <div class="col-4">789</div>
        </div>
      <!-- </div> -->
    </section>
    <section class="et-slide" id="tab-flexbox">
      <h1>Flexbox</h1>
      <h3>something about flexbox</h3>
    </section>
    <section class="et-slide" id="tab-react">
      <h1>React</h1>
      <h3>something about react</h3>
    </section>
    <section class="et-slide" id="tab-angular">
      <h1>Angular</h1>
      <h3>something about angular</h3>
    </section>

  </main>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="./script/stickyNavigation.js"></script>
</body>
</html>