<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<<<<<<< HEAD
  <title>Restoran</title>
=======
  <title>Dinsphere</title>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
<<<<<<< HEAD
      <p>Restoran</p>
=======
      <p>Restaurant</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
<<<<<<< HEAD
          <h1 class="mb-0">Restaurant</h1>
=======
          <h1 class="mb-0">Dinsphere</h1>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
<<<<<<< HEAD
            <h1 class="mb-0">Restaurant</h1>
=======
            <h1 class="mb-0">Dinsphere</h1>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
          <h3>aaa</h3>
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
          <h3>bb</h3>
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
          <h3>ccc</h3>
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
<<<<<<< HEAD

        </div>
=======
        </div>


>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
        <div class="col-8">
          <h3>dd</h3>
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
<<<<<<< HEAD
            Experience the perfect blend of flavors and aromas at our restaurant, 
=======
            Experience the perfect blend of flavors and aromas at our DineSphere Resstaurant, 
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
            where every dish is crafted with passion and authenticity. Indulge in 
            a delightful dining experience with fresh ingredients and a warm ambiance.
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
                Our expert chefs bring years of culinary experience to craft exquisite dishes with authentic flavors and high-quality ingredients.
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
                We take pride in serving fresh, delicious, and hygienically prepared meals that satisfy your taste buds with every bite.
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
                Enjoy your favorite meals from the comfort of your home with our easy and convenient online ordering system.
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
<<<<<<< HEAD
                Our restaurant is open round the clock to serve you delicious meals at any hour, ensuring you never go hungry, day or night.
=======
                Our Dinsphere restaurant is open round the clock to serve you delicious meals at any hour, ensuring you never go hungry, day or night.
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
<<<<<<< HEAD
              Welcome to <i class="fa fa-utensils me-2"></i>Restaurant
            </h2>
            <p class="mb-4">
            Welcome to our restaurant, where passion meets flavor! We take 
=======
              Welcome to <i class="fa fa-utensils me-2"></i>Dinsphere
            </h2>
            <p class="mb-4">
            Welcome to our Dinsphere restaurant, where passion meets flavor! We take 
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
            pride in serving mouthwatering dishes made with the freshest 
            ingredients, bringing you an unforgettable dining experience.
            </p>
            <p class="mb-4">
            Our warm and inviting ambiance, paired with exceptional hospitality,
            ensures that every visit feels special. From casual dining to celebrations,
            we are here to make your moments delightful.
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
<<<<<<< HEAD
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
=======
        

>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
        <div id="our-menus" class="slider" data-aos="fade-up">
          <div>
            <div class="row my-5 py-3">
              <div class="col-lg-5">
                <div class="pb-5 pb-lg-0">
<<<<<<< HEAD
                  <img width="90%" src="<?php echo base_url('assets/images/menu-slider-dessert.png'); ?>" alt="" />

=======
                  <img width="90%" src="<?php echo base_url('assets/images/breakfast.png'); ?>" alt="" />
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                </div>
              </div>
              <div class="col-lg-7">
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
<<<<<<< HEAD
                    <h5>Gulab Jamun</h5>
                    <p>
                    Soft, round dumplings made from milk solids, deep-fried to perfection, and soaked in a warm, sweet sugar syrup
                    </p>
=======
                    <h5>Masala Dosa</h5>
                    <p>
                    Crispy, thin rice crepe filled with a spiced potato mixture, served with coconut chutney and tangy sambar.                    </p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
                      80</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
<<<<<<< HEAD
                    <h5>Rasgulla</h5>
                    <p>
                    Delicate, spongy, and mouth-watering white cheese balls soaked in a light sugar syrup.
=======
                    <h5>Poha</h5>
                    <p>
                    Light and flavorful rice flakes sautéed with mustard seeds, turmeric, and veggies, garnished with fresh coriander and peanuts.
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
<<<<<<< HEAD
                      80</span>
=======
                      30</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
<<<<<<< HEAD
                    <h5>Gajar Halwa</h5>
                    <p>
                    A warm and delicious pudding made from grated carrots, milk, sugar, and ghee, 
                    topped with dry fruits. It's a rich and comforting dessert, perfect for any occasion.
