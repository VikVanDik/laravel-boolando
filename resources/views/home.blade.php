@extends("layouts.main")

@section("content")

@foreach ($products as $product)
<div class="product">
    <div class="disappear">
      <img :src="/public/img/{{$product['frontImage']}}" alt="Relaxed Tee" title="Relaxed Tee" class="img">
      <img :src="`/src/assets/img/${cardObj.secondaryImage}`" alt="Relaxed TeeB" title="Relaxed TeeB" class="imgb">
      <div class="disappearheart">
        <span class="heart"> &hearts; </span>
        <span class="rheart"> &hearts; </span>
      </div>
      <span class="discount" v-if="cardObj.discount === null ? '' : 'd-none'"> Sconto </span>
      <span class="eco" v-if="cardObj.sostenibilita === true ? '' : 'd-none'">Sostenibilità</span>
    </div>


    <span class="brand">{{$product['brand']}}</span>
    <h3 class="item">{{$product['name']}}</h3>
    <span class="price"> {{$product['price']}} &euro;</span>
    <span class="old-price" v-if="cardObj.fullPrice === null ? '' : 'd-none'"> {{$product['price']}} &euro;</span>
  </div>
  @endforeach

@endsection
