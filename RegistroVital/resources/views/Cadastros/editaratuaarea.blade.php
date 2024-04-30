@extends('LayoutsPadrao.profissionais')

@section('titulo', 'Editar Informações de Area de Atuação')

@section ('conteudo')

    <form action="{{ route('atuaareas-update', ['id' => $atuaareas->id]) }}" method="POST">

        @csrf

        <a href="{{ route('welcome') }}">Home</a>

        <br>
        
        <a href="{{ route('atuaareas-index') }} ">Listar areas de atuacao</a>

        <br>
        
        <a href="{{ route('cadastroatuaareas.create') }} ">Cadastrar area de atuacao</a>

        @method('PUT')

        <h1>Editar Dados de Area de Atuação</h1>

        <br>

        <label for="area">Area</label>
        <input type="text" name="area" id="area" value="{{ $atuaareas->area }}" required>

        <br>

        <label for="especializacao_id">Especialização:</label>
        <select name="especializacao_id" id="especializacao_id" required>
            @foreach($especializacoes as $especializacao)
                <option value="{{ $especializacao->id }}" @if ($especializacao->id === $atuaareas->especializacao_id) selected @endif>{{ $especializacao->especializacao }}</option>
            @endforeach
        </select>

        <br>

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" value="{{ $atuaareas->descricao }}" required>

        <br>

        <button type="submit">Salvar Alterações</button>

    </form>

@endsection
