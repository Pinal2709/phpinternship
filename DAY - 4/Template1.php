<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Fruit Market</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    
</head>
<!-- body -->
<body class="main-layout">
    <!-- header -->
    <header id="home">
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="index.html"><img src="images/fruit-logo.jpg" alt="#" height="100px" width="100px"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"><a href="#home">Home</a></li>
                                        <li><a href="#about">About Us</a></li>
                                        <li><a href="#fruits">Fruits</a></li>
                                        <li><a href="#blog">Information</a></li>
                                        <li><a href="#contact">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->

<!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
        <img src="images/fruit.jpg" width="1000" height="700">
          <h1 class="text-uppercase text-white font-weight-bold">Is fruit really that healthy?</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Fruit does contain quite a lot of sugar, but does that make it as unhealthy as candy?<a href="#">Find Out More</a></p>
        </div>
      </div>
    </div>
  </header>

    <section class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <h1><strong class="cur">Best</strong><br>Fresh Red Apple</h1>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                            <div class="button_section"><a class="main_bt" href="#">Buy Now</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full text_align_center">
                        <img class="slide_img" src="images/slider_img.png" alt="#" /> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <?php  
        include 'about.php';
    ?>
    <!-- end about -->

    <!-- section -->
    <?php
        include 'fruit.php';
    ?>
    <!-- end section -->
    
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
                    <div class="full main_heading_1">
                        <h2>Raspberry</h2>
                        <p>A Raspberry is an aggregate fruit meaning it has many parts joined together. It is similaer to a blackberry, but the frut is hollow on the inside. Raspberries are a popurar fruit in some parts of the world.I like Raspberries...!</p>
                    </div>   
                    <div class="full margin_top_30">
                        <a class="main_bt" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 margin_top_30 padding_right_0">
                    <div class="full">
                        <img src="images/raspberries.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    
    <!-- section -->
    <?php

        include 'information.php';

    ?>
    <!-- end section -->
    
    <!-- section -->
    <?php

        include 'form.php';

    ?>
    <!-- end section -->

    <!-- footer -->
    <?php
        include 'footer.php';
    ?>
    <!---end footer--->
</body>
</html>