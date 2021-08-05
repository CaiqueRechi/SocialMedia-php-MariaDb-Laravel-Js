@extends('layouts.app')

@section('name', 'Cadastro')

@section('content')
    <form method='post' action='{{ route("posts.store") }}'>
        @csrf

        <div class='row'>
            <div class='col-8'>
                <div class='form-group'>
                    <label class='text-white'>
                        Titulo
                    </label>

                    <input type='text' class='form-control' name='name' value='{{ old('name') }}'>
                    @error('name')
                    <div class='small text-danger'>
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class='mt-4 form-group'>
                    <label class='text-white'>
                        Post
                    </label>

                    <textarea class='form-control' name='content'>{{ old('content') }}</textarea>
                    @error('content')
                    <div class='small text-danger'>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class='mt-4 form-group'>
                    <label class='text-danger'>
                        Author
                    </label>

                    <select class='form-control' name='author_id'>
                        @foreach ($authors as $author)
                            <option value='{{ $author->id }}' @if(old('author_id') == $author->id) {{ 'selected' }} @endif>
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
                    <button class='btn btn-secondary'>Cancelar</button>
                </div>
            </div>
        </div>
    </form>
@endsection
