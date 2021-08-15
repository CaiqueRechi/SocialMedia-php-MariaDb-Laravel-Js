@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
<form method='get' action='{{ route("contact", $post->author) }}'>
<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Motivo do Contato</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Reclamações</option>
        <option>Sugestões</option>
        <option>Parcerias</option>
        <option>Negócios</option>
        <option>Outro</option>
      </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mensagem</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>

@endsection
