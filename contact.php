
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>pradeep bhatt</title>
		<meta content="authour" discription="pradeep">
		<!-- Meta for SEO -->
		<meta name="description" />
		<meta name="description" />
		<!-- CSS Files -->
		<link href="css/bootstrap.css" rel="stylesheet" />
		<!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
		<!-- <link href="style.css" rel="stylesheet" /> -->
	</head>
	<body>
		
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="index.php"><span>p</span>radeep</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item ">
							<a class="nav-link" href="index.php">Home </span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="about.php">About us </a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="contact.php">Contact us  <span class="sr-only">(current)</span></a>
						</li>
						
					</ul>
				</div>
			</nav>
			<div class="form">
				<div class="container">
					
						<div class="col-sm-6">
							<div class="left-form">
								<div class="row">
								<?php
								if (isset($submitted) && $submitted == true) { ?>
								<div class="alert alert-primary" role="alert">
                                      hello <?php echo $name; ?> ! Thanks for contacting me.
</div>
<?php }
?>
								<h3>form</h3>
								<form method="post" action="">
									<div class="form-group">
								
										<div class="col-sm-12">
											<input type="text" name="name" placeholder="Name" style="padding: 5px 15px; "> 

										</div>

									
									<div class="col-sm-12">
											<input type="email" name="txtemail" placeholder="Email" style="padding: 5px 15px" >
										</div>
										<div class="col-sm-12">
											<input type="text" name="message" placeholder="message" style="padding: 15px 50px;>  
										<div class="col-sm-12">
											<div>
												<input type="submit" name="submit" placeholder="submit">
											</div>
										</div>
									</div>
								</form>
							</div>
					
						<div class="col-sm-6">
						<div class="contact-info">
							<div class="col-sm-12">
								<div class="header-form">
									<h3>Contact info</h3>
								</div>
							</div>
							<ul>
								<li><i class="fa fa-phone"></i> 9809484192</li>
								<li><i class="fa fa-envelope"></i> Kanchanpur </li>
								<li><i class="fa fa-google-plus"></i>pradeepkumarbhatt1@gmail.com</li>

							</ul>
						</div>
					</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
		<!-- JS Files -->
		<script src="lib/jquery-3.3.1.slim.min.js"></script>
		<script src="css/js/bootstrap.js"></script>
	</body>
</html>