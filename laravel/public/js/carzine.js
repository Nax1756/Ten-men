"use strict";

const header = document.getElementsByClassName('header')[0];
const carzine = document.getElementsByClassName('header__carzine-header')[0]; 
const path = document.getElementsByClassName('path')[0]; 
const cart = document.getElementsByClassName('cart')[0]; 
const cross = document.getElementsByClassName('block__cross')[0];
const exist = document.getElementsByClassName('block__exist')[0];
const clear = document.getElementsByClassName('block__clear')[0];
const goBuy = document.getElementsByClassName('go_buy')[0];
const body = document.body;



carzine.addEventListener('click', () =>{
  header.classList.add('open');
  body.classList.add('lock');
  cart.classList.add('open')
  path.classList.add('open')
});
cross.addEventListener('click', () =>{
  header.classList.remove('open');
  body.classList.remove('lock');
  cart.classList.remove('open')
  path.classList.remove('open')
});

goBuy.addEventListener('click', () =>{
  header.classList.toggle('open');
  body.classList.toggle('lock');
  cart.classList.toggle('open')
  path.classList.toggle('open')
});

// burgerButton.addEventListener('click', () => {
//   burgerMenu.classList.toggle('active');
//   body.classList.toggle('lock');
//   burgerLabel.classList.toggle('active');
// });




/* ----------------------------------- lox ---------------------------------- */

