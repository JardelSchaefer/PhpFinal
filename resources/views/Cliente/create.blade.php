
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
    
        <form action="{{route('cliente.store')}}" method="post">
            @csrf
            
            <label for="nomcli">Nome do cliente</label><br/>
            <input type="text" name="nomcli" id="nomcat"/><br/><br/>
            <button type="submit">Adicionar</button>
        </form> 
        
    </body>
</html>
