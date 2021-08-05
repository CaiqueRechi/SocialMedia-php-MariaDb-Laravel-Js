@extends('layouts.app')

@section('name')

@section('content')
    <form method='post' action='{{ route("users.update", $user->id) }}'>
        @csrf
        @method('put')

        <div class='row'>
            <div class='col-8'>
                <div class='form-froup'>
                    <label class='text-white'> Nome </label>
                    <input type='text' class='form-control' name='name' value='{{ $user->name }}'>
                    @error('name')
                    <div class='small text-danger'>
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class='mt-4 form-group'>
                    <label class='text-white'>
                        E-mail
                    </label>

                    <input type='email' class='form-control' name='email' value="{{ $user->email }}">
                    @error('email')
                    <div class='small text-danger'>
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class='mt-4 form-group'>
                    <label class='text-white'>
                        Senha
                    </label>

                    <input type='password' class='form-control' name='password'>
                    @error('password')
                    <div class='small text-danger'>
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class='mt-4 form-group'>
                    <label class='text-white'>
                        Confirmar Senha
                    </label>

                    <input type='password' class='form-control' name='password_confirmation'>
                </div>

                <div class='mt-4'>
                        <button class='btn btn-primary' type='submit'>Atualizar</button>
                        <a class='btn btn-secondary' href='{{ route('posts.index') }}'>Cancelar</a>
                </div>
            </div>
        </div>
