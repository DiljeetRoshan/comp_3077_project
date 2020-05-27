<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../css/Main.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Professor Processor</title>
</head>
      <?php
      ini_set('display_errors', 'On'); ini_set('html_errors', 0); error_reporting(-1);
      
         $dbhost = 'localhost';
         $database = "Redacted";
         $dbuser = 'Redacted';
         $dbpass = '189Miller';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         mysqli_close($conn);
      ?>
<body style="background-color: #222536;">
<div id="header">
	<a> <img style="  display: block; margin-right: auto; margin-left: auto; max-width: 8%; max-height: 8%; padding-top: 5px;"src = "../pictures/logo2.png" alt="Processor Processor Logo"></a>
	</div>
	<br>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a style="color: #222536;" href="index.php" class="nav-item nav-link active">Home</a>
                <a style="color: #222536;" href="About.html" class="nav-item nav-link">About Us</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a style="color: #222536;" href="#" class="nav-item nav-link">Login</a>
                <a style="color: #222536;" href="#" class="nav-item nav-link">Cart</a>

            </div>
        </div>
    </nav>
</div>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2> <b>Popular Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../pictures/mouse.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Razer Basilisk Mouse</h4>
									<p class="item-price"><span>$50.00</span></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../pictures/B450.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>MSI B450</h4>
									<p class="item-price"><span>$150.00</span></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../pictures/Ryzen.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>AMD Ryzen 3700X</h4>
									<p class="item-price"><span>$399.00</span></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../pictures/case.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4> MasterCase SL600M</h4>
									<p class="item-price"><span>$150.00</span></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../pictures/cooler.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>CoolerMaster Hyper 212 Fan</h4>
									<p class="item-price"><span>$60.00</span></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../pictures/RTX.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Gigabyte RTX 2070</h4>
									<p class="item-price"><span>$799.00</span></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../pictures/i9.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Intel Core i9-9900k</h4>
									<p class="item-price"><span>$999.00</span></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../pictures/nvme.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>HP EX920 1 TB NVME Drive</h4>
									<p class="item-price"><span>$250.00</span></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <h4><a style="text-decoration: none;color: white;" href="mailto:fakeemail@uwindsor.ca">Contact Us</a></h4>
      <br>
      <small>Copyright &copy; Diljeet Roshan Website Designs</small>
    </div>
</footer>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
</html>
