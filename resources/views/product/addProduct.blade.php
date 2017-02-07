@extends('layouts.userLayout')

@section('content')
<h2>Ajouter un produit</h2>
  <form class="ui form" action="/add" method="post">
    <label for="name">Nom</label><input type="text" name="name">
    <label for="price">Prix</label><input type="number" name="price">
    <label for="stock">Stock</label><input type="number" name="stock">
    {{ csrf_field() }}
    <button type="submit" class="ui button">Ajouter la référence</button>
  </form>
@stop
