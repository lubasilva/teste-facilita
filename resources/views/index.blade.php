
@include('includes.header')

    <div class="container">
        <div class="row">
            <h2 class="text-center my-3">Teste pratico</h2>
        </div>

        <div class="row my-4 justify-content-around">
            <div class="card col-5">
                <div class="card-header">
                    <h2>Desafio 1</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">Chico bla bla bla bla</p>
                    <a href="{{route('desafio1')}}" class="btn btn-primary">Vizualizar</a>
                </div>
            </div>

            <div class="card col-5">
                <div class="card-header">
                    <h2>Desafio 2</h2>
                </div>
                <div class="card-body">
                    Chico bla bla bla bla
                </div>
            </div>
        </div>

        <div class="row justify-content-around">
            <div class="card col-5">
                <div class="card-header">
                    <h2>Desafio 3</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">Chico bla bla bla bla</p>
                    <a href="{{route('desafio3')}}" class="btn btn-primary">Vizualizar</a>
                </div>
            </div>

            <div class="card col-5">
                <div class="card-header">
                    <h2>Desafio 4</h2>
                </div>
                <div class="card-body">
                    Chico bla bla bla bla
                </div>
            </div>
        </div>

            

    </div>
@include('includes.footer')