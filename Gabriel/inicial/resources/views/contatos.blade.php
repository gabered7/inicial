<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gorillaz Oficial - Fan Club</title>
    <!--Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <!-- Materialize CSS -->
    <link type="text/css" rel="stylesheet" href="{!! asset ('materialize/css/materialize.min.css')!!}" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="{!! asset ('css/tema.css')!!}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <div class="navbar-fixed">
      <nav class="grey darken-1 z-depht-0">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo"><a href="inicio.blade.php"><img src="img/gorillaz-logo.png" alt="Gorillaz Logo" class="responsive-img" id="logo"/></a></a>
          <a href="#" data-activates="menu-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down grey darken-2">
            <li class="active"><a href="historia.blade.php">Nossa (Ficcional) Historia</a></li>
            <li class="active"><a href="contatos.blade.php">Contatos</a></li>
            <li class="active"><a href="fanclub.blade.php">Fan Clube</a></li>
          </ul>
          <ul id="menu-mobile" class="side-nav">
            <li class="active"><a href="historia.blade.php">Nossa (Ficcional) Historia</a></li>
            <li class="active"><a href="contatos.blade.php">Contatos</a></li>
            <li class="active"><a href="fanclub.blade.php">Fan Clube</a></li>
          </ul>
        </div>
      </nav>
    </div>
      <section>
        <div class="row white" id="contatos">
          <div class="col s6" id="contrato"><div class="container">
            <br>
            <h5><center>Contrate a banda</center></h5>
            <br><br>
            GORILLAZ | gorillazoficial@elemess.com.br
            ELEMESS | contato@elemess.com.br | (11) 555-1234
            <br><br>
            <img src="/img/gorillaz.png" alt="abbey" height="400px"/>
          </div></div>
          <div class="col s6"><div class="container">
            <br>
            <h5><center>Mande uma mensagem para a gente!</center></h5>
            <form action="/enviar" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s6">
                  <input id="name" type="text" name="nome" class="validate" >
                  <label class="active" for="name">Nome</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="email" type="email" name="email" class="validate">
                  <label class="active" for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="tel" type="tel" name="telefone" class="validate">
                  <label class="active" for="tel">Telefone</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="text" type="text" name="assuntos" class="validate">
                  <label class="active" for="assunto">Assunto</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="mensagem" name="mensagem" class="materialize-textarea"></textarea>
                  <label for="mensagem">Mensagem</label>
                </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action" onclick="alert('Mensagem Enviada')">Submit
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </form>
        </div>
        </div>
      </section>
      <footer class="page-footer grey darken-2 z-depht-0">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Redes Sociais</h5>
                  <p class="grey-text text-lighten-4">Acompanhem a gente nas redes socias para saberem mais informações sobre nossos shows e turnês</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                      <h5 class="white-text">Contate a banda ou Faça parte do nosso fan clube</h5>
                      <ul>
                        <li><a class="grey-text text-lighten-3" href="contatos.blade.php">Contatos</a></li>
                        <li><a class="grey-text text-lighten-3" href="fanclub.blade.php">Fan Clube</a></li>
                      </ul>
                    </div>
            </div>
          </div>
          <div class="footer-copyright grey darken-4">
            <div class="container">
            © 1998 Copyright
            <a class="grey-text text-lighten-4 right" href="home.blade.php">Área do Administrador</a>
            </div>
          </div>
      </footer>
          <!-- jQuery -->
      <script type="text/javascript" src="{!! asset('https://code.jquery.com/jquery-3.2.1.min.js')!!}"></script>
          <!-- Materialize JS -->
      <script type="text/javascript" src="{!! asset('materialize/js/materialize.min.js')!!}"></script>
          <!-- Menu Mobile Incialization -->
      <script> $(".button-collapse").sideNav(); </script>
      <script> $('#textarea1').val('New Text');
                $('#textarea1').trigger('autoresize'); </script>
  </body>
</html>
