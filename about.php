<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


 

    <title>THE WORKERS</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  <style>
  .navbar .navbar-nav .nav-link {
    color: white;
    font-size: 1.1em;
}
.navbar .navbar-nav .nav-link:hover{
    color: white;
}

@media only screen and (min-width: 960px) {
  .navbar .navbar-nav .nav-link {
   
  }
  .navbar {
    padding: 10;
  }
  
}

.navbar .navbar-nav .nav-link {
  position: relative;
}

.navbar .navbar-nav .nav-link::after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  background-color:red;
  color: transparent;
  width: 0%;
  content: '.';
  height: 3px;
  transition: all 0.5s;
}

.navbar .navbar-nav .nav-link:hover::after {
  width: 100%;
}
  </style>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg fixed-top navbar-inverse bg-dark navbar-dark " >
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
      <img src="logo.jpg" alt="" width="45" height="30" class="d-inline-block align-text-top">
      <i>THE WORKERS</i>
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
    </div>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav">
                <li class="navbar-item">
  <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="navbar-item">
  <a href="hire_form_submit.php" class="nav-link" >Contact</a>
                </li>
                <li class="navbar-item">
  <a href="about.php" class="nav-link">About</a>
  </li>
            </ul> 
</div>


</nav>
    
</div>
<br>
<div class="container p-5  align-items-center">
 <h1 class=" justify-content-center display-4"><b>About us</b></h1>
</div>
<div class="bg-white py-2">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Our Mission</h2>
        <p class="font-italic text-muted mb-4">We aim to give a source of income to students or other skilled people who want to earn money with their skills. We take jobs or works from all small startups or big established sectors and complete their work in a low budget and with high efficiency.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Our Speciality</h2>
        <p class="font-italic text-muted mb-4">We have a form for both hiring a worker and working as a worker on our home page. One can apply for a particular task by filling those forms. We filter the irrelavent jobs and hire only skilled workers who are expertise in their respective fields. We have only selected and limited edition of workers.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
    </div>
  </div>
</div>

<div class="bg-light py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">Our team</h2>
        <p class="font-italic text-muted">We work to serve you. A team of dedicated workers.</p>
      </div>
    </div>

    <div class="row g-2 text-center">
      <!-- Team item-->
      <div class="col-xl-6 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Akshat</h5><span class="small text-uppercase text-muted">Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-6 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Daksh Manu Arya</h5><span class="small text-uppercase text-muted">Co-Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

    

    </div>
  </div>
</div>


<div class=" pt-5 pb-5 footer bg-dark text-light">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>Help and support</h2>
      <p class="pr-5 text-white-50">We are available here to support you with your queries and doubts related to our working. </p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
         <li>- <a href="index.php">Home</a></li>
          <li>- <a href="hire_form_submit.php">Contact us</a></li>
          <li>- <a href="">About us</a></li>
          <li>- <a href="hire_form_submit.php">Hire Worker</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Contact Information</h4>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i> +91 8684937525</p>
      <p><i class="fa fa-envelope-o mr-3"></i> akshatdot@gmail.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© 2021. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>