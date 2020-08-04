@extends('product.layout')

@section('content')
  <form class="" action="/api/productToevoegen" method="post">
    @csrf

    <p>Naam:</p>
    <input type="text" name="naam" >

    <p>Barcode:</p>
    <input type="text" name="barcode" >

    <p>Soort:</p>
    <input type="text" name="soort" >

    <p>Houdbaarheidsdatum:</p>
    <input type="date" name="houdbaarheidsdatum" >

    <p>Notitie:</p>
    <input type="text" name="notitie" >

    <button type="submit" name="button">Voeg toe</button>

  </form>
@endsection
