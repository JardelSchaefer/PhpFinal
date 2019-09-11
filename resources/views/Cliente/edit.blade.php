

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body>
    
        <h3>Editando cliente: {{$cliente->nomcat}}</h3>
        
        <form action="{{route('cliente.update', $cliente->codcat)}}" method="post">
            @csrf
            @method('patch')
            
            <label for="nomcli">Nome da cliente</label><br/>
            <input type="text" name="nomcli" id="nomcat" value="{{$cliente->nomcat}}"/><br/><br/>
            <button type="submit">Editar</button>
        </form> 
        
    </body>
</html>
