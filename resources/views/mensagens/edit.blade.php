<h1>Formulário de Edição da Mensagem {{$mensagens->id}}</h1>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/mensagens/{{$mensagens->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	Título: <input type="text" name="titulo" value="{{$mensagens->titulo}}"> <br>
	Texto:	<input type="text" name="texto" value="{{$mensagens->texto}}">   <br>
	Autor:  <input type="text" name="autor" value="{{$mensagens->autor}}">   <br>
	<input type="submit" value="Salvar">
</form>
