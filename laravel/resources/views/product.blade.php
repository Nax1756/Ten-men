@extends('layouts.main')
@section('product')
<section class="product">
   <div class="product__Container _container">
      <div class="product__content">
         <div class="product__image">
            <img src="/img/product/{{ $shop->image}}" alt="">
         </div>
         <div class="product__block-wrapper">
            <div class="product__block">
               <div class="product__title">{{ $shop->name }}</div>
               <div class="product__data">
                  <p class="product__flavor">{{ $shop->flavor}}</p>
                  <div class="product__interest">
                     <div class="product__alc">{{ $shop->alc}}</div>
                     <div class="product__og">{{ $shop->og}}</div>
                     <div class="product__ibu">{{ $shop->ibu}}</div>
                  </div>
               </div>
               <div class="product__text">
                  <div class="product__style">Стиль: SOUR FRUITED GOSE</div>
                  <div class="product__info">Напівтемне нефільтроване та непастеризоване пиво.
                     Класична без додаткових добавок томатка — саме те,
                     що важливо завжди мати в холодильнику. <br>“BERRY BLOOD: tomato and pepper” має насичений <br>томатний колір та гоструватий смак, а аромат хмелю <br>та коріандру доповнює ідеальний смаковий портрет.</div>
                  <div class="product__composition">Склад: вода, солод, томатна паста, перець, сіль,
                     коріандр, хміль, дріжджі.</div>
               </div>
               <div class="product__bottom-info">
                  <div class="product__capacity">0.5 L</div>
                  <div class="product__price">116 UAN</div>
               </div>
               <div class="product__button">
                  <div class="product__button-left">
                     <p>-</p>
                     <p>1</p>
                     <p>+</p>
                  </div>
                  <div class="product__button-right">
                     <p>Додати в кошик</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection