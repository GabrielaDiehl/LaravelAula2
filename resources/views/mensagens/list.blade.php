<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagens as $mensagens)
	<h3>{{$mensagens->autor}}</h3>
	<h3>{{$mensagens->descricao}}</h3>
	<p><a href="/mensagens/{{$mensagens->id}}">{{$mensagens->titulo}}</a></p>
	<a href="/mensagens/{{$mensagens->id}}">Visualizar</a> 
	<a href="/mensagens/{{$mensagens->id}}/edit">Editar</a> 
	<a href="/mensagens/{{$mensagens->id}}/delete">Deletar</a> 
	<br>
@endforeach

{{ $mensagens->links() }}