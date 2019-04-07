<!DOCTYPE html>
<html>
<head>

  <title>Homepage</title>


  <!-- Required Meta TAgs always comes first -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="css/normalize.min.css">
    
</head>
<body>

<div class="container-fluid">

  <!-- BODY DESIGN BEGINS -->

<!-- LOGO IMAGE NAVBAR -->

<div class="container"> <!-- Logo Container -->
    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
        <center><img src="images/logo.png" class="img-fluid"></center>
    </div> <!-- RJIT Logo -->
</div>
<!-- LOGO IMAGE NAVBAR ENDS -->

<!-- MAIN BODY BEGINS HERE -->

    

        <!-- WELCOME ALERT BEGINS HERE -->
        <br>
      <div class="container">

        <div class="alert alert-success" role="alert">
          <center>
           Thank you for your interest in <strong>Rustamji Institute of Technology</strong>
          </center>
        </div>
      </div>
            
      <!-- WELCOME ALERT ENDS HERE -->
    


      <div class="container">

              <div class="row">


                <!-- COLUMN-1 BEGINS -->
           <div class="col-md-6 guideline">
            <br>
              <!-- GUIDELINES FOR ADMISSION BEGINS -->
                <center>
                  <h6 style="color: black; font-weight: bold;">PLEASE READ ALL THE GUIDELINES CAREFULLY BEFORE PROCEEDING</h6>
              </center>
              <hr>
                  <ol>
                    <li>12th Marksheet/12th Admitcard</li>
                    <li>10th Marksheet</li>
                    <li>Domicile</li>
                    <li>Father's Service Certificate/Discharge Book(incase retired)</li>
                    <li>Aadhar-Card (UID no.) </li>
                    <li>JEE Marksheet/JEE Admitcard(mandatory incase applying through jee entry)</li>
                    <ul>Registration Fees:-
                        <li>For Widow Ward- 220 Rs.</li>
                        <li>Other Ward- 420 Rs.</li>
                    </ul>
                    
                  </ol>

              <!-- GUIDELINES FOR ADMISSION CONTENT END -->
            
          </div>

          <!-- COLUMN-1 ENDS -->

          <!-- COLUMN-2 BEGINS -->

        <div class="col-md-6">
        <div class="form">
            
            <ul class="tab-group">
              <li class="tab active"><a href="#signup">Sign Up</a></li>
              <li class="tab"><a href="#login">Sign In</a></li>
            </ul>
            
            <div class="tab-content">
              <div id="signup">
              <center>   
                <h5 style="color: cadetblue;">The past cannot be changed. The future is yet in your hand.</h5>
                </center>

                <br>
                <form action="/" method="post">
                
                  <div class="name-content">

                    <div class="field-wrap">
                      <label>
                          First Name<span class="req">*</span>
                      </label>
                      <input type="email" name="last-name" id="last-name" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                      <label>
                          Last Name<span class="req">*</span>
                      </label>
                      <input type="email" name="last-name" id="last-name" required autocomplete="off"/>
                    </div>

                  </div>

                  <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" name="email" id="email" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                        Mobile Number<span class="req">*</span>
                    </label>
                    <input type="text" id="phone" name="phone" maxlength="10" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                   <label>
                        Set Password<span class="req">*</span>
                    </label>
                    <input type="text" id="pass" name="pass" maxlength="10" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                        Confirm Password<span class="req">*</span>
                    </label>
                    <input type="text" id="cnfmpass" name="cnfmpass" maxlength="10" required autocomplete="off"/>
                  </div>

                <center>
                    <button type="submit" class="regbtn btn"/>Get Started</button>
                </center>

              </form>

            </div>
              
            <div id="login">   
                <h1 style="color: cadetblue;">Welcome Back!</h1>
                
              <form action="/" method="post">

                
                <div class="field-wrap">
                  <label>
                    Email Address<span class="req">*</span>
                  </label>
                  <input type="email"required autocomplete="off"/>
                </div>
                
                <div class="field-wrap">
                  <label>
                    Password<span class="req">*</span>
                  </label>
                  <input type="password"required autocomplete="off"/>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <button class="regbtn btn"/>Log In</button>   
                  </div>

                  <div class="col-md-6">
                    <p class="forgot"><a href="#">Forgot Password?</a></p>
                  </div>
                </div>
                
              </form>

            </div><!-- Login Div -->
              
          </div><!-- tab-content -->
            
      </div> <!-- /form -->
    </div> <!-- Col-md-6 -->
            
          <!-- COLUMN-2 ENDS -->
                  
  </div><!-- Container -->
 </div><!-- Container fluid -->
      <script src="js/jquery-2.1.3.min.js"></script>
    <script  src="js/index.js"></script>


<!-- MAIN BODY ENDS HERE -->
</div>
</body>

</html>
