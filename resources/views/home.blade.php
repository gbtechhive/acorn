<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acron</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">
</head>
<body>
    <x-header componentName="home"/>

    <div id="carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-bg-wrap">
                        <div id="carouselbg">
                        </div>
                        <!-- <div id="help"></div> -->
                        <!-- Button trigger modal -->
                        <button type="button" id="help" class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#helpModal">
                        <i class="fa-solid fa-chevron-left"></i>    NEED HELP 
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header ">
                                        <h5 class="modal-title text-center" id="ModalLabel">Send us a message </h5>
                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                    </div>
                                    <div class="modal-body">
                                        <form id="form">

                                            <div id="form-group-row">
                                                <div class="input-group">
                                                    <input type="text" name="fName" id="fName input" required>
                                                    <label for="fName" id="label"> <i class="fa fa-user"></i> First Name</label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" name="lName" id="lName input" required>
                                                    <label for="lName" id="label"> <i class="fa fa-user"></i>  Last Name</label>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" name="number" id="contact input" required>
                                                <label for="contact" id="label"> <i class="fa fa-phone-square-alt"></i>    Contact Number</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="email" name="email" id="email input" required>
                                                <label for="email" id="label"> <i class="fa fa-envelope"></i>  Email</label>
                                            </div>
                                            <div class="input-group">
                                                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                                                <label for="message" id="label"> <i class="fa fa-comments"></i>    Message</label>
                                            </div>
                                            <button type="submit"> <i class="fa fa-paper-plane"></i>    SEND MESSAGE</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div id="carousel-wraper">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <div class="">
                                        <img src="assets/images/slider/slider-1.png" class="d-block" alt="image">
                                    <div class="carouse-content">
                                        <h1>For Patients</h1>
                                        <p>We here at ACORN are delighted to be your clinical research facility. </p>
                                        <a href="#" class="btn">CONTACT US</a>
                                    </div>
                                    
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="">
                                    <img src="assets/images/slider/slider-2.png" class="d-block" alt="image">
                                    <div class="carouse-content">
                                        <h1>For Patients</h1>
                                        <p>We here at ACORN are delighted to be your clinical research facility. </p>
                                        <a href="#" class="btn">CONTACT US</a>
                                    </div>
                                    
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="">
                                    <img src="assets/images/slider/slider-3.png" class="d-block" alt="image">
                                    <div class="carouse-content">
                                        <h1>For Patients</h1>
                                        <p>We here at ACORN are delighted to be your clinical research facility. </p>
                                        <a href="#" class="btn">CONTACT US</a>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>


    <!-- NEW CAROUSEL  -->
    <div class="wrapper">

