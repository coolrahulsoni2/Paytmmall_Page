<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>PayTM Mall Web Page</title>

    <!-- Fonts for Page -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Ion Icon core CSS -->
    <link href="css/ionIcon/css/ionicons.min.css" rel="stylesheet">

    <!-- Custom Css For Page -->
    <link href="css/Custom.css" rel="stylesheet">


    <!-- Css styles for date Picker  -->
    <link href="css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" type="text/css" />

    <!-- Css styles for Form Validation Plugins  -->
    <link href="css/formValidation.min.css" rel="stylesheet" type="text/css" />
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
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
        <img src="img/banner.png" class="img-fluid  d-none d-sm-block" alt="Banner Image">
      <div class="col-md-5  mx-auto my-1">
        <!--
         <img src="img/logo2x.png" />
        <h1 class="display-4 font-weight-normal">CreditMate</h1>
        <p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div> -->
    </div>




<div class="container">
<div class="row justify-content-md-center">
    
    <div class="col-md-auto">
      <div class="card my-3 cardswidth" >
       <img src="img/banner.png" class="img-fluid d-block d-sm-none" alt="Banner Image">
        <div class="card-body text-left">
          <h5 class="card-title theme_text_color fnt24">Bike Details</h5>
          <hr>
          <p class="card-text">Some text</p>
          
            <form class="cMate_leadForm" method="POST"  accept-charset="UTF-8"  action="#">
<!-- 
            <div class="form-group">
              <label for="exampleInputEmail1">Bike Brand/Make*</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
             -->
            <div class="form-group">
              <label for="BikeBrand">Bike Brand/Make*</label>
              <select class="form-control" id="BikeBrand" name="BikeBrand">
                  <option value=""  disabled selected>Select One</option>
                  <option value="Bajaj">Bajaj</option>
                  <option value="Hero">Hero</option>
                  <option value="Honda">Honda</option>
                  <option value="Tvs">TVS</option>
                  <option value="Vespa">Vespa</option>
               </select>
                <small id="" class="form-text text-error errormsg"></small>
            </div>

           <div class="form-group">
            <label for="BikeModel">Bike Model*</label>
            <select class="form-control" id="BikeModel" name="BikeModel">
                <option value=""   disabled selected>Select One</option>
                <option value="Pulser">Pulser</option>
                <option value="Discover">Discover</option>
                <option value="Platina">Platina</option>
             </select>
              <small id="" class="form-text text-error errormsg"></small>
          </div>

           <div class="form-group">
            <label for="city">Select City*</label>
            <select class="form-control" id="city" name="city">
                <option value=""  disabled selected>Select One</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Discover">Ahemdabad</option>
                <option value="Baroda">Baroda</option>
             </select>
              <small id="" class="form-text text-error errormsg"></small>
          </div>

           <div class="form-group">
            <label for="loanDate">Within how many days are you willing to purchase the bike?</label>
            <select class="form-control" id="loanDate" name="loanDate">
                <option value=""  disabled selected>Select One</option>
                <option value="1 Days">1 Days</option>
                <option value="1 Week">1 Week</option>
                <option value="1 Months">1 Months</option>
             </select>
              <small id="" class="form-text text-error errormsg"></small>
          </div>

          <br>
           <h5 class="card-title theme_text_color fnt24">Contact Details</h5>
            <hr>

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter your Name">
                 <small id="" class="form-text text-error errormsg"></small>
              </div>

              <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" class="form-control" name="mobile" id="mobile" aria-describedby="mobileHelp" placeholder="Enter your 10 Digit Mobile Number">
                <small id="mobileHelp" class="form-text text-muted">Don’t worry. Your number will be safe with us.</small>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter your Email ID">
                <small id="emailHelp" class="form-text text-muted">Don’t worry. We'll Never Spam You.</small>
              </div>

          <br>
           <h5 class="card-title theme_text_color fnt24">Personal Details</h5>
            <hr>

              <div class="form-group">
               
                  <label for="dob">Date of Birth</label>

                    <div class="input-group">                     
                        <input type="text" class="form-control " name="dob"  id="dob" aria-describedby="dobHelp" placeholder="Enter/Select your Date of Birth">
                       <div class="input-group-prepend ">
                        <span class="input-group-text " id="inputGroupPrepend2"><i class="ion-android-calendar theme_text_color"></i></span>
                      </div>
                    </div>

              </div>

              <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="number" class="form-control " name="pincode"  id="pincode" aria-describedby="pincodeHelp" placeholder="Enter your 6 Digit Pincode" maxlength="6">
              </div>

              <div class="form-group radioLabel">
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
                 <small id="" class="form-text text-error errormsg"></small>
              </div>
              <br>
              <div class="form-group radioLabel">
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
              <div class="form-group radioLabel">
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
                <select class="form-control" id="occupation"  name="occupation" >
                    <option value="" selected disabled>Select One</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Discover">Ahemdabad</option>
                    <option value="Baroda">Baroda</option>
                 </select>
              </div>


              <div class="form-group">
                <label for="income">Monthly Income/Salary</label>
                <input type="text" class="form-control"  name="income"  id="income" aria-describedby="incomeHelp" placeholder="Enter Your Income">
              </div>


               <div class="form-group">
                <label for="residence">Type of Residence*</label>
                <select class="form-control" id="residence"   name="residence" >
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
                <select class="form-control" id="dependents"   name="dependents" >
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
                <input type="text" class="form-control" id="pannumber"  name="pannumber"  aria-describedby="panHelp" placeholder="Enter your Unique 10 Digit PAN Number">
                 <small id="panHelp" class="form-text text-muted">We require this to check your CIBIL score & verify your identity.</small>                
              </div>



               <div class="form-check">
                  <ul class="ul-checkbox float-left pdngleft0">
                     <li class="li-checkbox">
                        <div class="styledCheckbox">
                          <input class="input-checkbox" type="checkbox"   name="styledCheckbox1" value="None" id="styledCheckbox1" name="check">
                          <label class="label-checkbox" for="styledCheckbox1"> </label>  
                        </div>
                           I agree to CreditMate’s <a href="https://www.creditmate.in/termconditions">T&Cs</a> & <a href="https://www.creditmate.in/privacypolicy">Privacy Policy</a>.
                      </li>                
                  </ul>
                </div>
            <!--
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="agreeCheck" width="30" height="30">
              <label class="form-check-label" for="agreeCheck">I agree to CreditMate’s T&Cs & Privacy Policy.</label>
            </div> -->
            <button type="submit" class="btn btn-default btn-block theme_bg_color theme_border_color text-white" id="formSubmit">Apply & Proceed </button>
           </form>

         
        </div>
      </div>
    </div>
</div>
</div>





    <footer class="container py-5">
     
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
  
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/holder.min.js"></script>
     <script src="js/formValidation.min.js" type="text/javascript"></script>
     <script src="js/formvalibootstrap.min.js" type="text/javascript"></script>
     <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
     <script src="js/custom.js" type="text/javascript"></script>
    
  </body>
</html>
