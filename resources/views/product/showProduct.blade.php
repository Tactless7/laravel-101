@extends('layouts.userLayout')

@section('content')

  <div class="ui card">
    <h2>{{$product->name}}</h2>
    <p>{{$product->price / 100}} €</p>
    <a href="/del/{{$product->id}}">Supprimer la référence</a>
    <a href="/edit/{{$product->id}}">Editer la référence</a>
    <div>
      <form class="ui form" action="/restock/{{$product->id}}" method="post">{{ csrf_field() }}
      <button class= "ui button" type="submit">+</button></form>
      {{$product->stock}}
      <form class="ui form" action="/sell/{{$product->id}}" method="post">{{ csrf_field() }}
      <button class= "ui button" type="submit">-</button></form>
    </div>
  </div>
@stop
