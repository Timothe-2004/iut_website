<?php
try {
$bdd=new PDO('mysql:host=localhost; dbname=iut-up','root','');
} catch (Exception$e)
 {
   die('Erreur '. $e->getMessage());
}
$req=$bdd->query('SELECT * FROM alumni ORDER BY IdAlu DESC LIMIT 8');
?>
<!DOCTYPE html>
<html lang="fr">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Institut Universitaire de Technologie de Parakou</title>  
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
	<?php 
		include("header.php");
		 ?>


   

	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>ALUMNI<span class="m_1">Célébrons nos As</span></h1>
		</div>
	</div>
	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
				
<!--cooooool-->
<?php
    while($donnee=$req->fetch()) { ?>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="<?php echo $donnee['ImgAlu'];?>">
							<div class="social">
								<ul>
									<li><?php echo $donnee['PromAlu'];?></li><br>
									<li><?php echo $donnee['FilAlu'];?></li><br>
									<li><a href="mailto:<?php echo $donnee['MailAlu'];?>"><img src="images/email.png" alt="photo" title="<?php echo $donnee['MailAlu'];?>"
									></a></li>
									</ul>
							</div>
						</div>
						<div class="team-content">
							<?php if($donnee['SexAlu']=='F')
							{
								?>
							<h3><?php echo 'Mme '. $donnee['NomAlu']. ' '. $donnee['PreAlu'];?></h3>
							<?php
							}else {
								?>
								<h3><?php echo 'Mr '. $donnee['NomAlu']. ' '. $donnee['PreAlu'];?></h3>
							<?php	
							}
							?>
							<span class="post"><?php echo $donnee['DescAlu'];?></span>
						</div>
					</div>
				</div>
				<?php
	}
	?>

            </div><!-- end row -->
        </div><!-- end container -->
		
    <!-- ALL JS FILES -->
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>



   <?php 

        include("footer.php"); ?>
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
    <?php 
    include("tesmonial.php"); ?>