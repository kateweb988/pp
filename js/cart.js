if (!localStorage.getItem("cart")) localStorage.setItem("cart", JSON.stringify([]));
resetKeyOrderInLocalStorage();
gettingOfTheNumberOfItemsInTheCart();

const urlParams = new URLSearchParams(window.location.search);

IMask(document.querySelector(".form__phone"), {
  mask: "+{7}(000)000-00-00",
});

const cartScrollBar = new SimpleBar(document.querySelector(".cart-content__wrapper"));

outputCart();

async function outputCart() {
  const cartContent = document.querySelector(".cart-content");
  cartContent.innerHTML = "";
  let cart = localStorage.getItem("cart");
  cart = JSON.parse(cart);
  // console.log(cart);
  if (cart.length === 0) {
    let emptyCart = document.createElement("span");
    emptyCart.classList.add("cart__empty");
    emptyCart.textContent = "Ваша корзина пуста";
    cartContent.append(emptyCart);
    return;
  }

  await cart.forEach(async function (element) {
    let price = 0;
    let title = '';
    let Img = '';
    await fetch(`https://jarkoff.tw1.su/php/cart.php?getPrice=true&id=${element.id}`)
      .then((data) => (data = data.json()))
      .then((data) => {
        console.log(data);
        price = data.Price;
        title = data.Name;
        Img = data.Img == null ? Img = false : Img = data.Img;
      })
      .catch((error) => {
        console.log(error);
      });

    const item = document.createElement("div");
    item.classList.add("cart__item");
    item.dataset.id = element.id;

    const itemWrapperImg = document.createElement("div");
    itemWrapperImg.classList.add("cart__item-img__wrapper");
    itemWrapperImg.addEventListener("click", (e) => {
      const id = e.currentTarget.parentElement.dataset.id;
      removeItemInCart(id);
    });

    const itemImg = document.createElement("img");
    itemImg.classList.add("cart__item-img");
    if (Img) itemImg.setAttribute("src", `/scripts/img/${Img}`);
    itemImg.setAttribute("alt", title);

    const itemDeleteImg = document.createElement("div");
    itemDeleteImg.classList.add("cart__item-img__delete");
    itemDeleteImg.innerHTML =
      '<svg width="32" height="40" viewBox="0 0 32 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 16C13.5 15.1716 12.8284 14.5 12 14.5C11.1716 14.5 10.5 15.1716 10.5 16H13.5ZM10.5 32C10.5 32.8284 11.1716 33.5 12 33.5C12.8284 33.5 13.5 32.8284 13.5 32H10.5ZM21.5 16C21.5 15.1716 20.8284 14.5 20 14.5C19.1716 14.5 18.5 15.1716 18.5 16H21.5ZM18.5 32C18.5 32.8284 19.1716 33.5 20 33.5C20.8284 33.5 21.5 32.8284 21.5 32H18.5ZM6.18404 37.564L6.86502 36.2275L6.86502 36.2275L6.18404 37.564ZM4.43597 35.816L5.77248 35.135L5.77248 35.135L4.43597 35.816ZM27.564 35.816L26.2275 35.135L26.2275 35.135L27.564 35.816ZM25.816 37.564L25.135 36.2275L25.135 36.2275L25.816 37.564ZM2 8.5C1.17157 8.5 0.5 9.17157 0.5 10C0.5 10.8284 1.17157 11.5 2 11.5V8.5ZM30 11.5C30.8284 11.5 31.5 10.8284 31.5 10C31.5 9.17157 30.8284 8.5 30 8.5V11.5ZM7.5 10C7.5 10.8284 8.17157 11.5 9 11.5C9.82843 11.5 10.5 10.8284 10.5 10H7.5ZM21.5 10C21.5 10.8284 22.1716 11.5 23 11.5C23.8284 11.5 24.5 10.8284 24.5 10H21.5ZM10.5 16V32H13.5V16H10.5ZM18.5 16V32H21.5V16H18.5ZM26.5 10V31.6H29.5V10H26.5ZM21.6 36.5H10.4V39.5H21.6V36.5ZM2.5 10V31.6H5.5V10H2.5ZM10.4 36.5C9.25514 36.5 8.48671 36.4988 7.89496 36.4505C7.32071 36.4036 7.04615 36.3198 6.86502 36.2275L5.50305 38.9005C6.17758 39.2442 6.89089 39.3784 7.65066 39.4405C8.39292 39.5012 9.30465 39.5 10.4 39.5V36.5ZM2.5 31.6C2.5 32.6954 2.49883 33.6071 2.55948 34.3493C2.62155 35.1091 2.75578 35.8224 3.09946 36.4969L5.77248 35.135C5.6802 34.9539 5.59643 34.6793 5.54952 34.105C5.50117 33.5133 5.5 32.7449 5.5 31.6H2.5ZM6.86502 36.2275C6.39462 35.9878 6.01217 35.6054 5.77248 35.135L3.09946 36.4969C3.62677 37.5318 4.46816 38.3732 5.50305 38.9005L6.86502 36.2275ZM26.5 31.6C26.5 32.7449 26.4988 33.5133 26.4505 34.105C26.4036 34.6793 26.3198 34.9539 26.2275 35.135L28.9005 36.497C29.2442 35.8224 29.3784 35.1091 29.4405 34.3493C29.5012 33.6071 29.5 32.6954 29.5 31.6H26.5ZM21.6 39.5C22.6954 39.5 23.6071 39.5012 24.3493 39.4405C25.1091 39.3784 25.8224 39.2442 26.4969 38.9005L25.135 36.2275C24.9539 36.3198 24.6793 36.4036 24.105 36.4505C23.5133 36.4988 22.7449 36.5 21.6 36.5V39.5ZM26.2275 35.135C25.9878 35.6054 25.6054 35.9878 25.135 36.2275L26.4969 38.9005C27.5318 38.3732 28.3732 37.5318 28.9005 36.4969L26.2275 35.135ZM2 11.5H4V8.5H2V11.5ZM4 11.5H28V8.5H4V11.5ZM28 11.5H30V8.5H28V11.5ZM10.5 8.4C10.5 5.81749 12.8331 3.5 16 3.5V0.5C11.4349 0.5 7.5 3.91326 7.5 8.4H10.5ZM16 3.5C19.1669 3.5 21.5 5.81749 21.5 8.4H24.5C24.5 3.91326 20.5651 0.5 16 0.5V3.5ZM7.5 8.4V10H10.5V8.4H7.5ZM21.5 8.4V10H24.5V8.4H21.5Z" fill="#2B2A2B"/></svg>';

    if (Img) itemWrapperImg.append(itemImg);
    itemWrapperImg.append(itemDeleteImg);

    const itemTitle = document.createElement("span");
    itemTitle.classList.add("cart__item-title");
    itemTitle.textContent = `${title}`;

    const itemPrice = document.createElement("span");
    itemPrice.classList.add("cart__item-price");
    itemPrice.textContent = new Intl.NumberFormat("ru-RU", {
      style: "currency",
      currency: "RUB",
      currencyDisplay: "symbol",
      minimumFractionDigits: 0,
    }).format(price);

    // const totalPrice = parceInt(itemPrice.textContent) * parceInt(itemCount.textContent);

    const itemTotalPrice = document.createElement("span");
    itemTotalPrice.classList.add("cart__item__total-price");
    itemTotalPrice.textContent = `Итого: ${new Intl.NumberFormat("ru-RU", {
      style: "currency",
      currency: "RUB",
      currencyDisplay: "symbol",
      minimumFractionDigits: 0,
    }).format(parseInt(element.count) * price)}`;

    const itemCountWrapper = document.createElement("div");
    itemCountWrapper.classList.add("cart__item-count__wrapper");

    const itemCountBtnPrev = document.createElement("button");
    itemCountBtnPrev.classList.add("cart__item-count__prev");
    itemCountBtnPrev.innerHTML = '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="30" height="30" rx="15" fill="#EFEFEF"/><path d="M16.5308 10.4082L12.3399 14.5991C11.9494 14.9896 11.9494 15.6227 12.3399 16.0133L16.5308 20.2041" stroke="#9D9D9D" stroke-width="2" stroke-linecap="round"/></svg>';
    itemCountBtnPrev.addEventListener("click", (e) => {
      quantityСhange(e, "minus");
    });

    const itemCount = document.createElement("span");
    itemCount.classList.add("cart__item-count");
    itemCount.textContent = `${element.count}шт`;

    const itemCountBtnNext = document.createElement("button");
    itemCountBtnNext.classList.add("cart__item-count__prev");
    itemCountBtnNext.innerHTML = '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="30" height="30" rx="15" transform="matrix(-1 0 0 1 30 0)" fill="#EFEFEF"/><path d="M13.4692 10.4082L17.6601 14.5991C18.0506 14.9896 18.0506 15.6227 17.6601 16.0133L13.4692 20.2041" stroke="#9D9D9D" stroke-width="2" stroke-linecap="round"/></svg>';
    itemCountBtnNext.addEventListener("click", (e) => {
      quantityСhange(e, "plus");
    });

    itemCountWrapper.append(itemCountBtnPrev);
    itemCountWrapper.append(itemCount);
    itemCountWrapper.append(itemCountBtnNext);

    const itemCountAndTotalPriceWrapper = document.createElement("div");
    itemCountAndTotalPriceWrapper.classList.add("cart__item-count__bottom");

    itemCountAndTotalPriceWrapper.append(itemCountWrapper);
    itemCountAndTotalPriceWrapper.append(itemTotalPrice);

    const itemContent = document.createElement("div");
    itemContent.classList.add("cart__item-content");

    itemContent.append(itemTitle);
    itemContent.append(itemPrice);
    itemContent.append(itemCountAndTotalPriceWrapper);

    item.append(itemWrapperImg);
    item.append(itemContent);

    cartContent.append(item);

    gettingOfTheNumberOfItemsInTheCart();
    updatePriceOfCart();
  });
}

