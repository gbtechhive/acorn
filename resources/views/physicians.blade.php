<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>

    <!-- fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet"> --}}
<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER COMPONENT -->
    <x-header />
    
    <div id="h-img-physicians">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="pat-r1-c1">
                    <div id="patients-content">
                        <h1>For Physicians</h1>
                        <p>We here at ACORN are delighted to be your clinical research facility. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="for-pat-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="for-patients">
                        <h1>For Physicians</h1>
                        <p>ACORN works with physicians across all disciplines, and our team has experience in conducting clinical research in virtually every medical specialty. We specialize in helping research naïve medical staff become pillars of clinical research in their communities. Irrespective of your level of experience with clinical research, we offer the solutions to seamlessly integrate clinical research into your practice. Let us show you how we can make a difference for your patients, and how we can work together to accomplish your goals. </p>
                    </div>
                </div>
                <div class="col-md-6 my-5 d-flex justify-content-center align-items-center">
                    <div id="fp-img d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="assets/images/physicians/phy-1.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-form-patients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="cfp-r1-c1">
                        <h1>Find a Study</h1>
                    </div>
                </div>
            </div>

            <form class="row g-3" id="form-contact">
                <div class="col-md-4 names">
                    <input type="text" class="form-control" id="name1" required>
                    <label for="name1" class="form-label"><i class="fa fa-user"></i> &nbsp;First Name</label>
                </div>
                <div class="col-md-4 names">
                    <input type="text" class="form-control" id="name2" required>
                    <label for="name2" class="form-label"><i class="fa fa-user"></i> &nbsp;Middle Name</label>
                </div>
                <div class="col-md-4 names">
                    <input type="text" class="form-control" id="name3" required>
                    <label for="name3" class="form-label"><i class="fa fa-user"></i> &nbsp;Last Name</label>
                </div>
                <div class="col-md-6 names">
                    <input type="phone" class="form-control" id="phone" required>
                    <label for="phone" class="form-label"><i class="fa fa-phone-square-alt"></i>  &nbsp;Contact Number</label>
                </div>
                <div class="col-md-6 names">
                    <input type="email" class="form-control"  id="email" required>
                    <label for="email" class="form-label"><i class="fa fa-envelope"></i> &nbsp;Email</label>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Type you search term"  id="search" required>
                    <!-- <label for="search" class="form-label"><i class="fa fa-envelope"></i> &nbsp;Type you search term</label> -->
                </div>
                <div class="col-12">
                    <select id="inputState" class="form-select">
                        <option selected>Category</option>
                        <option value="1">Category1</option>
                        <option value="2">Category2</option>
                        <option value="3">Category3</option>
                        <option value="4">Category4</option>
                        <option value="5">Category5</option>
                    </select>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- FOOTRT COMPONENT  -->
    <x-second-footer />

    <script src="assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>