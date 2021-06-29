@include('includes.header')
    <h3 class="text-center">Desafio 1</h3>
    <div class="container">
<table class="table my-4">
        <thead>
            <th>Nome</th>
            <th>Altura</th>
            <th>Crescimento Anual</th>
            <th>Ano</th>
        </thead>

        
            @foreach ($results as $result)
            <tbody>
                <th>{{$result['nome']}}</th>
                <th>{{$result['altura']}} M</th>
                <th>{{$result['crescimentoAno']}}</th>
                <th>{{$result['ano']}}</th>
            </tbody>
            @endforeach
    </table>
    <p class="lead">Serão necessarios {{$processoCrescimento['qtdAno']}} anos para que Juca seja maior que Chico. Juca irá alcançar esse feito em {{$results[1]->ano + $processoCrescimento['qtdAno']}} quando tiver {{$processoCrescimento['alturaJuca']}}
    e Chicho tera {{$processoCrescimento['alturaChico']}}
</p> 



@include('includes.footer')