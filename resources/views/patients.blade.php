<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>

    <!-- fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
{{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
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
    
    <div id="h-img-patients">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="pat-r1-c1">
                    <div id="patients-content">
                        <h1>For Patients</h1>
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
                        <h1>For Patients</h1>
                        <p>We here at ACORN are delighted to be your clinical research facility. With an emphasis on safety and a team with decades of experience in research, you can expect a rewarding experience when you are involved in clinical research at ACORN. Members of our team are available to answer your questions and help you determine which clinical research protocol is right for you. Whether you are a healthy volunteer looking to be involved in developing biopharmaceutical products or a patient looking for the latest treatments, we have the experience to help you accomplish your goals. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="fp-img">
                        <img class="img-fluid" src="assets/images/patients/pt-1.png" alt="image">
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
                        <h1>Contact Form</h1>
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
                <div class="col-md-4">
                    <select id="inputState" class="form-select">
                        <option selected>Choose Gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>
                    </select>
                    <!-- <label for="inputState" class="form-label">State</label> -->
                </div>
                <div class="col-md-4 names">
                    <input type="phone" class="form-control" id="phone" required>
                    <label for="phone" class="form-label"><i class="fa fa-phone-square-alt"></i>  &nbsp;Contact Number</label>
                </div>
                <!-- <div class="col-md-4 names"> -->
                    <!-- <input type="email" class="form-control" id="phone1" required>
                    <label for="phone1" class="form-label"><i class="fa fa-phone-square-alt"></i>  &nbsp;Email</label> -->
                    
                    <!-- <input type="email" class="form-control" id="inputEmail4" required>
                    <label for="inputEmail4" class="form-label">Email</label> -->
                <!-- </div> -->
                <div class="col-md-4 names">
                    <input type="email" class="form-control"  id="email" required>
                    <label for="email" class="form-label"><i class="fa fa-envelope"></i> &nbsp;Email</label>
                </div>
                <div class="col-12">
                    <select id="study" class="form-select">
                        <option selected>Please Select a Study</option>
                        <option value="1">study</option>
                        <option value="2">study</option>
                        <option value="3">study</option>
                    </select>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" placeholder="How old are you?"  required>
                </div>
                <div class="col-6">
                    <select id="inputState" class="form-select">
                        <option selected>How did you here about us?</option>
                        <option value="1">Facebook</option>
                        <option value="2">Twitter</option>
                        <option value="3">Friend</option>
                        <option value="4">News</option>
                        <option value="5">Other</option>
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