<div class="content">
  <div class="bg-shape">
    <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405214/starwars/logo.webp" alt=""> -->
  </div>

  
  <div class="product-img">

    <div class="product-img__item" id="img1">
      <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405217/starwars/item-1.webp" alt="star wars" class="product-img__img"> -->
      <div class="carouse-content">
            <h1>For Patients</h1>
            <p>We here at ACORN are delighted to be your clinical research facility. </p>
            <a href="#" class="btn">CONTACT US</a>
        </div>
    </div>

    <div class="product-img__item" id="img2">
      <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405217/starwars/item-2.webp" alt="star wars" class="product-img__img"> -->
      <div class="carouse-content">
        <h1>For Patients</h1>
        <p>We here at ACORN are delighted to be your clinical research facility. </p>
        <a href="#" class="btn">CONTACT US</a>
    </div>
    </div>

    <div class="product-img__item" id="img3">
      <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405218/starwars/item-3.webp" alt="star wars" class="product-img__img"> -->
      <div class="carouse-content">
            <h1>For Patients</h1>
            <p>We here at ACORN are delighted to be your clinical research facility. </p>
            <a href="#" class="btn">CONTACT US</a>
        </div>
    </div>

    <div class="product-img__item" id="img4">
      <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405215/starwars/item-4.webp" alt="star wars" class="product-img__img"> -->
      <div class="carouse-content">
            <h1>For Patients</h1>
            <p>We here at ACORN are delighted to be your clinical research facility. </p>
            <a href="#" class="btn">CONTACT US</a>
        </div>
    </div>


  </div>



  <div class="product-slider">
    <button class="prev disabled">
      <span class="icon">
        <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-left"></use></svg>
      </span>
    </button>
    <button class="next">
      <span class="icon">
        <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
      </span>
    </button>

    <div class="product-slider__wrp swiper-wrapper">
      <div class="product-slider__item swiper-slide" data-target="img4">
        <div class="product-slider__card">
          <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405223/starwars/item-4-bg.webp" alt="star wars" class="product-slider__cover"> -->
          <img src="assets/images/slider/slider-1.png" class="d-block" alt="image">
          <!-- <div class="product-slider__content">
            <h1 class="product-slider__title">
              STORMTROPER <br>
              HELMET
            </h1>
            <span class="product-slider__price">$1.299,<sup>99</sup></span>
            <div class="product-ctr">
              <div class="product-labels">
                <div class="product-labels__title">HELMET SIZE</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type5" >
                    <span class="product-labels__txt">S</span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type5" checked>
                    <span class="product-labels__txt">M</span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type5" >
                    <span class="product-labels__txt">L</span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type5" >
                    <span class="product-labels__txt">XL</span>
                  </label>

                </div>

              </div>

              <span class="hr-vertical"></span>

              <div class="product-inf">
                <div class="product-inf__percent">
                  <div class="product-inf__percent-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                      <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                          <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                          <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                        </linearGradient>
                      </defs>
                      <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                    </svg>
                  </div>
                  <div class="product-inf__percent-txt">
                    80%
                  </div>
                </div>

                <span class="product-inf__title">DURABILITY RATE</span>
              </div>

            </div>

            <div class="product-slider__bottom">
              <button class="product-slider__cart">
                ADD TO CART
              </button>

              <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
            </div>
          </div> -->
        </div>
      </div>
      <div class="product-slider__item swiper-slide" data-target="img1">
        <div class="product-slider__card">
          <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405222/starwars/item-1-bg.webp" alt="star wars" class="product-slider__cover"> -->
          <img src="assets/images/slider/slider-2.png" class="d-block" alt="image">
          <!-- <div class="product-slider__content">
            <h1 class="product-slider__title">
              IMPERIAL  ARMY’S <br> TIE FIGHTER
            </h1>
            <span class="product-slider__price">$9.999,<sup>99</sup></span>
            <div class="product-ctr">
              <div class="product-labels">
                <div class="product-labels__title">ENGINE UNIT</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type1" checked>
                    <span class="product-labels__txt">P-S4 TWIN</span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type1">
                    <span class="product-labels__txt">P-W401</span>
                  </label>
                </div>

              </div>

              <span class="hr-vertical"></span>

              <div class="product-inf">
                <div class="product-inf__percent">
                  <div class="product-inf__percent-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                      <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                          <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                          <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                        </linearGradient>
                      </defs>
                      <circle cx="50" cy="50" r="47" stroke-dasharray="225, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                    </svg>
                  </div>
                  <div class="product-inf__percent-txt">
                    75%
                  </div>
                </div>

                <span class="product-inf__title">DURABILITY</span>
              </div>

            </div>

            <div class="product-slider__bottom">
              <button class="product-slider__cart">
                ADD TO CART
              </button>

              <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
            </div>
          </div> -->
        </div>
      </div>

      <div class="product-slider__item swiper-slide" data-target="img2">
        <div class="product-slider__card">
          <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405222/starwars/item-2-bg.webp" alt="star wars" class="product-slider__cover"> -->
          <img src="assets/images/slider/slider-3.png" class="d-block" alt="image">
          <!-- <div class="product-slider__content">
            <h1 class="product-slider__title">
              KYLO REN'S <br> LIGHTSABER
            </h1>
            <span class="product-slider__price">$1.699,<sup>99</sup></span>
            <div class="product-ctr">
              <div class="product-labels">
                <div class="product-labels__title">VOLTAGE RANGE</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type3" checked>
                    <span class="product-labels__txt">2000 <sup>WATT</sup></span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type3">
                    <span class="product-labels__txt">2800 <sup>WATT</sup></span>
                  </label>
                </div>

                <div class="product-labels__title">LASER SIZE</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type2" >
                    <span class="product-labels__txt">S</span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type2" checked>
                    <span class="product-labels__txt">M</span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type2" >
                    <span class="product-labels__txt">L</span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type2" >
                    <span class="product-labels__txt">XL</span>
                  </label>

                </div>

              </div>

              <span class="hr-vertical"></span>

              <div class="product-inf">
                <div class="product-inf__percent">
                  <div class="product-inf__percent-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                      <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                          <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                          <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                        </linearGradient>
                      </defs>
                      <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                    </svg>
                  </div>
                  <div class="product-inf__percent-txt">
                    80%
                  </div>
                </div>

                <span class="product-inf__title">DURABILITY</span>
              </div>

            </div>

            <div class="product-slider__bottom">
              <button class="product-slider__cart">
                ADD TO CART
              </button>

              <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
            </div>
          </div> -->
        </div>
      </div>

      <div class="product-slider__item swiper-slide" data-target="img3">
        <div class="product-slider__card">
          <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405215/starwars/item-3-bg.webp" alt="star wars" class="product-slider__cover"> -->
          <img src="assets/images/slider/slider-4.png" class="d-block" alt="image">
          <!-- <div class="product-slider__content">
            <h1 class="product-slider__title">
              IMPERIAL ARMY'S <br>
              DEATH STAR
            </h1>
            <span class="product-slider__price">$9.999,<sup>99</sup></span>
            <div class="product-ctr">
              <div class="product-labels">
                <div class="product-labels__title">HYPERDRIVE RATING</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type6" checked>
                    <span class="product-labels__txt">CLASS 4</span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type6">
                    <span class="product-labels__txt">CLASS 20</span>
                  </label>
                </div>

                <div class="product-labels__title">ARMANENT</div>

                <div class="product-labels__group">
                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type7" checked>
                    <span class="product-labels__txt">SUPERLASER</span>
                  </label>

                  <label class="product-labels__item">
                    <input type="radio" class="product-labels__checkbox" name="type7">
                    <span class="product-labels__txt">TURBOLASER</span>
                  </label>
                </div>

              </div>

              <span class="hr-vertical"></span>

              <div class="product-inf">
                <div class="product-inf__percent">
                  <div class="product-inf__percent-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                      <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                          <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                          <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                        </linearGradient>
                      </defs>
                      <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                    </svg>
                  </div>
                  <div class="product-inf__percent-txt">
                    80%
                  </div>
                </div>

                <span class="product-inf__title">DURABILITY RATE</span>
              </div>

            </div>

            <div class="product-slider__bottom">
              <button class="product-slider__cart">
                ADD TO CART
              </button>

              <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
            </div>
          </div> -->
        </div>
      </div>

      

    </div>
  </div>

</div>

<!-- <div class="social">
<a href="https://twitter.com/imuhammederdem" target="_blank" class="social__item">
    <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405220/starwars/twitter.webp" alt="muhammed erdem" class="social__img">
    <span class="social__txt">Coded By Muhammed Erdem</span>
  </a>

  <a href="https://dribbble.com/shots/3453028-Star-Wars-TIE-Fighter-UI" target="_blank" class="social__item">
    <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405220/starwars/dribbble.webp" alt="eray yeşilyurt" class="social__img">
    <span class="social__txt">Designed By Eray Yeşilyurt</span>
  </a>

</div> -->

</div>
<svg class="hidden" hidden>
<symbol id="icon-arrow-left" viewBox="0 0 32 32">
  <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
</symbol>
<symbol id="icon-arrow-right" viewBox="0 0 32 32">
  <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
</symbol>
</svg>
<!-- Button trigger modal -->
<button type="button" id="help" class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#helpModal">
                        <i class="fa-solid fa-chevron-left"></i>    NEED HELP 
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header ">
                                        <h5 class="modal-title text-center" id="ModalLabel">Send us a message </h5>
                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                    </div>
                                    <div class="modal-body">
                                        <form id="form">

                                            <div id="form-group-row">
                                                <div class="input-group">
                                                    <input type="text" name="fName" id="fName input" required>
                                                    <label for="fName" id="label"> <i class="fa fa-user"></i> First Name</label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" name="lName" id="lName input" required>
                                                    <label for="lName" id="label"> <i class="fa fa-user"></i>  Last Name</label>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" name="number" id="contact input" required>
                                                <label for="contact" id="label"> <i class="fa fa-phone-square-alt"></i>    Contact Number</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="email" name="email" id="email input" required>
                                                <label for="email" id="label"> <i class="fa fa-envelope"></i>  Email</label>
                                            </div>
                                            <div class="input-group">
                                                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                                                <label for="message" id="label"> <i class="fa fa-comments"></i>    Message</label>
                                            </div>
                                            <button type="submit"> <i class="fa fa-paper-plane"></i>    SEND MESSAGE</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    <!-- NEW CAROUSEL END  -->

    <!-- ABOUT SECTION STARTS -->
    <div id="about-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="about-col-1">
                    <div id="about-content">
                        <h1>About Us</h1>
                        <p>ACORN was launched to provide access to advanced clinical care for patients.
                             Our team of professionals have decades of experience in translational and clinical 
                             research and in the delivery of innovative healthcare. ACORN raises the standard of
                              care to the cutting edge, providing access to the latest advances in medical innovations 
                              as well as the most promising discoveries from across the biopharmaceutical industry.
                        </p>
                        <a href="" class="btn">learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="about-image">
                        <img src="assets/images/about/about-1.png" class="img-fluid" alt="image not found">
                    </div>
                </div>
            </div>

            <div class="row" id="about-us-r2">
                <div class="col-md-3">
                    <div id="pri-organizatio">
                        <h2>Serves as a primary
                            contracting organization</h2>
                    </div>

                    <div id="clinical-research">
                        <h2>Efficiently manage and monitor clinical research sites</h2>
                    </div>
                </div>
                <div class="col-md-6" id="aur2-c3">
                    <div id="joins">
                        <span id="link1"><i>hjkl</i></span>
                        <span id="link2"><i>hjkl</i></span>
                    </div>
                    <div id="our-services">
                        <h2>As a Clinical Research Organization </h2>
                        <h1>Our Services</h1>
                        <h2 class="smo">As a Site Management Organization</h2>
                    </div>
                    <div id="joins">
                        <span id="link3"><i>hjkl</i></span>
                        <span id="link4"><i>hjkl</i></span>
                    </div>
                </div>
                <div class="col-md-3">
                <div id="pri-smo">
                        <h2>Primary Liaison with SMO, biopharmaceutical industry and other CRO’s</h2>
                    </div>

                    <div id="clinical-cro">
                        <h2>Provide clinical trial related services to our CRO</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ABOUT SECTION ENDS -->

