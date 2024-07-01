@extends('layouts.main')

@section('title', 'Santos')

@section('content')

@foreach($events as $event)
    <p>{{ $event ->title}} -- {{ $event-> description}}</p>
@endforeach          
    
@endsection
