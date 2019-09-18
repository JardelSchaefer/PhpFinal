
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="" rel="stylesheet">

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
        <a href="{{route('categoria.create')}}">Adicionar Categoria</a>
        
        <script>
            function eliminarCategoria(idForm, destino){
              
        dadosForm = $('#'+idForm).serialize();
                
                $.ajax({
                    
                    method:'post',
                    url:destino,
                    data: dadosForm,
                    dataType:'html',
                    success: function(data){
                        if (data == 'true'){
                            $('#linha'+idForm).remove();
                        }else{
                            alert('Deu errado');
                        }
                       
                    },
                    error: function(argument){
                       alert('Num sei'); 
                    }
                });
                return false;
            }
        
        </script>
        
        <!-- Listagem de categorias -->
        <table class="tabela-categoria"style="width: 50%;">
            <thead>
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
        
        <button onclick="location.href='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>
    
        <form onsubmit="return eliminarCategoria('del{{$c->codcat}}','{{route('categoria.destroy', $c->codcat)}}');" id="del{{$c->codcat}}" action="{{route('categoria.destroy', $c->codcat)}}" method="post">
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
