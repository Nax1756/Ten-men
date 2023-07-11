@extends('layouts.main')
@section('index')
<section class="promo">
   <div class="promo__container _container">
      <div class="promo__content">
         <img class="main-beer" src="/img/main-beer.png" alt="main-beer">
         <a class="promo__button" href="{{route('shop')}}" >магазин</a>
      </div>
   </div>         
</section>
@endsection     