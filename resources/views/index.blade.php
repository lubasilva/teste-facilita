
@include('includes.header')

    <div class="container my-5">
        <div class="row">
            <h2 class="text-center my-3">Teste pratico</h2>
        </div>

        <div class="row my-5 justify-content-around">
            <div class="card col-5">
                <div class="card-header">
                    <h2>Desafio 1</h2>
                </div>
                <div class="card-body d-flex align-items-start flex-column">
                    <p class="card-text">Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construa um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico</p>
                    <a href="{{route('desafio1')}}" class="btn btn-primary  mt-auto">Vizualizar</a>
                </div>
            </div>

            <div class="card col-5">
                <div class="card-header">
                    <h2>Desafio 2</h2>
                </div>
                <div class="card-body d-flex align-items-start flex-column">
                    <p class="card-text">A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que sera emprestado, o tipo deusuario (professor ou aluno), o algoritmo deve imprimir um recibo mostrando o nome do livro, o tipo deusuario por extenso e o total dedias de emprestimo. Considerar que o professor tern10 dias para devolver o livro e o aluno somente 3 dias.</p>
                    <a href="{{route('desafio2')}}" class="btn btn-primary  mt-auto">Vizualizar</a>
                </div>
            </div>
        </div>

        <div class="row justify-content-around">
            <div class="card col-5">
                <div class="card-header">
                    <h2>Desafio 3</h2>
                </div>
                <div class="card-body d-flex align-items-start flex-column">
                    <p class="card-text">Criar um algoritmo que gere uma matriz 5x5 e imprima: toda a matriz, a matriz gerada apenas com os numeros fmpares e outra socom os numeros pares </p>
                    <a href="#" class="btn btn-primary mt-auto">Vizualizar</a>
                </div>
            </div>

            <div class="card col-5">
                <div class="card-header">
                    <h2>Desafio 4</h2>
                </div>
                <div class="card-body d-flex align-items-start flex-column">
                    <p class="card-text">Criar um algoritmo com um campo que possa receber apenas numeros e vfrgulas, separe os valores enviados e valide aqueles que sao um numero valido da Sequencia de Fibonacci e imprima os numeros de forma crescente, conforme o exemplo:</p>
                    <p class="card-text">Campo Recebe: 1,13,55,21,5,83</p>
                    <p class="card-text">Imprime: 1,5,13,21,55</p>
                    <a href="{{route('desafio4')}}" class="btn btn-primary  mt-auto">Vizualizar</a>
                </div>
            </div>
        </div>

            

    </div>
@include('includes.footer')