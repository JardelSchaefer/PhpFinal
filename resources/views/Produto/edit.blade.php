


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
    
        <h3>Editando produto: {{$produto->nompro}}</h3>
        
        <form action="{{route('produto.update', $produto->codpro)}}" method="post">
            @csrf
            @method('patch')
            
            <label for="nompro">Nome da produto</label><br/>
            <input type="text" name="nompro" id="nomcat" value="{{$produto->nompro}}"/><br/><br/>
            <button type="submit">Editar</button>
        </form> 
        
    </body>
</html>
