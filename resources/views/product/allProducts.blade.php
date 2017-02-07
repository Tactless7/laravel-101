@extends('layouts.userLayout')

@section('content')
  <ul clas ="ui list">
    @foreach ($products as $product)
    <li class="item"><a href="/show/{{$product->id}}">{{$product->name}}</a></li>
    @endforeach
  </ul>
  <a href="/add">Ajouter un produit</a>
@stop
