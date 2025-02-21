<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<<<<<<< HEAD
  <title>Restoran - Contact</title>
=======
  <title>Dinsphere - Contact</title>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>" />
<<<<<<< HEAD
=======

  <style>
     <?php $this->load->view('style') ?>
  </style>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
</head>

<body>
  <div class="loader">
    <i class="fas fa-utensils loader-icone"></i>
<<<<<<< HEAD
    <p>Restoran</p>
=======
    <p>Dinsphere</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
    <div class="loader-ellipses">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <header class="bg-white">
    <div class="container header my-3 d-none d-lg-flex">
      <div class="logo">
        <a href="./index">
          <i class="fa fa-utensils me-3 text-dark"></i>
<<<<<<< HEAD
          <h1 class="mb-0 text-dark">Restoran</h1>
=======
          <h1 class="mb-0 text-dark">Dinsphere</h1>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
        </a>
      </div>
      <div class="menus">
        <ul class="d-flex mb-0">
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./index">Home</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./about">About</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./reservation">Reservation</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./menu">Menu</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./contact">Contact</a>
          </li>
        </ul>
      </div>
      <div class="icons">
        <a class="text-decoration-none" id="searchBtn" href="#">
          <i class="fa fa-search me-3 text-dark"></i>
        </a>
        <a class="text-decoration-none" id="shoppingbutton" href="#">
          <i class="fa fa-shopping-bag me-3 text-dark"></i>
        </a>
      </div>
    </div>

    <div class="d-flex justify-content-around py-3 align-items-center d-lg-none">
      <div id="hamburger">
        <i class="fa fa-2x fa-bars me-3 text-dark"></i>
      </div>
      <div class="mobile-nav-logo">
        <div class="logo">
          <a href="./index">
            <i class="fa fa-utensils me-3 text-dark"></i>
<<<<<<< HEAD
            <h1 class="mb-0 text-dark">Restoran</h1>
=======
            <h1 class="mb-0 text-dark">Dinsphere</h1>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
          </a>
        </div>
      </div>
      <div class="mobile-nav-icons">
        <div class="icons">
          <a class="text-decoration-none" id="searchBtnMobile" href="#">
            <i class="fa fa-search me-3 text-dark"></i>
          </a>
          <a class="text-decoration-none" id="shoppingbuttonMobile" href="#">
            <i class="fa fa-shopping-bag me-3 text-dark"></i>
          </a>
        </div>
      </div>
      <div class="position-fixed w-75 bg-white h-100 top-0 start-0" id="mobile-menu">
        <div id="hamburger-cross" class="d-flex justify-content-end align-items-center py-2">
          <i class="fa fa-2x fa-plus me-3 "></i>
        </div>
        <div class="menus">
          <ul class="d-flex flex-column ps-2 mb-0 mt-4">
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="#">Home</a>
            </li>
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="./about">About</a>
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
          <img src="./assets/images/product-2a.jpg" alt="">
        </div>
        <div class="col-8">
          <h3>Gulab Jamun</h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center">80 Rs</p>
        </div>
      </div>
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <img src="./assets/images/product-2b.jpg" alt="">
        </div>
        <div class="col-8">
          <h3></h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center"></p>
        </div>
      </div>
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <img src="./assets/images/product-2c.jpg" alt="">
        </div>
        <div class="col-8">
          <h3></h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center"></p>
        </div>
      </div>
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <img src="./assets/images/product-2d.jpg" alt="">
        </div>
        <div class="col-8">
          <h3></h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center"></p>
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

  <main class="contact-page">
    <section class="page-banner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="banner-content">
            <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">Contact Us</h2>
            <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
              <div class="dot mb-2"></div>
            </div>
            <p class="text-white mb-0 text-center" data-aos="fade-left" data-aos-delay="3000">Let us know if you have
<<<<<<< HEAD
              any concern about our menu, service or other information you want to have</p>
=======
              any concern about our menu, service or other information you want to have!</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
          </div>
        </div>
      </div>
    </section>

    <section class="contact-us my-5 py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="form">
              <h2 class="mb-5 position-relative display-6 fw-bold" data-aos="fade-right">Get In Touch</h2>
<<<<<<< HEAD
              <form  method="POST"  action="<?php echo base_url().'Contact/contact';?>"class="position-relative">
=======
              <form  method="POST"  action="<?php echo base_url().'Contact/success';?>"class="position-relative">
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                <div class="input-group">
                  <div class="icon-wrapper d-flex align-items-center position-relative">
                    <i class="fa fa-user py-2 px-3"></i>
                  </div>
<<<<<<< HEAD
                  <input class="form-control bg-transparent border-0 px-3" type="text" value="<?php echo set_value('name') ?>" name="name" placeholder="name">
=======
                  <input class="form-control bg-transparent border-0 px-3" type="text" value="<?php echo set_value('name') ?>" name="name" placeholder="Name">
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                </div>
                <div class="input-group">
                  <div class="icon-wrapper d-flex align-items-center position-relative">
                    <i class="fa fa-envelope py-2 px-3"></i>
                  </div>
                  <input class="form-control bg-transparent border-0 px-3" type="email" value="<?php echo set_value('email') ?>" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                  <div class="icon-wrapper d-flex align-items-center position-relative">
                    <i class="fa fa-phone py-2 px-3"></i>
                  </div>
                  <input class="form-control bg-transparent border-0 px-3" type="text" value="<?php echo set_value('phone') ?>" name="phone" placeholder="Phone">
                </div>
                <div class="input-group">
                  <textarea class="form-control bg-transparent border-0 px-3" id="" value="<?php echo set_value('message') ?>" name="message" placeholder="Message"></textarea>
                </div>

