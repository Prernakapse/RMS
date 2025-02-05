<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Restoran</title>
  <!-- Font Awesome (icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap (framework) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <!-- Slick Carousel (before custom styles to avoid conflicts) -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <!-- Custom Styles (should be last to override library styles) -->
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>" />

  <style>
    <?php $this->load->view('style') ?>
  </style>
</head>

<body>
  <!-- <div class="loader">
      <i class="fas fa-utensils loader-icone"></i>
      <p>Restoran</p>
      <div class="loader-ellipses">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div> -->

  <header>
    <div class="container header my-3 d-none d-lg-flex">
      <div class="logo">
        <a href="<?php echo base_url() . 'Home/Index'; ?>">
          <i class="fa fa-utensils me-3"></i>
          <h1 class="mb-0">Restoran</h1>
        </a>
      </div>
      <div class="menus">
        <ul class="d-flex mb-0">
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4" href="<?php echo base_url() . 'Home/Index'; ?>">Home</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4" href="<?php echo base_url('Home/About'); ?>">About</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4"
              href="<?php echo base_url() . 'Home/Reservation'; ?>">Reservation</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4" href="<?php echo base_url('Home/Menu'); ?>">Menu</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4"
              href="<?php echo base_url('Home/Contact'); ?>">Contact</a>
          </li>
        </ul>
      </div>
      <div class="icons">
        <a class="text-decoration-none" id="searchBtn" href="#">
          <i class="fa fa-search me-3"></i>
        </a>
        <a class="text-decoration-none" id="shoppingbutton" href="#">
          <i class="fa fa-shopping-bag me-3"></i>
        </a>
      </div>
    </div>

    <div class="d-flex justify-content-around py-3 align-items-center d-lg-none">
      <div id="hamburger">
        <i class="fa fa-2x fa-bars me-3 text-white"></i>
      </div>
      <div class="mobile-nav-logo">
        <div class="logo">
          <a href="./index">
            <i class="fa fa-utensils me-3"></i>
            <h1 class="mb-0">Restoran</h1>
          </a>
        </div>
      </div>
      <div class="mobile-nav-icons">
        <div class="icons">
          <a class="text-decoration-none" id="searchBtnMobile" href="#">
            <i class="fa fa-search me-3"></i>
          </a>
          <a class="text-decoration-none" id="shoppingbuttonMobile" href="#">
            <i class="fa fa-shopping-bag me-3"></i>
          </a>
        </div>
      </div>
      <div class="position-fixed w-75 bg-white h-100 top-0 start-0" id="mobile-menu">
        <div id="hamburger-cross" class="d-flex justify-content-end align-items-center py-2">
          <i class="fa fa-2x fa-plus me-3"></i>
        </div>
        <div class="menus">
          <ul class="d-flex flex-column ps-2 mb-0 mt-4">
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="#">Home</a>
            </li>
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4"
                href="<?php echo base_url() . 'Home/About'; ?>">About</a>
            </li>
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="./reservation">Reservation</a>
            </li>
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="./menu">Menu</a>
            </li>
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="./contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="search-bar d-none" id="search-container">
    <div class="close-btn" id="search-close-btn">
      <i class="fa fa-close"></i>
    </div>
    <div class="search-bar-wrapper">
      <input type="search" placeholder="Enter any text here..." />
      <div class="search-button">
        <a href="#"><i class="fa fa-search"></i></a>
      </div>
    </div>
  </div>

  <div class="shopping-cart">
    <div class="shopping-cart-header d-flex justify-content-between">
      <h2>Review your Cart</h2>
      <i class="fa fa-close"></i>
    </div>
    <div class="shopping-cart-body">
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <!-- <img src="./assets/images/product-2a.jpg" alt="" /> -->
          <img src="<?php echo base_url('assets/images/product-2a.jpg'); ?>" alt="" />

        </div>
        <div class="col-8">
          <h3>The Cracker Barrel's Country Boy Breakfast</h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center">$ 25.0</p>
        </div>
      </div>
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <img src="<?php echo base_url('assets/images/product-2b.jpg'); ?>" alt="" />

        </div>
        <div class="col-8">
          <h3>Old Timer's Meat Breakfast</h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center">$ 12.0</p>
        </div>
      </div>
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <!-- <img src="./assets/images/product-2c.jpg" alt="" /> -->
          <img src="<?php echo base_url('assets/images/product-2b.jpg'); ?>" alt="" />
        </div>
        <div class="col-8">
          <h3>Uncle Herschel's Favorite</h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center">$ 25.0</p>
        </div>
      </div>
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <!-- <img src="./assets/images/product-2d.jpg" alt="" /> -->

          <img src="<?php echo base_url('assets/images/product-2d.jpg'); ?>" />

        </div>
        <div class="col-8">
          <h3>Grandpa's Country Fried Breakfast</h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center">$ 30.0</p>
        </div>
      </div>
    </div>
    <div class="shopping-cart-footer">
      <div class="d-flex justify-content-between px-3 py-2">
        <div>
          <h2 class="mb-0">Subtotal</h2>
          <p class="mb-0">Shipping & taxes calculated at checkout</p>
        </div>
        <div class="d-flex align-items-end">
          <p class="footet-total-price mb-0">$ 92.0</p>
        </div>
      </div>
      <div class="d-flex justify-content-between px-2">
        <div class="footer-checkout">
          <div class="anim-layer"></div>
          <a href="#">Checkout</a>
        </div>
        <div class="footer-shopping">
          <div class="anim-layer"></div>
          <a href="#">Continue Shopping</a>
        </div>
      </div>
    </div>
  </div>

  <main>
    <section class="banner py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-6 banner-content pe-5" data-aos="fade-right" data-aos-delay="3000">
            <h1 class="display-2">
              Enjoy Our <br />
              Delicious Meal
            </h1>
            <p>
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
              sed stet lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="book-a-table">
              <div class="anim-layer"></div>
              <a href="#">Book a table</a>
            </div>
          </div>
          <div class="col-md-6 banner-img" data-aos="fade-left" data-aos-delay="3000">
            <!-- <img
                class="img img-fluid mt-5 mt-lg-0"
                src="<?php echo base_url('/assets/images/banner-img.png') ?>"
                alt=""
              /> -->
          </div>
        </div>
      </div>
    </section>

    <section class="services my-5 py-5">
      <div class="container">
        <div class="row gy-4">
          <div class="col-md-3">
            <div class="cards px-4 py-5" data-aos="fade-right">
              <div class="anim-layer"></div>
              <div class="icon">
                <i class="fa fa-3x fa-user-tie mb-4"></i>
              </div>
              <div class="heading">
                <h5>Master Chefs</h5>
              </div>
              <div class="para">
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="cards px-4 py-5" data-aos="fade-down">
              <div class="anim-layer"></div>
              <div class="icon">
                <i class="fa fa-3x fa-utensils mb-4"></i>
              </div>
              <div class="heading">
                <h5>Quality Food</h5>
              </div>
              <div class="para">
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="cards px-4 py-5" data-aos="fade-up">
              <div class="anim-layer"></div>
              <div class="icon">
                <i class="fa fa-3x fa-cart-plus mb-4"></i>
              </div>
              <div class="heading">
                <h5>Online Order</h5>
              </div>
              <div class="para">
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="cards px-4 py-5" data-aos="fade-left">
              <div class="anim-layer"></div>
              <div class="icon">
                <i class="fa fa-3x fa-headset mb-4"></i>
              </div>
              <div class="heading">
                <h5>24/7 Service</h5>
              </div>
              <div class="para">
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-us py-5 my-5">
      <div class="container">
        <div class="row gy-5 g-lg-5 align-items-center">
          <div class="col-lg-6 about-img-box">
            <div class="row g-3">
              <div class="col-6" data-aos="fade-right">
                <img class="img-fluid rounded w-100" src="<?php echo base_url() . 'assets/images/' ?>about-1.jpg" />
              </div>
              <div class="col-6 text-right" data-aos="fade-down">
                <img class="img-fluid rounded w-75" src="<?php echo base_url() . 'assets/images/' ?>about-2.jpg" />
              </div>
              <div class="col-6 text-end" data-aos="fade-right">
                <img class="img-fluid rounded w-75" src="<?php echo base_url() . 'assets/images/' ?>about-3.jpg" />

              </div>
              <div class="col-6 text-end" data-aos="fade-up">
                <img class="img-fluid rounded w-100" src="<?php echo base_url() . 'assets/images/' ?>about-4.jpg" />

              </div>
            </div>
          </div>
          <div class="col-lg-6 about-content" data-aos="fade-left">
            <h5 class="section-title">About Us</h5>
            <h2 class="mb-4 dis">
              Welcome to <i class="fa fa-utensils me-2"></i>Restoran
            </h2>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
              Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet
              lorem sit.
            </p>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
              sed stet lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="row g-4 mb-4 about-extra">
              <div class="col-sm-6">
                <div class="d-flex align-items-center px-3 about-experience">
                  <h1 class="flex-shrink-0 mb-0">15</h1>
                  <div class="ps-4">
                    <p class="mb-0">Years of</p>
                    <h6 class="text-uppercase mb-0">Experience</h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center px-3 about-popular">
                  <h1 class="flex-shrink-0 mb-0">50</h1>
                  <div class="ps-4">
                    <p class="mb-0">Popular</p>
                    <h6 class="text-uppercase mb-0">Master Chefs</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="book-a-table">
              <div class="anim-layer"></div>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-menu py-5 my-5">
      <div class="container">
        <div class="row" data-aos="fade-right">
          <div class="section-title text-center">
            <h5>Our Menu</h5>
            <h2 class="display-5 fw-bold">Tasty And Good Price</h2>
          </div>
        </div>
        <div class="row position-relative">
          <div data-aos="fade-left" class="slider slider-indicators-wrapper justify-content-center">
            <div class="slider-indicators">
              <div class="indicators-icon active text-center">
                <i class="fas fa-coffee fa-2x"></i>
              </div>
              <div class="indicators-title text-center">
                <h5>Breakfast</h5>
              </div>
            </div>
            <div class="slider-indicators">
              <div class="indicators-icon text-center">
                <i class="fas fa-utensils fa-2x"></i>
              </div>
              <div class="indicators-title text-center">
                <h5>Lunch</h5>
              </div>
            </div>
            <div class="slider-indicators">
              <div class="indicators-icon text-center">
                <i class="fas fa-hamburger fa-2x"></i>
              </div>
              <div class="indicators-title text-center">
                <h5>Dinner</h5>
              </div>
            </div>
            <div class="slider-indicators">
              <div class="indicators-icon text-center">
                <i class="fas fa-ice-cream fa-2x"></i>
              </div>
              <div class="indicators-title text-center">
                <h5>Desserts</h5>
              </div>
            </div>
            <div class="slider-indicators">
              <div class="indicators-icon text-center">
                <i class="fas fa-cocktail fa-2x"></i>
              </div>
              <div class="indicators-title text-center">
                <h5>Drink</h5>
              </div>
            </div>
          </div>
        </div>
        <div id="our-menus" class="slider" data-aos="fade-up">
          <div>
            <div class="row my-5 py-3">
              <div class="col-lg-5">
                <div class="pb-5 pb-lg-0">
                  <img width="90%" src="<?php echo base_url('assets/images/menu-slider-dessert.png'); ?>" alt="" />

                </div>
              </div>
              <div class="col-lg-7">
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">$</span>
                      25.0</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Uncle Herschel's Favorite</h5>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">$</span>
                      45.0</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Grandpa's Country Fried Breakfast</h5>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">$</span>
                      30.0</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Old Timer's Meat Breakfast</h5>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">$</span>
                      12.0</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Chinese Chicken Bread Spicy Soup</h5>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">$</span>
                      12.0</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row my-5 py-3">
                  <div class="col-lg-5">
                    <div class="pb-5 pb-lg-0">
                      <!-- <img width="90%" src="./assets/images/menu-slider-dinner.png" alt="" /> -->
                      <img width="90%" src="<?php echo base_url('assets/images/menu-slider-dinner.png'); ?>" alt="" />
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          25.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Uncle Herschel's Favorite</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          45.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Grandpa's Country Fried Breakfast</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          30.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Old Timer's Meat Breakfast</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          12.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Chinese Chicken Bread Spicy Soup</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          12.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row my-5 py-3">
                  <div class="col-lg-5">
                    <div class="pb-5 pb-lg-0">
                      <!-- <img width="90%" src="./assets/images/menu-slider-dessert.png" alt="" /> -->
                      <img width="90%" src="<?php echo base_url('assets/images/menu-slider-dessert.png'); ?>" alt="" />
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          25.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Uncle Herschel's Favorite</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          45.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Grandpa's Country Fried Breakfast</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          30.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Old Timer's Meat Breakfast</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          12.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Chinese Chicken Bread Spicy Soup</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          12.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row my-5 py-3">
                  <div class="col-lg-5">
                    <div class="pb-5 pb-lg-0">
                      <!-- <img width="90%" src="./assets/images/menu-slider-lunch.png" alt="" /> -->
                      <img width="90%" src="<?php echo base_url('assets/images/menu-slider-lunch.png'); ?>" alt="" />
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          25.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Uncle Herschel's Favorite</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          45.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Grandpa's Country Fried Breakfast</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          30.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Old Timer's Meat Breakfast</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          12.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Chinese Chicken Bread Spicy Soup</h5>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">$</span>
                          12.0</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

    <!-- <section class="testimonials py-5 my-5">
      <div class="container py-5">
        <div class="row" data-aos="fade-right">
          <div class="section-title text-center">
            <h5>Testimonial</h5>
            <h2 class="display-5 fw-bold">Our Customer Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="testimonial-slider-wrapper" data-aos="fade-up">
            <div class="slider-content pt-4 pb-4 mx-4">
              <div>
                <div class="testi-content">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Architecto vel ipsa dolore sunt vitae, culpa, dolor
                    reiciendis facilis sed blanditiis repellat incidunt
                    impedit iusto? Odio veniam beatae veritatis adipisci a!
                  </p>
                </div>
                <div class="testi-info">
                  <span class="name">Timothy Doe</span>
                  <span class="position">Customer</span>
                </div>
              </div>
              <div>
                <div class="testi-content">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Architecto vel ipsa dolore sunt vitae, culpa, dolor
                    reiciendis facilis sed blanditiis repellat incidunt
                    impedit iusto? Odio veniam beatae veritatis adipisci a!
                  </p>
                </div>
                <div class="testi-info">
                  <span class="name">Sarah Ruiz</span>
                  <span class="position">Director</span>
                </div>
              </div>
              <div>
                <div class="testi-content">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Architecto vel ipsa dolore sunt vitae, culpa, dolor
                    reiciendis facilis sed blanditiis repellat incidunt
                    impedit iusto? Odio veniam beatae veritatis adipisci a!
                  </p>
                </div>
                <div class="testi-info">
                  <span class="name">Tracey Lewis</span>
                  <span class="position">Designer</span>
                </div>
              </div>
              <div>
                <div class="testi-content">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Architecto vel ipsa dolore sunt vitae, culpa, dolor
                    reiciendis facilis sed blanditiis repellat incidunt
                    impedit iusto? Odio veniam beatae veritatis adipisci a!
                  </p>
                </div>
                <div class="testi-info">
                  <span class="name">Jamie Erickson</span>
                  <span class="position">Manager</span>
                </div>
              </div>
            </div>
            <div class="slider-nav-wrapper mx-5">
              <div class="slider-nav">
                <div class="slider-nav-img active">
                  <img src="<?php echo base_url('assets/images/testi-1.jpg'); ?>" alt="" />
                </div>
                <div class="slider-nav-img">
                  <img src="<?php echo base_url('assets/images/testi-2.jpg'); ?>" alt="" />
                </div>
                <div class="slider-nav-img">
                  <img src="<?php echo base_url('assets/images/testi-3.jpg'); ?>" alt="" />
                </div>
                <div class="slider-nav-img">
                  <img src="<?php echo base_url('assets/images/testi-4.jpg'); ?>" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="testimonials py-5 my-5">
        <div class="container py-5">
          <div class="row" data-aos="fade-right">
            <div class="section-title text-center">
              <h5>Testimonial</h5>
              <h2 class="display-5 fw-bold">Our Customer Says</h2>
            </div>
          </div>
          <div class="row">
            <div class="testimonial-slider-wrapper" data-aos="fade-up">
              <div class="slider-content pt-4 pb-4 mx-4">
                <div>
                  <div class="testi-content">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Architecto vel ipsa dolore sunt vitae, culpa, dolor
                      reiciendis facilis sed blanditiis repellat incidunt
                      impedit iusto? Odio veniam beatae veritatis adipisci a!
                    </p>
                  </div>
                  <div class="testi-info">
                    <span class="name">Timothy Doe</span>
                    <span class="position">Customer</span>
                  </div>
                </div>
                <div>
                  <div class="testi-content">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Architecto vel ipsa dolore sunt vitae, culpa, dolor
                      reiciendis facilis sed blanditiis repellat incidunt
                      impedit iusto? Odio veniam beatae veritatis adipisci a!
                    </p>
                  </div>
                  <div class="testi-info">
                    <span class="name">Sarah Ruiz</span>
                    <span class="position">Director</span>
                  </div>
                </div>
                <div>
                  <div class="testi-content">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Architecto vel ipsa dolore sunt vitae, culpa, dolor
                      reiciendis facilis sed blanditiis repellat incidunt
                      impedit iusto? Odio veniam beatae veritatis adipisci a!
                    </p>
                  </div>
                  <div class="testi-info">
                    <span class="name">Tracey Lewis</span>
                    <span class="position">Designer</span>
                  </div>
                </div>
                <div>
                  <div class="testi-content">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Architecto vel ipsa dolore sunt vitae, culpa, dolor
                      reiciendis facilis sed blanditiis repellat incidunt
                      impedit iusto? Odio veniam beatae veritatis adipisci a!
                    </p>
                  </div>
                  <div class="testi-info">
                    <span class="name">Jamie Erickson</span>
                    <span class="position">Manager</span>
                  </div>
                </div>
              </div>
              <div class="slider-nav-wrapper mx-5">
                <div class="slider-nav">
                  <div class="slider-nav-img active">
                    <img src="<?php echo base_url('assets/images/testi-1.jpg') ?>" alt="" />
                  </div>
                  <div class="slider-nav-img">
                    <img src="<?php echo base_url('assets/images/testi-2.jpg') ?>" alt="" />
                  </div>
                  <div class="slider-nav-img">
                    <img src="<?php echo base_url('assets/images/testi-3.jpg') ?>" alt="" />
                  </div>
                  <div class="slider-nav-img">
                    <img src="<?php echo base_url('assets/images/testi-4.jpg') ?>" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <section class="our-chefs py-5">
      <div class="container">
        <div class="row" data-aos="fade-right">
          <div class="section-title text-center">
            <h5>Meet Our</h5>
            <h2 class="display-6 fw-bold">Awesome Master Chefs</h2>
          </div>
        </div>

        <div class="row our-chef-slider-wrapper py-5" data-aos="fade-left">
          <div class="col-lg-4">
            <div class="our-chef-slider d-flex flex-column align-items-center gap-4">
              <img width="200px" src="<?php echo base_url('assets/images/team-1.png'); ?>" alt="" />
              <div class="chef-slider-content">
                <h5 class="text-center d-block">Teresa Doe</h5>
                <p class="text-center mb-0">Head Chef</p>
                <div class="d-flex justify-content-center">
                  <hr class="w-25 my-2" />
                </div>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li class="mx-2">
                    <a href="https://www.facebook.com" target="_blank" class="text-white">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.instagram.com" target="_blank" class="text-white">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.twitter.com" target="_blank" class="text-white">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.linkedin.com" target="_blank" class="text-white">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="our-chef-slider d-flex flex-column align-items-center gap-4">
              <img width="200px" src="<?php echo base_url('assets/images/team-2.png'); ?>" alt="" />
              <div class="chef-slider-content">
                <h5 class="text-center d-block">Teresa Doe</h5>
                <p class="text-center mb-0">Head Chef</p>
                <div class="d-flex justify-content-center">
                  <hr class="w-25 my-2" />
                </div>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li class="mx-2">
                    <a href="https://www.facebook.com" target="_blank" class="text-white">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.instagram.com" target="_blank" class="text-white">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.twitter.com" target="_blank" class="text-white">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.linkedin.com" target="_blank" class="text-white">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="our-chef-slider d-flex flex-column align-items-center gap-4">
              <img width="200px" src="<?php echo base_url('assets/images/team-3.png'); ?>" alt="" />
              <div class="chef-slider-content">
                <h5 class="text-center d-block">Teresa Doe</h5>
                <p class="text-center mb-0">Head Chef</p>
                <div class="d-flex justify-content-center">
                  <hr class="w-25 my-2" />
                </div>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li class="mx-2">
                    <a href="https://www.facebook.com" target="_blank" class="text-white">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.instagram.com" target="_blank" class="text-white">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.twitter.com" target="_blank" class="text-white">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.linkedin.com" target="_blank" class="text-white">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="our-chef-slider d-flex flex-column align-items-center gap-4">
              <img width="200px" src="<?php echo base_url('assets/images/team-4.png'); ?>" alt="" />
              <div class="chef-slider-content">
                <h5 class="text-center d-block">Teresa Doe</h5>
                <p class="text-center mb-0">Head Chef</p>
                <div class="d-flex justify-content-center">
                  <hr class="w-25 my-2" />
                </div>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li class="mx-2">
                    <a href="https://www.facebook.com" target="_blank" class="text-white">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.instagram.com" target="_blank" class="text-white">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.twitter.com" target="_blank" class="text-white">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="https://www.linkedin.com" target="_blank" class="text-white">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="reservation">
      <img class="d-md-none d-lg-block" src="./assets/images/find-a-table.png" alt="" />
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 py-5 reservation-content px-5" data-aos="fade-right">
            <div class="reservation-column py-5 px-3">
              <h2 class="text-center text-white display-6 fw-bold">
               Services and Facilities
              </h2><br><br>
              <p class="text-center text-white fs-4">
                Takeout & Delivery: Availability of food delivery or takeout services.
                <br><br>
                Parking: Details about parking availability
                <br>(e.g., on-site parking, street parking, valet).<br><br>
                Wi-Fi: If the restaurant offers free Wi-Fi for customers.
                <br><br>
                Pet-Friendly: Whether pets are allowed or if there are outdoor seating areas for pets.

              </p>
              <div class="container mt-5">
    
    <form action="<?= base_url('booking/submit'); ?>" method="post">
    <div class="row mt-3">
        <div class="col-12 col-lg-6">
            
        </div>
        <div class="col-12 col-lg-6">
            
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-lg-6">
            <div class="input-group">
              </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="input-group">
             </div>
        </div>
    </div>

</form>

</div>
              
            </div>
          </div>
          <div class="col-lg-6 d-none d-md-block reservation-bg" data-aos="fade-left"></div>
        </div>
      </div>
    </section>

    <section class="our-services py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="section-title text-center" data-aos="fade-right">
            <h5>Our Service</h5>
            <h2 class="display-6 fw-bold">What We Focus On</h2>
          </div>
        </div>
        <div class="row pt-5">
          <div data-aos="fade-up-right"
            class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
            <div class="icon-box">
              <i class="fas fa-utensils fa-2x"></i>
              <span class="number">1</span>
            </div>
            <h4>Reservation</h4>
            <p class="text-center">
              Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod
              incididunt utote labore et
            </p>
          </div>
          <div data-aos="fade-down"
            class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
            <div class="icon-box">
              <i class="fas fa-wine-glass-alt fa-2x"></i>
              <span class="number">2</span>
            </div>
            <h4>Private Event</h4>
            <p class="text-center">
              Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod
              incididunt utote labore et
            </p>
          </div>
          <div data-aos="fade-up"
            class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
            <div class="icon-box">
              <i class="fas fa-laptop-house fa-2x"></i>
              <span class="number">3</span>
            </div>
            <h4>Online Order</h4>
            <p class="text-center">
              Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod
              incididunt utote labore et
            </p>
          </div>
          <div data-aos="fade-up-left"
            class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
            <div class="icon-box">
              <i class="fas fa-motorcycle fa-2x"></i>
              <span class="number">4</span>
            </div>
            <h4>Fast Delivery</h4>
            <p class="text-center">
              Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod
              incididunt utote labore et
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="our-gallery pt-5">
      <div class="container-fluid pt-5">
        <div class="row">
          <div class="section-title text-center" data-aos="fade-right">
            <h5>Our Gallery</h5>
            <h2 class="text-white display-6 fw-bold">Fooday Hot Dishes</h2>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-3 p-0">
            <div data-aos="fade-down-right" class="gallery-image gallery-image-one"></div>
          </div>
          <div class="col-md-6 p-0">
            <div class="row m-0">
              <div class="col-md-8 p-0">
                <div data-aos="fade-down" class="gallery-image-two"></div>
              </div>
              <div class="col-md-4 p-0">
                <div data-aos="fade-down" class="gallery-image-three"></div>
              </div>
            </div>
            <div class="row m-0">
              <div class="col-md-4 p-0">
                <div data-aos="fade-up" class="gallery-image-five"></div>
              </div>
              <div class="col-md-8 p-0">
                <div data-aos="fade-up" class="gallery-image-six"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-0">
            <div data-aos="fade-up-left" class="gallery-image gallery-image-four"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-blog pt-5 my-5">
      <div class="container">
        <div class="row">
          <div class="section-title text-center" data-aos="fade-right">
            <h5>Updated from</h5>
            <h2 class="display-6 fw-bold">Our Featured Blog</h2>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="card" data-aos="fade-up-right">
              <div class="blog-info d-flex py-3">
                <div class="blog-view px-3">
                  <i class="fas fa-eye"></i>
                  <span>18</span>
                </div>
                <div class="blog-comment px-3">
                  <i class="fas fa-comment"></i>
                  <span>18</span>
                </div>
                <div class="blog-author">
                  <p class="mb-0 ps-3">Post By Admin</p>
                </div>
              </div>
              <div class="blog-featured-img">
                <img class="w-100" src="<?php echo base_url('assets/images/blog-grid-1.jpg'); ?>" alt="" />
              </div>
              <div class="blog-content px-4 pt-5 pb-4 position-relative">
                <div class="blog-date">
                  <span class="day">12</span>
                  <span class="month">Jun</span>
                </div>
                <h3 class="blog-title">
                  <a href="javascript:void(0)">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                </h3>
                <p class="blog-description">
                  Lorem ipsum dolor sit amet, consectetur, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="blog-readmore text-end">
                  <a class="text-black text-decoration-none" href="javascript:void(0)">
                    Read More
                    <i class="fa fa-angle-double-right"> </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="card" data-aos="fade-down">
              <div class="blog-info d-flex py-3">
                <div class="blog-view px-3">
                  <i class="fas fa-eye"></i>
                  <span>18</span>
                </div>
                <div class="blog-comment px-3">
                  <i class="fas fa-comment"></i>
                  <span>18</span>
                </div>
                <div class="blog-author">
                  <p class="mb-0 ps-3">Post By Admin</p>
                </div>
              </div>
              <div class="blog-featured-img">
                <!-- <img class="w-100" src="./assets/images/blog-grid-1-1.jpg" alt="" /> -->
                <img class="w-100" src="<?php echo base_url('assets/images/blog-grid-1-1.jpg'); ?>" alt="" />

              </div>
              <div class="blog-content px-4 pt-5 pb-4 position-relative">
                <div class="blog-date">
                  <span class="day">12</span>
                  <span class="month">Jun</span>
                </div>
                <h3 class="blog-title">
                  <a href="javascript:void(0)">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                </h3>
                <p class="blog-description">
                  Lorem ipsum dolor sit amet, consectetur, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="blog-readmore text-end">
                  <a class="text-black text-decoration-none" href="javascript:void(0)">
                    Read More
                    <i class="fa fa-angle-double-right"> </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="card" data-aos="fade-up-left">
              <div class="blog-info d-flex py-3">
                <div class="blog-view px-3">
                  <i class="fas fa-eye"></i>
                  <span>18</span>
                </div>
                <div class="blog-comment px-3">
                  <i class="fas fa-comment"></i>
                  <span>18</span>
                </div>
                <div class="blog-author">
                  <p class="mb-0 ps-3">Post By Admin</p>
                </div>
              </div>
              <div class="blog-featured-img">
                <!-- <img class="w-100" src="./assets/images/blog-grid-1-2.jpg" alt="" /> -->
                <img class="w-100" src="<?php echo base_url('assets/images/blog-grid-1-2.jpg'); ?>" alt="" />
              </div>
              <div class="blog-content px-4 pt-5 pb-4 position-relative">
                <div class="blog-date">
                  <span class="day">12</span>
                  <span class="month">Jun</span>
                </div>
                <h3 class="blog-title">
                  <a href="javascript:void(0)">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                </h3>
                <p class="blog-description">
                  Lorem ipsum dolor sit amet, consectetur, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="blog-readmore text-end">
                  <a class="text-black text-decoration-none" href="javascript:void(0)">
                    Read More
                    <i class="fa fa-angle-double-right"> </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5"></div>
      </div>
    </section>

    <section class="subscribe-us pb-5 mb-5">
      <img class="d-none d-lg-block" src="./assets/images/subscribe-us.png" alt="" data-aos="fade-down-right" />
      <div class="container">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8 d-flex flex-column flex-md-row align-items-lg-center">
            <div class="content" data-aos="fade-right">
              <h5 class="display-6 text-black">Subcribe Us Now</h5>
              <p>Get more news and delicious dishes everyday from us</p>
            </div>
            <div class="subscribe-form d-flex ps-0 ms-0 ps-lg-5 ms-lg-5" data-aos="fade-left">
              <div class="input-form w-100">
                <input class="border-0 px-3 w-100" type="email" placeholder="Email" />
              </div>
              <div class="input-button">
                <a class="text-decoration-none" href="#">
                  <i class="fa fa-paper-plane"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <a href="#" id="back-to-top">
    <i class="fa-solid fa-angles-up"></i>
  </a>

  <footer>
    <div class="container">
      <div class="row">
        <div class="footer-content col-xl-8 px-4">
          <div class="row">
            <div class="col-lg-6 px-0">
              <div class="logo" data-aos="fade-down-right">
                <a href="./index">
                  <i class="fa fa-utensils me-3"></i>
                  <h1 class="mb-0">Restoran</h1>
                </a>
              </div>
            </div>
            <div data-aos="fade-down"
              class="col-lg-6 pt-4 pt-lg-0 d-flex align-items-center justify-content-start justify-content-lg-end">
              <div class="social-icons d-flex">
                <ul class="d-flex mb-0 ps-0">
                  <li class="mx-2">
                    <a class="text-decoration-none text-white" href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li class="mx-2">
                    <a class="text-decoration-none text-white" href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="mx-2">
                    <a class="text-decoration-none text-white" href="#"><i class="fab fa-pinterest"></i></a>
                  </li>
                  <li class="mx-2">
                    <a class="text-decoration-none text-white" href="#"><i class="fab fa-google-plus"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row pt-5 content-desc" data-aos="fade-right">
            <p class="px-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.
            </p>
          </div>
          <div class="row" data-aos="fade-right">
            <div class="d-flex flex-column flex-lg-row px-0 justify-content-between">
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-location-dot text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
                    157 White Oak Drive Kansas City <br />
                    689 Lynn Street South Boston
                  </p>
                </div>
              </div>
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-mobile text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
                    (617)-276-8031 <br />
                    (617)-276-8031
                  </p>
                </div>
              </div>
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-envelope text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
                    admin@fooday.com <br />
                    support@fooday.com
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="reservation-box" data-aos="fade-down-left">
            <div class="reservation-wrapper">
              <h2>Open Hour</h2>
              <div class="reservation-date-time">
                <p>Tuesday: .......................... 7AM - 9PM</p>
                <p>Wednesday: ..................... 7AM - 9PM</p>
                <p>Thursday: ......................... 7AM - 9PM</p>
                <p>Friday: ............................... 7AM - 9PM</p>
                <p>Saturday: ........................... 7AM - 9PM</p>
                <p>Sunday: ............................. 7AM - 9PM</p>
                <p>Monday: ............................. Close</p>
              </div>
              <h2 class="pb-2">Reservation Numbers</h2>
              <h3>(617)-276-8031</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <p class="text-center pt-4 mt-3 pt-lg-0">
          &copy; <span id="copyrightCurrentYear"></span> <b> Restoran.</b> All
          rights reserved. Design by
          <a href="https://www.linkedin.com/in/codewithshabbir/" class="fw-bold author-name">Muhammad Shabbir</a>
        </p>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- <script src="./assets/js/script.js"></script> -->
  <script src="<?php echo base_url('assets/script.js'); ?>"></script>

</body>

</html>