=======
                    <h5>Upma</h5>
                    <p>
                    Savory semolina dish cooked with vegetables, mustard seeds, 
                    and curry leaves, offering a wholesome start to your day.
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
                      50</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Idli</h5>
                    <p>
                    Soft and fluffy steamed rice cakes, served with coconut chutney and
                    spicy sambar for a healthy breakfast option.
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
                      50</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Misal Pav</h5>
                    <p>
                    Spicy sprouts curry served with soft bread rolls, a hearty and flavorful breakfast from Maharashtra.
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
                      70</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
<<<<<<< HEAD
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Fruit Custard</h5>
                    <p>
                    A creamy, refreshing dessert made with a mix of fresh fruits and sweetened vanilla
                     custard, perfect for a light, delicious treat.
=======
              </div>
              <div>



              <div id="our-menus" class="slider" data-aos="fade-up">
          <div>
            <div class="row my-5 py-3">
              <div class="col-lg-5">
                <div class="pb-5 pb-lg-0">
                  <img width="90%" src="<?php echo base_url('assets/images/lunch.jpg'); ?>" alt="" />
                </div>
              </div>
              <div class="col-lg-7">
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Paneer Butter Masala</h5>
                    <p>
                    A rich and creamy curry made with paneer cubes simmered in a spiced tomato-based gravy.
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
<<<<<<< HEAD
                      65</span>
=======
                      130</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
<<<<<<< HEAD
                    <h5>Ice-cream</h5>
=======
                    <h5>Aloo Paratha</h5>
                    <p>
                    Soft whole wheat flatbread stuffed with spiced mashed potatoes, served with curd and pickle.
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
                      80</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Veg Pulao</h5>
                    <p>
                    A flavorful rice dish made with seasonal vegetables and mild spices, perfect for a light meal.
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
                      90</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Butter Naan</h5>
                    <p>
                    Soft, buttery flatbread baked in a tandoor, perfect for pairing with curries and gravies.
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
                      60</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
                <div class="item-wrapper d-flex justify-content-between">
                  <div class="item-left">
                    <h5>Dum Aloo</h5>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    <p>
                    A creamy, frozen dessert available in a variety of flavors, perfect for a refreshing treat any time of the day.
                    </p>
                  </div>
                  <div class="item-right">
                    <span class="item-price">
                      <span class="price-symbol">Rs</span>
                      50</span>
                    <div class="item-btn">
                      <a href="#">Order</a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
<<<<<<< HEAD
                <div class="row my-5 py-3">
                  <div class="col-lg-5">
                    <div class="pb-5 pb-lg-0">
                      <!-- <img width="90%" src="./assets/images/menu-slider-dinner.png" alt="" /> -->
                      <img width="90%" src="<?php echo base_url('assets/images/lunch.jpg'); ?>" alt="" />
=======





                <div class="row my-5 py-3">
                  <div class="col-lg-5">
                    <div class="pb-5 pb-lg-0">
                      <!-- <img width="90%" src="./assets/images/menu-slider-dinner.jpg" alt="" /> -->
                      <img width="90%" src="<?php echo base_url('assets/images/Dine.png'); ?>" alt="" />
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Paneer Butter Masala</h5>
                        <p>
                        A rich and creamy curry made with soft paneer cubes, cooked in a flavorful tomato-based sauce.
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          150</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Dal Tadka </h5>
                        <p>
                        Lentils cooked with aromatic spices and topped with a sizzling tempering of ghee, garlic, and cumin.
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          120</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Vegetable Biryani</h5>
                        <p>
                        Fragrant basmati rice cooked with mixed vegetables and a blend of aromatic spices, served with raita.
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                           110</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Chole Bhature </h5>
                        <p>
                        Spicy and tangy chickpea curry served with deep-fried fluffy bread, perfect for a hearty meal.
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          120</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Tandoori Roti</h5>
                        <p>
                        Soft, round whole wheat bread baked in a tandoor, perfect to accompany any curry or dip.
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                           50</span>
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
<<<<<<< HEAD
                      <img width="90%" src="<?php echo base_url('assets/images/lunch.jpg'); ?>" alt="" />
