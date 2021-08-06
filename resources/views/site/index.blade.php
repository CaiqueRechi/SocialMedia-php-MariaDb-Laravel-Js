@extends('layouts.app')

@section('title', 'Postagens')

@section('content')
    @include('layouts.partials.featured-posts', ['topPosts' => $topPosts])
    @include('layouts.partials.posts', ['topPosts' => $posts])
@endsection