function addItemToCart(storage, page, id = urlParams.get("Id")) {
  let count;
  id = parseInt(id);
  switch (page) {
    case "main":
      //count = parseInt(document.querySelector(`.slider-slide[data-number='${id}'] .slide-info__amount-count`).textContent.split("шт")[0]);
      count = 1;
      break;
    case "product":
      count = parseInt(document.querySelector(".product-info__amount-count").textContent.split("шт")[0]);
      break;
    case "catalog-card":
      count = 1;
      break;
    case "catalog-cell":
      count = parseInt(document.querySelector(`.list-content__table-item[data-id='${id}'] .list-content__table-item__amount-count`).textContent.split("шт")[0]);
      break;
  }

  let cart = localStorage.getItem(storage);
  cart = JSON.parse(cart);

  let isProductInCart = false;

  cart.forEach((element) => {
    if (element.id === id) {
      isProductInCart = true;
      element.count = parseInt(element.count) + count;
    }
  });
 
  if (!isProductInCart) {
    const item = {};
    item.id = id;
    item.count = count;
    cart.push(item);
   
  }
  cart = JSON.stringify(cart);
  localStorage.setItem(storage, cart);
  console.log(storage);
  console.log(cart);
  if (storage === "cart") {
    toggleCartWindow();
    outputCart();
  }
}


