<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/simplebar.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/header-media.css">
  <link rel="stylesheet" href="css/cart.css">
  <link rel="stylesheet" href="css/cart-media.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/footer-media.css">



  <script src="js/cart.js" defer=""></script>
  <script src="js/simplebar.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>

  <title>jarkoff</title>
  <link rel="icon" href="%D0%92%D0%9A.ico">
</head>

<body>
  <header class="header">
    <div class="header__wrapper">
      <div class="header-modile">
        <div class="header-modile__btn" onclick="toggleMenu(event)">
          <span></span>
        </div>
        <div class="header-modile__menu">
          <div class="header__nav">
            <a href="index.php" class="header__nav-link">Главная</a>
            <a href="catalog.php" class="header__nav-link">Каталог</a>
            <a href="about-us.php" class="header__nav-link">О нас</a>
          </div>
        </div>
      </div>
      <img src="images/blacklogo.jpg" alt="" class="header__img">
      <div class="header__nav">
        <a href="index.php" class="header__nav-link">Главная</a>
        <a href="catalog.php" class="header__nav-link">Каталог</a>
        <a href="about-us.php" class="header__nav-link active">О нас</a>
      </div>
      <div class="header__right">
        <a href="tel:89787582990" class="header__nav-link" style="padding:15px;">+7(978)758-29-90</a>
        <a href="tel:89787582990" class="header__right-link">Позвонить</a>
        <div class="header__right-cart" onclick="toggleCartWindow()">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M17.0347 3.05775C16.8238 2.80458 16.5597 2.60096 16.2612 2.46136C15.9626 2.32176 15.637 2.2496 15.3075 2.25H3.1815L3.15 1.98675C3.08554 1.43956 2.82254 0.935049 2.41087 0.568858C1.9992 0.202667 1.46747 0.000256345 0.9165 0L0.75 0C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75C0 0.948912 0.0790176 1.13968 0.21967 1.28033C0.360322 1.42098 0.551088 1.5 0.75 1.5H0.9165C1.1002 1.50002 1.2775 1.56747 1.41478 1.68954C1.55206 1.81161 1.63976 1.97981 1.66125 2.16225L2.69325 10.9373C2.80039 11.8498 3.23886 12.6913 3.92543 13.302C4.612 13.9127 5.49889 14.25 6.41775 14.25H14.25C14.4489 14.25 14.6397 14.171 14.7803 14.0303C14.921 13.8897 15 13.6989 15 13.5C15 13.3011 14.921 13.1103 14.7803 12.9697C14.6397 12.829 14.4489 12.75 14.25 12.75H6.41775C5.95354 12.7487 5.5011 12.6038 5.12245 12.3353C4.7438 12.0668 4.45748 11.6877 4.30275 11.25H13.2428C14.122 11.2501 14.9733 10.9412 15.6479 10.3773C16.3225 9.81348 16.7775 9.03052 16.9335 8.16525L17.5223 4.89975C17.581 4.57576 17.5678 4.2428 17.4836 3.92448C17.3993 3.60616 17.2461 3.31026 17.0347 3.05775Z"
              fill="#F4F3F4"></path>
            <path
              d="M5.25 18C6.07843 18 6.75 17.3284 6.75 16.5C6.75 15.6716 6.07843 15 5.25 15C4.42157 15 3.75 15.6716 3.75 16.5C3.75 17.3284 4.42157 18 5.25 18Z"
              fill="#F4F3F4"></path>
            <path
              d="M12.75 18C13.5784 18 14.25 17.3284 14.25 16.5C14.25 15.6716 13.5784 15 12.75 15C11.9216 15 11.25 15.6716 11.25 16.5C11.25 17.3284 11.9216 18 12.75 18Z"
              fill="#F4F3F4"></path>
          </svg>
        </div>
      </div>
    </div>
  </header>
  <main class="main">
    <!-- cart -->
    <div class="cart hidden">
      <div class="cart-wrapper">
        <div class="cart-header">
          <span class="cart-header__title">Корзина</span>
          <button class="cart-header__btn-close" onclick="toggleCartWindow()">
            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 22L22 1.00002" stroke="#2B2A2B" stroke-width="2" stroke-linecap="round"></path>
              <path d="M1 1.00012L22 22.0001" stroke="#2B2A2B" stroke-width="2" stroke-linecap="round"></path>
            </svg>
          </button>
        </div>
        <div class="cart-content__wrapper">
          <div class="cart-content"></div>
        </div>
        <div class="cart-footer">
          <div class="cart-footer__total">
            <span class="cart-footer__total-label">Итого: </span>
            <span class="cart-footer__total-mount"></span>
          </div>
          <button class="cart-footer__btn" onclick="toggleConfirmingCartWindow(0)">Заказать</button>
        </div>
      </div>
    </div>
    <!-- /cart -->

    <!-- form cart -->
    <div class="form hidden">
      <div class="form-header">
        <span class="form-header__title">Оформление</span>
        <button class="form-header__btn-close" onclick="toggleConfirmingCartWindow(0)">
          <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 22L22 1.00002" stroke="#2B2A2B" stroke-width="2" stroke-linecap="round"></path>
            <path d="M1 1.00012L22 22.0001" stroke="#2B2A2B" stroke-width="2" stroke-linecap="round"></path>
          </svg>
        </button>
      </div>
      <div class="form-wrapper">
        <span class="form-title">Заполните данные для оформления заказа</span>
        <input type="text" class="form-input form__name" placeholder="Имя" onblur="validate(event, 'name')" required="">
        <input type="text" class="form-input form__email" placeholder="Почта" onblur="validate(event, 'email')"
          required="">
        <input type="text" class="form-input form__phone" placeholder="Телефон" onblur="validate(event, 'phone')"
          required="">
        <button class="form__btn" onclick="ordering()">Заказать</button>
      </div>
    </div>
    <!-- /form cart -->

    <!-- confirm window -->
    <link rel="stylesheet" href="css/about-us.css">
    <link rel="stylesheet" href="css/about-us-media.css">

    <script src="js/markerjs2.js"></script>


    <script src="js/about-us.js" defer=""></script>

    <div class="about-us">
      <!--<img src="/img/onaspage/onas1.webp" alt="" class="about-us__video" />-->
      <div class="about-us__catalog">
        <div class="about-us__img-wrapper">
          <img class="about-us__img" src="images/1.jpg" onclick="showMarkerArea(this);">
          <span class="about-us__img-description">Успех нашей компании во многом зависит от нашего сплоченного
            коллектива. Каждый сотрудник — неотъемлемая часть большой команды профессионалов, объединенных общей целью —
            предоставлять клиентам товары высочайшего качества и лучший сервис.</span>
        </div>
        <div class="about-us__img-wrapper">
          <img class="about-us__img" src="images/2.jpg" onclick="showMarkerArea(this);">
          <span class="about-us__img-description">Наша компания является ведущим поставщиком хозяйственно-бытовых
            товаров, включая древесный уголь для мангала, средства для розжига, стеклоомывающую жидкость для
            автомобилей, влажные салфетки, дистиллированную воду и многое другое.</span>
        </div>
        <div class="about-us__img-wrapper">
          <img class="about-us__img" src="images/3.jpg" onclick="showMarkerArea(this);">
          <span class="about-us__img-description"> <span class="li"> Наши ключевые преимущества: </span>
            Качество продукции: строгий контроль на всех этапах производства и поставки. <br>
            Широкий ассортимент: все необходимое для дома и автомобиля в одном месте. <br>
            Эффективная логистика: благодаря большому складу мы обеспечиваем оперативную доставку. <br>
            Клиентоориентированность: индивидуальный подход и высокий уровень сервиса. <br>
            Мы стремимся к долгосрочным партнерским отношениям и всегда рады новым клиентам</span>.</span>
        </div>
        <div class="about-us__img-wrapper">
          <img class="about-us__img" src="images/4.jpg" onclick="showMarkerArea(this);">
          <span class="about-us__img-description">Мы гордимся своим современным и просторным складом, который позволяет
            нам поддерживать широкий ассортимент продукции и оперативно реагировать на запросы наших клиентов. Благодаря
            высокотехнологичной системе управления складом, мы гарантируем быструю обработку заказов и своевременную
            доставку товаров.</span>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer footer2">
    <div id="footerline"></div>
    <div class="footer-wrapper">
      <h2 class="footer__title">ООО «Южная торговая компания»</h2>
      <div class="footer-content">
        <div class="footer-left">
          <div class="footer__column footer-left__director">
            <span class="footer-left__header">Директор</span>
            <span class="footer-left__content">Савинков Михаил Федорович</span>
          </div>
          <div class="footer__column footer-left__address">
            <span class="footer-left__header">Юридический адрес</span>
            <span class="footer-left__content footer-list__address">Республика Крым, 297540, республика Крым
              Симферопольский район, с. родниково, пер. Аэрофлотский 8,офис 1</span>
          </div>
        </div>
        <div class="footer-right">
          <div class="footer__column footer-left__email">
            <span class="footer-right__header">E-mail</span>
            <span class="footer-right__content">s.trade.crimea@gmail.com</span>
          </div>
          <div class="footer__column footer-left__phone">
            <span class="footer-right__header">Телефон</span>
            <span class="footer-right__content footer-list__phones">+7 (978) 758-29-90, +7 (978) 937-97-37, +7 (978)
              204-23-64</span>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>