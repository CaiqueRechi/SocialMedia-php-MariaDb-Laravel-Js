@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
<div align="middle">
    <img src="{{ asset(str_replace('public/', '', $post->image)) }}" alt="" >
    <div style="width:100%!important">
        <h1>{{ $post->title }}</h1>
        <span>{{ $post->create_at }}</span>
        <h3> {{ ($post->content) }}
    </div>

    <div align="right">
        <h1> Views:   {{ $post->visits }}  
        </h1>

    <div align="left">
        <h1> {{ $post->author['name'] }}
        <h2> {{ $post->created_at->format('d \d\e M \d\e Y \á\s H:i') }}
    </div>
</div>
@endsection
