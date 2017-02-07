@extends('layouts.userLayout')

@section('content')

  <div class="ui card">
    <h2>{{$product->name}}</h2>
    <p>{{$product->price / 100}} €</p>
    <p>{{$product->description}}</p>
    <a href="/del/{{$product->id}}">Supprimer la référence</a>
    <a href="/edit/{{$product->id}}">Editer la référence</a>
    <div>
      <form class="ui form" action="/restock/{{$product->id}}" method="post" id="restockForm">{{ csrf_field() }}
      <button class= "ui button" type="submit" id="restockButton">+</button></form>
      <span id="stock">{{$product->stock}}</span>
      <form class="ui form" action="/sell/{{$product->id}}" method="post" id="sellForm">{{ csrf_field() }}
      <button class= "ui button" type="submit" id="sellButton">-</button></form>
    </div>
    <form action="/addToCart/{{$product->id}}" method="post">
      <button class="ui primary button" type="submit">Ajouter le produit au panier</button>
    </form>
  </div>
@stop
