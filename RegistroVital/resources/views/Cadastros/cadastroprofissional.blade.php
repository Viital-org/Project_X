@extends ('layoutspadrao.profissionais')

@section ('titulo', 'Cadastro de profissionais')

@section ('conteudo')

<form action="{{ route('profissionais-store') }}" method="POST">
@csrf
<h1>Cadastro de profissionais</h1>

<br>

<label for="nome">Nome</label>
<input type="text" name="nome" id="nome">

<br>

<label for="areaatuacao">Area de atuacao</label>
<input type="text" name="areaatuacao" id="areaatuacao">

<br>

<label for="email">E-mail</label>
<input type="email" name="email" id="email">

<br>

<label for="enderecoatuacao">Endereco de atuacao</label>
<input type="text" name="enderecoatuacao" id="enderecoatuacao">

<br>

<label for="localformacao">Local de formacao</label>
<input type="text" name="localformacao" id="localformacao">

<br>

<label for="dataformacao">Data de formacao</label>
<input type="date" name="dataformacao" id="dataformacao">

<br>

<label for="descricaoperfil">Descricao</label>
<input type="text" name="descricaoperfil" id="descricaoperfil">

<input type="submit" value="Enviar">

</form>


@endsection