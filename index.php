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
        <a href="about-us.php" class="header__nav-link">О нас</a>
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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main-media.css">

    <script src="https://api-maps.yandex.ru/2.1/?apikey=1128eb86-2183-4237-9336-a33a2af19422&amp;lang=ru_RU"
      type="text/javascript"></script>
    <script src="https://unpkg.com/imask"></script>

    <script src="js/main.js" defer=""></script>

    <div class="confirm hidden">
      <div class="confirm-wrapper">
        <svg class="confirm__svg" width="60" height="78" viewBox="0 0 60 78" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M43 6.5H42.4443C41.102 2.717 37.488 0 33.25 0H26.75C22.512 0 18.898 2.717 17.5557 6.5H17C8.03975 6.5 0.75 13.7898 0.75 22.75V61.75C0.75 70.7103 8.03975 78 17 78H43C51.9603 78 59.25 70.7103 59.25 61.75V22.75C59.25 13.7898 51.9603 6.5 43 6.5ZM45.2978 37.6318L33.7213 49.2082C31.8623 51.0672 29.4247 52.0065 26.9872 52.0065C24.6863 52.0065 22.382 51.1745 20.5523 49.4975L14.8062 44.2293C13.4835 43.0138 13.3925 40.9598 14.6047 39.637C15.817 38.3175 17.8742 38.2265 19.197 39.4355L24.943 44.7038C26.139 45.799 27.9753 45.76 29.1257 44.6128L40.7023 33.0363C41.973 31.7655 44.027 31.7655 45.2978 33.0363C46.5685 34.307 46.5685 36.361 45.2978 37.6318Z"
            fill="#2B2A2B"></path>
        </svg>
        <h2 class="confirm__title">Заказ успешно оформлен. Мы скоро свяжемся с вами!</h2>
      </div>
    </div>
    <!-- /confirm window -->

    <div id="okform">
      <p>Спасибо! Скоро мы с Вами свяжемся.</p><button onclick="closethisform()">ОК</button>
    </div>

    <a href="tel:89787582990" class="mobilephone">+7(978)7582990</a>


    <div class="container">
      <div class="block block1">
        <div class="contentS content1">
          <h2>ТОВАРЫ ДЛЯ ПИКНИКА</h2>
          <p>САМЫЕ ВЫГОДНЫЕ ЦЕНЫ</p>
          <button onclick="window.location.replace(" https:="" jarkoff.tw1.su="" catalog.html")"="">Перейти в
            каталог<img src="images/list.webp"></button>
        </div>
      </div>
      <div class="block block2">
        <div class="contentS content2">
          <h2>ПРОИЗВОДСТВО ТУАЛЕТНОЙ БУМАГИ</h2>
          <p>БОЛЬШОЙ АССОрТИМЕНТ ПрОДУКЦИИ</p>
          <button onclick="scrollToRequest()">Связаться с нами<img src="images/tryba.webp"></button>
        </div>
      </div>
      <div class="block block3">
        <div class="contentS content3">
          <h2>ПРОИЗВОДСТВО ОМЫВАЮЩЕЙ ЖИДКОСТИ</h2>
          <p>ВЫСОКОЕ КАЧЕСТВО И ВЫГОДНАЯ ЦЕНА</p>
          <button onclick="scrollToRequest()">Заказать<img src="images/korz.webp"></button>
        </div>
      </div>
    </div>



    <div class="carousel-container">

      <div id="loadslider">
        <div class="wrapper">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="shadow"></div>
          <div class="shadow"></div>
          <div class="shadow"></div>
          <span>Загрузка</span>
        </div>
      </div>

      <button class="prev">&lt;</button>
      <button class="next">&gt;</button>
      <div class="carousel">

      </div>

    </div>






    <div class="about-us">
      <h2 class="about-us__title">Почему выбирают нас?</h2>
      <div class="about-us__list">
        <div class="about-us__item">
          <svg width="29" height="37" viewBox="0 0 29 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M20.6667 3.08333H20.403C19.7663 1.28883 18.052 0 16.0417 0H12.9583C10.948 0 9.23367 1.28883 8.59696 3.08333H8.33333C4.08296 3.08333 0.625 6.54129 0.625 10.7917V29.2917C0.625 33.542 4.08296 37 8.33333 37H20.6667C24.917 37 28.375 33.542 28.375 29.2917V10.7917C28.375 6.54129 24.917 3.08333 20.6667 3.08333ZM14.8191 23.8203L11.9778 26.6616C11.2486 27.3908 10.3005 27.7562 9.35238 27.7562C8.43663 27.7562 7.52087 27.4155 6.79938 26.7325L5.79883 25.7844C5.18062 25.1985 5.15442 24.2227 5.74025 23.6045C6.32608 22.9862 7.30042 22.96 7.91862 23.5443L8.91762 24.4909C9.17046 24.7283 9.55742 24.7222 9.79792 24.4786L12.6392 21.6373C13.242 21.0345 14.2163 21.0345 14.8191 21.6373C15.4219 22.2385 15.4219 23.2144 14.8191 23.8172V23.8203ZM14.8191 14.5703L11.9778 17.4116C11.2486 18.1408 10.3005 18.5062 9.35238 18.5062C8.43663 18.5062 7.52087 18.1655 6.79938 17.4825L5.79883 16.5344C5.18062 15.9485 5.15442 14.9727 5.74025 14.3545C6.32608 13.7347 7.30042 13.7116 7.91862 14.2943L8.91762 15.2409C9.17046 15.4783 9.55742 15.4706 9.79792 15.2286L12.6392 12.3873C13.242 11.7845 14.2163 11.7845 14.8191 12.3873C15.4219 12.9885 15.4219 13.9644 14.8191 14.5672V14.5703ZM22.2083 27.75H17.5833C16.7308 27.75 16.0417 27.0593 16.0417 26.2083C16.0417 25.3573 16.7308 24.6667 17.5833 24.6667H22.2083C23.0609 24.6667 23.75 25.3573 23.75 26.2083C23.75 27.0593 23.0609 27.75 22.2083 27.75ZM22.2083 18.5H17.5833C16.7308 18.5 16.0417 17.8093 16.0417 16.9583C16.0417 16.1073 16.7308 15.4167 17.5833 15.4167H22.2083C23.0609 15.4167 23.75 16.1073 23.75 16.9583C23.75 17.8093 23.0609 18.5 22.2083 18.5Z"
              fill="#2B2A2B"></path>
          </svg>
          <p class="about-us__par">Весь продукт сопровождается документацией с подтверждением качества.</p>
        </div>
        <div class="about-us__item">
          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M18.5 18.5C23.6091 18.5 27.75 14.3591 27.75 9.25C27.75 4.14092 23.6091 0 18.5 0C13.3909 0 9.25 4.14092 9.25 9.25C9.25 14.3591 13.3909 18.5 18.5 18.5ZM13.4464 6.26842C13.6807 4.60342 15.1546 3.39167 16.8365 3.39167H17.2682V2.775C17.2682 2.09358 17.8201 1.54167 18.5015 1.54167C19.183 1.54167 19.7349 2.09358 19.7349 2.775V3.39167H20.3592C21.4554 3.39167 22.4374 3.89117 23.088 4.67587C23.7324 5.45287 23.1851 6.62762 22.1753 6.62762C21.8254 6.62762 21.3891 6.46267 21.1517 6.20521C20.9543 5.99092 20.6707 5.85679 20.3577 5.85679H16.8011C16.3725 5.85679 15.9809 6.14354 15.8961 6.56287C15.7975 7.05312 16.1212 7.51408 16.5883 7.60812L20.8927 8.46992C22.607 8.81217 23.8049 10.4463 23.552 12.23C23.3162 13.895 21.8439 15.1053 20.1619 15.1053H19.7302V15.7219C19.7302 16.4033 19.1783 16.9552 18.4969 16.9552C17.8155 16.9552 17.2636 16.4033 17.2636 15.7219V15.1053H16.5991C15.503 15.1053 14.521 14.6042 13.8704 13.821C13.226 13.044 13.7732 11.8693 14.783 11.8693C15.133 11.8693 15.5693 12.0342 15.8067 12.2917C16.004 12.506 16.2877 12.6401 16.6007 12.6401H20.1989C20.6275 12.6401 21.0191 12.3518 21.1023 11.931C21.1995 11.4407 20.8773 10.9828 20.407 10.8872L16.1042 10.0255C14.3899 9.68167 13.1936 8.05058 13.4449 6.26533L13.4464 6.26842ZM20.0525 25.0598L27.4185 31.6566L22.2062 35.725C21.147 36.5514 19.8428 37 18.5 37C17.1572 37 15.853 36.5514 14.7938 35.725L10.1997 32.1391C9.11588 31.2927 7.78079 30.8333 6.40563 30.8333H1.54167C0.690667 30.8333 0 30.1427 0 29.2917V18.5C0 17.649 0.690667 16.9583 1.54167 16.9583H6.96987C7.56958 16.9583 8.16467 16.8967 8.74896 16.781C9.68783 17.9943 10.8456 19.0242 12.1653 19.8166C10.5758 21.4662 10.3369 24.0269 11.6211 25.8044C12.4227 26.9206 13.414 27.75 15.2178 27.75C16.4388 27.75 17.7878 27.269 18.6125 26.4396L20.054 25.0598H20.0525ZM18.5 21.5833C18.7914 21.5833 19.075 21.5602 19.3618 21.5402L16.4804 24.2134C16.1613 24.5341 15.7204 24.699 15.2656 24.6605C14.8062 24.6235 14.4022 24.3907 14.1263 24.0053C13.7039 23.4195 13.8334 22.5022 14.4053 21.9287L15.2224 21.127C16.2677 21.4153 17.3638 21.5818 18.5015 21.5818L18.5 21.5833ZM37 18.5V29.2917C37 30.1427 36.3093 30.8333 35.4583 30.8333H31.1201L20.5797 21.3953C23.7047 20.8634 26.4242 19.1614 28.2772 16.7487C28.8985 16.8782 29.5306 16.9599 30.1689 16.9599H35.4583C36.3093 16.9599 37 17.6505 37 18.5015V18.5Z"
              fill="#2B2A2B"></path>
          </svg>
          <p class="about-us__par">Наши цены на уголь гораздо ниже чем на любом другом производстве!</p>
        </div>
        <div class="about-us__item">
          <svg width="33" height="37" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M20.3539 20.8125C20.3539 22.9415 18.6287 24.6667 16.4997 24.6667C14.3707 24.6667 12.6455 22.9415 12.6455 20.8125C12.6455 18.6835 14.3707 16.9583 16.4997 16.9583C18.6287 16.9583 20.3539 18.6835 20.3539 20.8125ZM32.1908 19.6331L23.4989 27.6575C23.2399 27.8965 22.9577 28.103 22.6664 28.2927V35.4583C22.6664 36.3093 21.9757 37 21.1247 37H11.8747C11.0237 37 10.333 36.3093 10.333 35.4583V28.2927C10.0417 28.103 9.75954 27.8965 9.50054 27.6575L0.80862 19.6331C0.182704 19.055 0.144162 18.0807 0.720745 17.4547C1.29887 16.8319 2.2732 16.7903 2.89912 17.3669L11.591 25.3912C12.163 25.9185 12.9061 26.2083 13.6815 26.2083H19.3148C20.0918 26.2083 20.8349 25.9185 21.4053 25.3912L30.0972 17.3669C30.7247 16.7903 31.699 16.8304 32.2756 17.4547C32.8537 18.0807 32.8136 19.0565 32.1877 19.6331H32.1908ZM12.2987 9.41342L11.09 13.2876C10.9266 13.8072 11.1085 14.3745 11.5448 14.7013C11.773 14.8725 12.0427 14.9572 12.3156 14.9572C12.5638 14.9572 12.8136 14.8848 13.0294 14.7399L16.509 12.412L20.0471 14.7167C20.5034 15.0143 21.0985 14.9896 21.5332 14.6582C21.9665 14.3252 22.1407 13.7548 21.968 13.2368L20.7115 9.40725L23.7502 6.93133C24.1633 6.58446 24.3144 6.01558 24.1294 5.50837C23.9444 5.00117 23.4619 4.66354 22.9223 4.66354H19.0666L17.7022 0.835583C17.5157 0.333 17.0347 0 16.4982 0C15.9617 0 15.4807 0.333 15.2941 0.835583L13.9297 4.66354H10.074C9.53599 4.66354 9.05345 4.99963 8.86845 5.50529C8.68191 6.01096 8.83145 6.57829 9.24308 6.92671L12.2971 9.41187L12.2987 9.41342Z"
              fill="#2B2A2B"></path>
          </svg>
          <p class="about-us__par">Мы работаем с 2014 года, и за долгое время сделали следующее: создали свой
            собственный стандарт качества</p>
        </div>
        <div class="about-us__item">
          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M27.75 18.5C22.6409 18.5 18.5 22.6409 18.5 27.75C18.5 32.8591 22.6409 37 27.75 37C32.8591 37 37 32.8591 37 27.75C37 22.6409 32.8591 18.5 27.75 18.5ZM33.428 27.306L29.2608 31.3359C28.564 32.0235 27.639 32.3704 26.7125 32.3704C25.7859 32.3704 24.8578 32.0235 24.1487 31.3313L22.0613 29.2778C21.4523 28.6812 21.4446 27.7053 22.0397 27.0979C22.6347 26.4889 23.6106 26.4797 24.2196 27.0763L26.3055 29.1282C26.5275 29.3472 26.8913 29.3425 27.1102 29.1252L31.2927 25.0798C31.9048 24.4925 32.8822 24.5094 33.4727 25.1245C34.0616 25.7381 34.0415 26.7155 33.428 27.306ZM12.8637 11.1401L22.5792 1.65421C24.9072 -0.154167 28.157 -0.493333 30.7624 0.809375C30.7624 0.809375 33.0919 2.48825 35.7035 2.96C36.4481 3.09412 37 3.7185 37 4.47392V19.61C34.7399 17.0431 31.4392 15.4151 27.75 15.4151C26.8682 15.4151 26.0079 15.5122 25.1785 15.688L20.8279 12.0527L22.6486 10.3615C23.2638 9.77262 23.2853 8.79675 22.6964 8.18163C22.1075 7.5665 21.1316 7.54492 20.5165 8.13383L14.9387 13.4202C14.6196 13.7409 14.1787 13.9058 13.7239 13.8673C13.2645 13.8303 12.8606 13.5975 12.5846 13.2121C12.1622 12.6262 12.2917 11.709 12.8637 11.1355V11.1401ZM16.1428 31.8863C15.6757 31.692 15.2193 31.4562 14.8 31.1432L5.34496 24.0515C4.54483 23.4503 3.5705 23.1265 2.56996 23.1265H1.54167C0.690667 23.1265 0 22.4359 0 21.5849V4.52787C0 3.74471 0.584292 3.09258 1.36283 3.00471C3.45487 2.77192 5.33879 1.93171 7.26587 0.809375C8.325 0.279042 9.51054 0 10.6992 0C12.6725 0 14.5086 0.710708 15.9254 2.00108L16.8766 2.91529L10.6992 8.94475C9.04496 10.5974 8.78133 13.2105 10.0856 15.0158C10.8872 16.1305 12.338 16.9568 13.8534 16.9568C15.076 16.9568 16.2492 16.4758 17.0971 15.6263L18.5879 14.2003L21.8454 16.9213C18.0175 19.0149 15.4197 23.0772 15.4197 27.7485C15.4197 29.2007 15.6834 30.5897 16.1459 31.8832L16.1428 31.8863Z"
              fill="#2B2A2B"></path>
          </svg>
          <p class="about-us__par">Мы работаем и с физическими и с юридическими лицами</p>
        </div>
      </div>
    </div>

    <div class="our-experience">
      <div class="our-experience__info">
        <span class="our-experience__exp">более 10 лет</span>
        <span class="our-experience__header">работы в сфере оптовой и розничной торговли хозяйственно-бытовыми
          товарами</span>
        <span class="our-experience__description">Наша компания — надежный партнер в сфере хозяйственно-бытовых товаров.
          Мы предлагаем широкий ассортимент продукции, включая древесный уголь для мангала, средства для розжига,
          стеклоомывающую жидкость для автомобилей, влажные салфетки, дистиллированную воду и многое другое.</span>
        <a class="our-experience__link" href="/catalog.html">Заказать</a>
      </div>
      <div class="our-experience__img"></div>
    </div>
    <div class="clients">
      <div class="clients__wrap">
        <div class="clients__arrows">
          <div class="swiper-button-prev1 clients__arr">
            <img src="images/left.svg" alt="">
          </div>
          <div class="swiper-button-next1  clients__arr">
            <img src="images/right.svg" alt="">
          </div>
        </div>
        <div class="swiper1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/pic1.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic16.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic4.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic2.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic3.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic4.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic5.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic6.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic7.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic8.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic5.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic9.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic10.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic2.svg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic12.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic13.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic14.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic3.svg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic4.svg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic6.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic15.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/pic5.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="location">
      <div class="location__info">
        <span class="location__info-delivery">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M10.625 12.7502H0.708333C0.520472 12.7502 0.340304 12.6755 0.207466 12.5427C0.0746278 12.4099 0 12.2297 0 12.0418V3.896C0 3.05062 0.335825 2.23987 0.933597 1.64209C1.53137 1.04432 2.34212 0.708496 3.1875 0.708496H7.4375C8.28288 0.708496 9.09363 1.04432 9.6914 1.64209C10.2892 2.23987 10.625 3.05062 10.625 3.896V12.7502ZM12.0417 9.2085V12.7502H14.1667C14.9181 12.7502 15.6388 12.4517 16.1701 11.9203C16.7015 11.3889 17 10.6683 17 9.91683V9.2085H12.0417ZM0.0410833 14.1668C-0.374708 16.9676 3.91708 16.9662 3.50058 14.1668H0.0410833ZM4.29108 14.1668C3.87529 16.9676 8.16708 16.9662 7.75058 14.1668H4.29108ZM10.6661 14.1668C10.2503 16.9676 14.5421 16.9662 14.1256 14.1668H10.6661ZM12.0417 7.79183H16.7988C16.7818 7.73516 16.031 5.47912 16.031 5.47912C15.8435 4.91472 15.483 4.42374 15.0005 4.07597C14.5181 3.72819 13.9383 3.54129 13.3436 3.54183H12.0417V7.79183Z"
              fill="white"></path>
          </svg>
          Доставка включена в стоимость по всему крыму
        </span>
        <span class="location__info-address">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M14.4352 6.02067C15.2498 9.61901 13.0115 12.6648 11.0494 14.549C9.62564 15.9232 7.37314 15.9232 5.9423 14.549C3.9873 12.6648 1.74897 9.61192 2.56355 6.01359C3.95897 -0.120578 13.0469 -0.113494 14.4352 6.02067Z"
              fill="white" stroke="black" stroke-width="1.5"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M8.50004 9.51277C7.27949 9.51277 6.29004 8.52332 6.29004 7.30277C6.29004 6.08222 7.27949 5.09277 8.50004 5.09277C9.72059 5.09277 10.71 6.08222 10.71 7.30277C10.71 8.52332 9.72059 9.51277 8.50004 9.51277Z"
              fill="white"></path>
          </svg>
          Родниково, пер. Аэрофлотский 8,офис 1
        </span>
      </div>
      <div id="map" class="map"></div>
    </div>

    <div class="leave-the-application">
      <div class="leave-the-application__img"></div>
      <div class="leave-the-application__form">
        <h2 class="leave-the-application__title">Оставить заявку</h2>
        <input type="text" class="leave-the-application__input leave-the-application__name" placeholder="Имя">
        <input type="text" class="leave-the-application__input leave-the-application__phone"
          placeholder="Номер телефона">
        <input type="text" class="leave-the-application__input leave-the-application__descr"
          placeholder="Подробности заказа, консультации:">
        <button class="leave-the-application__btn" onclick="addItemToCar1(" order",="" "main" ,="" "1000009"
          )"="">Отправить</button>
      </div>
    </div>


  </main>
  <footer class="footer">
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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const swiper1 = new Swiper('.swiper1', {
        slidesPerView: 5,
        loop: true,
        spaceBetween: 20,
        navigation: {
          nextEl: ".swiper-button-next1",
          prevEl: ".swiper-button-prev1"
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            spaceBetween: 18,
            slidesPerView: 2
          },
          576: {
            spaceBetween: 18,
            slidesPerView: 2
          },
          767: {
            spaceBetween: 18,
            slidesPerView: 3
          },
          992: {
            spaceBetween: 20,
            slidesPerView: 4
          },
          1200: {
            spaceBetween: 20,
            slidesPerView: 5
          }
        }
      });
    });

  </script>
</body>

</html>