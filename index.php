<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="recantos montanha candal">
    
    <meta content="Site Recantos montanha" name="description">
    <meta content="Recantos, Montanha, Candal, Turismo, Alojamento, Agro Turismo" name="keywords">
    

    <title>Recantos da Montanha</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
  </head>

  <body>
  <?php
  
  $dbhost = 'localhost';
		$dbuser = 'tonig_antos';
		$dbpass = 'Candal12345!';
		$dbname = 'tonigma15595com16353_rec';
		$conn = @mysql_connect($dbhost, $dbuser, $dbpass) or die ('Erro ao ligar ao MYSQL: ' . mysql_error());
		mysql_select_db($dbname);
		
		session_start();
		
		?>
  
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/all.js#xfbml=1&appId=146241575478935";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
  
   <div class="brand">Recantos da Montanha <img src="img/recantos_logo.png"></div>
    <div class="address-bar">Candal | S. Pedro do Sul <img src="img/mm.png"></div>

    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Recantos da Montanha</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aempresa.html">A empresa</a></li>
            <li><a href="casas.html">As casas|A localidade</a></li>
            <li><a href="fotos.html">Fotos</a></li>
            <li><a href="contact.html">Contactos|Reservas</a></li>
			<li><a href="coment.php">Comentários</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">

      <div class="row">
        <div class="box">
          <div class="col-lg-12 text-center">
            <div id="carousel-example-generic" class="carousel slide">
              <!-- Indicators -->
              <ol class="carousel-indicators hidden-xs">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
              <div class="item active">
                  <img class="img-responsive img-full" src="img/booking2.jpg" >
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="img/slide-1.jpg" >
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="img/slide-2.jpg" >
                </div>
               <div class="item">
                  <img class="img-responsive img-full" src="img/slide-3.jpg" >
                </div>
              </div>
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="icon-prev"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="icon-next"></span>
              </a>
            </div>
            <h1><small>Bem-vindo</small><br><span class="brand-name">a Candal</span>
            <hr class="tagline-divider"><small><strong>Bem estar e aconchego em ambiente puro e natural</strong></small></h1>
          </div>
        </div>
      </div>
      
      
          <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center"><strong>Vale a pena conhecer-nos</strong></h2>
            <hr>
            <img class="img-responsive img-border img-left" src="img/intro-natureza.jpg">
            <hr class="visible-xs">
             <p align="justify">A empresa <strong> recantos da montanha </strong> dedica-se ao turismo em espaço rural. Situa-se num local calmo onde há encontros de paz, harmonia e silêncio em plena natureza. </p>
  			<p> Aqui se descobrem e vivem momentos únicos de união com o meio envolvente, podendo recriar e desfrutar de atividades rurais perdidas nos tempos!  </p>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center"><strong>Atividades </strong> Museu do Caramulo</h2>
            <hr>
              <img class="img-responsive img-border img-left" src="img/caramulo.jpg">
            <hr class="visible-xs"> 
             <p align="justify"> É com prazer que lhe damos a conhecer o Programa de Actividades do Museu do Caramulo para o ano de 2017, que inclui os eventos e exposições, dando assim continuidade à programação desenvolvida nos últimos anos. Aproveite a estadia nas nossas casas e visite o museu do Caramulo.</p>
             <p>Para mais informações visite o link <a href="ficheiros/Actividades_C2017.pdf"> AQUI </a>ou contacte-nos!</p>
           <br>
           <br><br><br>
           <br>
           
  			
          </div>
        </div>
      </div>

      
        <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center"> ENTIDADE ADERENTE AO CENTRO DE ARBITRAGEM </h2>
            <hr>
              <img class="img-responsive img-border img-left" src="img/ca.jpg">
            <hr class="visible-xs"> 
             <p align="justify">Somos uma entidade aderente ao centro de arbitragem de resolução de conflitos de consumo. Para mais informações clique <a href="http://www.arbitragemdeconsumo.org/images/file/Modelo%20de%20Distico%20-%20Adesao%20Plena.pdf" target="_blank">AQUI</a></p>
           <br>
           <br><br><br>
           <br>
           
  			
          </div>
        </div>
      </div>
   
      <div class="row">
        <div class="box">
        
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center"> Comentários dos nossos clientes: </h2>
            <hr>
            
        </div>
        
		<?php
		
		$sql1 = "SELECT * FROM coment ORDER BY com_id DESC LIMIT 3";
						
		$rs1 = mysql_query($sql1) or die (mysql_error());
		
		while($row = mysql_fetch_array($rs1)) 
						  {
							$nome = $row['com_nome'];
							$com = $row['com_mensag'];
						  
						  
		?>
          <div class="col-md-4">
		  <h5><?php echo $nome; ?></h5>
		  <br>
		  <textarea readonly disabled name="comentario" class="form-control" rows="8" cols="50"> <?php echo $com; ?></textarea>
		  </div>
						  <?php }?>
		   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>

  
       
         <!-- Promoção
       
       <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center"><strong>PROMOÇÃO DE Inverno</strong></h2>
            <hr>
            
            <hr class="visible-xs"> 
             <p align="justify">Para pessoas ou grupos com estadias superiores a 3 dias <strong> fazemos 20% de desconto sobre o preço de tabela </strong> em todas as casas! </p>
             <p>Para estadias superiores a 5 dias oferecemos um dia. </p>
           
  			
          </div>
        </div>
      </div>
      
      
     Fim promoção-->
      
  


    </div><!-- /.container -->
    
    <footer>
      <div class="container">
        <div class="row">
         <br>
        <center>
        <img class="img-responsive" src="img/proder_logo.png">
   
          </center>
          <div class="col-lg-12 text-center">  
          <div style="padding-top:30px" class="fb-like" data-href="https://www.facebook.com/recantosmontanha" data-width="50" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>      
                 
            <p>Copyright &copy; Recantos da Montanha 2013   </p> 
                           
          </div>
          
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
	  // Activates the Carousel
	  $('.carousel').carousel({
		interval: 5000
	  })
	</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49230391-1', 'recantosdamontanha.pt');
  ga('send', 'pageview');

</script>

  </body>
</html>