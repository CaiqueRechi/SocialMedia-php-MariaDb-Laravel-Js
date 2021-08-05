@extends('layouts.app')

@section('title', 'Acesso ao Sistema')

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-3">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="staticEmail" class="text-white col-sm-2 col-form-label">Email</label>
                    <input type="email" class="form-control" id="staticEmail" name="email" required value="{{ old('email') }}">
                    @error('email')
                        <div class="small text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="inputPassword" class="text-white col-sm-2 col-form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" required>
                    @error('password')
                        <div class="small text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
