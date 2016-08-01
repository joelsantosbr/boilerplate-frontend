<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#ed1846">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#ed1846">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="author" content="Joel Santos ( MadGO" />
  <meta name="contact" content="joel.santos@madgo.com.br" />
	<title>Framework docs</title>
  <!-- Bootstrap -->
  <link href="../bower_components/animate.css/animate.min.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- My Style -->
  <link href="../dist/assets/css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<!-- Menu --> 
<body class="body" data-spy="scroll" data-target="#menu-wrapper" data-offset="64">
<header>
<nav id="mod-navbar" class="navbar navbar-default navbar-fixed-top">
  <div class="container navbar-wrapper">
    <div class="branding col-xs-8 col-sm-2 text-right">
      <a href="../index.php" title="Empower IT">
        <img src="../dist/assets/img/logo.png" alt="">
      </a>
    </div><!-- fim branding -->
    <div class="menu-collapse pull-right">
      <span class="glyphicon glyphicon-th"></span>
    </div>
    <div class="menu col-xs-9 col-sm-10">
      <div class="row">
        <div class="col-xs-12">
          <div id="menu-wrapper" class="menu__wrapper">
            <ul class="nav navbar-nav menu__list" id="menu-list">
              <li><a href="../index.php">Voltar a página principal</a></li>
            </ul>
          </div>
        </div> <!-- /.col-xs-12 -->
      </div><!-- fim row -->
    </div><!-- fim menu -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<!-- ./ Menu -->

<!-- ./ Cases -->
<section id="mod-cases">
<div class="page-header">
  <h1 class="" >CASES</h1>
</div>
<div class="container depoimentos-slider">
  <div class="row">
    <div class="col-xs-12 col-md-10">
      <div id="carousel-2" class="carousel bootstrap slide">
        <!-- Carousel items -->
        <div class="carousel-inner">

          <div class="active item">
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <figure class="peoples">
                  <img src="../dist/assets/img/case.jpg" alt="Case">
                  <figcaption class="statics">
                    <p class="title">Lorem ipsum</p>
                    <span class="status">Dolor it</span>
                  </figcaption>
                </figure>
              </div>
              <div class="col-xs-12 col-md-7 case">
                <img class="aspas aspas-1" src="../dist/assets/img/aspas1.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur sunt nostrum pariatur, animi nihil in a modi! Consequuntur incidunt modi, quasi at voluptatem inventore recusandae facere deserunt assumenda, vero molestias.</p>
                <img class="aspas aspas-2" src="../dist/assets/img/aspas2.png" alt="">
              </div>
            </div><!-- row -->
          </div><!-- item -->
          <div class="item">
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <figure class="peoples">
                  <img src="../dist/assets/img/case.jpg" alt="Case">
                  <figcaption class="statics">
                    <p class="title">Lorem ipsum</p>
                    <span class="status">Dolor it</span>
                  </figcaption>
                </figure>
              </div>
              <div class="col-xs-12 col-md-7 case">
                <img class="aspas aspas-1" src="../dist/assets/img/aspas1.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur sunt nostrum pariatur, animi nihil in a modi! Consequuntur incidunt modi, quasi at voluptatem inventore recusandae facere deserunt assumenda, vero molestias.</p>
                <img class="aspas aspas-2" src="../dist/assets/img/aspas2.png" alt="">
              </div>
            </div><!-- row -->
          </div><!-- item -->
        
        </div><!-- carousel-inner -->
      </div><!-- carousel-2 -->
    </div>
    <div class="col-xs-12 col-md-1 case " >
      <!-- Indicators -->
      <div class="indicators">
        <button class="controls next" data-target="#carousel-2" role="button" data-slide="next"></button>
        <button class="controls prev" data-target="#carousel-2" role="button" data-slide="prev"></button>
       </div>
    </div>
  </div><!-- row -->
</div><!-- container -->
</section>
<!-- ./ Cases -->

<div class="container">
  <div class="row">
    <section class="jumbotron">
      <h1>Cases</h1>
      <h3>Requisitos:</h3>
      <p><strong>O código HTML dentro deste arquivo! entre o comentário "<*!-- Cases -->"</strong></p>
      <p><strong>O arquivo Stylus na pasta raiz <em>/src/assets/stylus/components/mod-cases.styl</em></strong></p>
      <p><strong>Para usar múltiplos carousels <em>/src/assets/js/mods/mod-carousel.js</em></strong></p>
      <p><strong>O framework bootstrap</strong><br>É bom que saiba como utilizar o bootstrap. <a href="http://getbootstrap.com/javascript/#carousel" target="_blank">leia mais.</a></p>
    </section>
  </div>
</div>


<!-- Scripts -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../dist/assets/js/all.js"></script>
<!-- ./ Scripts -->
</body>
</html>