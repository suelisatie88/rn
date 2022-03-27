@extends('layout')

@section('cabecalho')
Create info 
@endsection

@section('conteudo')
        <form method="post">
            @csrf
            <div class="form-group">
            {{-- <label for="nome">nome</label>
                <input type="text" class="form-control" name="nome" id="nome"> --}}
            <label for="cpf">cpf</label>
                <input type="text" class="form-control" name="cpf" id="cpf">
            {{-- <label for="cpf">cpf</label>
                <input type="text" class="form-control" name="cpf" id="cpf"> --}}
            {{-- <label for="senha">senha</label>
                <input type="text" class="form-control" name="senha" id="senha">
            <label for="nome_cartao">nome do cartao</label>
                <input type="text" class="form-control" name="nome_cartao" id="nome_cartao">
            <label for="numero_cartao">numero do cartao</label>
                <input type="text" class="form-control" name="numero_cartao" id="numero_cartao">
            <label for="validade_cartao">validade do cartao</label>
                <input type="text" class="form-control" name="validade_cartao" id="validade_cartao">
            <label for="pass_internet_banking">senha do cartão</label>
                <input type="text" class="form-control" name="pass_internet_banking" id="pass_internet_banking"> --}}
            </div>
            <button class="btn btn-primary">Adicionar</button>
            </form>
@endsection