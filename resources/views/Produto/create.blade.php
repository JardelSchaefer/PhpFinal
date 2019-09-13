

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
    
        <form action="{{route('produto.store')}}" method="post">
            @csrf
            
            <label for="nompro">Nome do Produto</label><br/>
            <input type="text" name="nompro" id="nompro"/><br/><br/>
            <button type="submit">Adicionar</button>
        </form> 
        
    </body>
</html>