let documentHTML = document.querySelector("html");
let cartItems = [];
export function views() {
  let cartMenu = document.querySelector(".block__main");
  let menuBtn;
  let menu;
  const cartWrapper = document.querySelector(".block__product");
  let isclear = document.querySelector(".block__clear");
  let totalPrice = document.querySelector(".second");
  let showForm = document.querySelector(".total-price__button-buy");
  let formWrap = document.querySelector(".form-order__background");
  let formProductPrice = document.querySelector(".block__product-price");
  let formProductItem = document.querySelector(".block__product-item");
  
  let cartIcon = document.querySelector(".header__carzine-header");
  let cartClose = document.getElementById("close-cart")
  let documentHTML = document.querySelector("html")
  menuBtn = document.querySelector('.menu-btn');
  menu = document.querySelector(".menu--burger-list");

  

  document.addEventListener("DOMContentLoaded", function () {
    // cartIcon.onclick = () => {
    //   cartMenu.classList.add("cart-active") 
    //   if (window.innerWidth < 560) {
    //       documentHTML.style.position = "fixed"
    //       documentHTML.style.height = "100vh";
    //       documentHTML.style.width = "100%";
    //       documentHTML.style.top = "0";
    //       documentHTML.style.margin = "0 auto";
    //   } else if (window.innerWidth < 560) {
    //       documentHTML.style.position = "static"
    //   }
    // }
    // cartClose.addEventListener("click",() => {
    //     cartMenu.classList.remove("cart-active")
    //     documentHTML.style.position = "static"

    // })

    function findCartItem(id) {
      return cartItems.find((item) => item.id === id);
    }
   
    window.addEventListener("click", function (event) {
      if (event.target.hasAttribute("data")) {
        const card = event.target.closest(".product-shop__block");
        console.log(card)
        const productId = card.dataset.id;
        console.log(productId)
        const existingItem = findCartItem(productId);
        // cartMenu.classList.add("cart-active");
        cartWrapper.style.display = "flex";
        totalPrice.style.display = "flex";
        isclear.style.display = "none";
        let formPrice;
        let added = card.getAttribute("data-added");
        let productIdString = productId.toString();
        console.log(productIdString)
        if (added === "true") {
          return;
        }
     
        added = "true";
        card.setAttribute("data-added", added);

        /* -----------------------------------------------------------------------*/
        /*                                Card Item                               */
        /* -----------------------------------------------------------------------*/

        if (existingItem) {
          const countElem = document.querySelector(
            `.item-count[data-counter="${productId}"]`
          );
          countElem.textContent = Number(countElem.textContent) + 1;
          return;
        }
         
        const productInfo = {
          id: productId,
          imgSrc: card.querySelector(".product-shop__image").getAttribute("src"),
          title: card.querySelector(".data__title").innerText,
          status: card.querySelector(".data__flavor").innerText,
          price: card.querySelector(".data__price").innerText,
          count: 0,
          data: `${productId}`,
        };

        
        handleClick(productInfo)
        productInfo.count++;

        const itemInCart = `<div class="block__item-product" data-id="${productInfo.data}">
                              <img class="block__image" src="${productInfo.imgSrc}" alt="">
                              <div class="block__product-left">
                                <p class="block__product-title">${productInfo.title}</p>
                                <p class="block__price">${productInfo.price}</p>
                              </div>
                              <div class="block__product-right">
                                <div class="block__button">
                                  <button class="button-primary__minus" data-id="${productInfo.data}" id="minus">-</button>
                                  <p class="item-count" data-counter="${productInfo.id}">${productInfo.count}</p>
                                  <button class="button-primary__plus" data-id="${productInfo.data}">+</button>
                                </div>
                                <div class="block__exist-cross"><span></span><span class="second"></span></div>
                              </div>
                          </div>`;
        cartWrapper.insertAdjacentHTML("beforeend", itemInCart);
        cartItems.push(productInfo);
      console.log(cartItems)
      console.log(cartWrapper)
        /* -----------------------------------------------------------------------*/
        /*                                  FORM                                  */
        /* -----------------------------------------------------------------------*/

       

        function counterReset() {
          productInfo.count = 0;
          let itemInCount = document.querySelector(".item-count");
          itemInCount.innerHTML = productInfo.count;
          formProductItem.innerHTML = ""
          card.removeAttribute("data-added")
          removeCartItem(productId);
          updateTotalPrice()
          localStorage.clear()
        }
      
        /* -------------------------------------------------------------------------*/
        /*                                  Buttons                                 */
        /* -------------------------------------------------------------------------*/

        let btnPlus = document.querySelectorAll(".button-primary__plus");
        let btnMinus = document.querySelectorAll(".button-primary__minus");

        /* --------------------------------------------------------------------------*/
        /*                                  Btn Plus                                 */
        /* --------------------------------------------------------------------------*/

        btnPlus.forEach(function (button) {
          button.addEventListener("click", function (event) {
            const productId = event.target.dataset.id;
            const item = findCartItem(productId);
            console.log(productId)
            console.log(item)
            const countElem = document.querySelector(
              `.item-count[data-counter="${productId}"]`
            );
            let countElemAttr = countElem.getAttribute("data-counter");
            if (countElemAttr == productInfo.data) {
              item.count++;
            }

            countElem.textContent = item.count;
            updateTotalPrice();
          });
        });

        /* --------------------------------------------------------------------------*/
        /*                                  Btn Minus                                */
        /* --------------------------------------------------------------------------*/

        btnMinus.forEach(function (button) {
          button.addEventListener("click", function (event) {
            const productId = event.target.dataset.id;
            const item = findCartItem(productId);
            console.log(productId)
            console.log(item)
            const countElem = document.querySelector(
              `.item-count[data-counter="${productId}"]`
            );
            console.log(countElem)
            let countElemAttr = countElem.getAttribute("data-counter");
            if (countElemAttr == productInfo.data) {
              item.count--;
            }
            if (item.count === 0) {
              removeCartItem(productId);
              card.removeAttribute("data-added");
            } else {
              countElem.textContent = item.count;
              updateTotalPrice();
            }
          });
        });

        function removeCartItem(id) {
          const index = cartItems.findIndex((item) => item.id === id);
          console.log(cartItems)
          cartItems.splice(index, 1);
          const item = document
            .querySelector(`[data-id="${id}"]`)
            .closest(".item");
            console.log(item)
          item.parentNode.removeChild(item);
          updateTotalPrice();

        }

        function updateTotalPrice() {
          const itemPrices = document.querySelectorAll(".item-price");
          let totalPriceCash = 0;
          itemPrices.forEach(function (item) {
            const productId = item
              .closest(".item")
              .querySelector(".button-primary__plus").dataset.id;
            const itemInfo = findCartItem(productId);
            totalPriceCash += parseFloat(item.textContent) * itemInfo.count;
          });
          document.querySelector(".second-all-price").innerHTML =
          totalPriceCash + " грн";

        }
        updateTotalPrice();

      }
  
    
    });
    function handleClick(item) {
      var key = 'key_' + item.data;
      var value =JSON.stringify(item);
      localStorage.setItem(key, value);
    }

      
    window.onload =(e)=>{
      
    }
  });
  return views;
}

views();
