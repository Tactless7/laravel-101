@extends('layouts.userLayout')

@section('content')
<h2>Editer un produit</h2>
  <form class="ui form" action="/edit/{{$product->id}}" method="post">
    <label for="name">Nom</label><input type="text" name="name" value="{{$product->name}}">
    <label for="price">Prix</label><input type="number" name="price" value="{{$product->price}}">
    <label for="stock">Stock</label><input type="number" name="stock" value="{{$product->stock}}">
    <label for="stock">Description</label><textarea name="description" rows="8" cols="80">{{$product->description}}</textarea>
    {{ csrf_field() }}
    <button type="submit" class="ui button">Editer la référence</button>
  </form>
@stop
