<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ url('/') }}/js/categoria.js" type="text/javascript"></script>

        <!-- Styles -->
      
    </head>
    <body>
    
        <form id="formAdd" onsubmit="return adicionarCategoria('{{route('categoria.store')}}');"action="" >
            @csrf
            
            <label for="nomcat">Nome da categoria</label><br/>
            <input type="text" name="nomcat" id="nomcat"/><br/><br/>
            <button type="submit">Adicionar</button>
        </form> 
        
    </body>
</html>
