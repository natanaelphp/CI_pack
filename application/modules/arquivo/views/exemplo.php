<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Titulo</title>

        <link href="asset/bootstrap/css/bootstrap-g.css" rel="stylesheet" media="screen"> 
        <link href="asset/bootstrap/css/bootstrap-responsive-g.css" rel="stylesheet" media="screen">
        
        <link href="asset/bootstrap/css/google-bootstrap.css" rel="stylesheet" media="screen">

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="asset/bootstrap/js/bootstrap.js"></script>

        <script src="asset/bootstrap/js/g-js/bootstrap-popover.js"></script>
        <script src="asset/bootstrap/js/g-js/google-select.js"></script>
        <script src="asset/bootstrap/js/g-js/google-select-dropdown.js"></script>

    </head>
<body>

<style type='text/css'>
.span2, .span10, .span12,
.span3, .span9{
  border: 1px solid #f0f0f0;
  border-radius: 5px;
  padding: 5px;
  background-color: #f1f1f1;
}
body{
  margin: 15px;
  background-color: #fff;
}
.container-fluid{
  max-width: 1024px;
  margin-top: 10px;
  margin: auto;
}

 /* Carousel base class */
    
    .carousel .container {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
    }

    .carousel-control {
      background-color: transparent;
      border: 0;
      font-size: 120px;
      margin-top: 0;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }

    .carousel img {
      min-width: 100%;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 100px;
      margin-bottom: 100px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }




</style>
  

<div class="container-fluid">
  
    <?php /*
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
     
          <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
          <a class="brand" href="#">Home</a>

          <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
          <div class="nav-collapse collapse" >
            <!-- .nav, .navbar-search, .navbar-form, etc -->
             <ul class="nav">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li><a href="#">Link</a></li>
            
            <li class="dropdown">
                <a data-toggle="dropdown" href="#">Pagina mãe</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="#">Pagina filha</a></li>
                  <li><a href="#">Second sun</a></li>
                  <li><a href="#">OÔ vida rs!</a></li>
                </ul>
            </li>

          </ul>
          </div>
     
        </div>
      </div>
    </div>
    */?>

    <!--
    <div id="myCarousel" class="carousel slide">
     
      <div class="carousel-inner" >
        <div class="active item">
          <img src="http://stat-ass1.ses.com/5011465/SES_Web_Banner_businesses_1024_300_72dpi.jpg" alt="">
           <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://stat-ass3.ses.com/5011490/SES_Web_Banner_audience_1024_300_72dpi.jpg">
        </div>
        <div class="item">
          <img src="http://stat-ass0.ses.com/5011440/SES_Web_Banner_possibilities_1024_300_72dpi.jpg">
        </div>
      </div>

      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    -->    


    <ul class="nav nav-pills">
      <li class="active"><a href="#">Regular link</a></li>
      <li><a href="#">Regular link</a></li>
      <li><?php echo anchor('arquivo/ckeditor',' Editor');?></li>
      <li class="dropdown" id="menu1">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
          Dropdown
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
      <li><a href="#">Regular link</a></li>
      <li><a href="#">Regular link</a></li>
    </ul>

    <div class="hero-unit">
      <h1>Heading</h1>
      <p>
        <a class="btn btn-inverse btn-large">
          Learn more
        </a>
      </p>
    </div>

    <div class="row-fluid">
        <div class="span3">
            <?php echo br(10); ?>
        </div>

        <div class="span9">
          <div class="btn-group" style="float:right">
            <a class="btn btn-danger" href="#"><i class="icon-user icon-white"></i> Usuário</a>
            <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="icon-pencil"></i> Editar</a></li>
              <li><a href="#"><i class="icon-trash"></i> Apagar</a></li>
              <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="i"></i> Tornar Administrador</a></li>
            </ul>
          </div>


          <ul class="nav nav-pills">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
          <?php echo br(10); ?>



          <a class="btn" data-toggle="modal" href="#myModal" >Launch Modal</a>

          <div class="modal hide" id="myModal">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h3>Modal header</h3>
            </div>
            <div class="modal-body">
              <center>
                <form>
                  <input type='text'><br />
                  <input type='text'>
                </form>
              </center>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal">Fechar</a>
              <a href="#" class="btn btn-primary">Login</a>
            </div>
          </div>

        </div>
    </div>

    <!--
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
    -->
  </div>
</body>
</html>