<<<<<<< HEAD
                 <button type="submit" value="send" >Send</button>
=======
                <button type="submit" value="send" >Send</button>
              
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="contact-info">
              <h2 class="mb-5 mt-5 mt-lg-0 position-relative display-6 fw-bold" data-aos="fade-right">Contact Info</h2>
              <div class="d-flex flex-column px-0 justify-content-between" data-aos="fade-left">
                <div class="contact-info-box d-flex align-items-center pe-2 py-3">
                  <div class="contact-icon-box">
                    <i class="fa-solid fa-location-dot border-bottom pb-2"></i>
                  </div>
                  <div class="ps-3">
                    <p class="mb-0">
<<<<<<< HEAD
                      <b>Restaurent 1</b> <br>
                      157 White Oak Drive Kansas City
=======
                      <b>Restaurant 1</b> <br>
                      12, MG Road, Indiranagar, Bengaluru, Karnataka - 560038
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    </p>
                  </div>
                </div>
                <div class="contact-info-box d-flex align-items-center pe-2 py-3">
                  <div class="contact-icon-box">
                    <i class="fa-solid fa-location-dot border-bottom pb-2"></i>
                  </div>
                  <div class="ps-3">
                    <p class="mb-0">
<<<<<<< HEAD
                      <b>Restaurent 2</b> <br>
                      158 White Oak Drive Kansas City
=======
                      <b>Restaurant 2</b> <br>
                      45, Connaught Place, New Delhi, Delhi - 110001
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    </p>
                  </div>
                </div>
                <div class="contact-info-box d-flex align-items-center pe-2 py-3">
                  <div class="contact-icon-box">
                    <i class="fa-solid fa-phone border-bottom pb-2"></i>
                  </div>
                  <div class="ps-3">
                    <p class="mb-0">
                      <b>Phone Number</b> <br>
<<<<<<< HEAD
                      (012) 978 645 312
=======
                      1234567890
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                    </p>
                  </div>
                </div>
                <div class="contact-info-box d-flex align-items-center pe-2 py-3">
                  <div class="contact-icon-box">
                    <i class="fa-solid fa-envelope border-bottom pb-2"></i>
                  </div>
                  <div class="ps-3">
                    <p class="mb-0">
                      <b>Mail</b> <br>
                      hello@fooday.com <br>
                      contact@fooday.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <section class="map pb-0 pb-lg-5 ">
      <div class="container pb-5" data-aos="fade-right">
        <div class="row">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7236.375239953878!2d67.08098637770993!3d24.92567760000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f60a0781265%3A0x2befaba123014ab1!2sSMIT%20Gulshan%20Campus!5e0!3m2!1sen!2s!4v1724775738916!5m2!1sen!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

    <section class="subscribe-us pb-5 mb-5">
      <img class="d-none d-lg-block" src="./assets/images/subscribe-us.png" alt="" data-aos="fade-down-right">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8 d-flex flex-column flex-md-row align-items-lg-center">
            <div class="content" data-aos="fade-right">
              <h5 class="display-6 text-black">Subcribe Us Now</h5>
              <p>
                Get more news and delicious dishes everyday from us
              </p>
            </div>
            <div class="subscribe-form d-flex ps-0 ms-0 ps-lg-5 ms-lg-5" data-aos="fade-left">
              <div class="input-form w-100">
                <input class="border-0 px-3 w-100" type="email" placeholder="Email">
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
        <div class="footer-content col-xl-8  px-4">
          <div class="row">
            <div class="col-lg-6 px-0">
              <div class="logo" data-aos="fade-down-right">
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
            <div data-aos="fade-down"
              class="col-lg-6 pt-4 pt-lg-0 d-flex align-items-center justify-content-start justify-content-lg-end">
              <div class="social-icons d-flex">
                <ul class="d-flex mb-0 ps-0">
                  <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                        class="fab fa-facebook"></i></a></li>
                  <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                        class="fab fa-twitter"></i></a></li>
                  <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                        class="fab fa-pinterest"></i></a></li>
                  <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                        class="fab fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row pt-5 content-desc" data-aos="fade-right">
<<<<<<< HEAD
            <p class="px-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
              ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
=======
            <p class="px-0">"Delicious flavors, fresh ingredients, and unforgettable dining—experience excellence
            with every bite at Dinsphere"</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
          </div>
          <div class="row" data-aos="fade-right">
            <div class="d-flex flex-column flex-lg-row px-0 justify-content-between">
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-location-dot text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
<<<<<<< HEAD
                    157 White Oak Drive Kansas City <br>
                    689 Lynn Street South Boston
=======
                  12, MG Road, Indiranagar, Bengaluru, Karnataka - 560038 <br>
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
                    (617)-276-8031 <br>
                    (617)-276-8031
=======
                    1234567890 <br>
                    9876543210
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
                  </p>
                </div>
              </div>
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-envelope text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
                    admin@fooday.com <br>
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
<<<<<<< HEAD
              <h2>Open Hour</h2>
=======
              <h2>Open Hours</h2>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
<<<<<<< HEAD
        <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b> Restoran.</b> All
          rights reserved. Design by <a href="https://www.linkedin.com/in/codewithshabbir/"
            class="fw-bold author-name">Muhammad Shabbir</a></p>
=======
        <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b> Dinsphere.</b> All
          rights reserved. Design by <a href=""
            class="fw-bold author-name">Payal & Prerna</a></p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
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
  <script src="<?php echo base_url('assets/script.js'); ?>"></script>

</body>

</html>