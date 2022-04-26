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
    
    <div id="h-img-sponsors">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="pat-r1-c1">
                    <div id="patients-content">
                        <h1>For Sponsors</h1>
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
                        <h1>For Sponsors</h1>
                        <p>Your investigational product matters to us. See the difference our personalized attention makes when you partner with us to conduct clinical research. With decades of experience in clinical research and hundreds of trials completed by our team, there is no study that is too big, small or complicated for us to handle. We offer cover-to-cover solutions to design your study, monitor your study, conduct clinical research through our own facility, or identify the best sites at our partner organizations to ensure timely recruitment of patients </p>
                        <p>With our experience you can be assured that we can safely and efficiently navigate the clinical research process. When delays or errors could mean termination of your investigational product before it even has a chance of making it to market, it is imperative that sponsors find a competent partner to handle their clinical research needs. Let us discuss how we can work together to accomplish your goals and provide personalized attention for your investigational product. See how our executive team’s hands on approach to every clinical trial can make a difference for you. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="fp-img">
                        <img class="img-fluid" src="assets/images/sponsers/spon-1.png" alt="image">
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
                <div class="col-md-6 names">
                    <input type="phone" class="form-control" id="phone" required>
                    <label for="phone" class="form-label"><i class="fa fa-phone-square-alt"></i>  &nbsp;Contact Number</label>
                </div>
                <div class="col-md-6 names">
                    <input type="email" class="form-control"  id="email" required>
                    <label for="email" class="form-label"><i class="fa fa-envelope"></i> &nbsp;Email</label>
                </div>
                <div class="col-6">
                    <select id="inputState" class="form-select">
                        <option selected>Phase</option>
                        <option value="1">Phase1</option>
                        <option value="2">Phase2</option>
                        <option value="3">Phase3</option>
                        <option value="4">Phase4</option>
                        <option value="5">Phase5</option>
                    </select>
                </div>
                <div class="col-6">
                    <select id="inputState" class="form-select">
                        <option selected>Condition</option>
                        <option value="1">Condition1</option>
                        <option value="2">Condition2</option>
                        <option value="3">Condition3</option>
                        <option value="4">Condition4</option>
                        <option value="5">Condition5</option>
                    </select>
                </div>
                <div class="col-12">
                    <textarea class="form-control" id="textarea1" placeholder="Additional Coments" rows="3"></textarea>
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