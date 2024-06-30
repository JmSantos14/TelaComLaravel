@extends('layouts.main')

@section('title', 'Santos')

@section('content')

<h1>Produtos</h1>
    @if($busca != '')
    <p>O usuario esta buscando por {{ $busca }}</p>
    @endif

@endsection