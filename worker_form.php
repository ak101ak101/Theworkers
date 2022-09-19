<html>
<head>
    <title>Join as Worker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="nav.css">
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
<section class="col">
<div class="d-flex  col-lg-11 flex-column bg-image  align-items-start p-5 m-3" style="background-image:url(wimagg.jpg); width:100%;">

   
        <h3 class="text-light">Sudmit your details. We will contact you.</h3>
        <form  class = "col-sm-4 text-light" action="form-process.php" method="POST">
            <div class="form-group col-md-11">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group col-md-11">
                <label for="Age">Age</label>
                <input type="text" name="age" id="age" class="form-control" required>
            </div>
            <div class="form-group col-md-11">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group col-md-11">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group col-md-11">
                <label for="skill">Skills</label>
                <input type="text" name="skill" id="skill" class="form-control" required>
            </div>
            <br>
            <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">I accept all <a>terms and condtions</a></label>
  </div>

            <div class="form-group col-md-11 p-3 m-2">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
    



</div>

</section>
    <div class="container-fluid justify-content-center pr-5 pl-5 mx-auto col-sm-8">
        <h3 class="text-center"><b>Process for being a worker</b></h3>
        <p class="lead"> 
<ol>
<li>Fill the above form we will contact you.</li>
<li>You have to pass an interview. It will be of 10 minutes.  </li>
<li>You have to show your previous projects if any.</li>
<li>You have to submit a soft copy of your identity proof if selected.</li>


</ol>
        </p>
    </div>

    
<div class=" pt-5 pb-5 footer bg-dark text-light">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>Help and Support </h2>
      <p class="pr-5 text-white-50">We are available here to support you with your queries and doubts related to our working.</p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="index.php">Home</a></li>
          <li>- <a href="hire_form_submit.php">Contact us</a></li>
          <li>- <a href="about.php">About us</a></li>
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
</body>

</html>