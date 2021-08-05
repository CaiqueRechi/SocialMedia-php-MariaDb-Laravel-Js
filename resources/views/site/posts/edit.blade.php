@extends('layouts.app')

@section('name')

@section('content')
    <form method='post' action='{{ route("posts.update", $post->id) }}'>
        @csrf
        @method('put')

        <div class='row'>
            <div class='col-8'>
                <div class='form-froup'>
                    <label class='text-white'> Titulo </label>
                    <input type='text' class='form-control' name='name' value='{{ $post->name }}'>
                    @error('name')
                    <div class='small text-danger'>
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class='mt-4 form-group'>
                    <label class='text-white'>
                        Texto
                    </label>

                    <textarea class='form-control' name='content'> {{ $post->content }} </textarea>
                    @error('content')
                    <div class='small text-danger'>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class='mt-4 form-group'>
                    <label class='text-white'> Author </label>

                    <select class='form-control' name='author_id'>
                        @foreach ($authors as $author)
                            <option value='{{ $author->id }}' @if($post->author_id == $author->id) {{ 'selected' }} @endif>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('author_id')
                    <div class='small text-danger'>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class='mt-4'>
                        <button class='btn btn-primary' type='submit'>Atualizar</button>
                        <a class='btn btn-secondary' href='{{ route('posts.index') }}'>Cancelar</a>
                </div>
            </div>
        </div>