=======
                      <img width="90%" src="<?php echo base_url('assets/images/cake.jpg'); ?>" alt="" />
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
<<<<<<< HEAD
                        <h5>Paneer Butter Masala</h5>
                        <p>
                        A rich and creamy curry made with paneer cubes simmered in a spiced tomato-based gravy.
                        </p>
=======
                        <h5> Gulab Jamun</h5>
                        <p>
                        Soft, deep-fried khoya dumplings soaked in fragrant rose-flavored sugar syrup. Served warm 
                        for a melt-in-the-mouth experience.
</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
<<<<<<< HEAD
                          130</span>
=======
                          50</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
<<<<<<< HEAD
                        <h5>Aloo Paratha</h5>
                        <p>
                        Soft whole wheat flatbread stuffed with spiced mashed potatoes, served with curd and pickle.
                        </p>
=======
                        <h5>Rasmalai </h5>
                        <p>
                        Delicate, spongy cottage cheese discs soaked in rich, saffron-infused milk, garnished with slivered 
                        almonds and pistachios.</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          80</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
<<<<<<< HEAD
                        <h5>Veg Pulao</h5>
                        <p>
                        A flavorful rice dish made with seasonal vegetables and mild spices, perfect for a light meal.
                        </p>
=======
                        <h5>Choco Lava Cake </h5>
                        <p>
                        A warm, soft chocolate cake with a gooey molten chocolate center, served with a scoop of vanilla ice cream for
                         the perfect contrast of hot and cold.</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
<<<<<<< HEAD
                          90</span>
=======
                          70</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
<<<<<<< HEAD
                        <h5>Butter Naan</h5>
                        <p>
Soft, buttery flatbread baked in a tandoor, perfect for pairing with curries and gravies.
                        </p>
=======
                        <h5>Caramel Custard Pudding</h5>
                        <p>
                        A smooth and silky caramel custard with a rich caramel glaze on top, offering a melt-in-your-mouth experience 
                        with every spoonful.</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          60</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
<<<<<<< HEAD
                        <h5>Dum Aloo</h5>
                        <p>
                        Baby potatoes cooked in a rich, aromatic tomato-based gravy, 
                        a flavorful dish that pairs perfectly with rice or roti.
=======
                        <h5>Berry Bliss Cheesecake </h5>
                        <p>
                        A creamy New York-style cheesecake topped with a tangy mixed berry compote, served on a buttery biscuit base 
                        for a delightful balance of sweet and tart flavors.
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          100</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<<<<<<< HEAD
              <div>
                <div class="row my-5 py-3">
                  <div class="col-lg-5">
                    <div class="pb-5 pb-lg-0">
                      <!-- <img width="90%" src="./assets/images/menu-slider-lunch.png" alt="" /> -->
                      <img width="90%" src="<?php echo base_url('assets/images/breakfast.png'); ?>" alt="" />
=======
             
              <div class="row my-5 py-3">
                  <div class="col-lg-5">
                    <div class="pb-5 pb-lg-0">
                      <!-- <img width="90%" src="./assets/images/menu-slider-lunch.png" alt="" /> -->
                      <img width="90%" src="<?php echo base_url('assets/images/drinks.png'); ?>" alt="" />
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
<<<<<<< HEAD
                        <h5>Masala Dosa</h5>
                        <p>
                        Crispy, thin rice crepe filled with a spiced potato mixture, served with coconut chutney and tangy sambar.</p>
                      </div>
=======
                        <h5>Berry Bliss Mocktail</h5>
                        <p>
                        A refreshing blend of mixed berries, mint, and freshly squeezed lime, topped with sparkling soda for
                         a burst of fruity goodness.</div>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          80</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
<<<<<<< HEAD
                        <h5> Poha</h5>
                        <p>
                        Light and flavorful rice flakes sautéed with mustard seeds, turmeric,
                         and veggies, garnished with fresh coriander and peanuts.
