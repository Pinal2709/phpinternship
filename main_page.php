<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Food Ordering</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<!--Header section-->
<header class="topbar">
	<div class="container flex justify-between">
		<div class="icons">
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
		</div>
		<div class="auth flex item-center">
		<div>
			<i class="fa fa-user" aria-hidden="true"></i>
			<a href="login.php">Log in</a>
		</div>
		<span class="divider">|</span>
		<div>
			<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			<a href="registration.php">Register Now</a>
		</div>
		<span class="divider">|</span>
		<div>
			<i class="fa fa-cutlery" aria-hidden="true"></i>
			<a href="#">0 Items - ($0.00)</a>
		</div>
		<span class="divider">|</span>
		<div>
			<i class="fa fa-user" aria-hidden="true"></i>
			<a href="admin.php">Admin</a>
		</div>
	</div>
</header>
<!--End Header Section-->


<!--Menu section-->
<nav>
	<div class="top">
		<div class="container flex justify-between">
			<div class="contact flex item-center">
				<img src="./icons/phone.svg" alt="">
				<div>
					<h5>Call US - (+84) 987 942 869</h5>
					<h6>E-mail - freshmeal@gmail.com</h6>
				</div>
			</div>
			<div class="logo1">
				<img src="./icons/logo-2.svg">
			</div>
			<div class="time flex item-center">
				<img src="./icons/clock.svg">
				<div>
					<h5>Working Hours - </h5>
					<h6>Mon - Sat (8.00am - 10.00pm)</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar magic-shadow">
		<div class="container flex justify-center">
			<a href="#home" class="active">Home</a>
			<a href="#foodmenu">Over menu</a>
			<a href="#aboutus">About us</a>
			<a href="#service">Service</a>
			<a href="#blog">Blog</a>
			<a href="#gallery">Gallery</a>
			<a href="#contactus">Contact us</a>
			<a href="#">Order</a>
		</div>
	</div>
</nav>
<!--End Menu section-->

<!--Website imge page-->
<header class="about flex item-center" id="home">
	<div class="container">
		<div class="welcome flex item-center">
			<h3>Welcome to <sapn>Freshmeal</span></h3>
			<div class="img flex item-center">
				<img src="./icons/logochef.jpg" height="50px" width="50px">
			</div>	
		</div>
		<h1>The World Best <span>Delicious food</span> Ordering Website</h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
		<button class="btn btn-primary">Read More</button>
		<button class="btn btn-secondary">Order Now</button>
	</div>
</header>

<!--End Website imge page-->

<!--food menu section-->
<section class="foodmenu" id="foodmenu">
    <div class="container">
        <h1 class="section-heading">Food Menu</h1>
        <div class="slider">
        	<button class="slider-btn prev-btn"><img src="./icons/pre.svg" alt=""></button>
        	<button class="slider-btn next-btn"><img src="./icons/next.svg" alt=""></button>
            <div class="food-slider">
            	<!---->
            	<div class="food-card magic-shadow-sm">
					<div class="foodmenu-img flex item-center justify-center">
						<img src="images/f_img1.png" alt="" height="250px" width="300px">
					</div>
					<hr>
					<div>
						<h2 class="text-center">Cheese Pizza Rolls</h2>
						<div class="stars flex justify-center item-center">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
						</div>
						<div class="price text-center">
							$ 2.7
						</div>
						<div class="flex justify-center">
							<button>
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<span>Order Now</span>
							</button>
						</div>
					</div>
				</div>
				<div class="food-card magic-shadow-sm">
					<div class="foodmenu-img flex item-center justify-center">
						<img src="images/f_img4.jpg" alt="" height="250px" width="300px">
					</div>
					<hr>
					<div>
						<h2 class="text-center">Red Sauce Spaghetti</h2>
						<div class="stars flex justify-center item-center">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/star-grey.svg">
						</div>
						<div class="price text-center">
							$ 1.25
						</div>
						<div class="flex justify-center">
							<button>
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<span>Order Now</span>
							</button>
						</div>
					</div>
				</div>
				<div class="food-card magic-shadow-sm">
					<div class="foodmenu-img flex item-center justify-center">
						<img src="images/f_img3.jpg" alt="" height="250px" width="300px">
					</div>
					<hr>
					<div>
						<h2 class="text-center">Chocolate crunch with icecream</h2>
						<div class="stars flex justify-center item-center">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/star-grey.svg">
							<img src="./icons/star-grey.svg">
						</div>
						<div class="price text-center">
							$ 2.7
						</div>
						<div class="flex justify-center">
							<button>
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<span>Order Now</span>
							</button>
						</div>
					</div>
				</div>
				<div class="food-card magic-shadow-sm">
					<div class="foodmenu-img flex item-center justify-center">
						<img src="images/f_img5.jpg" alt="" height="250px" width="300px">
					</div>
					<hr>
					<div>
						<h2 class="text-center">Chiken Biryani</h2>
						<div class="stars flex justify-center item-center">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/star-grey.svg">
						</div>
						<div class="price text-center">
							$ 3.5
						</div>
						<div class="flex justify-center">
							<button>
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<span>Order Now</span>
							</button>
						</div>
					</div>
				</div>
				<div class="food-card magic-shadow-sm">
					<div class="foodmenu-img flex item-center justify-center">
						<img src="images/f_img6.jpg" alt="" height="250px" width="300px">
					</div>
					<hr>
					<div>
						<h2 class="text-center">Juice and Fruits</h2>
						<div class="stars flex justify-center item-center">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
						</div>
						<div class="price text-center">
							$ 1.2
						</div>
						<div class="flex justify-center">
							<button>
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<span>Order Now</span>
							</button>
						</div>
					</div>
				</div>
				<div class="food-card magic-shadow-sm">
					<div class="foodmenu-img flex item-center justify-center">
						<img src="images/f_img8.jpg" alt="" height="250px" width="300px">
					</div>
					<hr>
					<div>
						<h2 class="text-center">Chocolate Rocher Sundae</h2>
						<div class="stars flex justify-center item-center">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/start-filled.svg">
							<img src="./icons/star-grey.svg">
						</div>
						<div class="price text-center">
							$ 3.0
						</div>
						<div class="flex justify-center">
							<button>
								<i class="fa fa-cutlery" aria-hidden="true"></i>
								<span>Order Now</span>
							</button>
						</div>
					</div>
				</div>
			</div>
            <!---->
            <div class="text-center btn-wrapper">
            	<a href="foodmenu.php"><button class="btn btn-secondary">View More</button></a>
   			</div>
        </div>
	</div>
