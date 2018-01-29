<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gorillaz Oficial - Inicio</title>
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
          <ul id="menu-mobile" class="side-nav ">
            <li class="active"><a href="historia.blade.php">Nossa (Ficcional) Historia</a></li>
            <li class="active"><a href="contatos.blade.php">Contatos</a></li>
            <li class="active"><a href="fanclub.blade.php">Fan Clube</a></li>
          </ul>
        </div>
      </nav>
    </div>
      <section>
          <div class="row" id="intro">
            <div class="col s6 grey lighter-1"><div class="container">
              <h3> A História da Banda </h3>
              Damon Albarn e Jamie Hewlett durante várias entrevistas,
              documentários, extras e através do livro "Rise of the Ogre"
              contaram a história fictícia do Gorillaz e de seus integrantes,
              separando-a em fases e cada fase correspondendo a um CD.
              A história de Gorillaz está envolvida com os mistérios através do
              Kong Studios, comprado por Murdoc e que recebe o nome de seu construtor.
              O edifício tem mais de 50 salas, um estúdio de gravação, um cinema,
              vários banheiros e portas secretas.
            </div></div>
            <div class="col s6 grey lighter-3"><img src="img/kong-studios.jpg" id="imgintro" class="responsive-img" alt="GorillazApres">
            <br>Noodle na entrada do Kong Studios, uma localização privilegiada.
            </div>
          </div>
          <div class="row" id="integra">
            <div class="col s12" id="phase1">
              <h5>Fase Um: Celebrity Takedown (1998-2003)</h5>
              Corresponde ao período em que Murdoc Niccals atingiu Stuart Pot (também conhecido como 2-D, Stu-Pot ou Pot)
              na cabeça, fazendo ele possuir hifema no olho direito e adquirindo paralisia cerebral. Murdoc foi sentenciado
              a trabalhos comunitários e cuidar de 2-D durante 10 horas semanais. Em um sábado, Murdoc estava com 2-D em seu
              automóvel. O baixista queria impressionar algumas garotas no local e uma delas levantou sua blusa, fazendo Murdoc
              não prestar atenção no caminho e que acabou batendo em um 'pilar', jogando 2-D contra o vidro para o chão e
              fazendo o seu olho esquerdo também ficar fraturado, mas o fez "acordar" de seu estado vegetativo. Com 2-D
              consciente e ativo, Murdoc acabou descobrindo em 2-D um grande talento para a música. Em seguida, Murdoc
              encontrou Russel Hobbs, um norte-americano que viu todos os seus amigos morrerem em uma briga de gangues
              no Brooklin, e logo em seguida teve o espírito de todos eles aprisionados no seu corpo, ganhando talentos
              musicais incomparáveis. Murdoc inicialmente o raptou, pois Russel nem estava reagindo a qualquer coisa devido
              ao medo. Porém ainda faltava um guitarrista, que era a namorada de 2-D, Paula Cracker. Ela havia o conhecido
              quando foi em sua loja à procura de alguma guitarra, e ficou sabendo quando ele se recuperou do acidente,
              então procurou 2-D novamente e começaram a sair, por saber que ele e Murdoc estavam tentando formar uma banda.
              Ela obviamente o quis para apenas entrar na banda, pois ela foi pega com Murdoc no banheiro por Russel e como
              um ato de grande deslealdade vindo de Murdoc, Russel quebrou o nariz de Murdoc mais de cinco vezes, dando-nos
              o total de oito fraturas que ele possui hoje. E acabou resultando na saída dela da banda. No dia seguinte ao
              anúncio, o grupo recebeu na porta do Kong Studios uma caixa enviada do Japão via Fedex e de dentro dela saiu
              uma pequena japonesa, com amnésia que só sabia falar: "Noodle". Foi batizada de Noodle e se tornou a
              guitarrista do grupo e esse foi o início do Gorillaz. Depois do sucesso repentino, o grupo se separou devido
              os integrantes quererem um tempo para "respirar". Boatos surgiram de que eles estavam gravando um filme,
              mas Murdoc brigou com todos os diretores e não deu certo. Nesse meio tempo, muitos mistérios começaram a
              rondar o Kong Studios, como aparição de fantasmas e demônios ao seu redor.
            <</div>
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
  </body>
</html>
