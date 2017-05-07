<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Projeto Web Valemobi</title>
			
			<!-- CSS Bootstrap min -->
			<link href="/valemobi/plugin/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
				
			<!--Jquery -->
			<script type="text/javascript" src="/valemobi/plugin/js/jquery-3.2.1.js"> </script>
								
			<!--JavaScript Bootstrap -->
			<script type="text/javascript" src="/valemobi/plugin/Bootstrap/js/bootstrap.js"> </script> 
			
			<!--CARROSEL CSS-->
			<link href="/valemobi/plugin/Bootstrap/css/carousel.css" rel="stylesheet">
												
			<!--IMAGEM DE CABEÇALHO PNG---->
			<link rel="icon" href="/valemobi/plugin/img/icon.ico">
	
	</head>

<body>

	<!-------------------  COMEÇO MENU (TOOLBAR FIXED) ---------------->

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">		
					<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>					
					<a class="navbar-brand" href="https://br.linkedin.com/in/richard-henrique-451a8979">RICHARD</a>
				</div>
				
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
					<li><a href="index.php">Cadastrar Produto</a></li>
					</ul>
					
					<ul  class="nav navbar-nav" style="float: right">
						<li class="pull-right">					
						<form method="post" action="search.php" class="navbar-form">
							<div class="input-group"> 
							<input type="number" min="0" required name="busca" class="form-control"
							placeholder="ID de protocolo">
							</input>								
							<div class="input-group-btn">								
							<button class="btn btn-default" type="submit" required="">
							<i class="glyphicon glyphicon-search"></i>
							</button>
							</div>									
							</div>								
						</form> 							
						</li>						
					</ul>	
				</div>			
			</div>			
		</nav>

<!----------------------------COMEÇO CARROSSEL DE IMAGENS ------------------>
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			
			<div class="carousel-inner" role="listbox">
				<div class="item active">
				<img class="first-slide" src="/valemobi/plugin/img/slide1.jpg" alt="First slide">					
				</div>
				<div class="item">
				<img class="second-slide" src="/valemobi/plugin/img/slide2.jpg" alt="Second slide">					
				</div>
				<div class="item">
				<img class="third-slide" src="/valemobi/plugin/img/slide3.jpg" alt="Third slide">					
				</div>				
			</div>	
		
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			
		</div>	<!-- Fim Carrosel -->
		
