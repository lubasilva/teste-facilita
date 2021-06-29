@include('includes.header')

<div class="container">
    <div class="row justify-content-md-center my-5">
        <h4 class="text-center">Numeros escolhidos</h4>

        @foreach ($valores as $valor)
            <div class="col-sm col-lg-2">
                <p class="text-light bg-dark text-center">{{$valor}}</p>
            </div>
        @endforeach
    </div>
    <div class="row justify-content-md-center my-5">
        <br>
        @if ($valoresAceitos)
        <h4 class="text-center">Numeros que estão na sequencia de Fibonacci</h4 class="text-center">
        @foreach ($valoresAceitos as $valorAceito)
            <div class="col-sm col-lg-2">
                <p class="text-light bg-dark text-center">{{$valorAceito}}</p>
            </div>
        @endforeach

        @else
         <h4 class="text-center">Nenhum dos valores escolhidos estão na sequencia de Fibonacci</h4 class="text-center">
        @endif
        <a href="{{route('desafio4')}}" class="btn btn-primary my-5">Voltar</a>
            
    </div>
    
@include('includes.footer')