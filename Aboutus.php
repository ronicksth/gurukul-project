<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Frame work</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div>
		<header>
			<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="javascript:void(0)">Ronick Shrestha</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="mynavbar">
						<ul class="navbar-nav me-auto">
							<li class="nav-item">
								<a class="nav-link" href="Index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)">About us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)">Contact us</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Link</a></li>
									<li><a class="dropdown-item" href="#">Another link</a></li>
									<li><a class="dropdown-item" href="#">A third link</a></li>
								</ul>
							</li>
						</ul>
						<form class="d-flex">
							<input class="form-control me-2" type="text" placeholder="Search">
							<button class="btn btn-primary" type="button">Search</button>
						</form>
					</div>
				</div>
			</nav>
		</header>
	</div>

<section id="about us">
	<h1 align="center"  class=" mt-5 mb-5">About us</h1>
	<div class="container">
		<div class="row">
			<div class="col">
				<img src="assets/images/sea.jpg" height="500px" width="600px">
			</div>
			<div class="col">
				<h3 align="center">About us</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
				</p>
			</div>
		</div>
	</div>
</section>

	<section id="info">
		<div class="container-fluid infobox">
			<div class="container">
				<div class="row">
					<div class="col">
						<h4>Quick links</h4>
						<ul>
							<li>
								<i class="fa-solid fa-arrow-right text-danger"></i>
								<a href="#">Home</a>
							</li>
							<li>
								<i class="fa-solid fa-arrow-right text-danger"></i>
								<a href="#">About us</a>
							</li>
							<li>
								<i class="fa-solid fa-arrow-right text-danger"></i>
								<a href="#">Our services</a>
							</li>
							<li>
								<i class="fa-solid fa-arrow-right text-danger"></i>
								<a href="#">Latest Blog Post</a>
							</li>
							<li>
								<i class="fa-solid fa-arrow-right text-danger"></i>
								<a href="#">Contact us</a>
							</li>
						</ul>

					</div>

					<div class="col">
						<h4>Popular link</h4>
						<ul>
							<li>
								<i class="fa-solid fa-arrow-right text-danger"></i>
								<a href="#">Login</a>
							</li>
							<li>
								<i class="fa-solid fa-arrow-right text-danger"></i>
								<a href="#">Post a blog</a>
							</li>
						</ul>

					</div>

					<div class="col">
						<h4>Get in touch</h4>
						<ul>
							<li>
								<i class="fa-solid fa-location-dot text-danger"></i>
								<a href="#">Manigram,Rupandehi</a>
							</li>
							<li>
								<i class="fa-regular fa-envelope text-danger"></i>
								<a href="#">gurukul@gmail.com</a>
							</li>
							<li>
								<i class="fa-solid fa-phone text-danger"></i>
								<a href="#">+977-9851049431</a>
							</li>
						</ul>

					</div>

					<div class="col">
						<h4>Follow us</h4>
						<ul>
							<li>
							<i class="fa-brands fa-twitter text-danger"></i>
							<i class="fa-brands fa-facebook text-danger"></i>
							<i class="fa-brands fa-linkedin text-danger"></i>
							<i class="fa-brands fa-instagram text-danger"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer id="contact for quaries">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col">
						<input type="text" name="full name" placeholder="Full Name">
						<input type="text" name="Email address" placeholder="Email Address">
						<input type="text" name="Subject" placeholder="Subject"><br>
						<input type="text" name="Message" placeholder="Message"><br>
						<input type="submit" name="submit" value="submit">
					</div>
					<div class="col">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.864497943656!2d83.47339670000001!3d27.628712999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399685591a37fb1f%3A0x56e4816e406945c3!2sGurukul%20Education%20Manigram!5e0!3m2!1sen!2snp!4v1750759258969!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	</footer>





	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>