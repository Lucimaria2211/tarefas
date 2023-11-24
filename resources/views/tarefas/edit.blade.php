@extends('layouts.app')
@section('title', 'Atualizar')
@section('content')
<div class="container mt-5">
    <h2> Atualizar tarefa</h2>
    <hr>
    <form action="{{route('tarefas-update', ['id' =>$tarefas->id])}}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" value="{{$tarefas->nome}}" name="nome" placeholder="Digite um nome...">
        </div>
        <br>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" value="{{$tarefas->descricao}}" name="descricao" placeholder="informe a descrição...">
        </div>
        <br>
        <div class="form-group">
            <label for="escolha">Status</label>
            <select class="form-control" id="escolha" value="{{$tarefas->status}}" name="status">
                <option value="{{$tarefas->status}}">{{$tarefas->status}}</option>   
                <option value="emandamento">Em andamento</option>
                <option value="nao iniciada">Nao iniciada</option>
                <option value="concluida">Concluida</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
        </div>
    </form>
</div>


@endsection