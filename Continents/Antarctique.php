<!DOCTYPE HTML>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Antarctique</title>

	<link rel="shortcut icon" href="../assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/HTML5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="../index.php"><img src="../assets/medias/images/logo/GWLogoMINI1.png" alt="Progressus HTML5 template">GeoWorld</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="../index.php">Accueil</a></li>
					<li><a href="../cdm.php">Carte du monde</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Continents <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="Europe.php">Europe</a></li>
							<li><a href="Asie.php">Asie</a></li>
							<li><a href="Amerique1.php">Amérique du Nord</a></li>
							<li><a href="Amerique2.php">Amérique du Sud</a></li>
							<li><a href="Oceanie.php">Océanie</a></li>
							<li class="active"><a href="Afrique.php">Afrique</a></li>
							<li><a href="Antarctique.php">Antarctique</a></li>
						</ul>
					</li>
					<li><a class="btn" href="../signin.php">INSCRIPTION / CONNEXION</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="../index.php">Accueil</a></li>
			<li class="active">Informations -> Antarctique</li>
		</ol>
			
				<div class="container content-section text-left">
				  <?php

				  require_once '../connbd/manager-db.php';
				  $continent = "Antarctica";
				  $pays = getCountriesByContinent($continent);
				  
				  ?>
				  <table class="table table-striped table-info">
				      <thead>
				          <th scope="col">ID</th>
				          <th scope="col">Pays</th>
				          <th scope="col">Continent</th>
				          <th scope="col">Region</th>
				          <th scope="col">Surface</th>
				          <th scope="col">Indépendance</th>
				          <th scope="col">Population</th>
				          <th scope="col">Durée de vie</th>
				      </thead>
				  <?php

				  	foreach($pays as $value){

				  ?>

				  <tr>
				  	<td><?php echo $value->id ?></td>
				  	<td><?php echo $value->Name ?></td>
				  	<td><?php echo $value->Continent ?></td>
				  	<td><?php echo $value->Region ?></td>
				  	<td><?php echo $value->SurfaceArea ?></td>
				  	<td><?php echo $value->IndepYear ?></td>
				  	<td><?php echo $value->Population ?></td>
				  	<td><?php echo $value->LifeExpectancy ?></td>
				  </tr>

				  <?php } ?>
				  </table>
			</div>
		</div>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<!--<aside class="col-md-4 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="assets/images/1.jpg" alt=""></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="assets/images/2.jpg" alt=""></p>
						<p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
					</div>
				</div>

			</aside> -->
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Ashland City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.php">About</a> |
								<a href="sidebar-right.php">Sidebar</a> |
								<a href="contact.php">Contact</a> |
								<b><a href="signup.php">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>