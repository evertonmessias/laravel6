<h1>LISTA</h1>
<table>
@foreach($pessoas as $p)
<tr><td>{{$p->nome}}</td><td>{{$p->telefone}}</td></tr>
@endforeach
</table>