</section>
<!--over food menu-->

<!-- about meal -->
<section class="about-meal" id="aboutus">
	<div class="container">
		<h1 class="section-heading">About Fresh Meal</h1>
		<div class="about-meal-wrap flex">
			<div class="flex-1">
				<img src="images/foodimg.jpg">
			</div>
			<div class="flex-1">
				<h2> Freshmeal is a long established fact that a reader will be distracted</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden Sydney College in Virginia, The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
				<button class="btn btn-secondary">Read More</button>
			</div>
		</div>
	</div>
</section>
<!-- end about meal-->

<!--Over service section-->
<section class="our-services" id="service">
	<div class="container">
		<h1 class="section-heading">Our services</h1>
		<div class="card-wrapper flex">
			<div class="service-card magic-shadow-sm">
				<img src="./icons/transport.svg">
				<h2>Free Home Delivery</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<button class="btn btn-secondary">Read More</button>
			</div>
			<div class="service-card magic-shadow-sm">
				<img src="./icons/bag.svg">
				<h2>Food service</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<button class="btn btn-primary">Read More</button>
			</div>
			<div class="service-card magic-shadow-sm">
				<img src="./icons/usd.svg">
				<h2>Money Back Guaranted</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<button class="btn btn-secondary">Read More</button>
			</div>
		</div>
	</div>
</section>
<!-- end over service section -->

<!--food offer section-->
<section class="big-deal" id="offer">
	<div class="container">
		<h1 class="section-heading text-pure">Big Food Offer of the Month</h1>
		<div class="timer">
			<div>
				<span>27</span>
				<span>Days</span>
			</div>
			<div>
				<span>24</span>
				<span>Hours</span>
			</div>
			<div>
				<span>30</span>
				<span>Minutes</span>
			</div>
			<div>
				<span>58</span>
				<span>seconds</span>
			</div>
		</div>
	</div>
</section>
<!--End food offer section-->

<!-- blog section -->
<section class="blog" id="blog">
	<div class="container">
		<h1 class="section-heading">Food Blog</h1>
		<div class="article-wrapper">
			<article class="card magic-shadow-sm">
				<div>
					<img src="images/donut.jpg" alt="">
				</div>
				
				<div class="card-content">
					
					<div class="post-meta flex item-center justify-between">
						<span>Sep 27, 2021</span>
						<div>
							<span>Posted by <strong>FreshMeal</strong></span>
							<span class="comment-count">27 Comments</span>
						</div>
					</div>
					<h2>Donut Crunch</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more letters.</p>
				</div>
			</article>

			<article class="card magic-shadow-sm">
				<div>
					<img src="images/coffee.jpg" alt="">
				</div>
				
				<div class="card-content">
					
					<div class="post-meta flex item-center justify-between">
						<span>Aug 08, 2021</span>
						<div>
							<span>Posted by <strong>FreshMeal</strong></span>
							<span class="comment-count">12 Comments</span>
						</div>
					</div>
					<h2>Coffee & Brownie Cake</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more letters.</p>
				</div>
			</article>
		</div>
		<div class="text-center btn-wrapper">
    		<button class="btn btn-secondary">View More</button>
   		</div>
	</div>
