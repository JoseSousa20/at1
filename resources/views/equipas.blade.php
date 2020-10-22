@extends('layout')
@section('titulo')
Equipas do Torneio
@endsection
@section('header')
Equipas
@endsection
@section('conteudo')
@if(isset($equipas))
    <h1>Lista de equipas</h1>
    @foreach($equipas as $equipa)
        <h2>{{$equipa}}</h2>
    @endforeach
    <p>Está Tudo!</p>
@else
     <h1>Só uma equipa</h1>
     {{$equipa}}
@endif    
<a href="{{route('entrada.index')}}">Voltar</a>
@endsection