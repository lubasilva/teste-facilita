@include('includes.header')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header text-center">
                Emprestimo Efetuado com sucesso!
            </div>
            <div class="card-body">
                <p class="card-title tex">Livro: {{$livro->nome}}</p>
                @if ($pessoa->id_tipo == 1)
                    <p class="card-title">Professor(a): {{$pessoa->nome}}</p>
                    <p class="card-title">Dias para entrega: 10</p>
                @elseif($pessoa->id_tipo == 2)
                    <p class="card-title">Aluno(a): {{$pessoa->nome}}</p>
                    <p class="card-title">Dias para entrega: 3</p>
                @else
                <p class="card-title">O Tipo {{$pessoa->nome}} não esta cadastrado</p>
                @endif
                    <p class="card-title">Dia do emprestimo: {{$livro->created_at}}</p>
            </div>

        </div>
        <a href="{{route('desafio2')}}" class="btn btn-primary my-2">Salvar</a>

    </div>
    
@include('includes.footer')