</section>
<!--End blog section-->


<!--food gallery-->
<section class="gallery" id="gallery">
	<div class="container">
		<h1 class="section-heading">Food Gallary</h1>
		<div class="box-container">

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img18.jpg" alt=""></div>
			</div>
			
			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img17.jpg" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img16.PNG" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img19.PNG" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img11.jpg" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img13.jpeg" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img2.jpg" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img22.png" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img21.PNG" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img20.jpg" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img23.jpg" alt=""></div>
			</div>

			<div class="box">
				<div class="flex item-center justify-center"><img src="images/f_img24.jpg" alt=""></div>
			</div>
		</div>	
		<div class="text-center btn-wrapper">
    		<button class="btn btn-secondary">View More</button>
   		</div>	
	</div>
</section>
<!--end food gallry-->

<!-- section news letter -->
<section class="subscribe" id="subscribe">
	<div class="container flex item-center">
		<div>
			<img src="images/cake.png">
		</div>
		<div>
			<h1>Subscribe to your newsletter</h1>
			<p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
			<div class="input-wrap">
				<input type="email" placeholder="email@freshmeal.com">
				<button>Subscribe</button>
			</div>
		</div>
	</div>
</section>
<!--end news letter-->

<!--contact us-->
<section class="contact-us flex" id="contactus">
	<div class="contact-info-wrapper">
		<h1 class="section-heading">Contact us</h1>
		<div class="contact-info">
			<div>
				
				<div>
					<img src="./icons/phone-2.svg" alt="">
					<div>
						<span>Call us -</span>
						<span>(+84) 987 942 869</span>
					</div>
				</div>
				<div>
					<img src="./icons/bag-2.svg" alt="">
					<div>
						<span>E-mail -</span>
						<span>freshmeal@gmail.com</span>
					</div>
				</div>
				<div>
					<img src="./icons/clock-2.svg" alt="">
					<div>
						<span>Working Hours-</span>
						<span>Mon - Sat (8.00am - 10.00pm)</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.3092447246386!2d72.76393621453835!3d21.17987078797922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04da5097fee93%3A0x7a537badac7de3e3!2sDe&#39;%20Villa%20Garden%20Restro%20Lounge!5e0!3m2!1sen!2sin!4v1623346106130!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</section>
<!--end contact us-->

<!--footer section-->
<footer>
	<div class="container">
		<div class="box1">
			<h3>About us</h3>
			<p>It was popularised in the 2000 with the release of Latest sheets containing Lorem Ipsum passage.</p>
			<button class="btn btn-primary">Read More</button>
		</div>
		<div class="box1">
			<h3>Quik Links</h3>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Over menu</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Service</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact us</a></li>
				<li><a href="#">Order</a></li>
			</ul>
		</div>

		<div class="box1">
			<h3>Follow Us</h3>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<span>Facebook</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<span>Twitter</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-google-plus" aria-hidden="true"></i>
						<span>Google+</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-instagram" aria-hidden="true"></i>
						<span>Instagram</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="box1 instagram-api">
			<h3>Instagram</h3>
			<div class="post-wrapper">
				<div>
					<img src="images/f_img10.jpg" alt="">
				</div>
				<div>
					<img src="images/f_img12.jpg" alt="">
				</div>
				<div>
					<img src="images/f_img15.PNG" alt="">
				</div>

				<div>
					<img src="images/f_img14.png" alt="">
				</div>
				<div>
					<img src="images/f_img9.jpg" alt="">
				</div>
				<div>
					<img src="images/f_img25.jpg" alt="">
				</div>

				<div>
					<img src="images/f_img26.jfif" alt="">
				</div>
				<div>
					<img src="images/f_img27.jpg" alt="">
				</div>
				<div>
					<img src="images/f_img28.jpg" alt="">
				</div>
			</div>
		</div>
	</div>

</footer>
<!--end footer section-->

<!-- copyright section-->
<footer class="copyright">
	<div>
		Copyright © 2021 Thnak You for Wisiting Over Website <a href="#">Freshmeal..!</a>
	</div>
</footer>
<!-- end copyright section-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
