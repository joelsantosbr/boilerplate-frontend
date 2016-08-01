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

<div class="jumbotron text-center">
  <h1>Modelo 1</h1>
</div>
<!-- Form - Model 1 -->
<section id="form-mod-1">
  <div class="container-fluid no-gutter">
    <div class="row-fluid">
      <div id="contact-box-1" class="col-xs-12 col-md-6 form no-gutter">
        <div class="row-fluid">
          <div id="box-content-1" class="col-xs-12 col-md-8 col-md-offset-2 " >
            <div class="page-header">
              <h1>Receba mais informações</h1>
            </div>
          <form action="https://formspree.io/joel.santos@madgo.com.br" method="POST">
          <input type="hidden" name="_next" value="/obrigado" />
          <input type="hidden" name="_subject" value="Receber mais informacoes!" />
          <input type="text" name="_gotcha" style="display:none" />
              <div class="col-xs-12">
                <div class="input-group--default">
                  <input type="text" name="Nome" placeholder="Nome completo">
                </div>
                <div class="input-group--default">
                  <input type="tel" name="Telefone" placeholder="Telefone">
                </div>
                <div class="input-group--default">
                  <input type="email" name="E-mail" placeholder="E-mail">
                </div>
                <!-- <div class="input-group--default--checkbox">
                  <input type="checkbox" id="online" name="Modalidade" value="Online"> <label for="online">Online</label>
                  <input type="checkbox" id="onsite" name="Modalidade" value="On-site"> <label for="onsite">On-site</label>
                  <input type="checkbox" id="presencial" name="Modalidade" value="Presencial"> 
                  <label for="presencial">Presencial</label>
                </div> -->
                <div class="input-group--default">
                  <textarea name="Mensagem" placeholder="Obs:"></textarea>
                </div>
                <div class="submit">
                  <input type="submit" value="ENVIAR" class="btn btn-custom1">
                </div>
              </div>
            </form>
          </div>
        </div><!-- row -->
      </div><!-- col-xs-12 -->

      <div id="contact-box-2" class="col-xs-12 col-md-6 form-page no-gutter">
        <div class="row-fluid">
          <div id="box-content-2" class="col-xs-12 col-md-8 col-md-offset-2 text-center " >
            <div class="page-header header-material">
              <h1>Conheça o material</h1>
              <p>Compartilhe seu nome e e-mail conosco e faca download de um pequena amostra de nossa apostila de mais de 100 páginas.</p>
            </div>
          <form action="https://formspree.io/joel.santos@madgo.com.br" method="POST">
          <input type="hidden" name="_next" value="/obrigado" />
          <input type="hidden" name="_subject" value="Download do material!" />
          <input type="text" name="_gotcha" style="display:none" />
              <div class="col-xs-12">
                <div class="input-group--default">
                  <input type="text" name="Nome" placeholder="Nome completo">
                </div>
                <div class="input-group--default">
                  <input type="email" name="E-mail" placeholder="E-mail">
                </div>
                <div class="submit">
                  <button type="submit" class="btn btn-custom1">DOWNLOAD DO MATERIAL <span class="icon-arrowdown1"></span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div><!-- row-fluid -->
  </div><!-- container -->
</section>
<!-- ./ Form - Model 1 -->

<div class="container">
  <div class="row">
    <section class="jumbotron">
      <h1>Form - Modelo 1</h1>
      <h3>Requisitos:</h3>
      <p><strong>O código HTML dentro deste arquivo! entre o comentário "<*!-- Form - Model 1 -->"</strong></p>
      <p><strong>O arquivo Javascript na pasta raiz <em>/src/assets/js/mods/forms-mod-1.js</em></strong></p>
      <p><strong>O arquivo Stylus na pasta raiz <em>/src/assets/stylus/components/mod-forms-1.styl</em></strong></p>
    </section>
  </div>
</div>

<div class="jumbotron text-center">
  <h1>Modelo 2</h1>
</div>

<!-- Form - Model 2 -->
<section id="form-mod-2">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="page-header">
          <strong>FALE CONOSCO</strong>
        </div>
        <div class="form">
          <form action="#" method="post">
            <div class="row">
            <div class="col-xs-12">
              <div class="col-xs-12 input-group">
                <input type="text" required placeholder="Nome" name="Nome">
              </div>
              <div class="col-xs-12 input-group">
                <input type="email" required placeholder="E-mail" name="Email">
              </div>
              <div class="col-xs-12 input-group">
                <input type="tel" required placeholder="Telefone" name="Telefone">
              </div>
              <div class="col-xs-12 input-group">
                <input type="text" placeholder="Assunto" name="Assunto">
              </div>
              <div class="col-xs-12 input-group">
                <textarea name="Mensagem" required placeholder="Mensagem"></textarea>
              </div>
              <input type="submit" class="btn btn-custom1 btn-block" value="ENVIAR">
            </div></div>
          </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 contatos">
        <div class="page-header">
          <strong>CONTATOS</strong>
        </div>
        <ul>
          <li>
          <span class="icon-marker1"></span>
          Av. General Ataliba Leonel, 1223 – Cj 33 e 34 – Santana, São Paulo, SP</li>
          <li><span class="glyphicon glyphicon-earphone"></span> (11) 2897-3134</li>
          <li><span class="icon-messagebox1"></span> contato@empowerit.com.br</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <figure>
          <img src="./assets/img/empowerit-2.png" alt="Empower IT">
        </figure>
      </div>
    </div>
  </div>
</section>
<!-- ./ Form - Model 2 -->

<div class="container">
  <div class="row">
    <section class="jumbotron">
      <h1>Form - Modelo 2</h1>
      <h3>Requisitos:</h3>
      <p><strong>O código HTML dentro deste arquivo! entre o comentário "<*!-- Form - Model 2 -->"</strong></p>
      <p><strong>O arquivo Stylus na pasta raiz <em>/src/assets/stylus/components/mod-forms-2.styl</em></strong></p>
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