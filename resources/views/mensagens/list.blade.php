<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagens as $mensagens)
	<h3>{{$mensagens->autor}}</h3>
	<h3>{{$mensagens->descricao}}</h3>
	<p><a href="/mensagens/{{$mensagens->id}}">{{$mensagens->titulo}}</a></p>
	<br>
@endforeach