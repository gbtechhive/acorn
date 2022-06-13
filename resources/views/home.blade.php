<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acron</title>

    <!-- fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="shortcut icon" href="{{ asset('assets/images/favio.svg') }}" type="image/x-icon">
</head>

<body>
    <x-header componentName="home" />

    <div id="carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- NEW CAROUSEL  -->
                    <div class="wrapper">
                        <div class="content">
                            <div class="bg-shape">
                            </div>


                            <div class="product-img">

                                <div class="product-img__item" id="img1">
                                    <div class="carouse-content">
                                        <h1>For Patients</h1>
                                        <p>We here at ACORN are delighted to be your clinical research facility. </p>
                                        <a href="#" class="btn">CONTACT US</a>
                                    </div>
                                </div>

                                <div class="product-img__item" id="img2">
                                    <div class="carouse-content">
                                        <h1>For Patients</h1>
                                        <p>We here at ACORN are delighted to be your clinical research facility. </p>
                                        <a href="#" class="btn">CONTACT US</a>
                                    </div>
                                </div>

                                <div class="product-img__item" id="img3">
                                    <div class="carouse-content">
                                        <h1>For Patients</h1>
                                        <p>We here at ACORN are delighted to be your clinical research facility. </p>
                                        <a href="#" class="btn">CONTACT US</a>
                                    </div>
                                </div>

                                <div class="product-img__item" id="img4">
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
                                        <svg class="icon icon-arrow-right">
                                            <use xlink:href="#icon-arrow-left"></use>
                                        </svg>
                                    </span>
                                </button>
                                <button class="next">
                                    <span class="icon">
                                        <svg class="icon icon-arrow-right">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg>
                                    </span>
                                </button>

                                <div class="product-slider__wrp swiper-wrapper">
                                    <div class="product-slider__item swiper-slide" data-target="img4">
                                        <div class="product-slider__card">
                                            <img src="assets/images/slider/slider-1.png" class="d-block"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="product-slider__item swiper-slide" data-target="img1">
                                        <div class="product-slider__card">
                                            <img src="assets/images/slider/slider-2.png" class="d-block"
                                                alt="image">
                                        </div>
                                    </div>

                                    <div class="product-slider__item swiper-slide" data-target="img2">
                                        <div class="product-slider__card">
                                            <img src="assets/images/slider/slider-3.png" class="d-block"
                                                alt="image">
                                        </div>
                                    </div>

                                    <div class="product-slider__item swiper-slide" data-target="img3">
                                        <div class="product-slider__card">
                                            <img src="assets/images/slider/slider-4.png" class="d-block"
                                                alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <svg class="hidden" hidden>
                        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                            <path
                                d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
                            </path>
                        </symbol>
                        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                            <path
                                d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
                            </path>
                        </symbol>
                    </svg>
                    <!-- Button trigger modal -->
                    {{-- Button trigger modal --}}
                    <div class="d-flex justify-content-end">
                        <button type="button" id="help" class="btn btn-primary shadow-none" data-bs-toggle="modal"
                            data-bs-target="#helpModal">
                            <i class="fa-solid fa-chevron-left"></i> NEED HELP
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal" id="helpModal" tabindex="-1" aria-labelledby="ModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background: #090554;
                            ">
                                <div class="modal-header mt-5 d-flex justify-content-center aligin-items-center">
                                    <h3 class="modal-title text-white" id="ModalLabel">Send us a message </h3>
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                </div>
                                <div class="modal-body mb-5">
                                    <form id="form">

                                        <div id="form-group-row">
                                            <div class="input-group">
                                                <input type="text" name="fName" id="fName input" required>
                                                <label for="fName" id="label"> <i class="fa fa-user"></i> First
                                                    Name</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" name="lName" id="lName input" required>
                                                <label for="lName" id="label"> <i class="fa fa-user"></i> Last
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <input type="text" name="number" id="contact input" required>
                                            <label for="contact" id="label"> <i class="fa fa-phone-square-alt"></i>
                                                Contact Number</label>
                                        </div>
                                        <div class="input-group">
                                            <input type="email" name="email" id="email input" required>
                                            <label for="email" id="label"> <i class="fa fa-envelope"></i> Email</label>
                                        </div>
                                        <div class="input-group">
                                            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                                            <label for="message" id="label"> <i class="fa fa-comments"></i>
                                                Message</label>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button class ="w-50" type="submit"> SEND MESSAGE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Model END  -->
                    <!-- NEW CAROUSEL END  -->
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION STARTS -->
    <div id="about-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-2" id="about-col-1">
                    <div id="about-content">
                        <h1>About Us</h1>
                        <p>ACORN was launched to provide access to advanced clinical care for
                            patients.
                            Our team of professionals have decades of experience in translational
                            and clinical
                            research and in the delivery of innovative healthcare. ACORN raises the
                            standard of
                            care to the cutting edge, providing access to the latest advances in
                            medical innovations
                            as well as the most promising discoveries from across the
                            biopharmaceutical industry.
                        </p>
                        <a href="" class="btn">learn More</a>
                    </div>
                </div>
                <div class="col-md-6 my-2">
                    <div id="about-image">
                        <img src="assets/images/about/about-1.png" class="img-fluid" alt="image not found">
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-2">
            <div class="row" id="about-us-r2">
                <div class="col-md-3 mb-4">
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
                <div class="col-md-3 mt-4">
                    <div id="pri-smo">
                        <h2>Primary Liaison with SMO, biopharmaceutical industry and other CRO’s
                        </h2>
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
                <h2 class="text-center">Our Global Reach</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <h2 id="asd">Wilcrest Community Medical Center</h2>
                    <p>
                        11226 S. Wilcrest Dr. Houston, TX 77099
                        Phone: 281-977-7462;
                        Fax: 281-977-7472
                        Clinic Hours:
                        Mon – Sat 8:00 am – 5:00 pm
                        (accepts patients until 4pm)
                    </p>
                </div>
                <div class="testimonial-item" id="t2">
                    <h2>Wilcrest Community Dental Center</h2>
                    <p>
                        11226 S. Wilcrest Dr. Houston, TX 77099
                        Phone: 281-977-7462;
                        Fax: 281-977-7472
                        Clinic Hours:
                        Mon – Sat 8:00 am – 5:00 pm
                        (accepts patients until 4pm)
                    </p>
                </div>
                <div class="testimonial-item" id="t3">
                    <h2>FBISD Ridgemont Elementary School</h2>
                    <p>
                        11226 S. Wilcrest Dr. Houston, TX 77099
                        Phone: 281-977-7462;
                        Fax: 281-977-7472
                        Clinic Hours:
                        Mon – Sat 8:00 am – 5:00 pm
                        (accepts patients until 4pm)
                    </p>
                </div>
                <div class="testimonial-item" id="t4">
                    <h2>Wilcrest Children’s Clinic</h2>
                    <p>
                        11226 S. Wilcrest Dr. Houston, TX 77099
                        Phone: 281-977-7462;
                        Fax: 281-977-7472
                        Clinic Hours:
                        Mon – Sat 8:00 am – 5:00 pm
                        (accepts patients until 4pm)
                    </p>
                </div>
                <div class="testimonial-item">
                    {{-- <img src="assets/images/slider/gr/gr-4.png" alt="Image"> --}}

                    <h2>Wilcrest Children’s Clinic</h2>
                    <p>
                        11226 S. Wilcrest Dr. Houston, TX 77099
                        Phone: 281-977-7462;
                        Fax: 281-977-7472
                        Clinic Hours:
                        Mon – Sat 8:00 am – 5:00 pm
                        (accepts patients until 4pm)
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- FOOTER COMPONENT  -->
    <x-footer componentName="home" />


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
