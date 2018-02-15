<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Product example for Bootstrap</title>

    <!-- Fonts for Page -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Css For Page -->
    <link href="css/Custom.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>

  <body>

<header>
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
         <img src="img/logo2x.png" width="160"/>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Home</a>
       <!--  <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Cart</a> -->
      </div>
    </nav>
</header>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        
         <img src="img/logo2x.png" />
        <h1 class="display-4 font-weight-normal">CreditMate</h1>
        <p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>




<div class="container">
<div class="row justify-content-md-center">
    
    <div class="col-md-auto">
      <div class="card my-3 cardswidth" >
        <img class="card-img-top" src="img/bike.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title theme_text_color fnt24">Bike Details</h5>
          <hr>
          <p class="card-text">Some text</p>
          
            <form>
<!-- 
            <div class="form-group">
              <label for="exampleInputEmail1">Bike Brand/Make*</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
             -->
            <div class="form-group">
              <label for="BikeBrand">Bike Brand/Make*</label>
              <select class="form-control" id="BikeBrand">
                  <option value=""  disabled selected>Select One</option>
                  <option value="Bajaj">Bajaj</option>
                  <option value="Hero">Hero</option>
                  <option value="Honda">Honda</option>
                  <option value="Tvs">TVS</option>
                  <option value="Vespa">Vespa</option>
               </select>
            </div>

           <div class="form-group">
            <label for="BikeModel">Bike Model*</label>
            <select class="form-control" id="BikeModel">
                <option value=""   disabled selected>Select One</option>
                <option value="Pulser">Pulser</option>
                <option value="Discover">Discover</option>
                <option value="Platina">Platina</option>
             </select>
          </div>

           <div class="form-group">
            <label for="city">Select City*</label>
            <select class="form-control" id="city">
                <option value=""  disabled selected>Select One</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Discover">Ahemdabad</option>
                <option value="Baroda">Baroda</option>
             </select>
          </div>

           <div class="form-group">
            <label for="loanDate">Within how many days are you willing to purchase the bike?</label>
            <select class="form-control" id="loanDate">
                <option value=""  disabled selected>Select One</option>
                <option value="1 Days">1 Days</option>
                <option value="1 Week">1 Week</option>
                <option value="1 Months">1 Months</option>
             </select>
          </div>

          <br>
           <h5 class="card-title theme_text_color fnt24">Contact Details</h5>
            <hr>

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter your Name">
              </div>

              <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" class="form-control" id="mobile" aria-describedby="mobileHelp" placeholder="Enter your 10 Digit Mobile Number">
                <small id="mobileHelp" class="form-text text-muted">Don’t worry. Your number will be safe with us.</small>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="tel" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Email ID">
                <small id="emailHelp" class="form-text text-muted">Don’t worry. We'll Never Spam You.</small>
              </div>

          <br>
           <h5 class="card-title theme_text_color fnt24">Personal Details</h5>
            <hr>

              <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="text" class="form-control" id="dob" aria-describedby="dobHelp" placeholder="Enter/Select your Date of Birth">
              </div>

              <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="number" class="form-control" id="pincode" aria-describedby="pincodeHelp" placeholder="Enter your 6 Digit Pincode" maxlength="6">
              </div>

              <div class="form-group">
                <label for="" class="w-100">Gender</label>
                <div class="container">
                 <div class="form-check form-check-inline col-5">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                  <label class="form-check-label" for="male" >Male</label>
                </div>
                <div class="form-check form-check-inline col-5">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                  <label class="form-check-label" for="female">Female</label>
                </div>
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="" class="w-100">Marital Status</label>
                <div class="container">
                 <div class="form-check form-check-inline col-5">
                  <input class="form-check-input" type="radio" name="marital" id="single" value="single">
                  <label class="form-check-label" for="single">Single</label>
                </div>
                <div class="form-check form-check-inline col-5">
                  <input class="form-check-input" type="radio" name="marital" id="married" value="married">
                  <label class="form-check-label" for="married">Married</label>
                </div>
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="" class="w-100">Nature of Job</label>
                <div class="container">
                 <div class="form-check form-check-inline col-5">
                  <input class="form-check-input" type="radio" name="jobs" id="salaried" value="salaried">
                  <label class="form-check-label" for="salaried">Salaried</label>
                </div>
                <div class="form-check form-check-inline col-5">
                  <input class="form-check-input" type="radio" name="jobs" id="selfEmployed" value="selfEmployed">
                  <label class="form-check-label" for="selfEmployed">Self-Employed</label>
                </div>
                </div>
              </div>

               <div class="form-group">
                <label for="occupation">Occupation*</label>
                <select class="form-control" id="occupation">
                    <option value="" selected disabled>Select One</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Discover">Ahemdabad</option>
                    <option value="Baroda">Baroda</option>
                 </select>
              </div>


              <div class="form-group">
                <label for="income">Monthly Income/Salary</label>
                <input type="text" class="form-control" id="income" aria-describedby="incomeHelp" placeholder="Enter/Select your Date of Birth">
              </div>


               <div class="form-group">
                <label for="residence">Type of Residence*</label>
                <select class="form-control" id="residence">
                    <option value="" selected disabled>Select One</option>
                    <option value="Owned">Owned</option>
                    <option value="Corporate-Provided">Corporate-Provided</option>
                    <option value="Mortgaged">Mortgaged</option>
                    <option value="Relative’s House">Relative’s House</option>
                    <option value="Rented">Rented</option>
                 </select>
              </div>

               <div class="form-group">
                <label for="dependents">Number of Dependents*</label>
                <select class="form-control" id="dependents">
                    <option value="" selected disabled>Select One</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4 And More">4 and More</option>
                 </select>
              </div>


              <div class="form-group">
                <label for="pannumber">PAN Number*</label>
                <input type="text" class="form-control" id="pannumber" aria-describedby="panHelp" placeholder="Enter your Unique 10 Digit PAN Number">
                 <small id="panHelp" class="form-text text-muted">We require this to check your CIBIL score & verify your identity.</small>                
              </div>



            
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="agreeCheck">
              <label class="form-check-label" for="agreeCheck">I Agree</label>
            </div>
            <button type="submit" class="btn btn-default btn-block theme_bg_color theme_border_color text-white">Apply & Proceed </button>
           </form>

         
        </div>
      </div>
    </div>
</div>
</div>





    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Cool stuff</a></li>
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Business</a></li>
            <li><a class="text-muted" href="#">Education</a></li>
            <li><a class="text-muted" href="#">Government</a></li>
            <li><a class="text-muted" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
  
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
