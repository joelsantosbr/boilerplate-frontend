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

<!-- Sistema de abas -->
<section id="mod-abas">
<div class="page-header">
  <h1>LOREM IPSUM DOLOR</h1>
</div>
<div class="container">
<div class="row">
  <div class="col-xs-12 col-lg-10 col-lg-offset-1 no-gutter">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active col-xs-2 col-xs-offset-1 col-md-2 col-md-offset-1">
        <a href="#tab-pane1" aria-controls="tab-panel" role="tab" data-toggle="tab">
          <span class="icon-peoples6"></span><br><strong class="hidden-xs">Lorem ipsum</strong>
        </a>
      </li>
      <li role="presentation" class="col-xs-2 col-md-2">
        <a href="#tab-pane2" aria-controls="tab-panel" role="tab" data-toggle="tab">
          <span class="icon-list1"></span><br><strong class="hidden-xs">Lorem ipsum</strong>
        </a>
      </li>
      <li role="presentation" class="col-xs-2 col-md-2">
        <a href="#tab-pane3" aria-controls="tab-panel" role="tab" data-toggle="tab">
          <span class="icon-shild1"></span><br><strong class="hidden-xs">Lorem ipsum</strong>
        </a>
      </li>
      <li role="presentation" class="col-xs-2 col-md-2">
        <a href="#tab-pane4" aria-controls="tab-panel" role="tab" data-toggle="tab">
          <span class="icon-recycle1"></span><br><strong class="hidden-xs">Lorem ipsum</strong>
        </a>
      </li>
      <li role="presentation" class="col-xs-2 col-md-2">
        <a href="#tab-pane5" aria-controls="tab-panel" role="tab" data-toggle="tab">
          <span class="icon-configuration1"></span><br><strong class="hidden-xs">Lorem ipsum</strong>
        </a>
      </li>
    </ul> <!-- /.nav-tabs -->
  </div> <!-- xs.12 -->
</div><!-- row -->
</div><!-- container -->
<hr>
<div class="wrapper-color">
<div class="container">
<div class="row">
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- CONTENT 1 -->
    <article role="tabpanel" class="tab-pane fade in active" id="tab-pane1">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-12 col-md-6 tab-content-wrapper">
            <div class="content">
              <h1>Lorem ipsum dolor</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam alias dolor porro ducimus necessitatibus repellendus beatae, voluptatem perspiciatis praesentium sapiente, voluptas qui numquam fugiat consequuntur, dicta, natus tempora iusto.</p>
            </div>   
          </div>
          <div class="col-xs-12 col-md-6 tab-content-image" style="background-color: red;">
          </div>
        </div>
      </div>
    </article>
    <!-- CONTENT 2 -->
    <article role="tabpanel" class="tab-pane fade" id="tab-pane2">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-12 col-md-6 tab-content-wrapper">
            <div class="content">
              <h1>Lorem ipsum dolor</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam alias dolor porro ducimus necessitatibus repellendus beatae, voluptatem perspiciatis praesentium sapiente, voluptas qui numquam fugiat consequuntur, dicta, natus tempora iusto.</p>
            </div>   
          </div>
          <div class="col-xs-12 col-md-6 tab-content-image" style="background-color: red;">
          </div>
        </div>
      </div>
    </article>

  </div><!-- /.tab-content -->
</div> <!-- /.row -->
</div><!-- container -->
</div>
</section>
<!-- ./ Sistema de abas -->

<div class="container">
  <div class="row">
    <section class="jumbotron">
      <h1>Sistema de abas</h1>
      <h3>Requisitos:</h3>
      <p><strong>O código HTML dentro deste arquivo! entre o comentário "<*!-- Sistema de abas -->"</strong></p>
      <p><strong>O arquivo Stylus na pasta raiz <em>/src/assets/stylus/components/mod-abas.styl</em></strong></p>
      <p><strong>O framework bootstrap</strong><br>É bom que saiba como utilizar o bootstrap. <a href="http://getbootstrap.com/javascript/#tabs" target="_blank">leia mais.</a></p>
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