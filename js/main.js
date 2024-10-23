getDiscounts();
let swiper;
let slide = 0;
let slides = 0;
let currentIndex = 0;

ymaps.ready(init);
function init() {
  // Создание карты.
  myMap = new ymaps.Map("map", {
    // Координаты центра карты.
    // Порядок по умолчанию: «широта, долгота».
    // Чтобы не определять координаты центра карты вручную,
    // воспользуйтесь инструментом Определение координат.
    center: [45.042228, 33.95912],
    // Уровень масштабирования. Допустимые значения:
    // от 0 (весь мир) до 19.
    zoom: 15,
  });
  myMap.controls.remove("zoomControl");
  myMap.controls.remove("geolocationControl");
  myMap.controls.remove("searchControl");
  myMap.controls.remove("routeButtonControl");
  myMap.controls.remove("trafficControl");
  myMap.controls.remove("typeSelector");
  myMap.controls.remove("fullscreenControl");
  myMap.controls.remove("rulerControl");

  var myPlacemark = new ymaps.Placemark([45.042228, 33.95912]);
  myMap.geoObjects.add(myPlacemark);
}

// перелистование кастомного слайдера с анимацией исцезновения
function customSlideFlippingWithAnimation(nextNumber) {
  let currentSlide = document.querySelector(".show-slide");
  let nextSlide = document.querySelector(`[data-slide="${nextNumber}"]`);
  // animation-name (название) = disappearance
  // animation-duration (длительность анимации) = 300ms
  // в файле /styles/main.css
  currentSlide.classList.add("animation-disappearance");
  setTimeout(() => {
    currentSlide.classList.remove("show-slide");
    nextSlide.classList.add("show-slide");
    currentSlide.classList.remove("animation-disappearance");
  }, 300);
}

function scrollToRequest(hash) {
  document.querySelector(".leave-the-application__form").scrollIntoView({
    behavior: 'smooth'
  });
}

function createSwiperSlide(data) {
  const item = document.createElement("div");
  item.classList.add("swiper-slide");

  const img = document.createElement("img");
  img.classList.add("swiper-slide__img");
  img.setAttribute("src", `/scripts/img/${data.Img}`);

  item.append(img);

  return item;
}

function createSlide(data, index) {
  const slide = document.createElement("div");
  slide.classList.add("slider-slide");
  slide.classList.add("slide");
  if (index === 0) slide.classList.add("show-slide");
  slide.dataset.slide = index;
  slide.dataset.number = data.Id;

  const slideInfo = document.createElement("div");
  slideInfo.classList.add("slide__info");
  slideInfo.classList.add("slide-info");

  const slideInfoCategory = document.createElement("span");
  slideInfoCategory.classList.add("slide-info__category");
  slideInfoCategory.textContent = data.Name;

  const slideInfoTitle = document.createElement("h2");
  slideInfoTitle.classList.add("slide-info__title");
  slideInfoTitle.textContent = data.Name;

  const slideInfoDescription = document.createElement("p");
  slideInfoDescription.classList.add("slide-info__description");
  slideInfoDescription.textContent = data.Comment;

  const slideInfoFunctional = document.createElement("div");
  slideInfoFunctional.classList.add("slide-info__functional");

  const slideInfoAmount = document.createElement("div");
  slideInfoAmount.classList.add("slide-info__amount");

  const slideInfoAmountPrevBtn = document.createElement("button");
  slideInfoAmountPrevBtn.classList.add("slide-info__amount-prev");
  slideInfoAmountPrevBtn.innerHTML = `<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 1L1.70711 8.29289C1.31658 8.68342 1.31658 9.31658 1.70711 9.70711L9 17" stroke="#9D9D9D" stroke-width="2" stroke-linecap="round" /></svg>`;
  slideInfoAmountPrevBtn.addEventListener("click", (e) => {
    quantityСhange(e, "minus", false);
  });

  const slideInfoAmountOnePiece = document.createElement("span");
  slideInfoAmountOnePiece.classList.add("slide-info__amount-count");
  slideInfoAmountOnePiece.textContent = "1шт";

  const slideInfoAmountNextBtn = document.createElement("button");
  slideInfoAmountNextBtn.classList.add("slide-info__amount-next");
  slideInfoAmountNextBtn.innerHTML = `<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L8.29289 8.29289C8.68342 8.68342 8.68342 9.31658 8.29289 9.70711L1 17" stroke="#9D9D9D" stroke-width="2" stroke-linecap="round" /></svg>`;
  slideInfoAmountNextBtn.addEventListener("click", (e) => {
    quantityСhange(e, "plus", false);
  });

  slideInfoAmount.append(slideInfoAmountPrevBtn);
  slideInfoAmount.append(slideInfoAmountOnePiece);
  slideInfoAmount.append(slideInfoAmountNextBtn);

  const slideInfoBtnOrder = document.createElement("button");
  slideInfoBtnOrder.classList.add("slide-info__btn-order");
  slideInfoBtnOrder.textContent = "Заказать";
  slideInfoBtnOrder.addEventListener("click", (e) => {
    toggleConfirmingCartWindow(data.Id, "order");
  });

  slideInfoFunctional.append(slideInfoAmount);
  slideInfoFunctional.append(slideInfoBtnOrder);

  // slideInfo.append(slideInfoCategory);
  slideInfo.append(slideInfoTitle);
  slideInfo.append(slideInfoDescription);
  slideInfo.append(slideInfoFunctional);

  const slideShow = document.createElement("div");
  slideShow.classList.add("slide__show");

  const slideShowParam = document.createElement("span");
  slideShowParam.classList.add("slide__show-param");
  slideShowParam.textContent = `${data.Weight} кг`;

  const slideShowImg = document.createElement("img");
  slideShowImg.classList.add("slide__show-img");
  slideShowImg.setAttribute("src", `/scripts/img/${data.Img}`);

  const slideShowName = document.createElement("p");
  slideShowName.classList.add("slide-show__name");
  slideShowName.textContent = data.name;

  const slideShowPagination = document.createElement("div");
  slideShowPagination.classList.add("swiper-pagination");
  slideShowPagination.innerHTML = '<button class="swiper-pagination-button-prev"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 1L1 5L5 9" stroke="#6E6E6E" stroke-linecap="round"></path></svg> Назад</button><button class="swiper-pagination-button-next">Далее <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 9L5 5L1 1" stroke="#6E6E6E" stroke-linecap="round"></path></svg></button>';
  // const slideShowPaginationPrev = document.createElement("button");
  // slideShowPaginationPrev.classList.add("swiper-pagination-button-prev");
  // slideShowPaginationPrev.innerHTML = `<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 1L1 5L5 9" stroke="#6E6E6E" stroke-linecap="round" /></svg> Назад`;

  // const slideShowPaginationNext = document.createElement("button");
  // slideShowPaginationNext.classList.add("swiper-pagination-button-next");
  // slideShowPaginationNext.innerHTML = `Далее <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 9L5 5L1 1" stroke="#6E6E6E" stroke-linecap="round" /></svg>`;

  // slideShowPagination.append(slideShowPaginationPrev);
  // slideShowPagination.append(slideShowPaginationNext);

  if (parseInt(data.Weight) !== 0) slideShow.append(slideShowParam);
  slideShow.append(slideShowImg);
  slideShow.append(slideShowName);
  slideShow.append(slideShowPagination);

  slide.append(slideInfo);
  slide.append(slideShow);

  return slide;
}


