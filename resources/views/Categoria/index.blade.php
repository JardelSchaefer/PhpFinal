<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

        <script src="{{ url('/') }}/js/categoria.js" type="text/javascript"></script>

    </head>
    <body>
        <a href="{{route('categoria.create')}}">Adicionar Categoria</a>

        <br>
        <button onclick="mostrarEsconderTitulo();">Mostrar/Esconder título</button>
        <br>

        <h2 id="titulo" hidden>Listagem do categorias</h2>


        <!-- Listagem de categorias -->
        <table border="1" class="table table-dark tabela-categoria" style="width: 50%; margin:auto">
            <thead class="thead-dark">
                <tr>
                    <td>Cód</td>
                    <td>Nome</td>
                    <td>Ação</td>
                </tr>
            </thead>


            <tbody>
                @foreach ($categoria as $c)

                <tr id="linhadel{{$c->codcat}}">
                    <td>{{$c->codcat}}</td>
                    <td>{{$c->nomcat}}</td>
                    <td>

                        <button onclick="location.href ='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>

                        <form onsubmit="return eliminarCategoria('del{{$c->codcat}}','{{route('categoria.destroy', $c->codcat)}}');" id="del{{$c->codcat}}" action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>


                </tr>


                @endforeach
            </tbody>
        </table>


    </body>
</html>
