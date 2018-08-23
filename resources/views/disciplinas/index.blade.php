<ul>
@foreach ($disciplinas as $disciplina)
	<li>
		<a href="/disciplinas/{{$disciplina->id}}">
		{{ $disciplina->titulo}} 
	</li>
@endforeach
</ul>