<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Institut Universitaire de Technologie Website </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 
	<?php include("header.php"); ?>
	<!-- Modal -->
	
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	
	<!-- END LOADER -->	
	
	<!-- Start header -->
	
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/IUT1.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>IUT </strong> Université de Parakou </h2>
										<p class="lead"  data-animation="animated fadeInLeft">Haute école de gestion et  de la technologie . </p>
											<a href="#" class="hover-btn-new"><span>Rejoignez -nous</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Découvrez nous</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/iut.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">IUT <strong> Université de Parakou</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">Meilleure école de formation et d'éducation .</p>
											<a href="#" class="hover-btn-new"><span>Contactez-nous</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Lire plus</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/IUT3.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>IUT </strong> Université de Parakou</h2>
										<p class="lead" data-animation="animated fadeInLeft">Discipline - Rigueur - Succès .</p>
											<a href="#" class="hover-btn-new"><span>Contactez-nous</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Lire plus</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
       <div class="container">
            <!-- end title -->

       <div class="hmv-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="flaticon-achievement"></i></div>
						<h3> Notre Mission</h3>
						<div class="tr-pa">M</div>
						<p style="text-align:justify">Animée d'une profonde culture de développement durable, l'IUT forme des générations étudiantes engagées et créatrices, des citoyens et citoyennes de premier plan, des scientifiques et des leaders en entrepreneuriat exerçant une influence marquée sur l'évolution des sociétés. Ouverte sur le monde et chef de file dans la francophonie, l'IUT vise l'excellence en enseignement et en recherche. Référence pour ses partenaires autant que source d'inspiration, elle rassemble les forces du changement au coeur de l'effervescence universitaire de la ville de Parakou.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12" id="mission">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="flaticon-eye"></i></div>
						<h3>Notre  Vision</h3>
						<div class="tr-pa">V</div>
						<p style="text-align:justify"> L' Institut Universitaire de Technologie de L'Université de Parakou, une communauté mobilisée pour offrir une expérience étudiante unique et pour faire émerger une culture scientifique audacieuse et ouverte, ancrée dans les défis mondiaux et résolument interdisciplinaire. Une université humaniste, investie dans le rayonnement des arts et engagée à former une relève embrassant avec conviction les grands enjeux de société.
							<br/><br/><br/><br/></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12" id="valeurs">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="flaticon-history"></i></div>
						<h3>Nos Valeurs</h3>
						<div class="tr-pa">H</div>
						<p style="text-align:justify">Avec sensibilité, au regard de la diversité des personnes, des savoirs et des modes de pensée, l'Institut Universitaire de Technologie poursuit sa mission d'enseignement et de recherche en mettant en pratique les valeurs suivantes:
							<ul>
								<li>la responsabilité</li>
								<li>le respect</li>
								<li>le courage</li>
								<li>l'intégrité</li>
								<li>l'inclusion</li>
								<li>la solidarité</li>

							</ul>

							</p>

					</div>
				</div>
			</div>
		</div>
	


        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                    	<br/><br/>
                       <h2>Mot <strong style="color:yellow;" >du Directeur </strong></h2>
                      	<p style="text-align:justify; font-size: 20px;">
                      		Chers visiteurs, partenaires, membres de la communauté de l'IUT, de l'UP et des universités du Bénin et d'ailleurs, l'Institut Universitaire de Technologie (IUT) de l'Université de Parakou est heureux de vous accueillir. En mon nom propre, et au nom de tout le personnel, je vous souhaite la bienvenue sur notre espace de découverte de institut que constitue le site de l'IUT. L'Institut Universitaire de Technologie a pour vocation de former des apprenants capables de devenir des gestionnaires, et cadres de nos sociétés en apportant des solutions aux problèmes de gestion, en s'appuyant sur les récents développements des technologies.
                      	</p>
                        
                        <a href="mot.php" class="hover-btn-new orange"><span>Lire plus</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/directeur.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			
		</div>
				
       	</div>    
    </div><!-- end section -->

    <section class="section lb page-section" id="histoire">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Notre Histoire</h3>
                    <p class="lead">Notre histoire </p>
                </div>
            </div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2018</h2>
								<p>Notre histoire </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2015</h2>
								<p>Notre histoire </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2014</h2>
								<p>Notre histoire </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2012</h2>
								<p>Notre histoire </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2010</h2>
								<p>Notre histoire</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2007</h2>
								<p>Notre histoire</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2004</h2>
								<p>Notre histoire</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2002</h2>
								<p>Notre histoire.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>

	
   


     


    <footer>

		<?php
		
 include("footer.php"); ?>
    </footer>

   
    <script src="js/all.js"></script>
    
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>

</body>
</html>