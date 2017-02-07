@extends('layouts.userLayout')

@section('content')

  <div id="bla" class="ui centered card product">
    <h2 class="ui big centered header">{{$product->name}}</h2>
    <p>Prix  : {{$product->price / 100}} €</p>
    <p>Description : {{$product->description}}</p>
    <div class="modifyProduct">
      <a href="/del/{{$product->id}}">Supprimer la référence</a>
      <a href="/edit/{{$product->id}}">Editer la référence</a>
    </div>

    <div class="modifyStock">
      <form class="ui form" action="/sell/{{$product->id}}" method="post" id="sellForm">{{ csrf_field() }}
      <button class= "ui button" type="submit" id="sellButton">-</button></form>
      <span id="stock">{{$product->stock}}</span>
      <form class="ui form" action="/restock/{{$product->id}}" method="post" id="restockForm">{{ csrf_field() }}
      <button class= "ui button" type="submit" id="restockButton">+</button></form>
    </div>

    <form action="/addToCart/{{$product->id}}" method="post">
      <button class="ui green button" type="submit">Ajouter au panier</button>
    </form>

    <div class="ui clearing divider"></div>
      <h3 class="ui centered header">Ajouter un avis</h3>
      <form class="ui form" action="/add/comment" method="post">
        <label for="author">Auteur</label><input type="text" name="author">
        <label for="content">Contenu</label><textarea name="name" rows="4" cols="50"></textarea>
        {{ csrf_field() }}
        <button class="ui primary button" type="submit">Donner son avis</button>
      </form>
  </div>
@stop
