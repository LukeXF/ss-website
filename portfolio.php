<?php include './assets/header.php'; ?>
<?php include './assets/navbar.php'; ?>
<title>Portfolio - Syclone Studios</title>

	<!-- ////////////////////////////////////
		HOMEPAGE HEADER
	///////////////////////////////////// -->

	<div id="smallheader">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h1>Portfolio</h1>
				</div>
			</div><!--ROW-->
		</div><!--CONTAINER-->
	</div><!--HEADER-->



<?php
	$clients=array(
		"Chroma Hills",
		"Sanity",
		".",
		".",
		"."
	);
?>


	<div id="second">
		<div class="container">
			<div class="col-md-10 col-md-offset-1">

				<div class="row">

					<div class="col-md-12 portfolio"><div class="portfolio-bg" id="<?php echo $clients[0] ?>">
					
						<h1>
							<?php echo $clients[0] ?>
						</h1>
						<p>
							Hey, we make stuff bitches
						</p>
						<button href="#Login" class="btn btn-default button-of-sex outline">Show More</button>

					</div></div>

				</div>
				<div class="row">

					<div class="col-md-6 portfolio"><div class="portfolio-bg" id="<?php echo $clients[1] ?>">
					
					
						<h1>
							<?php echo $clients[1] ?>
						</h1>
						<p>
							Hey, we make stuff bitches
						</p>
						<button href="#Login" class="btn btn-default button-of-sex outline">Show More</button>

					</div></div>

					<div class="col-md-6 portfolio"><div class="portfolio-bg" id="<?php echo $clients[2] ?>">
					
					
						<h1>
							<?php echo $clients[2] ?>
						</h1>
						<p>
							Hey, we make stuff bitches
						</p>
						<button href="#Login" class="btn btn-default button-of-sex outline">Show More</button>

					</div></div>

				</div>
			
			</div>
		</div>
	</div>


	<?php require './assets/footer.php'; ?>