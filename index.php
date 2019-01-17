<!--<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email   = $_POST["email"];
  $subject = "Mensagem recebida de " . $_POST["nome"] . ' (' . $email . ')';
  $message = $_POST["mensagem"];

  mail('espacoincluir.yoga@gmail.com', $subject, $message);
  header('Location: index.php?sent=1#contact');
}

$sivananda = null;
$random = rand(0, 1);

switch ($random) {
  case 0:
    $sivananda = "./images/sivananda1.jpg";
    break;

  case 1:
    $sivananda = "./images/sivananda2.jpg";
    break;
}

?>-->

<!DOCTYPE html>
<html>
<title>Espaço Incluir | Yoga · Meditação · Hatha · Kriya · Tantra · Sivananda </title>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111455827-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-111455827-1');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" content="O Espaço oferece Hatha Yoga, Kriya Yoga, Tantra Yoga, Sivananda Yoga, e atendimento com Liberação Miofascial Sistêmica">
  <meta name="keywords" content="Yoga, Hatha, Kriya, Tantra, Sivananda, Liberação, Miofascial, Fascial">
  <meta name="author" content="Matheus Moura">

  <link rel="stylesheet" href="./incluir.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Yoga Studio",
    "url": "http://www.espacoincluir.com",
    "name": "Espaço Incluir",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "51-99684-6634",
      "contactType": "Customer service"
    }
  }
  </script>
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-home, .bgimg-yoga, .bgimg-horarios, .bgimg-investimento, .bgimg-galeria, .bgimg-contato {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.bgimg-home {
    background-image: url('./images/home_bg.jpg');
    min-height: 100%;
}

.bgimg-yoga {
    background-image: url("./images/yoga_bg.jpg");
    min-height: 450px;
}

.bgimg-horarios {
    background-image: url("./images/horarios_bg.jpg");
    min-height: 450px;
}

.bgimg-investimento {
    background-image: url("./images/investimento_bg.jpg");
    min-height: 450px;
}

.bgimg-galeria {
    background-image: url("./images/galeria_bg.jpg");
    min-height: 450px;
}

.bgimg-contato {
    background-image: url("./images/contato_bg.jpg");
    min-height: 450px;
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
    <a href="#investimento" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-dollar"></i> VALORES</a>
    <!-- <a href="#galeria" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> GALERIA</a>-->
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTATO</a>
    <a href="https://www.facebook.com/espacoincluir/" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red" target="_blank">
      <i class="fa fa-facebook-official"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">SOBRE</a>
    <a href="#yoga" class="w3-bar-item w3-button" onclick="toggleFunction()">YOGA & MEDITAÇÃO</a>
    <a href="#horarios" class="w3-bar-item w3-button" onclick="toggleFunction()">HORÁRIOS</a>
    <a href="#investimento" class="w3-bar-item w3-button" onclick="toggleFunction()">VALORES</a>
    <!-- <a href="#galeria" class="w3-bar-item w3-button" onclick="toggleFunction()">GALERIA</a> -->
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTATO</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-home w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <div class="rounded-corner-x w3-center w3-padding-large w3-black w3-animate-opacity center-logo">
      <!--
      <span class="logo-espaco">ESPAÇO</span>
      <span class="logo-incluir">incluir</span>
      <span class="logo-footer">CENTRO DE YOGA E MEDITAÇÃO</span>-->

      <img src="./images/logo.png"/>
    </div>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">O ESPAÇO TAMBÉM É SEU</h3>
    <p class="w3-padding-large">
      O Espaço Incluir é um Centro de Yoga e Meditação, que oferece práticas de diversas disciplinas do Yoga
      - A iniciar pelo desenvolvimento pessoal, emocional e energégico, através da prática física de posturas e técnicas respiratórias,
      da introspecção e contemplação nas aulas de meditação, de estudos, de cantos de mantras e <i>kirtans</i> (canções devocionais),
      cursos e workshops, recitais e encontros.
      <br/>
      <br/>
      <span class="text-differentiated">O Espaço é receptivo a outros profissionais</span>, oferecendo suas salas para sub-locação e promovendo outras abordagens que orbitam o universo
      holístico de auto-desenvolvimento.
    </p>
    <div class="w3-row-padding w3-center w3-section">
      <div class="w3-col m3 color">
        <img src="./images/sobre_salao1.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sala principal">
      </div>
      <div class="w3-col m3 color">
        <img src="./images/sobre_salao2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sala principal">
      </div>
      <div class="w3-col m3 color">
        <img src="./images/sobre_frente.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Recepção e recursos">
      </div>
      <div class="w3-col m3 color">
        <img src="./images/sobre_fundos2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sala de atendimento">
      </div>
    </div>
</div>

<!--
<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-seis w3-section">
    <span class="w3-large"><a class="link texto-fundo-escuro" href="https://www.facebook.com/fenita.mahendra" title="Facebook: Fénita Mahendra" target="_blank">Fénita Mahendra</a></span><br>
    <a href="#yoga" class="link texto-fundo-escuro">Hatha Vinyasa</a> <span class="fa fa-plus-circle"></span> <a class="link texto-fundo-escuro" href="http://www.accessconsciousness.com">Barras de Access</a>
  </div>
  <div class="w3-seis w3-section">
    <span class="w3-large"><a class="link texto-fundo-escuro" href="https://www.facebook.com/anete.schroder" title="Facebook: Anete Schroder" target="_blank">Anete Schroder</a></span><br>
    <a href="#yoga" class="link texto-fundo-escuro">Hatha Yoga</a></span>
  </div>
  <div class="w3-seis w3-section">
    <span class="w3-large"><a class="link texto-fundo-escuro" href="https://www.facebook.com/adhyatman108" title="Facebook: Matheus DM" target="_blank">Matheus Moura</a></span><br>
    <a href="#yoga" class="link texto-fundo-escuro">Sivananda Yoga</a> <span class="fa fa-plus-circle"></span> <a class="link texto-fundo-escuro" href="http://www.rolfing.com.br/o-que-e-liberacao-miofascial/" title="Associação Brasileira de Rolfing®: Liberação Miofascial" target="_blank">Liberação Miofascial</a>
  </div>
  <div class="w3-seis w3-section">
    <span class="w3-large"><a class="link texto-fundo-escuro" href="https://www.facebook.com/nina.marsol.9" title="Facebook: Carolina Cesa" target="_blank">Carolina Cesa</a></span><br>
    <a href="#yoga" class="link texto-fundo-escuro">Meditação</a> <span class="fa fa-plus-circle"></span> <a class="link texto-fundo-escuro" href="#yoga">Kriya Yoga</a>
  </div>
  <div class="w3-seis w3-section">
    <span class="w3-large"><a class="link texto-fundo-escuro" href="https://www.facebook.com/crisfalk80" title="Facebook: Cristiane Falkemberg" target="_blank">Cristiane Falkemberg</a></span><br>
    <a href="#yoga" class="link texto-fundo-escuro">Tantra Yoga</a>
  </div>
  <div class="w3-seis w3-section">
    <span class="w3-large"><a class="link texto-fundo-escuro" href="https://www.facebook.com/Khayyamdesaraswati" title="Facebook: Khayyam Mirá" target="_blank">Khayyam Mirá</a></span><br>
    <a href="#yoga" class="link texto-fundo-escuro">Hatha Yoga</a> <span class="fa fa-plus-circle"></span> <a class="link texto-fundo-escuro" href="#yoga">Tantra Yoga</a>
  </div>
</div>
-->

<div class="bgimg-yoga w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">YOGA & MEDITAÇÃO</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="yoga">
  <h3 class="w3-center">AULAS DE YOGA E MEDITAÇÃO</h3>
  <p class="w3-padding-large">
    Da raiz sânscrita <em>yuj</em>, Yoga tem como tradução literal a palavra <em>união</em> - entre nossa percepção
    antes velada, a consciência una e altruísta.
    Originalmente apresentado ao Ocidente por almas de Luz, o Yoga prescreve poderosos métodos de crescimento e evolução pessoal.
    Flexíveis e inclusivos, todos os estílos podem ser vivenciados de forma suave, moderada ou mais desafiadora,
    dependendo da necessidade e capacidade do aluno ao longo da prática.
  </p>
  <div class="w3-row">
    <div class="w3-col m3 w3-center w3-padding-large">
      <span class="w3-large">KRIYA HATHA YOGA</span>
      <img src="./images/babaji.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" width="500" height="333">
      <p>
        A Kriya Hatha Yoga, um dos cinco ramos da <a class="link" href="http://www.babajiskriyayoga.net/portuguese/home.php" title="Kriya Yoga" target="_blank">Kriya Yoga</a> de <a class="link" href="https://josetadeuarantes.wordpress.com/2012/02/16/babaji-o-grande-avatar-de-nossa-era/" title="Wikipedia: Mahavatar Babaji" target="_blank">Babaji Nagaraj</a>, é a arte científica da mestria
        do corpo físico através de <i>asanas</i>, <i>bandhas</i>, <i>mudras</i>, <i>pranayamas</i> e meditação. Ao fortalecer chakras e eliminar
        bloqueios energéticos, o fluir da energia vital toma lugar, melhorando a imunidade biológica
        e mantendo o corpo livre de desordens funcionais.
      </p>
    </div>

    <div class="w3-col m3 w3-center w3-padding-large">
      <span class="w3-large">HATHA YOGA</span>
      <img src="./images/hathayoga.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" width="500" height="333">
      <p>
        Já amplamente difundido no Ocidente, o <a class="link" href="https://pt.wikipedia.org/wiki/Hata-ioga" title="Wikipedia: Hatha Yoga" target="_blank">Hatha Yoga</a>
        é a prática física harmônica entre posturas e respiração que promove desbloqueios psíquicos e energéticos,
        bem como beneficia a todas as esferas de exitência e manifestação: corpo, mente e espírito. Seus resultados são
        comprovados por todos que o experimentam, e é um grande aliado da prática meditativa.
      </p>
    </div>

    <div class="w3-col m3 w3-center w3-padding-large">
      <span class="w3-large">TANTRA YOGA</span>
      <img src="./images/tantra.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" width="500" height="333">
      <p>
        O <a class="link" href="https://pt.wikipedia.org/wiki/Tantra" title="Wikipedia: Tantra" target="_blank">Tantra</a> (<em>Tan: expansão, tra: liberação</em>), baseia-se no culto
        da união das forças ativa e masculina de <i>Shiva</i> com a passiva e feminina de <i>Shakti</i>. A aula de Tantra é composta
        de posturas, práticas respiratórias, relaxamento, meditação e automassagem. Além dos benefícios físicos
        e emocionais, o Tantra outorga autoconhecimento e reforça a autoestima.
      </p>
    </div>

    <div class="w3-col m3 w3-center w3-padding-large">
      <span class="w3-large">SIVANANDA YOGA</span>
      <img src="./images/sivananda2.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Swami Sivananda" width="500" height="333">
      <p>
        Reconhecido médico e sábio indiano do século XX, <a class="link" href="https://pt.wikipedia.org/wiki/Swami_Sivananda" title="Wikipedia: Swami Sivananda" target="_blank">Sivananda</a> propôs uma sequência de exercícios respiratórios,
        posturas e relaxamento combinados a partir das clássicas escrituras do <a class="link" href="https://pt.wikipedia.org/wiki/Hata-ioga" title="Wikipedia: Hatha Yoga" target="_blank">Hatha Yoga</a>.
        Prática que equilibra sistema nervoso simpático e parassimpático através da manutenção das posturas e
        profundo relaxamento ao final da aula.
      </p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="./images/nataraj.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" width="500" height="333">
    </div>

    <div class="w3-col m6 w3-left w3-padding-large">
      <span class="w3-large">MEDITAÇÃO</span>
      <p>
        <!-- *TEXTO PARA COLUNA PEQUENA* Meditar é desenvolver a compreensão intuitiva. A meditação é o coração de todas as práticas de Yoga, é algo natural e está latente em você.
        Comece a dar mais atenção à sua mente: a meditação é uma poderosa aliada na busca pelo conhecimento dos processos mentais. Sua prática traz
        maior equilíbrio emocional e sensação de paz interior.-->
        Um estado de consciência que pode ser compreendido com experiência direta e intuição. A meditação é o coração de todas as práticas de Yoga, é algo natural e está latente em você.
        Comece a dar mais atenção à sua mente: a meditação é uma poderosa aliada na busca pelo conhecimento dos processos mentais. Sua prática traz
        maior equilíbrio emocional e, como consequência, paz interior. Confira nossos grupos de meditação guiada!
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
      <span class="text-differentiated">Assim como você</span>, nossos horários de Yoga estão em constante crescimento e expansão.
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
        <div class="cell right-border" data-title="Segunda"></div>
        <div class="cell right-border" data-title="Terça">Hatha Yoga</div>
        <div class="cell right-border" data-title="Quarta"></div>
        <div class="cell right-border" data-title="Quinta">Hatha Yoga</div>
        <div class="cell right-border" data-title="Sexta"></div>
        <div class="cell" data-title="Sábado">Kriya Hatha Yoga</div>
      </div>

      <div class="row row-odd">
       <div class="cell right-border"><span class="fa fa-clock-o"></span> 17h30</div>
       <div class="cell right-border" data-title="Segunda"></div>
       <div class="cell right-border" data-title="Terça">Kriya Hatha Yoga</div>
       <div class="cell right-border" data-title="Quarta"></div>
       <div class="cell right-border" data-title="Quinta">Kriya Hatha Yoga</div>
       <div class="cell right-border" data-title="Sexta"></div>
       <div class="cell" data-title="Sábado"></div>
      </div>

      <div class="row">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 17h45</div>
        <div class="cell right-border" data-title="Segunda">Hatha Yoga</div>
        <div class="cell right-border" data-title="Terça"></div>
        <div class="cell right-border" data-title="Quarta">Hatha Yoga</div>
        <div class="cell right-border" data-title="Quinta"></div>
        <div class="cell right-border" data-title="Sexta"></div>
        <div class="cell" data-title="Sábado"></div>
      </div>

      <div class="row row-odd">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 18h</div>
        <div class="cell right-border" data-title="Segunda"></div>
        <div class="cell right-border" data-title="Terça"></div>
        <div class="cell right-border" data-title="Quarta"></div>
        <div class="cell right-border" data-title="Quinta"></div>
        <div class="cell right-border" data-title="Sexta">Kriya Hatha Yoga</div>
        <div class="cell" data-title="Sábado"></div>
      </div>

      <div class="row">
        <div class="cell right-border"><span class="fa fa-clock-o"></span> 19h30</div>
        <div class="cell right-border" data-title="Segunda">Hatha Vinyasa Yoga & Tantra Yoga</div>
        <div class="cell right-border" data-title="Terça"></div>
        <div class="cell right-border" data-title="Quarta">Hatha Vinyasa Yoga & Tantra Yoga</div>
        <div class="cell right-border" data-title="Quinta"></div>
        <div class="cell right-border" data-title="Sexta">Kriya Hatha Yoga</div>
        <div class="cell" data-title="Sábado"></div>
      </div>
    </div>
  </div>

</div>


<!-- ============================ INVESTIMENTO ============================= -->

<div class="bgimg-investimento w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">VALORES</span>
  </div>
</div>

<!-- Container (Horários Section) -->
<div class="w3-content w3-container w3-padding-64" id="investimento">
  <h3 class="w3-center">UM INVESTIMENTO EM VOCÊ</h3>
  <p class="w3-center w3-padding-large">
      <span class="text-differentiated">Planos diversos</span> que se acomodam ao seu tempo e ao que você se permite. Flexíveis, as aulas
      não são fixadas em dias específicos, mas a frequência do plano. Venha fazer uma aula experimental conosco!
  </p>

  <div class="wrapper">
    <div class="table default-cursor">
      <div class="row header w3-dark-grey">
        <div class="cell">
          Planos
        </div>
        <div class="cell">
          Frequência
        </div>
        <div class="cell">
          Investimento
        </div>
      </div>

      <div class="row">
        <div class="cell right-border"><span class="fa fa-battery-quarter"></span> Aspirante</div>
        <div class="cell right-border" data-title="">1x por semana</div>
        <div class="cell right-border" data-title="Aspirante">R$ 150</div>
      </div>

      <div class="row row-odd">
        <div class="cell right-border"><span class="fa fa-battery-half"></span> Sadhaka</div>
        <div class="cell right-border" data-title="">2x por semana</div>
        <div class="cell right-border" data-title="Sadhaka">R$ 200</div>
      </div>

      <div class="row">
        <div class="cell right-border"><span class="fa fa-battery-three-quarters"></span> Yoguin</div>
        <div class="cell right-border" data-title="">3x por semana</div>
        <div class="cell right-border" data-title="Yoguin">R$ 250</div>
      </div>

      <div class="row row-odd">
        <div class="cell right-border"><span class="fa fa-battery-full"></span> Siddha</div>
        <div class="cell right-border" data-title="">Livre</div>
        <div class="cell right-border" data-title="Siddha">R$ 280</div>
      </div>

      <div class="row">
        <div class="cell right-border"><span class="fa fa-star"></span> Aula avulsa</div>
        <div class="cell right-border" data-title=""></div>
        <div class="cell right-border" data-title="Siddha">R$ 40</div>
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

<!--
<div class="bgimg-galeria w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">GALERIA</span>
  </div>
</div>


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
      <img src="./images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Grupo">
    </div>

    <div class="w3-col m3 color">
      <img src="./images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Aula de Kriya Hatha Yoga">
    </div>

    <div class="w3-col m3 color">
      <img src="./images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Primeira iniciação em Kriya Yoga">
    </div>

    <div class="w3-col m3 color">
      <img src="./images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Aula de meditação">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3 color">
      <img src="./images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Concentração">
    </div>

    <div class="w3-col m3 color">
      <img src="./images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sala principal">
    </div>

    <div class="w3-col m3 color">
      <img src="./images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Primeira iniciação em Kriya Yoga">
    </div>

    <div class="w3-col m3 color">
      <img src="./images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ásanas">
    </div>
  </div>
  <button class="w3-button w3-padding-large w3-light-grey rounded-corner" style="margin-top:32px" onClick="window.open('https://www.instagram.com/espacoincluir.yoga/')">MAIS FOTOS</button>
</div>
-->

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
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Miguel Tostes, 650 · Porto Alegre · RS<br>
        <i class="fa fa-whatsapp fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> (51) 9 8146 4926&nbsp;&nbsp;|&nbsp;&nbsp;(51) 9 8182 0546<br>
        <i class="fa fa-envelope-o fa-fw w3-hover-text-black  w3-xlarge w3-margin-right"></i> espacoincluir.yoga@gmail.com<br>
        <i class="fa fa-facebook-official fa-fw w3-hover-text-black w3-hover-opacity w3-xlarge w3-margin-right" onClick="window.open('https://www.facebook.com/espacoincluir')"></i> <a href="https://www.facebook.com/espacoincluir">/espacoincluir</a><br>
        <i class="fa fa-instagram instagram fa-fw w3-hover-opacity w3-hover-text-black w3-xlarge w3-margin-right" onClick="window.open('https://www.instagram.com/espacoincluir.yoga/')"></i> <a href="https://www.instagram.com/espacoincluir.yoga/">espacoincluir.yoga</a>
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
          <i class="fa fa-paper-plane"></i> <?= $_GET["sent"] == '1' ? 'MENSAGEM ENVIADA' : 'ENVIAR' ?>
        </button>
      </form>
    </div>
  </div>
</div>

<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey rounded-corner"><i class="fa fa-arrow-up w3-margin-right"></i>INÍCIO</a>
  <div class="w3-xxlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity footer-fb" style="padding: 5px;" onClick="window.open('https://www.facebook.com/espacoincluir')"></i>
    <i class="fa fa-instagram instagram w3-hover-opacity footer-insta" style="padding: 5px;" onClick="window.open('https://www.instagram.com/espacoincluir.yoga/')"></i>
  </div>
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
        navbar.className = "incluir-nav-bar" + " w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace("w3-card w3-animate-top w3-white", "");
        navbar.className = navbar.className.replace("incluir-nav-bar", "w3-text-white");
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
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZu3ttx6JZhcVhx-kV3Hx4s4JXedwMlMM&callback=myMap"></script>
</body>
</html>
