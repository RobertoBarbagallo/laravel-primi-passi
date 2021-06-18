@extends('templates.template')

@section('page_title', 'Homepage')
@section('content')
    <h1>Il mio nome è:  {{$nome}} {{$cognome}}</h1> 

    <a href="{{ route ('forum') }}">Forum</a>
    <a href="{{ route ('blog') }}">Blog</a>
    <a href="{{ route ('community') }}">Community</a>
    <a href="{{ route ('about') }}">About</a>
@endsection