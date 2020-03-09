@extends('layouts.app')

@section('content')

@include('layout')

<fieldset class="formulario criar">
<form action="/update/{{$pessoas->id}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<p><strong>Editando: {{$pessoas->id}}</strong></p>
<p>Nome:&emsp;<input type="text" name="nome" value="{{$pessoas->nome}}"></p>
<p>Telefone:<input type="text" name="telefone" value="{{$pessoas->telefone}}"></p><br>
<button type="submit">Enviar</button>
<button type="button" onclick="window.history.go(-1);">Voltar</button><br>
</form><br>
</fieldset>

@endsection