=======
                        <h5> Cold Coffee</h5>
                        <p>
                        Smooth, creamy, and perfectly sweetened, our cold coffee is blended with premium espresso and chilled 
                        milk, topped with a hint of cocoa.


>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
<<<<<<< HEAD
                          30</span>
=======
                          90</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
<<<<<<< HEAD
                        <h5>Upma</h5>
                        <p>
                        Savory semolina dish cooked with vegetables, mustard seeds, 
                        and curry leaves, offering a wholesome start to your day.
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          50</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5> Idli</h5>
                        <p>
                        Soft and fluffy steamed rice cakes, served with coconut chutney and
                        spicy sambar for a healthy breakfast option.
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          60</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Misal Pav </h5>
                        <p>
                        Spicy sprouts curry served with soft bread rolls, a hearty and flavorful breakfast from Maharashtra.
=======
                        <h5>Mango Tango Smoothie</h5>
                        <p>
                        A tropical delight made with ripe mangoes, yogurt, and a splash of orange juice for a creamy, 
                        refreshing summer treat.
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          70</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
<<<<<<< HEAD
=======
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>  Lemon Iced Tea</h5>
                        <p>
                        A crisp and revitalizing iced tea infused with fresh lemon juice and a touch of honey, served 
                        over ice for ultimate refreshment.
                        </p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          40</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
                    <div class="item-wrapper d-flex justify-content-between">
                      <div class="item-left">
                        <h5>Special Hot Chocolate</h5>
                        <p>
                        Indulgent, rich hot chocolate made with premium dark cocoa, steamed milk, and topped with 
                        whipped cream and choco shavings.</p>
                      </div>
                      <div class="item-right">
                        <span class="item-price">
                          <span class="price-symbol">Rs</span>
                          50</span>
                        <div class="item-btn">
                          <a href="#">Order</a>
                        </div>
                      </div>
                    </div>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
<<<<<<< HEAD
                    "Absolutely loved the food at Restaurant! The Paneer Butter 
=======
                    "Absolutely loved the food at Dinsphere Restaurant! The Paneer Butter 
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                     Masala was rich and flavorful, and the service was quick. Highly 
                     recommend this place for a great dining experience!"
                    </p>
                  </div>
                  <div class="testi-info">
                    <span class="name">Ravi Kumar</span>
                    <span class="position">Customer</span>
                  </div>
                </div>
                <div>
                  <div class="testi-content">
                    <p>
                    "The food here is delicious, especially the Gajar Halwa. 
                     The ambiance is cozy, and the staff is polite. Would definitely 
                     come back again for more."
                    </p>
                  </div>
                  <div class="testi-info">
                    <span class="name">Ankita Sharma</span>
                    <span class="position">Director</span>
                  </div>
                </div>
                <div>
                  <div class="testi-content">
                    <p>
<<<<<<< HEAD
                    "I had a wonderful time at this Restaurant! The Chole Bhature was 
=======
                    "I had a wonderful time at this Dinsphere Restaurant! The Chole Bhature was 
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                     simply divine, and the staff made us feel at home. I’ll definitely
                     be bringing my friends here soon!"


                    </p>
                  </div>
                  <div class="testi-info">
                    <span class="name">Priya Desai</span>
                    <span class="position">Designer</span>
                  </div>
                </div>
                <div>
                  <div class="testi-content">
                    <p>
                    "Best breakfast I’ve had in a while! The Masala Dosa was 
                    crispy and the chutneys were amazing. A perfect start to my 
                    day, and the service was excellent!"
                    </p>
                  </div>
                  <div class="testi-info">
                    <span class="name">Amit Verma</span>
                    <span class="position">Manager</span>
                  </div>
                </div>
              </div>
              <div class="slider-nav-wrapper mx-5">
                <div class="slider-nav">
                  <div class="slider-nav-img active">
                    <img src="<?php echo base_url('assets/images/testi-1.jpg') ?>" alt="1" />
                  </div>
                  <div class="slider-nav-img">
                    <img src="<?php echo base_url('assets/images/testi-2.jpg') ?>" alt="2" />
                  </div>
                  <div class="slider-nav-img">
                    <img src="<?php echo base_url('assets/images/testi-3.jpg') ?>" alt="3" />
                  </div>
                  <div class="slider-nav-img">
                    <img src="<?php echo base_url('assets/images/testi-4.jpg') ?>" alt="4" />
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
              <img width="200px" src="<?php echo base_url('assets/images/team-1.png'); ?>" alt="team-1" />
              <div class="chef-slider-content">
                <h5 class="text-center d-block">Arjun Patel</h5>
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
                <h5 class="text-center d-block">Rohini Verma</h5>
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
                <h5 class="text-center d-block">Karan Sharma</h5>
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
                <h5 class="text-center d-block">Rutik Sharma</h5>
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
<<<<<<< HEAD
                Wi-Fi: If the restaurant offers free Wi-Fi for customers.
