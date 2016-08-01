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

<!-- Modal -->
<div class="container">
  <div class="row text-center">
    <a class="btn btn-success" href="#" title="Modal" data-toggle="modal" data-target="#modal">Abrir modal</a>
  </div>
</div>
<div id="modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
      <div class="row">
      <form action="https://formspree.io/joel.santos@madgo.com.br" method="POST">
      <input type="hidden" name="_next" value="/obrigado" />
      <input type="hidden" name="_subject" value="Quero mais informacoes!" />
      <input type="text" name="_gotcha" style="display:none" />
          <div class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="input-group--default">
              <input type="text" required name="Nome" placeholder="Nome">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="input-group--default">
              <input type="email" required name="E-mail" placeholder="E-mail">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="input-group--default">
              <textarea required name="Mensagem" placeholder="Mensagem"></textarea>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-4 col-md-offset-4">
            <input value="ENVIAR" type="submit" class="btn btn-custom1 btn-block">
          </div>
        </form>
      </div>
      </div>
      <div class="modal-footer">
        Aguarde nosso contato por e-mail.
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!-- /. Modal -->

<div class="container">
  <div class="row">
    <section class="jumbotron">
      <h1>Modal</h1>
      <h3>Requisitos:</h3>
      <p><strong>O código HTML dentro deste arquivo! entre o comentário "<*!-- Modal -->"</strong></p>
      <p><strong>O arquivo Stylus na pasta raiz <em>/src/assets/stylus/components/mod-modal.styl</em></strong></p>
      <p><strong>O framework bootstrap</strong><br>É bom que saiba como utilizar o bootstrap. <a href="http://getbootstrap.com/javascript/#modals" target="_blank">leia mais.</a></p>
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