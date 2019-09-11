
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script>
        window.onload = function () {
            @if(session()->get('msg'))
            alert('{{session()->get('msg')}}');
            @endif
    };
        </script>
        
        
        <!-- Styles -->
      
    </head>
    <body>
        <a href="{{route('cliente.create')}}">Adicionar Cliente</a>
        
        <!-- Listagem de clientes -->
        <table style="width: 50%;">
            <thead>
                <tr>
                    <td>Cód</td>
                    <td>Nome</td>
                    <td>Ação</td>
                </tr>
            </thead>
       
        
    <tbody>
        @foreach ($cliente as $c)
        
        <tr>
    <td>{{$c->codcli}}</td>
    <td>{{$c->nomcli}}</td>
    <td>
        
        <button onclick="location.href='{{route('cliente.edit', $c->codcli)}}'" type="button">Editar</button>
    
        <form action="{{route('cliente.destroy', $c->codcli)}}" method="post">
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
