<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand me-5 w-25" href="{{url('/')}}">
          <img class="w-75" src="assets/images/logo-1.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAcron" aria-controls="navbarAcron" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarAcron">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/aboutus')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/patients')}}">For Patients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/physicians')}}">For Physician</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/sponsors')}}">For Sponsors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/contactus')}}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/bioBanking')}}">Bio Banking</a>
          </li>
          
        </ul>
          <form class="d-flex">
              <button class="btn btn-primary me-2" type="button">become a research patient</button>
          </form>
      </div>
    </div>
  </nav>
</body>
</html>