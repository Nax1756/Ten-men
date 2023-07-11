@extends('layouts.main')
@section('cart')
<section class="cart-menu">
   <div class="cart-menu__container _container">
      <div class="cart-menu__title">CARD</div>
      <div class="cart-menu__compliment">У вас чудовий смак!</div>
      <!-- ----------------------------------- lox ---------------------------------- -->
      <div class="cart-menu__block-product block">
         <img class="block__image" src="/img/product/berry-blood.png" alt="">
         <div class="block__data" >
            <p class="block__name">BERRY BLOOD: tomato and pepper<br>(PICO DE GALLO edition)</p>
            <p class="block__flavor">Sore Fruited Gose</p>
            <div class="block__percentage">
               <p class="block__alc">ALC. 4%</p>
               <p class="block__og">OG: 12,5%</p>
               <p class="block__ibu">IBU:12</p>
            </div>
         </div>
         <p class="block__capacity">0.5L</p>
         <p class="block__price">116 UAH</p>
         <div class="block__button">
            <p>-</p>
            <p>1</p>
            <p>+</p>
         </div>
         <div class="block-product__cross">
            <span></span>
            <span class="second"></span>
         </div>
      </div>
      <div class="cart-menu__block-product block">
         <img class="block__image" src="/img/product/berry-blood.png" alt="">
         <div class="block__data" >
            <p class="block__name">BERRY BLOOD: tomato and pepper<br>(PICO DE GALLO edition)</p>
            <p class="block__flavor">Sore Fruited Gose</p>
            <div class="block__percentage">
               <p class="block__alc">ALC. 4%</p>
               <p class="block__og">OG: 12,5%</p>
               <p class="block__ibu">IBU:12</p>
            </div>
         </div>
         <p class="block__capacity">0.5L</p>
         <p class="block__price">116 UAH</p>
         <div class="block__button">
            <p>-</p>
            <p>1</p>
            <p>+</p>
         </div>
         <div class="block-product__cross">
            <span></span>
            <span class="second"></span>
         </div>
      </div>
      <div class="cart-menu__block-product block">
         <img class="block__image" src="/img/product/berry-blood.png" alt="">
         <div class="block__data-cart" >
            <p class="block__name">BERRY BLOOD: tomato and pepper<br>(PICO DE GALLO edition)</p>
            <p class="block__flavor">Sore Fruited Gose</p>
            <div class="block__percentage">
               <p class="block__alc">ALC. 4%</p>
               <p class="block__og">OG: 12,5%</p>
               <p class="block__ibu">IBU:12</p>
            </div>
         </div>
         <p class="block__capacity">0.5L</p>
         <p class="block__price">116 UAH</p>
         <div class="block__button">
            <p>-</p>
            <p>1</p>
            <p>+</p>
         </div>
         <div class="block-product__cross">
            <span></span>
            <span class="second"></span>
         </div>
      </div>
      <!-- logitech NEGR PIDORAS -->
      <div class="cart-menu__bottom-content bottom">
         <div class="bottom__total-price">
            <p>сума замовлення:</p>
            <p class="total-price">116 UAN</p>
         </div>
         <a class="bottom__button">оформити замовлення</a>
      </div>
   </div>
</section>
@endsection