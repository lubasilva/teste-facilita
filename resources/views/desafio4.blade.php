@include('includes.header')

    <div class="container text-center my-5">
        <div class="row">
            <h4>Entre com os valores no input</h4>

            <form id="formValores" method="POST" action="{{route('desafio4.post')}}" class="text-center my-4">
                @csrf
                <label for="vetValores"></label>
                <input oninput="this.value = this.value.replace(/[^0-9\,]/, '')" type="text" name="vetValores" id="vetValores"/>
                    <button class="btn btn-primary">Enviar</button>

            </form>

        </div>
    </div>
@include('includes.footer')