function addItemToCar1(storage, page, id = urlParams.get("Id")) {


  const phone = document.querySelector(".leave-the-application__phone").value;
  const name = document.querySelector(".leave-the-application__name").value;
  const email = document.querySelector(".leave-the-application__descr").value;

  

  fetch(`https://jarkoff.tw1.su/php/cart.php?addOrder=true&order=testrequest&phone=${phone}&name=${name}&email=${email}`)
    .then((response ) => {
       console.log(response.text() );
       document.getElementById("okform").style.display = "block";
       return;
      localStorage.setItem("cart", JSON.stringify([]));
      resetKeyOrderInLocalStorage();
      toggleWindowOfSuccessfulOrder();
    })
    .catch((error) => { 
      console.log(error);
    });
}





function removeItemInCart(id) {
  let cart = localStorage.getItem("cart");
  cart = JSON.parse(cart);

  cart.forEach((element, index) => {
    if (element.id === parseInt(id)) {
      cart.splice(index, 1);
    }
  });

  cart = JSON.stringify(cart);
  localStorage.setItem("cart", cart);
  outputCart();
}

function ordering() {
  const errorInputs = document.querySelectorAll(".input-error");
  if (errorInputs.length !== 0) return;
  const type = localStorage.getItem("type");
  const order = localStorage.getItem(type);
  const phone = document.querySelector(".form__phone").value;
  const name = document.querySelector(".form__name").value;
  const email = document.querySelector(".form__email").value;
  fetch(`https://jarkoff.tw1.su/php/cart.php?addOrder=true&order=${order}&phone=${phone}&name=${name}&email=${email}`)
    .then((data) => {
      // console.log(data);
      localStorage.setItem("cart", JSON.stringify([]));
      resetKeyOrderInLocalStorage();
      toggleWindowOfSuccessfulOrder();
    })
    .catch((error) => {
      console.log(error);
    });
}

function toggleCartWindow() {
  document.querySelector(".cart").classList.toggle("hidden");
}

function updatePrice(id) {
  let price = document.querySelector(`.cart__item[data-id='${id}'] .cart__item-price`);
  let count = document.querySelector(`.cart__item[data-id='${id}'] .cart__item-count`);
  const spanTotalPrice = document.querySelector(`.cart__item[data-id='${id}'] .cart__item__total-price`);

  price = parseInt(price.textContent.replace(/\s+/g, ""));
  count = parseInt(count.textContent.split("шт")[0]);

  const itemTotalPrice = new Intl.NumberFormat("ru-RU", {
    style: "currency",
    currency: "RUB",
    currencyDisplay: "symbol",
    minimumFractionDigits: 0,
  }).format(price * count);

  spanTotalPrice.innerHTML = `Итого: ${itemTotalPrice}`;

  updatePriceOfCart();
}

