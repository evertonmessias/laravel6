@extends('layouts.app')

@section('content')

@include('layout')

<table class="tabela show">
<tr><td><strong>Nome</strong></td><td><strong>Telefone</strong></td>
<td><strong>E-Mail</strong>&emsp;&emsp;(editar detalhes)</td> </tr>
<tr><td>{{$pessoas->nome}}</td><td>{{$pessoas->telefone}}</td>
<td>
 <?php
 if (e($pessoas->anotacao['email'])) {
     echo "<a href='".e($pessoas->id)."/anotacao'>".e($pessoas->anotacao['email'])."</a>";
     }
     else{
        echo "<a href='".e($pessoas->id)."/anotacao'>&nbsp;sem e-mail !</a>";
     } 
 ?>
 </td>
</tr>
<tr><td colspan="3">
<button type="button" onclick="window.location.href='{{$pessoas->id}}/edit'">Editar</button>&emsp;&emsp;
<button type="button" onclick="window.location.href='{{$pessoas->id}}/del'">Apagar</button>

</td></tr>
</table>

@endsection