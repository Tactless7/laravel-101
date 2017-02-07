@extends('layouts.userLayout')

@section('content')
<h2>Ajouter un produit</h2>
  <form class="ui form" action="/add" method="post">
    <label for="name">Nom</label><input type="text" name="name">
    <label for="price">Prix</label><input type="number" name="price">
    <label for="stock">Stock</label><input type="number" name="stock">
    <label for="stock">Description</label><textarea name="description" rows="8" cols="80"></textarea>
    {{ csrf_field() }}
    <button type="submit" class="ui button">Ajouter la référence</button>
  </form>
@stop
