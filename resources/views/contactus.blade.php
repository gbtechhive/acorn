<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER COMPONENT -->
    <x-header />
    
    <div id="h-img-contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="pat-r1-c1">
                    <div id="patients-content">
                        <h1>Contact Us</h1>
                        <p>Always here to help you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="for-pat-container">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div id="contact-img">
                        <img class="img-fluid" src="assets/images/contactus/c-1.png" alt="image">
                    </div>
                </div>
                <div class="col-md-7" id="cont-us">
                    <form class="row g-3" id="form-contact">
                        <div class="col-12">
                            <h1>Have a Question?</h1>
                            <p>5012 North Shepherd Drive Houston, TX 77018</p>
                        </div>
                        <div class="col-md-6 names">
                            <input type="text" class="form-control" id="name1" required>
                            <label for="name1" class="form-label"><i class="fa fa-user"></i> &nbsp;First Name</label>
                        </div>
                        <div class="col-md-6 names">
                            <input type="text" class="form-control" id="name3" required>
                            <label for="name3" class="form-label"><i class="fa fa-user"></i> &nbsp;Last Name</label>
                        </div>
                        <div class="col-md-12 names">
                            <input type="phone" class="form-control" id="phone" required>
                            <label for="phone" class="form-label"><i class="fa fa-phone-square-alt"></i>  &nbsp;Contact Number</label>
                        </div>
                        <div class="col-md-12 names">
                            <input type="email" class="form-control"  id="email" required>
                            <label for="email" class="form-label"><i class="fa fa-envelope"></i> &nbsp;Email</label>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="textarea1" placeholder="Message" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <!-- FOOTRT COMPONENT  -->
    <x-second-footer />

    <script src="assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>