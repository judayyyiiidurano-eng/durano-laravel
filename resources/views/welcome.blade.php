<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Urban Palate</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../.../../landing-page/assets/img/favicon.png" rel="icon">
  <link href="../.../../landing-page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../.../../landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../.../../landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../.../../landing-page/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../.../../landing-page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../.../../landing-page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../.../../landing-page/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Urban Palate
  * Template URL: https://bootstrapmade.com/Urban Palate
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">URBAN PALATE</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#home  " class="active">Dashboard<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#owner">Owner</a></li>
          <li><a href="#gallery">Gallery</a></li>
          
            
          </li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" method="POST" action="{{route('logout')}}">@csrf</form>
          </li>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#book-a-table">Book a Table</a>

    </div>
  </header>

  <main class="main">

    <!-- Dashboard Section -->
    <section id="home" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">"The best memories are made around the table."</h1>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-get-started">Book of 
                Table</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class=""><i class=""></i><span></span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="../.../../landing-page/assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p><span>Learn More</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="../.../../landing-page/assets/img/about.jpg" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3>Book a Table</h3>
              <p>0948 2914 398</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Born from a love of culture, food, and connection, The Urban Palate brings a world of flavor to the heart of the city. Our chefs blend modern techniques with bold, traditional tastes from around the globe. We believe in food that’s fresh, soulful, and unforgettable 
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Truffle Carbonara -housemade pasta, crispy pancetta, creamy truffle sauce.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Citrus Quinoa Salad -zesty vinaigrette, candied nuts, goat cheese, and seasonal greens.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Ube Cheesecake -rich, velvety, and beautifully purple.</span></li>
              </ul>
              <p>
              </p>

              <div class="position-relative mt-4">
                <img src="../.../../landing-page/assets/img/about-2.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    </section><!-- /Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">URBAN PALATE</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Starters</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Breakfast</h4>
            </a><!-- End tab nav item -->

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Lunch</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Dinner</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Starters</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4> Special Adobo</h4>
                <p class="ingredients">
                  A national favorite!
                </p>
                <p class="price">
                  ₱ 99.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Sinigang</h4>
                <p class="ingredients">
                 A comforting sour soup.
                </p>
                <p class="price">
                    ₱ 119.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Lechon Kawali</h4>
                <p class="ingredients">
                  Crunchy pork perfection.
                </p>
                <p class="price">
                  ₱ 99.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Bicol Express</h4>
                <p class="ingredients">
                  Spicy and creamy!
                </p>
                <p class="price">
                   ₱ 79.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Chicken Inasal</h4>
                <p class="ingredients">
                 Grilled to perfection.
                </p>
                <p class="price">
                  ₱ 159.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Sisig Tacos</h4>
                <p class="ingredients">
                  Pork sisig in soft tacos 
                </p>
                <p class="price">
                  ₱ 149.00 
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Breakfast</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-6 - Copy.png" class="glightbox"><img src="assets/img/menu/menu-item-6 - Copy.png" class="menu-img img-fluid" alt=""></a>
                <h4>Tapsilog</h4>
                <p class="ingredients">
                  Beef Tapa+Garlic Rice+Fried Egg
                </p>
                <p class="price">
                   ₱ 89.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-5 - Copy.png" class="glightbox"><img src="assets/img/menu/menu-item-5 - Copy.png" class="menu-img img-fluid" alt=""></a>
                <h4> Longsilog </h4>
                <p class="ingredients">
                  Longganisa+Garlic Rice+Fried Egg
                </p>
                <p class="price">
                   ₱ 69.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-4 - Copy.png" class="glightbox"><img src="assets/img/menu/menu-item-4 - Copy.png" class="menu-img img-fluid" alt=""></a>
                <h4>Tocilog</h4>
                <p class="ingredients">
                  ocino+Garlic Rice+Fried Egg
                </p>
                <p class="price">
                    ₱ 79.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-3 - Copy.png" class="glightbox"><img src="assets/img/menu/menu-item-3 - Copy.png" class="menu-img img-fluid" alt=""></a>
                <h4>Bangsilog</h4>
                <p class="ingredients">
                  Bangus+Garlic Ric+Fried Egg
                </p>
                <p class="price">
                    ₱ 89.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-2 - Copy.png" class="glightbox"><img src="assets/img/menu/menu-item-2 - Copy.png" class="menu-img img-fluid" alt=""></a>
                <h4>Spamsilog</h4>
                <p class="ingredients">
                  Spam+Garlic Rice+Fried Egg
                </p>
                <p class="price">
                    ₱ 129.00 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-1 - Copy.png" class="glightbox"><img src="assets/img/menu/menu-item-1 - Copy.png" class="menu-img img-fluid" alt=""></a>
                <h4> Hotsilog</h4>
                <p class="ingredients">
                  Hotdog+Garlic Rice+Fried Egg
                </p>
                <p class="price">
                  ₱ 89.00 
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Lunch</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-7.jpg" class="glightbox"><img src="assets/img/menu/menu-item-7.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Bulalo</h4>
                <p class="ingredients">
                  Beef marrow soup with shanks, corn, cabbage,
                </p>
                <p class="price">
                 ₱ 89.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-8.jpg" class="glightbox"><img src="assets/img/menu/menu-item-8.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Kaldereta</h4>
                <p class="ingredients">
                  Tomato-based beef stew with liver spread and cheese
                </p>
                <p class="price">
                  ₱ 89.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-9.jpg" class="glightbox"><img src="assets/img/menu/menu-item-9.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Nilagang Baka</h4>
                <p class="ingredients">
                   Beef shank soup with corn, cabbage, and potatoes 
                </p>
                <p class="price">
                  ₱ 89.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-10.jpg" class="glightbox"><img src="assets/img/menu/menu-item-10.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Adobong Pusit </h4>
                <p class="ingredients">
                  Squid stewed in vinegar, soy sauce, and garlic
                </p>
                <p class="price">
                  ₱ 89.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-11.jpg" class="glightbox"><img src="assets/img/menu/menu-item-11.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Special Pinakbet</h4>
                <p class="ingredients">
                  Ilocano vegetable medley with bagoong and pork
                </p>
                <p class="price">
                  ₱ 69.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-12.jpg" class="glightbox"><img src="assets/img/menu/menu-item-12.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Chopsuey </h4>
                <p class="ingredients">
                  Stir-fried mixed vegetables with meat or shrimp
                </p>
                <p class="price">
                  ₱ 69.00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-13.png" class="glightbox"><img src="assets/img/menu/menu-item-13.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Pork Barbecue Skewers</h4>
                <p class="ingredients">
                  Marinated grilled pork on sticks, best with rice and atsara.
                </p>
                <p class="price">
                  ₱ 89.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-14.png" class="glightbox"><img src="assets/img/menu/menu-item-14.png" class="menu-img img-fluid" alt=""></a>
                <h4>Grilled Salmon with Vegetables </h4>
                <p class="ingredients">
                  Light yet flavorful, served with garlic butter.
                </p>
                <p class="price">
                  ₱ 219.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-15.png" class="glightbox"><img src="assets/img/menu/menu-item-15.png" class="menu-img img-fluid" alt=""></a>
                <h4>Chicken Curry</h4>
                <p class="ingredients">
                  Creamy coconut curry with potatoes and carrots.
                </p>
                <p class="price">
                  ₱ 149.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-16.png" class="glightbox"><img src="assets/img/menu/menu-item-16.png" class="menu-img img-fluid" alt=""></a>
                <h4>Roast Chicken with Potatoes</h4>
                <p class="ingredients">
                   Oven-roasted whole chicken with herbs and veggies.
                </p>
                <p class="price">
                  ₱ 169.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-17.png" class="glightbox"><img src="assets/img/menu/menu-item-17.png" class="menu-img img-fluid" alt=""></a>
                <h4>Garlic Butter Shrimp</h4>
                <p class="ingredients">
                  Pan-seared shrimp with butter, garlic, and parsley.
                </p>
                <p class="price">
                  ₱ 159.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../.../../landing-page/assets/img/menu/menu-item-18.png" class="glightbox"><img src="assets/img/menu/menu-item-18.png" class="menu-img img-fluid" alt=""></a>
                <h4>Stir-Fried Beef with Broccoli</h4>
                <p class="ingredients">
                   Quick Chinese-style dish with oyster sauce.
                </p>
                <p class="price">
                  ₱ 129.00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>RATINGS</h2>
        <p>What Are They <span class="description-title">Saying About URBAN PALATE </span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>A street market-style buffet with cuisines from around the world. Perfect for family dinner or celebrations..</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Chrysler Duaso</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../.../../landing-page/assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Creative Filipino dishes like Sizzling Sinigang and Oyster Sisig..</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Marc</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../.../../landing-page/assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>A modern Filipino fine dining experience using local ingredients with a global twist..</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Luna Redoble</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../.../../landing-page/assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span> Known for elevated Filipino comfort food like House Crispy Sisig and Sinigang na Beef Short.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Mark Niel Resaba</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../.../../landing-page/assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- Owmer Section -->
    <section id="owner" class="owner section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p><span>Our</span> <span class="description-title">Owner<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="../.../../landing-page/assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>OWNER</h4>
                <h3>Judy Durano</h3>
                <p> "Hands-on restaurateur dedicated to delivering unforgettable dining experiences."</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="../.../../landing-page/assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Manager</h4>
                <h3>Ritz Mariano</h3>
                <p>"Dedicated restaurant manager ensuring smooth daily operations and exceptional customer service."</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="../.../../landing-page/assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Front Staff / Cashier </h4>
                <h3>Rj Yangan</h3>
                <p>"Cashier and service crew dedicated to fast, accurate service and customer satisfaction."</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

        </div>

      </div>

    </section><!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Book A Table</h2>
        <p><span>Book Your</span> <span class="description-title">Stay With Us<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required="">
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              </div>

              <div class="text-center mt-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                <button type="submit">Book Now </button>
              </div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span></span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>South Poblacion City of Naga</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>0948 219 4398</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>Judy@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Opening Hours<br></h3>
                <p><strong>Mon-Sat:</strong> 8:00AM - 11:00PM <strong>Sunday:</strong> Closed</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        

      </div>

    </section><!-- /Contact Section -->

  </main>

  
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../.../../landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../.../../landing-page/assets/vendor/php-email-form/validate.js"></script>
  <script src="../.../../landing-page/assets/vendor/aos/aos.js"></script>
  <script src="../.../../landing-page/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../.../../landing-page/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../.../../landing-page/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../.../../landing-page/assets/js/main.js"></script>

</body>

</html>