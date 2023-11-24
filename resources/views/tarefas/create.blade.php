@extends('layouts.app')
@section('title', 'Listagem')
@section('content')
<div class="container mt-5">
    <h2> Cadastre uma nova tarefa</h2>
    <hr>
    <form action="{{route('tarefas-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
        </div>
        <br>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="descricao" placeholder="informe a descrição...">
        </div>
        <br>
        <div class="form-group">
            <label for="escolha">Status</label>
            <select class="form-control" id="escolha" name="status">
                <option value="emandamento">Em andamento</option>
                <option value="nao iniciada">Nao iniciada</option>
                <option value="concluida">Concluida</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </form>
</div>


@endsection