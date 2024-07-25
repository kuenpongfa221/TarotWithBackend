<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
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
    <section class="et-slide" id="tab-es6">
      <h1>ES6</h1>
      <h3>something about es6</h3>
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

  <script src="./script/stickyNavigation.js"></script>
</body>
</html>