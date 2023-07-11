<!DOCTYPE html>
<html lang="ua">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="/css/style.css">
</head>

<body>
   <div class="wrapper">
      <header class="header">
         <div class="header__container _container">
            <div class="header__content">
               <ul class="header__items-left">
                  <li class="header__item"><a href="{{ route('shop') }}" class="header__link green">Пиво</a></li>
                  <li class="header__item"><a href="{{ route('cart') }}" class="header__link red">Кошик</a></li>
                  <li class="header__item"><a href="#" class="header__link orange">сувеніри</a></li>
                  <li class="header__item"><a href="#" class="header__link mint">Оплата&nbspі&nbspдоставка</a></li>
               </ul>
               <div class="burger-menu">
                  <label class="burger-menu__label" for="burger-menu__input"><span id="burger__span"></span></label>
               </div>
               <div class="header__logo">
                  <a href="{{ route('index') }}"><img src="/img/logo.svg" alt="logo"></a>
               </div>
               <div class="header__carzine-burger"></div>
               <ul class="header__items-right">
                  <li class="header__item"><a href="" class="header__link blue">Про&nbspброварню</a></li>
                  <li class="header__item"><a href="" class="header__link purple">краутфандинг</a></li>
                  <li class="header__item"><a href="" class="header__link pink">контакти</a></li>
                  <div class="header__navigation-wrapper">
                     <div class="header_language">
                        <input type="checkbox" class="header__input" name="input" id="input_1">
                        <label class="header__fr-language" for="input_1">ua&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                        <div class="header_sc-language">
                           <a href="#">eng</a>
                        </div>
                     </div>
                     <div class="header__carzine-header">
                        <svg viewBox="0 0 36 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path class="path" fill="white" d="M34.8534 9.04178L26.5133 9.03315C25.1933 6.15199 23.7438 3.33507 22.1649 0.582406C21.8466 0.0278933 21.0906 -0.163058 20.5409 0.158071C19.9818 0.484593 19.7957 1.2225 20.115 1.78025C21.471 4.14694 22.7321 6.56362 23.8983 9.03027H23.4191L12.1075 9.01877C13.2739 6.55882 14.5331 4.1461 15.885 1.78061C16.2032 1.22394 16.0157 0.483155 15.4591 0.158071C14.9026 -0.167013 14.1545 0.0260953 13.8351 0.583485C12.2627 3.328 10.8159 6.13868 9.49498 9.01553L5.32797 9.01121L1.14656 9.0069C-0.380926 9.0069 -0.383446 11.3763 1.14656 11.3781H2.462C2.4687 11.4192 2.47748 11.4599 2.48828 11.5L6.77805 24.9065C6.98133 25.5423 7.18461 26.1776 7.38789 26.8124C7.42011 26.9103 7.46373 27.0041 7.51785 27.0919C7.68813 27.4425 8.02185 27.7075 8.53234 27.7082L25.1053 27.7341L27.4677 27.7377C28.0746 27.7377 28.4368 27.3634 28.5613 26.9106C28.6182 26.8215 28.6638 26.7257 28.6971 26.6254L33.1341 12.9773C33.304 12.4556 33.4737 11.9337 33.6431 11.4116H34.8534C36.3809 11.4145 36.3834 9.04322 34.8534 9.04178ZM24.12 11.4008C23.9431 12.4051 23.7665 13.4096 23.5901 14.4143L22.0835 14.4125L19.1988 14.4093C19.1988 13.762 19.1994 13.1154 19.2006 12.4695C19.2006 12.1114 19.2006 11.7535 19.2006 11.3958L24.12 11.4008ZM28.422 19.8041L25.0427 19.7994C25.2193 18.7954 25.396 17.7915 25.5726 16.7877L27.4968 16.7899L29.4012 16.792C29.0741 17.7968 28.7473 18.8011 28.4209 19.8052L28.422 19.8041ZM22.644 19.7969L21.384 19.7951L19.1927 19.7922C19.1927 18.7887 19.1936 17.785 19.1956 16.7812L23.1721 16.7859C22.9957 17.7897 22.8197 18.7933 22.644 19.7969ZM21.6648 25.3582L19.188 25.3535C19.188 24.2898 19.189 23.2262 19.1909 22.1627L22.2264 22.1667L21.91 23.9665C21.8281 24.4309 21.7464 24.8948 21.6648 25.3582ZM14.3334 25.3467C14.1462 24.283 13.9591 23.2193 13.7721 22.1555H14.616L16.8167 22.1584L16.8145 24.352V25.3481L14.3334 25.3467ZM6.66537 16.7668L10.427 16.7712L10.9548 19.7796H10.1376L7.62693 19.776C7.30581 18.7727 6.98481 17.7697 6.66393 16.7668H6.66537ZM12.8271 16.774H13.919L16.8232 16.7776C16.8232 17.7809 16.8222 18.7843 16.8203 19.7879L13.356 19.7839L12.8271 16.774ZM16.8286 11.3943L16.8253 14.4075L12.4103 14.4024C12.2663 13.582 12.1223 12.7619 11.9783 11.942L11.88 11.3893H12.582L16.8286 11.3943ZM9.48022 11.3868C9.65662 12.3908 9.83314 13.3951 10.0098 14.3996L8.5057 14.3978L5.90397 14.3945L5.38665 12.7763C5.23761 12.311 5.08869 11.8458 4.93989 11.3807L9.48022 11.3868ZM9.40822 25.3395C9.06766 24.2758 8.72722 23.2122 8.3869 22.1487L11.3727 22.1527C11.5167 22.9678 11.6601 23.7829 11.8029 24.598C11.8466 24.8466 11.8903 25.0951 11.934 25.3434H10.8957L9.40822 25.3395ZM24.0649 25.3621C24.2517 24.2984 24.4387 23.2348 24.6262 22.1714H25.8635L27.6516 22.1739L27.0436 24.0438C26.8996 24.484 26.7565 24.924 26.6145 25.3639L24.0649 25.3621ZM30.1705 14.4215L25.9884 14.4179C26.0964 13.803 26.2044 13.1878 26.3124 12.5724L26.518 11.4044L30.6717 11.4087H31.1501C30.8235 12.4137 30.497 13.4179 30.1705 14.4215Z" />
                        </svg>
                     </div>
                  </div>
               </ul>
            </div>
         </div>
      </header>
      <main class="main">
         <section class="menu__burger" id="burger__menu">
            <ul class="menu">
               <li class="header__item"><a href="#" class="header__link green">Пиво</a></li>
               <li class="header__item"><a href="#" class="header__link red">Правила&nbspгри</a></li>
               <li class="header__item"><a href="#" class="header__link orange">сувеніри</a></li>
               <li class="header__item"><a href="#" class="header__link mint">Оплата&nbspі&nbspдоставка</a></li>
               <li class="header__item"><a href="#" class="header__link blue">Про&nbspброварню</a></li>
               <li class="header__item"><a href="#" class="header__link purple">краутфандинг</a></li>
               <li class="header__item"><a href="#" class="header__link pink">контакти</a></li>
            </ul>
         </section>
         <section class="cart">
            <div class="cart__block block">
               <div class="block__header">
                  <div class="block__title">
                     <p class="block__text">Ваше замовлення</p>
                     <p class="block__number">(1)</p>
                  </div>
                  <div class="block__cross">
                     <span></span>
                     <span class="second"></span>
                  </div>
               </div>
               <div class="block__main">
                  <div class="block__clear">
                     <p>У кошику немає товарів</p>
                  </div>
                  <div class="block__exist">
                     <div class="block__product">

                     
                        <!-- <img class="block__image" src="/img/product/berry-blood.png" alt="">
                        <div class="block__product-left">
                           <p class="block__product-title"></p>
                           <p class="block__price">116 uan</p>
                        </div>
                        <div class="block__product-right">
                           <div class="block__button">
                              <p>-</p>
                              <p>1</p>
                              <p>+</p>
                           </div>
                           <div class="block__exist-cross"><span></span><span class="second"></span></div>
                        </div> -->
                     </div>
                     <div class="block__border"></div>
                     <div class="block__data">
                        <div class="block__share">поділитися кошиком</div>
                        <div class="block__data-all-price">
                           <p>Всього</p>
                           <p class="second-all-price">0 UAH</p>
                        </div>
                        <div class="block__button-block">
                           <a href="{{ route('cart') }}" class="block__button-cart">кошик</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="block__footer">
                  <a class="go_buy" href="#">Продовжити покупки</a>
               </div>
            </div>
         </section>
         @yield('index')
         @yield('shop')
         @yield('product')
         @yield('cart')

      </main>

      <footer class="footer">
         <div class="footer__container _container">
            <div class="footer__content">
               <div class="footer__list">
                  <ul class="list">
                     <li class="footer__item"><a href="#" class="footer__link green">Пиво&nbsp&nbsp&nbsp</a></li>
                     <li class="footer__item"><a href="#" class="footer__link red">Правила&nbspгри&nbsp&nbsp&nbsp</a></li>
                     <li class="footer__item"><a href="#" class="footer__link orange">сувеніри&nbsp&nbsp&nbsp</a></li>
                     <li class="footer__item"><a href="#" class="footer__link mint">Оплата&nbspі&nbspдоставка&nbsp&nbsp&nbsp</a></li>
                     <li class="footer__item"><a href="#" class="footer__link blue">Про&nbspброварню&nbsp&nbsp&nbsp</a></li>
                     <li class="footer__item"><a href="#" class="footer__link purple">краутфандинг&nbsp&nbsp&nbsp</a></li>
                     <li class="footer__item"><a href="#" class="footer__link pink">контакти</a></li>
                  </ul>
               </div>
               <div class="footer__contacts">
                  <a class="contacts__number" href="#">+380 (96) 917-30-32</a>
                  <div class="contacts__icons">
                     <img class="icons__insta" src="/img/insta.svg" alt="instagram">
                     <img class="icons__beer" src="/img/beer.svg" alt="beer">
                     <img class="icons__facebook" src="/img/facebook.svg" alt="facebook">
                  </div>
               </div>
               <div class="footer__bank">
                  <img class="bank__visa" src="/img/Visa.svg" alt="Visa">
                  <img class="bank__mastercard" src="/img/Mastercard.svg" alt="Mastercard">
               </div>
            </div>
         </div>
      </footer>
   </div>
   <script src="/js/script.js"></script>
   <script src="/js/carzine.js" type="module"></script>
</body>

</html>