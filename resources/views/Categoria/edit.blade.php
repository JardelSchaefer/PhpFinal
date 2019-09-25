
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
      <script src="{{ url('/') }}/js/categoria.js" type="text/javascript"></script>
      <link rel="stylesheet" href="{{ url('/') }}/css/categoria.css">
    </head>
    <body>
    
        <h3>Editando categoria: {{$categoria->nomcat}}</h3>
        
        <form id="formEdit" onsubmit="return editarCategoria('{{route('categoria.update',$categoria->codcat)}}')" action="">
            @csrf
            @method('patch')
            
            <label for="nomcat">Nome da categoria</label><br/>
            <input type="text" name="nomcat" id="nomcat" value="{{$categoria->nomcat}}"/><br/><br/>
            <button id="btnEditar"type="submit">Editar</button>
        </form> 
        
        <div class="col-md-3" id="caixa-status" onclick="someDiv()">
            <div id="status"></div>
            
        </div>
    </body>
</html>
