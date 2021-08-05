@extends('layouts.app')

@section('name', 'Cadastro')

@section('content')
    <form method='post' action='{{ route("users.store") }}'>
            @csrf

            <div class='row'>
                <div class='col-8'>
                    <div class='form-group'>
                        <label class='text-white'>
                            User Name
                        </label>

                        <input type='text' class='form-control' name='name' value='{{ old('name') }}'>
                        @error('name')
                        <div class='small text-danger'>
                            {{ $message }}
                        </div>
                        @enderror

                    </div>

                    <div class='mt-4 form-group'>
                        <label class='text-white' >
                            E-mail
                        </label>

                        <input type='email' name='email' class='form-control' value='{{ old('email') }}'>

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
                        <button class='btn btn-primary' type='submit'>Criar</button>
                        <button class='btn btn-secondary'>Cancelar</button>
                    </div>

                </div>
            </div>
    </form>
@endsection
