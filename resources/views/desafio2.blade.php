@include('includes.header')

    <div class="container">
        <div class="row">
            <h4 class="text-center">Desafio 2</h4>
            <form method="POST" action="{{route('desafio2.post')}}">
                @csrf
                <div class="form-group">
                    <label for="idLivro">Livro</label>
                    <select class="form-control" id="idLivro" name="idLivro">
                        @foreach ($livros as $livro)
                            <option value="{{$livro->id}}" >{{$livro->nome}} </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group my-4">
                    <label for="idTipoPessoa">Alugador</label>
                    <select class="form-control" id="idTipoPessoa" name="idTipoPessoa">
                        @foreach ($pessoas as $tipo)
                            <option value="{{$tipo['id']}}">{{$tipo['nome']}}  -  <p>{{$tipo['id_tipo'] == '1' ? 'Professor' : 'Aluno'  }}</p></option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary">Emprestar</button>
            </form>
        </div>
    </div>

@include('includes.footer')