async function updatePriceOfCart() {
  const spanPriceOfCart = document.querySelector(`.cart-footer__total-mount`);
  const allSpanPriceOfItemsOfCart = document.querySelectorAll(".cart__item__total-price");
  let totalPrice = 0;
  allSpanPriceOfItemsOfCart.forEach((el) => {
    const price = parseInt(el.textContent.split("Итого: ")[1].replace(/\s+/g, ""));
    totalPrice = totalPrice + price;
  });

  totalPrice = new Intl.NumberFormat("ru-RU", {
    style: "currency",
    currency: "RUB",
    currencyDisplay: "symbol",
    minimumFractionDigits: 0,
  }).format(totalPrice);

  // console.log(totalPrice);
  spanPriceOfCart.innerHTML = totalPrice;
}

// изменение количества товара в слайдере в + или -
// привязан к предыдущему(+) или следующему(-) span от нажатой кнопки
function quantityСhange(e, type, isCard = true) {
  const id = parseInt(e.currentTarget.offsetParent.parentElement.dataset.id);
  let cart = localStorage.getItem("cart");
  cart = JSON.parse(cart);
  const target = e.currentTarget;
  switch (type) {
    case "plus":
      const prevAmount = target.previousElementSibling;
      let prevCount = parseInt(prevAmount.textContent.split("шт")[0]);
      // console.log(prevCount);
      prevAmount.textContent = `${prevCount + 1}шт`;
      cart.forEach((element) => {
        if (element.id === id) {
          element.count = parseInt(element.count) + 1;
        }
      });
      break;
    case "minus":
      const nextAmount = target.nextElementSibling;
      let nextCount = parseInt(nextAmount.textContent.split("шт")[0]);
      // console.log(nextCount);
      if (nextCount === 1) return;
      nextAmount.textContent = `${nextCount - 1}шт`;
      cart.forEach((element) => {
        if (element.id === id) {
          element.count = parseInt(element.count) - 1;
        }
      });
      break;
  }
  cart = JSON.stringify(cart);
  localStorage.setItem("cart", cart);
  if (isCard) updatePrice(id);
}

// получаем количество товаров из localStorage
// и выводим справа вверху около корзины
function gettingOfTheNumberOfItemsInTheCart() {
  let lengthOfCart = document.querySelector(".cart__count");
  if (lengthOfCart) lengthOfCart.remove();

  let cart = localStorage.getItem("cart");
  cart = JSON.parse(cart);

  const length = cart.length;
  // если число 0, то ничего не выводится
  if (length === 0) return;

  const newLenghtOfCart = document.createElement("div");
  newLenghtOfCart.classList.add("cart__count");
  newLenghtOfCart.textContent = length;

  let headerCart = document.querySelector(".header__right-cart");
  headerCart.append(newLenghtOfCart);
}

// переключатель мобильного меню
function toggleMenu(e) {
  e.target.classList.toggle("btn-open-menu");
  document.querySelector(".header-modile__menu").classList.toggle("open-menu");
}

function validate(e, input) {
  e.target.classList.remove("input-error");
  switch (input) {
    case "name":
    case "phone":
      if (e.target.value === "") {
        e.target.classList.add("input-error");
      }
      break;
    case "email":
      const regex = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
      if (!regex.test(e.target.value)) {
        e.target.classList.add("input-error");
      }
      break;
  }
}

function toggleConfirmingCartWindow(id, type = "cart") {
  // console.log(id);
  resetKeyOrderInLocalStorage();
  if (type === "order") {
    let page = window.location.pathname.replace("/", "").split(".html")[0];
    if (page === '') page = 'main';
    localStorage.setItem("type", "order");
    addItemToCart("order", page, id);
  }
  const cart = document.querySelector(".cart");
  const form = document.querySelector(".form");
  cart.classList.toggle("hidden");
  form.classList.toggle("hidden");
}

function resetKeyOrderInLocalStorage() {
  localStorage.setItem("type", "cart");
  localStorage.setItem("order", JSON.stringify([]));
}

function toggleWindowOfSuccessfulOrder() {
  document.querySelector(".confirm").classList.remove("hidden");
  document.querySelector(".cart").classList.add("hidden");
  document.querySelector(".form").classList.add("hidden");
  setTimeout(() => {
    window.location = "/";
  }, 5000);
}
