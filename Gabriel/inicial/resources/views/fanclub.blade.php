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
        <div class="row white" id="cadfanclub">
           <div class="col s12">
             <h3><center>Cadastre-se na Lista de Amigos e Fans do Gorillaz</center></h3>
             <center><img src="img/gorillaz-promo.jpg" id="promofancub" alt="promogorillaz"/></center>
              <div class="container" id="vantagens">
                <h3>Junte-se e saiba a vantagens!</h3>

                <br>1) Saber antes de todo mundo as novidades da banda.
                <br>2) Participar de Promoções Exclusivas.
                <br>3) Receber Vídeos, Fotos e Informações Exclusivas
                <br>4) Ser o 1º a saber quando a banda estiver chegando na sua área!
                <br>5) Saber os segredos do seu integrante favorito!
                <br>6) Ser o primeiro à ouvir os novos sons!
                <br>7) Ficar por dentro do que está rolando na nossa Loja Virtual.
                <br>8) Saber mais sobre os ingressos para os shows.
                <p></p><p></p>
                <form>
                  <div class="row">
                    <div class ="input-field col s6">
                      <input type="text" id="nome">
                      <label for="nome">Nome</label>
                    </div>
                    <div class ="input-field col s6">
                      <input type="text" id="sobrenome">
                      <label for="sobrenome">Sobrenome</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class ="input-field col 12">
                      <input type="email" id="email">
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class ="input-field col 12">
                      <input type="text" id="pais">
                      <label for="pais">País</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class ="input-field col 12">
                      <input type="text" id="estado">
                      <label for="estado">Estado/Distrito/Provincia:</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class ="input-field col 12">
                      <input type="text" id="cidade">
                      <label for="cidade">Cidade</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <select>
                        <option value="" disabled selected>Escolha Aqui...</option>
                        <option value="1">Gorillaz (2001)</option>
                        <option value="2">Demon Days (2005)</option>
                        <option value="3">Plastic Beach (2010)</option>
                        <option value="4">The Fall (2011)</option>
                        <option value="5">Humanz (2017)</option>
                      </select>
                      <label>Qual o seu álbum favorito?</label>
                    </div>
                  </div>
                  Qual o seu integrante da banda favorito?
                  <p>
                    <input name="group1" type="radio" id="2d" />
                    <label for="test1">2-D (Vocais, teclado e guitarra rítmica)</label>
                  </p>
                  <p>
                    <input name="group1" type="radio" id="murdoc" />
                    <label for="test2">Murdoc Niccals (Baixos, lider da banda)</label>
                  </p>
                  <p>
                    <input name="group1" type="radio" id="noodle"  />
                    <label for="test3">Noodle (Guitarra solo, teclado e vocais de apoio)</label>
                  </p>
                  <p>
                    <input name="group1" type="radio" id="russel" />
                    <label for="test4">Russel Hobbs (Bateria, percussão e DJ)</label>
                  </p>
                  <button type="button" onclick="alert('Dados Enviados')">Enviar Cadastro</button>
                </form>
                <br><br>
              </div>
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
      <script> $(document).ready(function() {$('select').material_select();}); </script>

  </body>
</html>
