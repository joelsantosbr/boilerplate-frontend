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

<div class="container">
  <div class="row">
    <section class="jumbotron">
      <h1>Menu</h1>
      <h3>Requisitos:</h3>
      <p><strong>O código HTML dentro deste arquivo! entre o comentário "<*!-- Menu -->"</strong></p>
      <p><strong>O arquivo Javascript na pasta raiz <em>/src/assets/js/mods/menu.js</em></strong></p>
      <p><strong>O arquivo Stylus na pasta raiz <em>/src/assets/stylus/components/mod-menu.styl</em></strong></p>
      <p><strong>O framework bootstrap</strong><br>É bom que saiba como utilizar o bootstrap. <a href="http://getbootstrap.com/components/#navbar" target="_blank">leia mais.</a></p>
      <p><strong>Repare na tag body os atributos <em>data-spy="scroll" data-target="#menu-wrapper" data-offset="64"</em></strong><br>Estes servem para funcionar o scrollspy do bootstrap. <a href="http://getbootstrap.com/javascript/#scrollspy" target="_blank">leia mais.</a></p>
      
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