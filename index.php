<!--<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email   = $_POST["email"];
  $subject = "Mensagem recebida de " . $_POST["nome"] . ' (' . $email . ')';
  $message = $_POST["mensagem"];

  mail('contato@espacoincluir.com', $subject, $message);
  header('Location: index.php?sent=1#contact');
}

$quote  = null;
$random = rand(0, 2);

switch ($random) {
  case 0:
    $quote = "<cite>Yoga é o aquietamento das ondas mentais.</cite>
              <footer><cite>— Patanjali</cite></footer>";
    break;

  case 1:
    $quote = "<cite>Meditar é recordar que não somos um corpo mortal, mas uma alma imortal.</cite>
              <footer><cite>— Yogananda</cite></footer>";
    break;

  case 2:
    $quote = "<cite>Todas as faculdades estão latentes em você. Desenvolva-as.</cite>
              <footer><cite>— Sivananda</cite></footer>";
    break;
}

?>-->

<!DOCTYPE html>
<html>
<title>Incluir | Espaço de Desenvolvimento Humano</title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./incluir.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-home, .bgimg-yoga, .bgimg-horarios, .bgimg-galeria, .bgimg-contato {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.bgimg-home {
    background-image: url('./w3images/home_bg.jpg');
    min-height: 100%;
}

.bgimg-yoga {
    background-image: url("./w3images/yoga_bg.jpg");
    min-height: 400px;
}

.bgimg-horarios {
    background-image: url("./w3images/horarios_bg.jpg");
    min-height: 400px;
}

.bgimg-galeria {
    background-image: url("./w3images/galeria_bg.jpg");
    min-height: 400px;
}

.bgimg-contato {
    background-image: url("./w3images/contato_bg.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-text-white" id="myNavbar">

    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>

    <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i> HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-lightbulb-o"></i> SOBRE</a>
    <a href="#yoga" class="w3-bar-item w3-button w3-hide-small">ॐ YOGA & MEDITAÇÃO</a>
    <a href="#horarios" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-clock-o"></i> HORÁRIOS</a>
    <a href="#galeria" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> GALERIA</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTATO</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">SOBRE</a>
    <a href="#yoga" class="w3-bar-item w3-button" onclick="toggleFunction()">YOGA & MEDITAÇÃO</a>
    <a href="#horarios" class="w3-bar-item w3-button" onclick="toggleFunction()">HORÁRIOS</a>
    <a href="#galeria" class="w3-bar-item w3-button" onclick="toggleFunction()">GALERIA</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTATO</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-home w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <div class="rounded-corner-x w3-center w3-padding-large w3-black w3-animate-opacity center-logo">
      <span class="logo-espaco">ESPAÇO</span>
      <span class="logo-incluir">incluir</span>
      <!-- <span class="logo-footer">ESPAÇO DE DESENVOLVIMENTO HUMANO</span> -->
    </div>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">O ESPAÇO</h3>
  <p>
     Somos seres em evolução na diversidade da vida.
     Nossos processos evolutivos passam pelo despertar e busca do desenvolvimento pessoal.
     Nessa busca, muitas vezes, necessitamos de apoio e de um caminho orientador.
     O Espaço Incluir oferece acolhida afetuosa, escuta significativa e caminhos tera pêuticos transformadores.
     Nosso maior valor é a inclusão de todas as pessoas, cada qual com sua particular história e processos internos físicos, energéticos,  mentais, emocionais e espirituais.
     Nosso maior propósito é unir olhares e caminhos em torno de um objetivo comum, o desenvolvimento evolutivo pessoal e coletivo.
     Nossa maior missão é ajudar a desenvolver em cada ser humano, que aceita o chamado e chega até nós, um olhar transformador diante da vida, co-criando sua própria realidade.
     Todos os caminhos são importantes e significam para alguém em algum momento de sua história.
     Nem todos os caminhos são para sempre, nem todos os caminhos significam igualmente para todos.
     Mas todos precisam de um caminho em movimento.<br><br><br><br><br>
   </p>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Foto+</span><br>
    Kriya
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Foto+</span><br>
    Tantra
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Foto+</span><br>
    Reiki
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Foto+</span><br>
    Coaching
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Foto+</span><br>
    Psicologia
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Foto+</span><br>
    Sivananda
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Foto+</span><br>
    Terapia Sistêmica
  </div>
</div>

<div class="bgimg-yoga w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">YOGA & MEDITAÇÃO</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="yoga">
  <h3 class="w3-center">
    <blockquote id="citacao">
      <?= $quote; ?>
    </blockquote>
  </h3>
  <p class="w3-padding-large">
    Da raiz sânscrita <em>yuj</em>, Yoga tem como tradução literal a palavra <em>união</em> - entre nossa percepção
    antes velada, a consciência una e altruísta.
    Originalmente apresentado ao Ocidente por almas de Luz, o Yoga prescreve poderosos métodos de crescimento e evolução pessoal.
    Flexíveis e inclusivos, todos os estílos podem ser vivenciados de forma suave, moderada ou mais desafiadora,
    dependendo da necessidade e capacidade do aluno ao longo da prática.
  </p>
  <div class="w3-row">

    <div class="w3-col m3 w3-center w3-padding-large">
      <span><b>KRIYA YOGA</b></span>
      <img src="./w3images/babaji.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" width="500" height="333">
      <p>
        A Kriya Hatha Yoga, um dos cinco ramos da <a href="http://www.babajiskriyayoga.net/portuguese/home.php" title="Kriya Yoga" target="_blank">Kriya Yoga</a> de <a href="https://josetadeuarantes.wordpress.com/2012/02/16/babaji-o-grande-avatar-de-nossa-era/" title="Wikipedia: Mahavatar Babaji" target="_blank">Babaji Nagaraj</a>, é a arte científica da mestria
        do corpo físico através de asanas, bandhas, mudras, pranayamas e meditação. Ao fortalecer chakras e eliminar
        bloqueios energéticos, o fluir da energia vital toma lugar, melhorando a imunidade biológica
        e mantendo o corpo livre de desordens funcionais.
      </p>
    </div>

    <div class="w3-col m3 w3-center w3-padding-large">
      <span><b>TANTRA YOGA</b></span>
      <img src="./w3images/tantra.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" width="500" height="333">
      <p>
        O <a href="https://pt.wikipedia.org/wiki/Tantra" title="Wikipedia: Tantra" target="_blank">Tantra</a> (<em>Tan: expansão, tra: liberação</em>), baseia-se no culto
        da união das forças ativa e masculina de Shiva com a passiva e feminina de Shakti. A aula de Tantra é composta
        de posturas, práticas respiratórias, relaxamento, meditação e automassagem. Além dos benefícios físicos
        e emocionais, o Tantra outorga autoconhecimento, reforça autoestima e força de vontade.
      </p>
    </div>

    <div class="w3-col m3 w3-center w3-padding-large">
      <span><b>HATHA YOGA</b></span>
      <img src="./w3images/nataraj.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" width="500" height="333">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint.
      </p>
    </div>

    <div class="w3-col m3 w3-center w3-padding-large">
      <span><b>MÉTODO SIVANANDA</b></span>
      <img src="./w3images/sivananda.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Swami Sivananda" width="500" height="333">
      <p>
        Reconhecido médico e sábio indiano do século XX, <a href="https://pt.wikipedia.org/wiki/Swami_Sivananda" title="Wikipedia: Swami Sivananda" target="_blank">Sivananda</a> propôs uma sequência de exercícios respiratórios,
        posturas e relaxamento combinados a partir das clássicas escrituras do Hatha Yoga.
        Prática que equilibra sistema nervoso simpático e parassimpático através da precisão nas posturas e
        profundo relaxamento ao fim da aula.
      </p>
    </div>

  </div>
</div>

<!-- ============================ HORÁRIOS ============================= -->

<div class="bgimg-horarios w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">HORÁRIOS</span>
  </div>
</div>

<!-- Container (Horários Section) -->
<div class="w3-content w3-container w3-padding-64" id="horarios">
  <h3 class="w3-center">TODO DIA É DIA</h3>
  <p class="w3-center w3-padding-large">
      <span class="paragraph_begin">Assim como você</span>, nossos horários de Yoga estão em constante crescimento e expansão.
      Ao reconhecer também a individualidade, preparamos uma semana que ofereça práticas e métodos diversos,
      para que você experimente e escolha o que mais combina com o seu momento e busca pessoal.
  </p>

  <div class="wrapper">
    <div class="table default-cursor">
      <div class="row header w3-dark-grey">
        <div class="cell"></div>
        <div class="cell">
          Segunda
        </div>
        <div class="cell">
          Terça
        </div>
        <div class="cell">
          Quarta
        </div>
        <div class="cell">
          Quinta
        </div>
        <div class="cell">
          Sexta
        </div>
        <div class="cell" style="width: 12%">
          Sábado
        </div>
      </div>

      <div class="row">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 8h</div>
        <div class="cell right-border" data-title="Segunda" title="Kriya Yoga segunda-feira às 8h">Kriya Yoga</div>
        <div class="cell right-border" data-title="Terça"></div>
        <div class="cell right-border" data-title="Quarta" title="Kriya Yoga quarta-feira às 8h">Kriya Yoga</div>
        <div class="cell right-border" data-title="Quinta"></div>
        <div class="cell right-border" data-title="Sexta"></div>
        <div class="cell" data-title="Sábado"></div>
      </div>

      <div class="row row-odd">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 10h</div>
        <div class="cell right-border" data-title="Segunda" title="Meditação segunda-feira às 10h">Meditação</div>
        <div class="cell right-border" data-title="Terça"></div>
        <div class="cell right-border" data-title="Quarta" title="Meditação quarta-feira às 10h">Meditação</div>
        <div class="cell right-border" data-title="Quinta"></div>
        <div class="cell right-border" data-title="Sexta"></div>
        <div class="cell" data-title="Sábado" title="Sivananda Yoga sábado às 10h">Sivananda Yoga</div>
      </div>

      <div class="row">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 12h</div>
        <div class="cell right-border" data-title="Segunda"></div>
        <div class="cell right-border" data-title="Terça" title="Hatha Yoga terça-feira às 12h">Hatha Yoga</div>
        <div class="cell right-border" data-title="Quarta"></div>
        <div class="cell right-border" data-title="Quinta" title="Hatha Yoga quinta-feira às 12h">Hatha Yoga</div>
        <div class="cell right-border" data-title="Sexta"></div>
        <div class="cell" data-title="Sábado"></div>
      </div>

      <div class="row row-odd">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 15h</div>
        <div class="cell right-border" data-title="Segunda"></div>
        <div class="cell right-border" data-title="Terça"></div>
        <div class="cell right-border" data-title="Quarta"></div>
        <div class="cell right-border" data-title="Quinta"></div>
        <div class="cell right-border" data-title="Sexta" title="Hatha Yoga sexta-feira às 15h">Hatha Yoga</div>
        <div class="cell" data-title="Sábado" title="Yoga kids sábado às 15h">Yoga kids</div>
      </div>

      <div class="row">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 15:30</div>
        <div class="cell right-border" data-title="Segunda"></div>
        <div class="cell right-border" data-title="Terça" title="Tantra Yoga terça-feira às 15h30">Tantra Yoga</div>
        <div class="cell right-border" data-title="Quarta"></div>
        <div class="cell right-border" data-title="Quinta" title="Tantra Yoga quinta-feira às 15h30">Tantra Yoga</div>
        <div class="cell right-border" data-title="Sexta"></div>
        <div class="cell" data-title="Sábado"></div>
      </div>

      <div class="row row-odd">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 16:30</div>
        <div class="cell right-border" data-title="Segunda"></div>
        <div class="cell right-border" data-title="Terça"></div>
        <div class="cell right-border" data-title="Quarta"></div>
        <div class="cell right-border" data-title="Quinta"></div>
        <div class="cell right-border" data-title="Sexta"></div>
        <div class="cell" data-title="Sábado" title="Kriya Yoga sábado às 16h30">Kriya Yoga</div>
      </div>

      <div class="row">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 18:30</div>
        <div class="cell right-border" data-title="Segunda"></div>
        <div class="cell right-border" data-title="Terça" title="Meditação terça-feira às 18h30">Meditação</div>
        <div class="cell right-border" data-title="Quarta"></div>
        <div class="cell right-border" data-title="Quinta" title="Meditação quinta-feira às 18h30">Meditação</div>
        <div class="cell right-border" data-title="Sexta"></div>
        <div class="cell" data-title="Sábado"></div>
      </div>

      <div class="row row-odd">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 19:30</div>
        <div class="cell right-border" data-title="Segunda"></div>
        <div class="cell right-border" data-title="Terça" title="Kriya Yoga terça-feira às 19h30">Kriya Yoga</div>
        <div class="cell right-border" data-title="Quarta"></div>
        <div class="cell right-border" data-title="Quinta" title="Kriya Yoga quinta-feira às 19h30">Kriya Yoga</div>
        <div class="cell right-border" data-title="Sexta"></div>
        <div class="cell" data-title="Sábado"></div>
      </div>
    </div>
    </div>

</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal" onclick="this.style.display='none'" style="background-color: rgba(0, 0, 0, .9);">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-32" style="background-color: rgba(0, 0, 0, 1);">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large" style="text-align:center; color:white;"></p>
  </div>
</div>


<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-galeria w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">GALERIA</span>
  </div>
</div>

<!-- Container (Galeria Section) -->
<div class="w3-center w3-content w3-container w3-padding-64" id="galeria">
  <h3 class="w3-center">A CASA EM MOVIMENTO</h3>
  <p class="w3-center">
    <em>
      Do Kriya ao Tantra, do Hatha a Meditação.<br>
      O espaço define-se por suas práticas diárias e pela energia daqueles que ali se transformam.
    </em>
  </p>
  <br>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3 color">
      <img src="./w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Grupo">
    </div>

    <div class="w3-col m3 color">
      <img src="./w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
    </div>

    <div class="w3-col m3 color">
      <img src="./w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
    </div>

    <div class="w3-col m3 color">
      <img src="./w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Aula de meditação">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3 color">
      <img src="./w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sala principal">
    </div>

    <div class="w3-col m3 color">
      <img src="./w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Aula de Kriya Yoga">
    </div>

    <div class="w3-col m3 color">
      <img src="./w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3 color">
      <img src="./w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>
  </div>
  <button class="w3-button w3-padding-large w3-light-grey rounded-corner" style="margin-top:32px">Mais fotos</button>
</div>

<!-- Fourth Parallax Image with Portfolio Text -->
<div class="bgimg-contato w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTATO</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">ONDE ESTAMOS</h3>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m6 w3-container">
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m6 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Miguel Tostes, 648 · Porto Alegre · RS<br>
        <i class="fa fa-whatsapp fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> (51) 9 81 89 47 75<br>
        <i class="fa fa-envelope-o fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> contato@espacoincluir.com.br<br>
      </div>
      <p>Apareça para uma <i class="fa fa-coffee"></i> de chá, ou envie sua mensagem:</p>
      <form method="POST" action="index.php">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Nome" required name="nome">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email ou celular" required name="email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Mensagem" required name="mensagem">
        <button class="w3-button w3-light-grey rounded-corner w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> <?= $_GET["sent"] == '1' ? 'Mensagem enviada' : 'Enviar' ?>
        </button>
      </form>
    </div>
  </div>
</div>

<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey rounded-corner"><i class="fa fa-arrow-up w3-margin-right"></i>Início</a>
  <div class="w3-xxlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity footer-fb" style="padding: 5px;" onClick="window.open('https://www.facebook.com/espacoincluir')"></i>
    <i class="fa fa-instagram instagram w3-hover-opacity footer-insta" style="padding: 5px;"></i>
  </div>
  <span>Design e desenvolvimento por <a href="https://www.facebook.com/adhyatman108" title="Matheus Moura" target="_blank">Matheus Moura</a></span>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter = new google.maps.LatLng(-30.0338821, -51.2057247);
  var mapOptions = {
    center: myCenter,
    zoom: 15,
    scrollwheel: false,
    draggable: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById("googleMap"),mapOptions);
  var marker = new google.maps.Marker({position: myCenter});
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-text-green-incluir" + " w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace("w3-card w3-animate-top w3-white", "");
        navbar.className = navbar.className.replace("w3-text-green-incluir", "w3-text-white");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZu3ttx6JZhcVhx-kV3Hx4s4JXedwMlMM&callback=myMap"></script>
</body>
</html>