function createSlide1(data, index){
  const slide = document.createElement("div");
  slide.classList.add("item");
  slide.innerHTML = `<div class='slimg'><img src='/catalogimages/${data.Img}'></div><h3>${data.Name}</h3><p>Цена: <span class='pricespan'>${data.Price}</span> руб.</p><button onclick='scrollToRequest()'>Заказать</button>`;
  
  return slide;
}

async function getDiscounts() {
  let link = "https://jarkoff.tw1.su/php/main.php";
  let params = `?getDiscounts=true`;
  await fetch(link + params)
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data);
      const sliderWrapper = document.querySelector(".carousel");
      
      data.forEach((element, index) => {
        //let swiperSlide = createSwiperSlide1(element);
        let sliderSlide = createSlide1(element, index);
        //swiperWrapper.append(swiperSlide);
        sliderWrapper.append(sliderSlide);
      });

      initSwiper();
    })
    .catch((error) => {
      console.log(error);
    });
}

function initSwiper() {
  document.getElementById("loadslider").style.display="none";
  if (window.innerWidth < 1050) {
    swiper = new Swiper(".swiper", {
      // Optional parameters
      direction: "horizontal",
      loop: true,
      slidesPerView: 4,
      // Navigation arrows
      navigation: {
        nextEl: ".swiper-pagination-button-next",
        prevEl: ".swiper-pagination-button-prev",
      },
    });
  } else {
    swiper = new Swiper(".swiper", {
      // Optional parameters
      direction: "vertical",
      loop: true,
      slidesPerView: 4,

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-pagination-button-next",
        prevEl: ".swiper-pagination-button-prev",
      },
    });
  }

  // при перелистовании вперед в начале анимации! слайдера от swiper
  swiper.on("slideNextTransitionStart", (e) => {
    let nextNumberOfSlide = e.realIndex;
    // console.log(e.realIndex);
    customSlideFlippingWithAnimation(nextNumberOfSlide);
  });

  // при перелистовании назад в начале анимации! слайдера от swiper
  swiper.on("slidePrevTransitionStart", (e) => {
    let nextNumberOfSlide = e.realIndex;
    // console.log(e.realIndex);
    customSlideFlippingWithAnimation(nextNumberOfSlide);
  });
}


function closethisform(){
  location.reload("index.html");
}

document.addEventListener('DOMContentLoaded', function() {
  // your code here

  slides = document.getElementsByClassName('carousel');



  setTimeout(function(){

    slide = document.querySelectorAll('div.item');
    
  }, 5000);

  const prev = document.querySelector('.prev');
  const next = document.querySelector('.next');


  prev.addEventListener('click', () => {
 
    currentIndex = currentIndex - 1;

    showSlide( );
  });

  next.addEventListener('click', () => {
    currentIndex = currentIndex + 1;
      showSlide();
  });

  currentIndex = 0;



}, false);




function showSlide() {
  
  console.log(currentIndex);


    if (currentIndex < 0) {
        currentIndex = slide.length - 1;
        //index = currentIndex;
    } else if (currentIndex >= slide.length) {
        currentIndex = 0;
        //index = 0;
    } else {
        
    }

    console.log(currentIndex);
    slides[0].style.transform = `translateX(-${currentIndex * 100}%)`;
}



