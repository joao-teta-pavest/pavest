<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<html>
<head>

<title>Inicio</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="<?php echo base_url('assets/css/base.css');?>">
<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet"
	href=" <?php echo base_url('assets/css/base.css');?> ">
<link rel="stylesheet"
	href=" <?php echo base_url('assets/css/MudaImagem.css');?> ">
</head>
<body>

	<nav id="noBackgroundMenu" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="https://www.pavest.ao"><img
					style="position: relative; bottom: 14px;"
					src="<?php echo base_url('assets/img/logo.png')?>" height=48px
					width=48px></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul id="menuOptions" class="nav navbar-nav">
					<li class="myActive"><a href="#">Home</a></li>
					<li><a href="#">Sobre nós</a></li>
					<li><a href="#">Serviços</a></li>
					<li><a href="#">Empresas</a></li>
					<li><a href="#">Contactos</a></li>
				</ul>
				<ul id="redesSociais" class="nav navbar-nav navbar-right">
					<li><a href="#"><img
							src="<?php echo base_url('assets/img/facebook.png')?>" height=25
							width=25></a></li>
				</ul>
			</div>
		</div>
	</nav>


	<!-- Slide Show  -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel"
		style="position: relative; bottom: 20px">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" style="height: 50vh">
			<div class="item active">
				<img
					src="<?php echo base_url('assets/img/Pavest_Participacao_E_Investimento.png') ?>"
					alt="Participações e investimento"
					style="height: 50vh; width: 100%;">
			</div>

			<div class="item">
				<img
					src="<?php echo base_url('assets/img/Pavest_Express_Presentation.png') ?>"
					alt="Pavest Express" style="height: 50vh; width: 100%;">
			</div>

			<div class="item">
				<img
					src="http://www.advantagebusinessvaluations.com/wp-content/uploads/2015/08/slide3.jpg"
					alt="New york" style="height: 50vh; width: 100%;">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span> <span
			class="sr-only">Previous</span>
		</a> <a class="right carousel-control" href="#myCarousel"
			data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- Fim Slide Show  -->
	<!-- Div com seviços -->
	<br>
	<br>
	<br>
	<div>
		<div id="resumoServicos" class="container-fluid">
			<br> <br>
			<div class="row">


				<div class="col-sm-4" style="text-align: center">
					<a href="#"> <img
						src="<?php echo base_url('assets/img/PavestExpress.png') ?>"
						width="200" height="139"> <br> <br> Pavest Express
					</a> <br> <br> <br> <br>
				</div>

				<div class="col-sm-4" style="text-align: center">
					<a href="#"><img src="<?php echo base_url('assets/img/IT.png') ?>"
						width="168" height="139"> <br> <br> Serviços IT</a> <br> <br> <br>
					<br>
				</div>



				<div class="col-sm-4" style="text-align: center; text: 50px">
					<a href="#"> <img
						src="<?php echo base_url('assets/img/Consultoria.png') ?>"
						width="129" height="139"> <br> <br> Consultoria
					</a> <br> <br> <br> <br>
				</div>




			</div>
		</div>
		<!-- Mais info ... -->
		<div class="row">
			<div class="col-sm-12" style="text-align: center">

				<button type="button" class="btn btnMais">Mais Serviços</button>
			</div>
		</div>
		<!-- Fim de mais info -->
		<br> <br>
	</div>
	<br>
	<br>
	<br>
	<!-- Fim Div com serviços -->
	
	
	<!--  Div com objectivos -->
	<div Style="background-color: #393d5a;border-top:2px solid black">
		<br> <br> 
		<div class="row">
		<div class="col-md-12" style="padding:50px">
		<h1 style="color:white">Alguns objectivos</h1>
		<hr>
		</div></div>
		<div class="row" >
			<div class="col-md-4 " style="text-align: center;padding:50px" id="objectivo1">
				<img src="<?php echo base_url('assets/img/gerir.jpg')?>" width=420 height=300> <br>
				<h2
					style="color: white;  border-radius: 30px">
					Ajudamos a <span class="change1">Gerir</span>
				</h2>
			</div>
			<div class="col-md-4 " style="text-align: center;padding:50px" id="objectivo2">
				<img src="<?php echo base_url('assets/img/comprar.jpg')?>" width=400 height=300> <br>
				<h2
					style="color: white; border-radius: 30px">
					Estamos prontos a <span class="change2">Comprar</span>
				</h2>


			</div>
			<div class="col-md-4 " style="text-align: center;padding:50px" id="objectivo3">
				<img src="<?php echo base_url('assets/img/investir.jpg')?>" width=400 height=300> <br>
				<h2
					style="color: white;  border-radius: 30px">
					Sempre dispostos a <span  class="change3">Investir</span>
				</h2>
			</div>
		</div>
		<br> <br> <br> <br>
	</div>
	<!-- Fim de Div com objectivos -->
	<div id="parceiros">
	<div class="row">
	<div class="col-md-12" style="padding:50px">
		<h1 > Parceiros </h1>
		<hr>
	</div>
	<div class="row" style="text-align:center">
	<div class="col-md-3"></div>
	<div class="col-md-3">
	<img src="<?php echo base_url('assets/img/marlito_oficial.png')?>" height="150" width="195">
	</div>
	<div class="col-md-3"><img src="<?php echo base_url('assets/img/cineAfrica.png')?>" height="150" width="150"></div>
	<div class="col-md-3"></div>
	</div>
	</div>
	
	</div>
	
	
	<br>
	<br>
	
	<div id="footer">
	<div class="row">
		<div class="col-md-1" ></div>
	<div class="col-md-5" style="margin-left:30px;margin-right:30px;"><h4 style="border-bottom: 1px solid black;">
	<br>Mapa do site</h4>
	
	<p><a>Home</a></p>
	<p><a>Sobre nós</a></p>
	<p><a>Serviços</a></p>
	<p><a>Empresas</a></p>
	<p><a>Contactos</a></p>
	</div>
	
	<div class="col-md-5" style="margin-left:30px;margin-right:30px;"><h4 style="border-bottom: 1px solid black;">
	<br>Apoio ao cliente</h4>
	
	<p>Contacto: +244 923 44 72 11</p>
	<p>Email: suporte@pavest.ao</p>
	</div>
	<div class="col-md-1" ></div>
	</div>
	
	<br>
	<br>
	<div class="row">
	<div class="col-md-12">
	Copyright © Pavest - Participações e investimento.
	<br>
	<br>
	</div>
	</div>
	</div>

</body>
</html>