@extends('site.layout')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="css\form.css"/>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <form method="post" id="fContato" action="mailto:contato@cursosemvideo.com" oninput="calc_total();">
                     <fieldset id="usuario">
                        <legend>Identificação do Usuário</legend>
                        <p><label for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"></p>

                        <p><label for="cSenha">Senha:</label><input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="8 digitos"></p>

                        <p><label for="cMail">E-mail:</label><input type="email" name="tEmail" id="cMail" size="20" maxlength="40"></p>

                        <fieldset id="sexo">
                            <legend>Sexo</legend>
                            <input type="radio" name="tSexo" id="cMasc"><label for="cMasc">Masculino</label><br/>

                            <input type="radio" name="tSexo" id="cFem"><label for="cFem">Feminino</label>

                        </fieldset>

                        <p><label for="cNasc">Data de Nascimento:</label><input type="date" name="tNasc" id="cNasc"></p>
                    </fieldset>

                    <fieldset id="endereco">
                        <legend>Endereço do Usuário</legend>

                        <p><label for="cRua">Logradouro:</label><input type="text" name="tRua" id="cRua" size="13" maxlength="80" placeholder="Rua,av,travesia..."></p>
                        
                        <p><label>Número:<input type="number" name="tNum" id="cNum" min="0" max="99999"></label></p>

                        <p><label for="cEst">Estado:</label><select name="eEst" id="cEst">

                            <optgroup label="Região Sudeste">
                                <option >Rio de Janeiro</option>
                                <option>São Paulo</option>
                                <option>Minas Gerais</option>
                            </optgroup>

                            <optgroup label="Região Nordeste">                      
                                <option>Paraná</option>
                                <option>Santa Catarina</option>
                            </select></p>
                            </optgroup>

                        <p><label for="cCid">Cidade: <input type="text" name="cCid" maxlength="40" size="20" placeholder="Sua Cidade"></label></p>
                       

                    </fieldset>


                    <fieldset id="pedido">
                        <legend>Quero um Google Glass</legend>

                        <p><input type="checkbox" name="tPed" id="cPed"><label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label></p>

                        <p><label for="cCor">Cor:</label><input type="color" name="tCor" id="cCor"></p>

                        <p><label for="cQtd">Quantidade:</label><input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0"></p>

                        <p><label for="cTot">Preço Total: R$ </label><input type="text" name="tTot" id="cTot" placeholder="Total a pagar" readonly></p>

                    </fieldset>


                  

                </form>


    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>