<!-- Testimonial Start -->
<div class="testimonial">
            <div class="container mt-3">
                <div class="section-header">
                    <!-- <p>Testimonial Carousel</p>
                    <h2>100% Positive Customer Reviews</h2> -->
                    <h2 class="text-center">Our Global Reach</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="assets/images/slider/gr/gr-1.png" alt="Image">
                        
                        <h2 id="asd">Wilcrest Community Medical Center</h2>
                        <p>
                            11226 S. Wilcrest Dr. Houston, TX 77099
                            Phone: 281-977-7462; 
                            Fax: 281-977-7472
                            Clinic Hours: 
                            Mon – Sat 8:00 am – 5:00 pm
                            (accepts patients until 4pm)
                        </p>
                        <!-- <div id="para">
                            <p>
                                11226 S. Wilcrest Dr. Houston, TX 77099
                            </p>
                            <p>
                                Phone: 281-977-7462; 
                                Fax: 281-977-7472
                            </p>
                            <p>
                                Clinic Hours: 
                                Mon – Sat 8:00 am – 5:00 pm
                                (accepts patients until 4pm)
                            </p>
                        </div> -->
                        <!-- <h3>Wilcrest Community Medical Center</h3> -->
                    </div>
                    <div class="testimonial-item">
                        <img src="assets/images/slider/gr/gr-2.png" alt="Image">
                        
                        <h2>Wilcrest Community Dental Center</h2>
                        <p>
                            11226 S. Wilcrest Dr. Houston, TX 77099
                            Phone: 281-977-7462; 
                            Fax: 281-977-7472
                            Clinic Hours: 
                            Mon – Sat 8:00 am – 5:00 pm
                            (accepts patients until 4pm)
                        </p>
                        <!-- <h3>Profession</h3> -->
                    </div>
                    <div class="testimonial-item">
                        <img src="assets/images/slider/gr/gr-3.png" alt="Image">
                       
                        <h2>FBISD Ridgemont Elementary School</h2>
                        <p>
                            11226 S. Wilcrest Dr. Houston, TX 77099
                            Phone: 281-977-7462; 
                            Fax: 281-977-7472
                            Clinic Hours: 
                            Mon – Sat 8:00 am – 5:00 pm
                            (accepts patients until 4pm)
                        </p>
                        <!-- <h3>Profession</h3> -->
                    </div>
                    <div class="testimonial-item">
                        <img src="assets/images/slider/gr/gr-4.png" alt="Image">
                        
                        <h2>Wilcrest Children’s Clinic</h2>
                        <p>
                            11226 S. Wilcrest Dr. Houston, TX 77099
                            Phone: 281-977-7462; 
                            Fax: 281-977-7472
                            Clinic Hours: 
                            Mon – Sat 8:00 am – 5:00 pm
                            (accepts patients until 4pm)
                        </p>
                        <!-- <h3>Profession</h3> -->
                    </div>
                    <div class="testimonial-item">
                        <img src="assets/images/slider/gr/gr-4.png" alt="Image">
                        
                        <h2>Wilcrest Children’s Clinic</h2>
                        <p>
                            11226 S. Wilcrest Dr. Houston, TX 77099
                            Phone: 281-977-7462; 
                            Fax: 281-977-7472
                            Clinic Hours: 
                            Mon – Sat 8:00 am – 5:00 pm
                            (accepts patients until 4pm)
                        </p>
                        <!-- <h3>Profession</h3> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

<!-- FOOTER COMPONENT  -->
<x-footer componentName="home"/>
     

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>