=======
                Wi-Fi: If the Dinsphere restaurant offers free Wi-Fi for customers.
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
            Secure your table in advance for a seamless dining experience.
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
            Host your special occasions with our exclusive dining and catering services.
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
            Enjoy your favorite dishes from the comfort of your home with just a few clicks.
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
            Fresh, hot, and delicious food delivered to your doorstep in no time.
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
                  <a href="javascript:void(0)">The Secret Behind Our Signature Spices</a>
                </h3>
                <p class="blog-description">
                Our chefs carefully blend traditional Indian spices to bring out rich, bold flavors in every dish. Discover the magic behind our secret spice mixes that make our food truly unforgettable.                </p>
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
                <img class="w-100" src="<?php echo base_url('assets/images/noodles.jpg'); ?>" alt="" />

              </div>
              <div class="blog-content px-4 pt-5 pb-4 position-relative">
                <div class="blog-date">
                  <span class="day">12</span>
                  <span class="month">Jun</span>
                </div>
                <h3 class="blog-title">
<<<<<<< HEAD
                  <a href="javascript:void(0)">Savor the Perfect Bowl of Noodles </a>
=======
                  <a href="javascript:void(0)">Savor the Perfect Bowl of Delicious Noodles.</a>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                </h3>
                <p class="blog-description">
                Enjoy a flavorful bowl of noodles, crafted with fresh ingredients and bold spices. 
                From spicy Schezwan to creamy garlic butter noodles, there's a perfect choice for every craving!
<<<<<<< HEAD










=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
                  <a href="javascript:void(0)">Why Ambience Matters in Dining Experience</a>
                </h3>
                <p class="blog-description">
                A great meal is more than just food—it’s about the atmosphere. Explore how we curate the
                 perfect dining experience with cozy lighting, elegant decor, and soothing music.


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
<<<<<<< HEAD
                  <h1 class="mb-0">Restoran</h1>
=======
                  <h1 class="mb-0">Dinsphere</h1>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
<<<<<<< HEAD
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.
=======
            "Delicious flavors, fresh ingredients, and unforgettable dining—experience excellence
             with every bite at Dinsphere"
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
            </p>
          </div>
          <div class="row" data-aos="fade-right">
            <div class="d-flex flex-column flex-lg-row px-0 justify-content-between">
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-location-dot text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
<<<<<<< HEAD
                    157 White Oak Drive Kansas City <br />
                    689 Lynn Street South Boston
=======
                  12, MG Road, Indiranagar, Bengaluru, Karnataka - 560038<br />
                  45, Connaught Place, New Delhi, Delhi - 110001
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                  </p>
                </div>
              </div>
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-mobile text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
<<<<<<< HEAD
                    (617)-276-8031 <br />
                    (617)-276-8031
=======
                    1234567890 <br />
                    0987654321
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
<<<<<<< HEAD
          &copy; <span id="copyrightCurrentYear"></span> <b> Restoran.</b> All
          rights reserved. Design by
          <a href="https://www.linkedin.com/in/codewithshabbir/" class="fw-bold author-name">Muhammad Shabbir</a>
=======
          &copy; <span id="copyrightCurrentYear"></span> <b> Dinsphere.</b> All
          rights reserved. Design by
          <a href="" class="fw-bold author-name">Payal & Prerna</a>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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