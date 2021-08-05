@extends('layouts.app')

@section('user', 'Listagem')

@section('content')
<div class="row">
    <div class="col-12">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>User</th>
                    <th>E-Mail</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                    <tr>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->created_at }}</td>
                        <td>
                            <a href="{{ route('users.edit', $users->id) }}" class="btn btn-info btn-sm">Editar</a>
                            <form method='post' action="{{ route('users.destroy', $users->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class='btn btn-danger btn-sm'>
                                        Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
