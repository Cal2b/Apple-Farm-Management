<I DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	    <meta name="author" content="Kashingi Web disigner">
	    <title>Home page</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link  rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1•O/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFph3iwGPXrljddIh0egiulFw05qRGvFX0dJZ4" crossorigin="anonymous">

		<!--Jquery Link-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			
		<script>
			$(document).ready(function(){
				$(".card-title").click(function(){
    				$(".card-text").slideToggle("slow");
 				}); 
				 $("button").click(function(){
    				$("h6").slideToggle();
 				}); 
			});
		</script>
		<style>
			body {
				font-family: 'Roboto', sans-serif;
				background-color:#db88cb;
			}
			.card-body {
				background-color: #db88cb;
			}
			.card-footer {
				background-color: #db88cb;
			}
			#legend img {
				width: 140px;
				height: 140px;
				border-radius: 75px;

			}
			.nav-link{
				color:purple;
				text-decoration:none;
			}
		</style>
    </head>
    <body>
        <div class="container-fluid">
            <!-- Header Section -->
            <header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(green, #db88cb); padding:20px;">
                <div class="col-sm-2" id="legend">
					<img class="img-fluid float-left" src="images/logo.png" alt="logo">
		        </div>
		        <div class="col-sm-8">
			        <h1 class="font-bold">Welcome to Moi University Apple farm</h1>
					<div>
            		<ul class="nav nav-tabs bg-secondary">
                		<!-- <li class="nav-item">
							<a class="nav-link" aria-current="page" href="#">Home</a>
                        </li> -->
                		<li class="nav-item" style="margin-left: 30px;">
                            <a class="nav-link" href="register-page.php">Register </a>
                        </li>
                		<li class="nav-item" style="margin-left: 30px;">
                            <a class="nav-link" href="login-page.php">Login</a>
                        </li>
                		
            		</ul>
        		</div>
		    </div>
            </header>
            <!-- Body Section -->
            <div class="row" style="padding-left: Opx;">
                <!-- Center Column Content Section -->
                <div class="col-sm-10 text-center">
                    <h2>Welcome to Moi Univerity Foundation of Knowledge</h2>
                    <p>People like eating apples, but in Kenya, imported apples are very expensive and farmers
						 are now looking for an alternative to grow apples locally, 
						and the moi university apple farm has excited many farmers in Kenya and abroad.</p>
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="card-group">
									<div class="card">
										<img src="images/ann.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Ann Apple tree</h5>
											<p class="card-text">Thrive in cool to temperate climates. The ideal temperature range 15°C and 25°C. Planting is usually done during rain season. Grow in well drained soil. Ready for harvest after six weeks</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated<?php echo date("  d.m.Y. h:i:s "); ?> </small>
										</div>
									</div>
									<div class="card">
										<img src="images/pink.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Pink Lady Apple</h5>
											<p class="card-text intro">Thrive in Warm temperates. Temperature range 20°C and 25°C. Planting usually done in the rain season. Grow well in well drained soils. Ready for harvest after seventh weeks</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="images/crimson.jpg" class="card-img-top" alt="image">
										<!--<img src="bootstrap/image/comp1.jpg" class="card-img-top" alt="image">-->
										<div class="card-body">
											<h5 class="card-title">Crimson Red Apple</h5>
											<p class="card-text intro">Thrive in hot temperates. Temperature range 27°C and 35°C. Planting usually done in the rain season. Grow well in well well drained soils. Ready for harvest after ten weeks</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
								</div> 
							</div>
							<div class="carousel-item">
							<div class="card-group">
									<div class="card">
										<img src="images/winter.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Winter Apple</h5>
											<p class="card-text intro">Thrive in cool temperates. Temperature range 7°C and 15°C. Planting usually done in the warm season. Grow well in well black cotton soils. Ready for harvest after nine weeks</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="images/golden.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Golden Dorset</h5>
											<p class="card-text intro">Thrive in very hot temperates. Temperature range 27°C and 42°C. Planting usually done in the rain season. Grow well in loamy soils. Ready for harvest after eight weeks</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="images/royal.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Royal Gala</h5>
											<p class="card-text intro">Thrive in very cool to warm temperates. Temperature range 7°C and 20°C. Planting usually done in the rain season. Grow well in back cotton soils. Ready for harvest after eight weeks after flowering.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
								</div> 
							</div>
							<div class="carousel-item">
							<div class="card-group">
									<div class="card">
										<img src="images/graded.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title intro">Graded Apple</h5>
											<p class="card-text">Thrive in very cool temperates. Temperature range 7°C and 15°C. Planting usually done in the rain season. Grow well in well drained soils. Ready for harvest after eight weeks after flowering.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="images/braeburn.jpg" class="card-img-top" alt="image">
										<div class="card-body">
											<h5 class="card-title">Braeburn Apple</h5>
											<p class="card-text intro">Thrive in very warm temperates. Temperature range 17°C and 20°C. Planting usually done in the rain season. Grow well in back cotton soils. Ready for harvest after eight weeks after flowering.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
									<div class="card">
										<img src="images/granny.jpg" class="card-img-top" alt="image">

										<div class="card-body">
											<h5 class="card-title">Granny Smith</h5>
											<p class="card-text intro">Thrive in very warm temperates. Temperature range 17°C and 20°C. Planting usually done in the rain season. Grow well in coarse soil. Ready for harvest after eight weeks after flowering.</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">Last updated <?php echo date("  d.m.Y.  h:i:s "); ?></small>
										</div>
									</div>
								</div> 
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
						</div>
					
                </div>
                <!-- Right-side Column Content Section -->
                <aside class="col-sm-2">
					<nav>
						<h3>Health Benefits</h3>
						<ol class="nav nav-pills flex-column" style="margin-bottom: 20px;">
							<li>Apples are rich in soluble fiber which has been shown to reduce intestinal disorders</li>
							<li>Helps in control of insulin levels by releasing sugar level slowly in the blood stream</li>
							<li>Lowers cholesterol levels and the risk of respiratory diseases</li>
							<li>Cleans and detoxifies the body</li>
							<li>Strengthens the heart and quenches thirst</li>
							<li>It's a good control of obesity</li>
						</ol>
                	</nav>
                   <div>
						<h3>Economic Benefits</h3>
						<ol style="margin-top: 10px;">
							<li>Income generation</li>
							<li>Job creation</li>
							<li>Local economic development</li>
							<li>Export potential</li>
							<li>Value-added products</li>
							<li>Tourism and agri-tourism</li>
							<li>Agricultural sustainability</li>
						</ol>
					</div>
					
                </aside>
            </div>
            <!-- Footer Content Section -->
            <footer class="jumbotron text-center row" style="padding-bottom:lpx; padding-top:8px;">
				<p>&copy; 2023 Moi Apple Farm.All rights reserved</p>
            </footer>
        </div>
		<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/js/bootstrap.js">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>