<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
   <![endif]-->
<!--[if IE 7]>
   <html class="no-js lt-ie9 lt-ie8" lang="">
      <![endif]-->
<!--[if IE 8]>
      <html class="no-js lt-ie9" lang="">
         <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
  <title>UAE's First B2B Services Procurement Platform | Digitek</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="UAE's First B2B Services Procurement Platform | Digitek"/>
  <meta property="og:image" content="images/media/favicon.ico" />  
  <meta name="description" content="Connect with Digitek for all your Sales, Marketing & HR needs. A B2B services procurement platform for transparent, speedy & reliable business solutions">
  <meta property="og:description" content="Connect with Digitek for all your Sales, Marketing & HR needs. A B2B services procurement platform for transparent, speedy & reliable business solutions">  
  <link rel="icon" href="images/media/favicon.ico" type="image/x-icon">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="css/animate.min.5a00785bb6a8.css">
  <link rel="stylesheet" href="css/jquery-ui.70efa1ac146d.css">
  <link rel="stylesheet" href="css/output.fdd893e9232b.css" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="css/intlTelInput.1c26c6693096.css">
  <script src="https://cdn.jsdelivr.net/npm/ua-parser-js@0.7.20/src/ua-parser.min.js"></script>
  <!-- ==== MACROS ==== -->
  <!-- ==== login modal ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static" id="loginModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <h2>Welcome to Digitek</h2>
          <h4><i class="fa fa-user"></i> Login into your account</h4>
          <!-- login form start -->
          <div class="linkedin_btn">
            <a href="/social-auth/login/linkedin-oauth2/" id="linkedin_login"><img src="/static/images/signupwithlinkedin.43b7e1d2cd75.png" style="width: 100%" />
            </a>
          </div>
          <div align="center" class="bottom_line_linkedin" style="margin-bottom: 0px !important"><h3 class=""> OR </h3></div>
          <small style="color:red" id="existingusermsg"></small>
          <form method="post" id="loginModalForm" class="needs-validation" action="">
            <input type="hidden" name="csrfmiddlewaretoken" value="rl4NMe6gZATFtzwDHhYpXk8PyoCsFlgTeYHhsHQej8MPlsnBr5iaG8SacyIWHwpy">
              <div class="form-group">
                <input type="email" name="email" id="login_email" class="form-control" placeholder="Email" value="" required autofocus />
              </div>
              <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" pattern=".{6,50}" title="Password must be minimum 6 and maximum 50 character" required />
                  <p id="email-password-error" style="color:red;display:none">Email or password is not valid</p>
              </div>
              <input type="submit" class="btn button fill-btn padded font16" value="Login">
              <p class="forget-pass"><a class="pull-left hidden" data-toggle="modal" data-target="#signupModal">Create a new account</a> <a data-toggle="modal" data-target="#forgotpasswordModal" class="pull-left">Forgot Password?</a></p>
          </form>
            <!-- login form end -->
        </div>
      </div>
    </div>
  </div>
  <!-- ==== modal ==== -->

  <!-- ==== registration modal ==== -->
<div class="modal fade login-modal-design" data-backdrop="static" id="registrationModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h2>Welcome to Digitek</h2>
        <h4><i class="fa fa-user-plus"></i> Create a new account</h4>
        <form action="" method="post" id="registerModalForm" class="needs-validation" novalidate>
          <div class="row signup_form">            
            <div class="container linkedin_btn">
              <a data-href="/social-auth/login/linkedin-oauth2/" id="linkedin_signup" class="" style=""><img src="/static/images/signupwithlinkedin.43b7e1d2cd75.png" class="linkedin-img" />
              </a>
            </div>
            <div align="center" class="bottom_line_linkedin"><h3 class=""> OR </h3></div>
            <div class="col-lg-12">
              <label for="name"></label>
              <div class="form-group focused">
                <input type="text" name="fullname" id="name" value="" class="form-control form-control-lg" placeholder="Name*" required autofocus />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="email" name="email" id="email" value="" class="form-control form-control-lg" placeholder="Email*  (Please provide official email ID)" required />
                <input type="hidden" name="user_type" id="user_type" value="client" />
                <input type="hidden" name="signup_type" id="signup_type" value="" />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused" style="margin-bottom: 0px !important">
                <input type="password" name="password" value="" class="form-control form-control-lg" minlength="6" maxlength="15" placeholder="Password* (must be atleast 6 characters)" id="password" required />
                <i class="fa fa-eye" id="show-hidePassword" ></i>
              </div>
            </div>
            <p align="center" id="signup_error_msg" style="color:red; display:none"></p>

            <div class="col-lg-12">
              <button type="submit" id="submit-btn" class="btn button fill-btn padded font16" value="">Continue</button>
            </div>
          </div>
        </form>
        <form action="" method="post" id="emailotpModalForm" class="needs-validation" style="display:none;" novalidate>          
          <div>
            <h4 style="color:green" align="center" id="sent_emailotp_msg"></h4>
            <div class="form-group focused" style="margin-bottom: -28px">
                <input type="tel" maxlength="6" minlength="6" name="email_otp" id="email_otp" value="" class="form-control form-control-lg" placeholder="Enter Email OTP" required/>
                <button class="btn btn_in" title="Resend Email OTP" id="resend_email_otp" style="background: #FFCD2D !important;" value=""><i class="fa fa-repeat" aria-hidden="true"></i></button>
            </div>
            <div class="row" style="margin-top: 8px">
              <p align="center" id="email-otp-error-msg" style="color:red; display:none;"></p>
              <div class="col-lg-6 col-sm-6 col-xs-6" id="">
                <button title="Edit Details" id="edit_email_form" type="button" class="btn btn-link padded font16" value=""><i class="fa fa-edit fa-lg"></i>Edit Details</button>
              </div>
              <div class="col-lg-12 col-sm-12 col-xs-12" id="">
                <button type="submit" id="submit_email_otp" class="btn button fill-btn padded font16" style="margin: 2px 0px 10px" value="">Verify Email</button>
              </div>
            </div>
          </div>
        </form>
        <p style="margin-top: 25px !important">Already Registered? <a data-toggle="modal" data-target="#loginModal">Login here</a></p>
      </div>
    </div>
  </div>
</div>
  <!-- ==== registration modal end ==== -->

<!-- ==== mobile signup modal ==== -->
<div class="modal fade login-modal-design" data-backdrop="static" id="mobileSignupModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h2>Digitek</h2>
        <form action="" method="post" id="mobileSignupModalForm" class="needs-validation" novalidate>
          <div class="row" style="margin-bottom: -25px">
            <div class="col-lg-12">
              <div class="form-group focused">
                <select id="source" name="source" style="width: -webkit-fill-available;height: 46px !important;border: 1px solid #ddd;;border-radius: 4px; color: black !important" required>
                  <option value=""  selected disabled>How did you hear about us?</option>              
                  <option value="537">via Google search for agency</option>
                  <option value="538">I saw your linkedIn post</option>
                  <option value="539">I read a News Article about you</option>
                  <option value="540">I participated in Digitek Webinar</option>
                  <option value="541">Digitek Team Reached Out</option>
                  <option value="542">I read your NewsLetter</option>
                  <option value="543">I was Referred by Someone</option>
                  <option value="2874">I saw your YouTube Ad</option>
                  <option value="544">Other</option>              
                </select>
              </div>
            </div>
            <div class="col-md-12 referer_details" style="display: none;">
              <div class="form-group focused">
                <textarea class="form-control" id="referee_details" name="referee_details" rows="2" placeholder="Please share details of Referee..." style="height: auto"></textarea>
              </div>
            </div>            
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="tel" name="phone_no" id="phone_no" value=""  class="phone_no form-control form-control-lg" placeholder="Phone Number*" required/>
                <input type="hidden" id="logo_url" name="logo_url" value="">
              </div>
            </div>
            <div id="client_detail" style="display:none;">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" id="client_company" name="company_name" value="" class="form-control ui-autocomplete-input" autocomplete="off" placeholder="Company Name*" required/>
                  <input type="hidden" id="client"  value="client">
                   <input type="hidden" name="website" value=""/>
                </div>
              </div>
              <div class="col-lg-12 partner-referral">
                <div class="form-group focused">
                  <label style="font-weight:400"><input type="checkbox" name="partner_refer"> I have a referral code.</label>
                </div>
              </div>
              <div class="col-md-12 partner_referral_code" style="display: none;">
                <div class="form-group focused">
                  <input type="text" name="partner_refer_code" maxlength="5" class="form-control form-control-lg" placeholder="Enter your code here." required />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <label style="font-weight:400"><input type="checkbox" name="terms" title="Please check the Terms & Policy." required>  I agree to the <a href="/terms-of-use-client/" target="_blank">Terms of Use</a>  &  <a href="/privacy-policy/" target="_blank">Privacy Policy </a></label>
                </div>
              </div>
              <input required type="radio" name="user_type" value="client" style="display:none">
            </div>
            <div id="vendor_detail" style="display:none;">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <label style="font-weight:400">
                    <input required type="radio" name="user_type" value="vendor">
                    I'm an Agency
                  </label>
                  <label style="font-weight:400">
                    <input required type="radio" name="user_type" value="expert">
                    I'm an individual Expert
                  </label>
                </div>
              </div>
              <div class="col-md-12 vendor-qs" style="display:none">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <input type="text" id="vendor_company" name="company_name" value="" class="form-control ui-autocomplete-input" autocomplete="off" placeholder="Company Name*" required/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <input type="text" name="website" value="" class="form-control form-control-lg website" placeholder="Company Website*" required/>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 referral" style="display:none">
                <div class="form-group focused">
                  <label style="font-weight:400"><input type="checkbox" name="refer"> I have a referral code.</label>
                </div>
              </div>
              <div class="col-md-12 referral_code" style="display:none">
                <div class="form-group focused">
                  <input type="text" name="refer_code" maxlength="5" class="form-control form-control-lg" placeholder="Enter your code here." required />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <label style="font-weight:400"><input type="checkbox" name="terms" title="Please check the Terms & Policy." required>  I agree to the  <a href="/terms-of-use-service-provider/" target="_blank">Terms of Use</a>  &  <a href="/privacy-policy/" target="_blank">Privacy Policy </a></label>
                </div>
              </div>
            </div>
            <p style="color:red" align="center" id="mobile_signup_error_msg"></p>
            <div class="col-lg-12" id="">
              <button type="submit" id="send_mobile_otp"  class="btn button fill-btn padded font16" value="">Verify Mobile</button>
            </div>
          </div>
        </form>
        <form action="" method="post" id="mobileotpModalForm" style="display:none;" class="needs-validation" novalidate>          
          <div>
            <h4 style="color:green" align="center" id="sent_mobileotp_msg"></h4>
            <div class="form-group focused">
                <input type="tel" maxlength="6" minlength="6" name="mobile_otp" id="mobile_otp" value="" class="form-control form-control-lg" placeholder="Enter Mobile OTP" required/>
                <button class="btn btn_in" id="resend_mobile_otp" style="background: #FFCD2D !important;margin-right:15px;" value=""><i class="fa fa-repeat" aria-hidden="true"></i> </button>
              <div class="row" style="margin-top:-35px">
                <p align="center" style="color:red; display:none; margin-top: 10px" id="mobile_otp_error_msg"></p>
                <div class="col-lg-6 col-sm-6 col-xs-6" id="">
                  <button id="edit_mobile_form" type="button" class="btn btn-link padded font16" value=""><i class="fa fa-edit fa-lg"></i>Edit Details</button>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12" id="">
                  <button type="submit" style="margin: 2px 0px 10px" id="submit_mobile_otp" class="btn button fill-btn padded font16" value="">Create Account</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ==== mobile signup modal end ==== -->

<!-- linkedin user asking modal -->
<div class="modal fade login-modal-design" id="linkedinUserAskingModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h2>Welcome to Digitek</h2>
        <p class="" align="center" style="color:red;">Your linkedin profile is not registered at Digitek</p>
        <h4><i class="fa fa-user-plus"></i>Register here</h4>
        <div class="row" style="margin-bottom: 20px" id='linkedin_usertype'>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <a href="#" data-id="client" class="btn btn-warning  hero-buttons" style="font-size: 14px !important; width:185px !important; padding:6px !important">I need a Service Provider</a><br>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <a href="#" data-id="vendor" class="btn btn-warning  hero-buttons" style="font-size: 14px !important; width:185px !important; padding:6px !important">I am a Service Provider</a><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- linkedin user asking modal end -->

  <!-- ==== for advocacy program modal ==== -->
<div class="modal fade login-modal-design" data-backdrop="static" id="advocacyModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h2>Welcome to Digitek</h2>
        <h4><i class="fa fa-user-plus"></i> Join the Advocacy Program</h4>
        <form action="" method="post" id="advocacyModalForm" class="needs-validation" novalidate>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="text" name="name" value="" class="form-control form-control-lg" placeholder="Name*" required />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="email" name="email" value="" class="form-control form-control-lg" placeholder="Email*" required />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="tel" name="phone_no"  value=""  class="phone_no form-control form-control-lg" placeholder="Phone Number*" required/>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="text" name="linkedin_url"  value=""  class="form-control form-control-lg linkedin-url" placeholder="LinkedIn Profile*" required/>
                <input type="hidden" id="advocacy" name="advocacy" value="advocacy">
              </div>
            </div>
            <div class="col-lg-12">
            <small style="color:red; text-align:center;" id="existingemailmsg"></small>
              <button type="submit" class="btn button fill-btn padded font16" id="submit_btn_advocacy" value="">Join</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ==== for advocacy program modal end ==== -->

 <!-- ==== forgot password modal ==== -->
<div class="modal fade login-modal-design" data-backdrop="static" id="forgotpasswordModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h2>Forgot Password?</h2>
        <h4>We will send you a reset link via email.</h4>
        <form action="" method="post" id="forgotPasswordForm" class="needs-validation" novalidate>
          <div class="form-group has-icon"><i class="icon-envelope-o"></i>
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter Email Address" required id="id_email">
          </div>
            <div class="col-lg-12">
              <div class="form-group text-left">
                <p id="forgotpassword-error-msg" style="color:red;display:none">Please enter the correct email-id</p>
                </div>
            </div>
          <input type="submit" class="btn button fill-btn padded font16" value="Reset Password">
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- ==== forgot password modal end ==== -->

  <!-- ==== reset password modal ==== -->
<div class="modal fade login-modal-design" data-backdrop="static" id="resetPasswordModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h2>Reset Password</h2>
        <h4>Please enter your new password</h4>
        <p>6 to 50 characters, numbers and symbols allowed</p>
        <form action="" method="post" id="resetPasswordForm">
        <div class="row">
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="password" name="new_password1" class="form-control form-control-lg" placeholder="New Password" minlength="6" maxlength="50" required>
              </div>
              <div class="form-group focused">
                <input type="password" name="new_password2" class="form-control form-control-lg" placeholder="Confirm Password" minlength="6" maxlength="50" required>
              </div>
              <div class="form-group text-left">
                <p id="resetpassword-error-msg" style="color:red;display:none">The two passwords entered didn't match.</p>
              </div>
              <input type="submit" class="btn button fill-btn padded font16" value="Change my password">
            </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- ==== reset password modal end ==== -->

  <!-- ==== forgot password message ==== -->
<div class="modal fade login-modal-design" data-backdrop="static" id="forgotpasswordmessage" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
      <div class="row">
          <div class="text-center">
          <img src="/static/images/logo/logo_white.a718398d0f29.png" style="margin-bottom:20px" width="150" alt=""></a>
          <p id="passowrdresetmsg"></p>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
  <!-- ==== forgot password message end ==== -->

<!-- ==== otp modal for Advocacy  ==== -->
<div class="modal fade login-modal-design" data-backdrop="static" id="advo-otpModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h2>Digitek</h2>
        <h4 style="color:green" id="otptext"></h4>
        <form action="" method="post" id="advo-mobileotpModalForm" class="needs-validation" novalidate>
          <div>
            <div class="form-group focused">
              <label for="mobile_otp" id="advo-mobiletext">Mobile Otp</label>
              <div class="row">
                <div class="col-md-4">
                  <input type="tel" maxlength="6" minlength="6" name="advo-mobile_otp" id="advo-mobile_otp" value="" class="form-control form-control-lg" required/>
                </div>
                <div class="col-md-8" style="margin-top:5px">
                  <button class="btn" id="advo-resend_mobile_otp" style="background: #FFCD2D !important;margin-right:15px;" value=""><i class="fa fa-repeat" aria-hidden="true"></i> Resend</button>
                  <button class="btn" id="advo-submit_mobile_otp" style="background: #FFCD2D !important;"><i class="fa fa-check-circle" aria-hidden="true"></i> Verify</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <form action="" method="post" id="advo-emailotpModalForm" class="needs-validation" novalidate>
          <div>
            <div class="form-group focused">
              <label for="email_otp" id="advo-emailtext">Email Otp</label>
              <div class="row">
                <div class="col-md-4">
                  <input type="tel" maxlength="6" minlength="6" name="advo-email_otp" id="advo-email_otp" value="" class="form-control form-control-lg"required/>
                </div>
                <div class="col-md-8" style="margin-top: 5px;">
                  <button class="btn" id="advo-resend_email_otp" style="background: #FFCD2D !important;margin-right:15px;" value=""><i class="fa fa-repeat" aria-hidden="true"></i> Resend</button>
                  <button class="btn" id="advo-submit_email_otp" style="background: #FFCD2D !important;"><i class="fa fa-check-circle" aria-hidden="true"></i> Verify</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group text-left">
              <p id="otp-error-msg" style="color:red;display:none">Oops! Looks like our Engineers went to Sleep. Will wake them up and get this corrected.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <button id="advo-edit_details" type="button" class="btn btn-link padded font16" value=""><i class="fa fa-edit fa-lg"></i>Edit Details</button>
          </div>
          <div class="col-lg-6">
            <button type="submit" id="submit-details" disabled class="btn button fill-btn padded font16" value="">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- ==== otp modal (Advocacy) end ==== -->

<!-- ==== subscribe newsletter modal ==== -->
<div class="modal fade login-modal-design" data-backdrop="static" id="subscribeModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
          <h2>Welcome to Digitek</h2>
          <h4><i class="fa fa-bell"></i>Register here for our weekly Content Newsletter</h4>
          <form action="" method="post" id="subscribeModalForm" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" name="fullname" value="" class="form-control form-control-lg" placeholder="Name*" required />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="email" name="email" id="subs_email" value="" class="form-control form-control-lg" placeholder="Email Id(Please provide official email ID)" required />
                  <input type="hidden" value="1" formCheck id="subscriber_form" class="" name="subscriber_form">
                </div>
              </div>
              <p id="sub_msg"></p>
              <div class="col-lg-6">
                <button type="button" class="btn button fill-btn padded font16" data-dismiss="modal" value=""><i class="fa fa-bell-slash"></i>Not Interested</button>
              </div>
              <div class="col-lg-6">
                <button type="submit" id="submit-subscriber" class="btn button fill-btn padded font16" value=""> <i class="fa fa-bell"></i> Subscribe</button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
  <!-- ==== subscribe newsletter modal end ==== -->

<!-- ==== schedule demo modal ==== -->
<div class="modal fade login-modal-design bigDialogModal" data-backdrop="static" id="scheduleDemoModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h2>Welcome to Digitek</h2>
        <h4><i class="fa fa-calendar"></i> Schedule a Demo</h4>
        <form action="" method="post" id="scheduleDemoModalForm" class="needs-validation" novalidate>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group focused">
                <input type="text" name="fullname" value="" class="form-control form-control-lg" placeholder="Name*" required />
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group focused">
                <input type="email" name="email" value="" class="form-control form-control-lg" placeholder="Email Id(Please provide official email ID)" required />
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group focused">
                <input type="text" name="company_name" value="" class="form-control ui-autocomplete-input" autocomplete="off" placeholder="Company Name*" value="" required/>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group focused">
                <input type="tel" name="phone_no"  value=""  class="phone_no form-control form-control-lg" placeholder="Phone Number*" required/>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group focused">
                <label class="date-time-lbl">Select Date</label>
                <input type="text" name="date" value="" id="schedule_date" class="form-control form-control-lg"  placeholder="Date*" required />
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label class="date-time-lbl">Select Time (IST)</label><br>
              <div class="form-group focused" style="display:inline-flex;width: 100%;">
                <select name="hour" id="hour" class="form-control form-control-lg" style="margin-right: 10px;" required>
                  <option value="">Hour</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                </select>
                <select name="minute" id="minute" class="form-control form-control-lg"  style="margin-right: 10px;" required>
                  <option value="">Minute</option>
                  <option value="00">00</option>
                  <option value="05">05</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                  <option value="30">30</option>
                  <option value="35">35</option>
                  <option value="40">40</option>
                  <option value="45">45</option>
                  <option value="50">50</option>
                  <option value="55">55</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:30px">
              <div class="form-group text-left">
                <input type="hidden" id="demo-type" name="demo_type" value=""/>
                <p class="privacy-policy">By submitting this form, you agree to the terms of our <a href="/privacy-policy/" target="_blank">Privacy Policy. </a><p>
                <p id="demo_msg"></p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12"  style="margin-top:15px">
              <button type="submit" id="submit-demo" class="btn button btn-demo" value="">Send Request</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- ==== schedule demo modal end ==== -->

<!-- ==== Demo Success message ==== -->
<div class="modal fade login-modal-design bigDialogModal" data-backdrop="static" id="scheduleDemoMessage" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="row">
          <div class="text-center">
          <a href="#"><img src="/static/images/logo/logo_white.a718398d0f29.png" style="margin-bottom:20px" width="150" alt=""></a>
          <div id="demomessage" style="margin: 0 0 20px;font-size: 16px;font-weight: 600;"></div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- ==== Demo Success message end ==== -->

<!-- ==== for jobApplication modal ==== -->
<div class="modal fade login-modal-design" data-backdrop="static" id="jobApplicationModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h2>Welcome to Digitek</h2>
        <h4><i class="fa fa-file-text"></i> Apply now </h4>
        <form enctype="multipart/form-data" action="" method="post" id="jobApplicationModalForm" class="needs-validation">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="text" name="name" value="" class="form-control form-control-lg" placeholder="Name*" required />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="email" name="email" value="" class="form-control form-control-lg" placeholder="Email*" required />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="tel" name="phone_no"  value=""  class="phone_no form-control form-control-lg" placeholder="Phone Number*" required/>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <label for="resume" style="text-align:center;" id="">Upload Resume*</label>
                <input type="file" name="resume" id="resume" value="" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="form-control form-control-lg" required/>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="text" name="linkedin_url"  value=""  class="form-control form-control-lg linkedin-url" placeholder="LinkedIn Profile"/>
                <input type="hidden" id="job_title" name="job_title" value=""/>
              </div>
            </div>
            <div class="col-lg-12">
            <small style="color:red; text-align:center;" id="jobapplication_error_msg"></small>
              <input type="submit" class="btn button fill-btn padded font16" id="submit_btn_jobApplication" value="Apply"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ==== for jobApplication modal end ==== -->
<!-- ==== for contact agency modal ==== -->
<div class="modal fade login-modal-design modal-dialog-centered" data-backdrop="static" id="contactAgencyModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="head-cross">
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <h4><i class="fa fa-file-text"></i> </h4>
        <form enctype="multipart/form-data" action="" method="post" id="contactAgencyModalForm" class="needs-validation">
          <input type="hidden" name="csrfmiddlewaretoken" value="G7YPLZQDlxrcd1gRuOH0phBE4lP4Wjr2tKBjrsABF5km5U7PeC1L85lZIvVyYuAH">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="text" name="fullname" value="" class="form-control form-control-lg" placeholder="Name*" required />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="email" name="email" value="" class="form-control form-control-lg" placeholder="Email*" required />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="tel" name="phone_no"  value=""  class="phone_no form-control form-control-lg" placeholder="Phone Number*" required/>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <input type="text" name="company_name" value="" class="form-control ui-autocomplete-input" placeholder="Company Name*" value="" required/>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group focused">
                <textarea class="form-control" id="details" name="details" rows="2" placeholder="Enter your message here..." style="height: auto" required></textarea>
                <input type="hidden" value="" formCheck id="contact_agency_form" class="" name="contact_agency_form">
              </div>
            </div>
            <div class="col-lg-12">
            <small style="color:red; text-align:center;" id="contact_agency_error_msg"></small>
              <input type="submit" class="btn button fill-btn padded font16" id="submit_btn_contact_agency" value="Send"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ==== for contact agency modal end ==== -->
  
  <link rel="stylesheet" href="css/owl.carousel.min.4668659fa96b.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.594b81805a98.css">

  
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132896942-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-132896942-1');
  </script>
  

  <script type="application/ld+json">
   
    {
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How do I find an Agency for my Business on Digitek?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You start the process at Digitek by posting project details online using our Conversational AI. It will ask you about your project including project type, duration, budget, location, audience demographic etc that helps you create a solid Project Scoping Document. When you’re happy with this, we do a provisional check by contacting you and confirming the scope of the project. Then we start the matching process. The Digitek algorithm will release the best fit agencies on your dashboard and open up calendars for your to have your first conversations directly with the service provider, as the case may be."
      }
    },
    {
      "@type": "Question",
      "name": "How do you ensure the right Quality Agency partner is selected?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use cutting edge algorithms which take your project description questionnaire and match it with our partners (experts or service providers). If we believe that you would be well served by speaking to a partner, the best partners that match your requirement, are brought to your consideration. You may choose one basis the profiles shared with you for a more detailed conversation."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to meet the agency?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, all of our clients run the process entirely through our platform, making use of the schedule a call functionality to sort out any questions on proposals or experience. Some will do zoom/hangout discussions. Many clients are happy for partners to work completely remotely as well. Our aim is to get the right partner for you and how you finalise the selection is up to you."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly will I get my project started?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This really depends on the complexity of the request. Our aim is to have the first suitable partners with you within 72 hours."
      }
    },
    {
      "@type": "Question",
      "name": "Do I pay the partner directly?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We can invoice you for the total project cost. When we have received payment, we will pay the partner. This makes it much easier for you to manage multiple freelancers. You may also decide to have a direct contract with the partner."
      }
    },
    {
      "@type": "Question",
      "name": "Why Should I Choose Digitek?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Digitek is a B2B marketing and sales services procurement platform. We use a proprietary algorithm to select the best service providers for every business growth need. Digitek takes ownership of the quality-of-service providers by ensuring that they are affordable, impactful and relevant. We bring simplicity, transparency, speed and reliability to the procurement process. For our service providers, we open up new avenues of business development and provide an opportunity to work with different industries and markets. Digitek’s marketplace is free to use for companies seeking growth services. Over 2000+ fast growing companies have benefitted through our curated network of 1000+ service providers and 200+ experts and we have executed over 1900+ projects in the last 18 months across various industries such as Home & Personal Care, Food & Beverage, Healthcare, Online Retail, etc."
      }
    }
  ]
}
   
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  if (typeof jQuery == 'undefined') {
    document.write(unescape("%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
  }
  </script>
</head>

<body>
  <?php
    include("header.php");
  ?>
  <div class="main digital-partner">
    <div class="section-1">
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <div class="section-2-subsection">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12 sec-1-b1">
                      <p class="hero-heading-p"> UAE's Largest Marketplace</p>
                      <p class="hero-heading-p">For Marketing Agencies.</p><br>
                      <p class="hero-sub-heading-p">Focus on qualified opportunities across the globe.</p><br>
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <a href="#" data-toggle="modal"  data-user_type="vendor" data-target="#registrationModal" class="btn hero-buttons hero-buttons-p">Find New Business </a><br>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <a href="/agency-stories/" target="_blank"  class="btn hero-buttons hero-buttons-p">Meet Our Agencies </a><br>
                         </div>   
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 margin-video-top margin-video-top-p sec-1-b2">                        
                      <img class="img-responsive sec-1-img" id="banner-img" src="images/media/Tc44.gif" alt="banner" loop="infinite"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-12 d-n-sm">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="section-2-subsection">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <p class="sub-heading-sml-p" style="margin-bottom:30px">HOW IT WORKS</p>
                      <p class="heading-p" style="margin-bottom:60px">Make the most of our Best in<br class="hidden-xs"> Class Workflow Platform.</p>
                      <div class="row" style="margin-right: 0px !important;margin-left:0px !important;">
                        <div class="col-md-3 col-sm-6 col-xs-12 how-it-work-box-p" >
                          <span class="badge-p">1</span>
                          <p class="box-heading-p">Create your Digitek <br>Profile</p>
                          <p class="box-content-p">Create your profile, add your previous work, define your strength areas, pricing preference etc. We use this information, 
                            including you/your firm’s capabilities, skillsets, awards, and more, to help find the best projects for you.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 how-it-work-box-p">
                          <span class="badge-p">2</span>
                          <p class="box-heading-p">Get Precise Project <br>Briefs</p>
                          <p class="box-content-p">Hundreds of companies come to Digitek every month looking to procure services. They use our dynamic scoping engine to 
                            define their needs. You’ll have access to projects when you are selected by our algorithm and approved by the client. </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 how-it-work-box-p">
                          <span class="badge-p">3</span>
                          <p class="box-heading-p">Collaborate &<br> Manage on platform</p>
                          <p class="box-content-p">Use the Digitek platform to have conversations with clients, send and receive files. 
                          The platform takes care of scheduling your conversations and meetings. Use the Proposal Maker to create winning 
                          proposals with clear milestones and deliverables.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 how-it-work-box-p">
                          <span class="badge-p">4</span>
                          <p class="box-heading-p">Get Faster Payment <br>on Milestone</p>
                          <p class="box-content-p">Once the project is approved, we manage the invoicing and payment process so you can concentrate on delivering great results. 
                          With the launch of our new Escrow payment solution, payment is more immediate and easily managed.</p>
                        </div>
                      </div>
                      <div class="row"  style="margin-right: 0px !important; margin-left:0px !important;margin-top:80px;">
                        <div class="green-box-p">
                          <p class="green-box-text-p">Digitek allows  all service providers, independent of  size or location, an opportunity to compete on relevant projects and win basis their 
                            expertise and capabilities.</p>
                          <div class="green-box-p">
                            <p class="green-box-text-p">INR 150 Cr of RFPs since 2019. 100% On Time Payment for Work Delivered.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-12 d-b-sm">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="section-2-subsection">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <p class="sub-heading-sml-p">HOW IT WORKS</p>
                      <p class="heading-p">Make the most of our Best in<br class="hidden-xs"> Class Workflow Platform.</p>
                      <div class="row">
                        <div class="justify-content-md-center">
                          <div class="col-md-4 col-sm-4 col-xs-12" >
                            <div class="how-it-work-box-p">
                              <span class="badge-p">1</span>
                              <p class="box-heading-p">Create your Digitek <br>Profile</p>
                              <p class="box-content-p">Create your profile, add your previous work, define your strength areas, pricing preference etc. We use this information, 
                                including you/your firm’s capabilities, skillsets, awards, and more, to help find the best projects for you.</p>
                            </div>    
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="how-it-work-box-p">
                              <span class="badge-p">2</span>
                              <p class="box-heading-p">Get Precise Project <br>Briefs</p>
                              <p class="box-content-p">Hundreds of companies come to Digitek every month looking to procure services. They use our dynamic scoping engine to 
                                define their needs. You’ll have access to projects when you are selected by our algorithm and approved by the client. </p>
                            </div>    
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="how-it-work-box-p">
                              <span class="badge-p">3</span>
                              <p class="box-heading-p">Collaborate &<br> Manage on platform</p>
                              <p class="box-content-p">Use the Digitek platform to have conversations with clients, send and receive files. 
                              The platform takes care of scheduling your conversations and meetings. Use the Proposal Maker to create winning 
                              proposals with clear milestones and deliverables.</p>
                            </div>  
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="how-it-work-box-p">
                              <span class="badge-p">4</span>
                              <p class="box-heading-p">Get Faster Payment <br>on Milestone</p>
                              <p class="box-content-p">Once the project is approved, we manage the invoicing and payment process so you can concentrate on delivering great results. 
                              With the launch of our new Escrow payment solution, payment is more immediate and easily managed.</p>
                            </div>  
                          </div>
                        </div> 
                      </div>
                       
                      <div class="row">
                        <div class="green-box-p">
                          <p class="green-box-text-p">Digitek allows  all service providers, independent of  size or location, an opportunity to compete on relevant projects and win basis their 
                            expertise and capabilities.</p>
                          <div class="green-box-p">
                            <p class="green-box-text-p">INR 150 Cr of RFPs since 2019. 100% On Time Payment for Work Delivered.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <div class="section-14">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="section-2-subsection">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <p class="heading-p">Who comes on Digitek?</p>
                      <p class="sub-heading-p">Procurement teams, Marketing teams, Founders, 
                        CXOs from thousands of companies globally come to find agencies for Social Media, Market Research, PR, Branding, 
                        Lead generation and much more!</p>
                      <span style="display: none;">Procurement teams, Marketing teams, Founders, CXOs from thousands of companies globally come to find agencies for Social Media, 
                        Market Research, PR, Branding, Lead generation and much more!</span>
                    </div>                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>         
        <script src="js/owl.carousel.min.b7b9c97cd68e.js"></script>
        <script>
            $('.team-slider').owlCarousel({
              loop:true,
              margin:10,
              video:true,
              nav:true,
              lazyLoad:true,
              autoplay:true,
              autoplayTimeout:1000,
              autoplayHoverPause:true,
              responsiveClass:true,
              responsive:{
                  0:{
                      items:2,
                      rows:2
                  },
                  480:{
                      items:2,
                      rows:2
                  },
                  560:{
                      items:2,
                      rows:2
                  },
                  760:{
                      items:2,
                      rows:2
                  },
                  990:{
                      items:4,
                      rows:2
                  },
                  1200:{
                      items:4,
                      rows:2
                  },
                  1500:{
                      items:4,
                      rows:2
                  }
                }
            });
            var l= document.getElementsByClassName("team-slider")[0];
            if (l){
                var list2= l.getElementsByClassName("owl-nav")[0];
                list2.getElementsByClassName("owl-next")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-right'></i>";
                list2.getElementsByClassName("owl-prev")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-left'></i>";
            }
            var l2= document.getElementsByClassName("team-slider")[1];
            if (l2){
                var list3= l2.getElementsByClassName("owl-nav")[0];
                list3.getElementsByClassName("owl-next")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-right'></i>";
                list3.getElementsByClassName("owl-prev")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-left'></i>";
            }
        </script>
    
        <div class="section-12 d-n-sm">
          <!-- <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="section-2-subsection">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <p class="heading-p text-center" style="margin-bottom:50px">Join our Growing network <br class="hidden-xs">of curated partners</p>
                        <div class="join-network-slider owl-carousel owl-theme">
                          <div class="item" style="padding:20px;">
                            <p class="margin-bottom">
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="pull-right">Dec 6, 2019</span>
                            </p>
                            <h4 class="text-bold slide-heading-p">Delivers qualified project leads - A Digital Marketing Agency</h4>
                            <p  class="slide-content-p">Digitek helps us land qualified leads for projects that we otherwise would not have access!</p>
                          </div>
                          <div class="item" style="padding:20px;">
                            <p class="margin-bottom">
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="pull-right">July 23, 2020</span>
                            </p>
                            <h4  class="text-bold slide-heading-p">Product Marketing Service - SureClaim</h4>
                            <p  class="slide-content-p">Digitek made it very simple to find the right marketing agencies for our rapidly growing business. Their algorithm worked 
                              very well, giving us three very logical and relevant options to choose from. By presenting the relevant credentials of each agency, 
                            they made decision making very simple. Digitek platform set the right expectations on both sides of the table, allowing the process to flow 
                            from enquiry to closure 
                            in quick time. We have now put in newer requirements on the platform with the confidence that the simple, quick, 
                            transparent process will work just as well each time.</p>
                          </div>
                          <div class="item" style="padding:20px;">
                            <p class="margin-bottom">
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="pull-right">July 2, 2020</span>
                            </p>
                            <h4  class="text-bold slide-heading-p">Fantastic experience in finding solutions every single time - Josh Talks</h4>
                            <p class="slide-content-p">We have been using the Digitek platform for finding the right kind of consultants for more than the last 12 months. 
                            What has worked best for us is the ability to connect to 2-3 extremely relevant consultants/ agencies within a day. The process of receiving 
                            proposals, and solutions has been extremely quick and transparent - resulting in important projects getting started much quicker than before. 
                            Further, the Digitek platform provides great support in terms of framing contracts, defining payment terms/ liabilities resulting in great 
                            accountability overall.</p>
                          </div>
                          <div class="item" style="padding:20px;">
                            <p class="margin-bottom">
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="pull-right">Jan 15, 2020</span>
                            </p>
                            <h4  class="text-bold slide-heading-p">Deliver qualified projects - A Recruitment Agency</h4>
                            <p>We have partnered with them in September, got qualified leads with precise briefs</p>
                          </div>
                          <div class="item" style="padding:20px;">
                            <p class="margin-bottom">
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="pull-right">Sep 16, 2020</span>
                            </p>
                            <h4  class="text-bold slide-heading-p">Digitek have helped us grow! - 10XG ventures</h4>
                            <p>We signed up with Digitek last year and Vipul and Venkat have been a great support, helping us transition from a 
                              newly formed Consultancy to 
                          a more hands-on firm able to offer our best to our clients.The projects we have received through their algorithm has 
                          also been well matched.</p>
                          </div>
                          <div class="item" style="padding:20px;">
                            <p class="margin-bottom">
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="fa fa-star checked-star"></span>
                              <span class="pull-right">Sep 2, 2020</span>
                            </p>
                            <h4  class="text-bold slide-heading-p">Our go to platform to source reliable agencies at an optimum cost - Swiggy</h4>
                            <p>We got introduced to the Digitek platform last year and since then it has been our platform of choice for sourcing agencies for our delivery 
                              partner marketing campaigns. 
                            We have reached out to the platform with requirements on social media campaigns, celebrity association, brand guidelines etc. 
                            and the algorithm has always dished out the relevant set of agencies to execute the project within the specified budget. 
                            I would highly recommend Digitek to anyone who is looking for reliable & cost-efficient partners to solve their sales/marketing problems.</p>
                          </div>
                        </div>


                        <script>
                            $('.join-network-slider').owlCarousel({
                                stagePadding: 300,
                                loop:true,
                                margin:40,
                                nav:true,
                                autoplay:true,
                                autoplayTimeout:500000,
                                autoplayHoverPause:true,
                                responsive:{
                                    0:{
                                        items:1
                                    },
                                    600:{
                                        items:1
                                    },
                                    1000:{
                                        items:1
                                    }
                                }
                              })
                            var slide = document.getElementsByClassName("join-network-slider")[0];
                            if(slide){
                              var dots= slide.getElementsByClassName("owl-nav")[0];
                                dots.getElementsByClassName("owl-next")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-right'></i>";
                                dots.getElementsByClassName("owl-prev")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-left'></i>";
                              }
                            var slide2= document.getElementsByClassName("join-network-slider")[1];
                            if(slide2) {
                              var dots2= slide2.getElementsByClassName("owl-nav")[0];
                              dots2.getElementsByClassName("owl-next")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-right'></i>";
                              dots2.getElementsByClassName("owl-prev")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-left'></i>";
                            }
                        </script>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
  
    
          <div class="section-12">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="section-2-subsection">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="heading-p text-center">How to Improve your chances to<br class="hidden-xs"> get qualified projects<p>
                        <div class="panel-group" id="accordion">
                          <div class="panel ">
                            <div class="panel-heading active">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="pnl-font">
                                <b class="f-bold">1.</b>Don't be shy</a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                              <div class="panel-body">You’re a great agency with great clients, success stories and capabilities. 
                                Share your case studies in detail in your profile when you onboard. Our algorithm uses case studies extensively for the match with project.  
                                Be clear about budgets that interest you, type of clients and industries that interest you..
                              </div>
                            </div>
                          </div>
                          <div class="panel ">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"  class="pnl-font">
                                <b class="f-bold">2.</b>Update profile</a>
                              </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                              <div class="panel-body">Keep updating your profile with more case studies, seeking testimonials from your existing clients.</div>
                            </div>
                          </div>
                          <div class="panel ">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"  class="pnl-font">
                               <b class="f-bold">3.</b> Sell yourself</a>
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body">On your first call with the client, sell yourself.  Talk about how old the agency is, the clients you have served in the last 12 months. The projects you handle currently. Case studies relevant to the client.  Then share how you have understood the client brief and how you would solve it.  Agencies that come prepared with the client brief, have a better chance to impress straight away.</div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"  class="pnl-font">
                               <b class="f-bold">4.</b> Don't let the ball drop</a>
                              </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                              <div class="panel-body">Post the call, don’t let the ball drop. Fire back a proposal in 3-4 working days.</div>
                            </div>
                          </div>
                          <div class="panel ">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"  class="pnl-font">
                                <b class="f-bold">5.</b>Make sure you cover in a few slides</a>
                              </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                              <div class="panel-body">A. - Background. B. - When you started. C.- How big is team/ who founded it. D.- Offices in India or Global E. - Projects done in last 18-24 months.</div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"  class="pnl-font">
                                <b class="f-bold">6.</b>Why you are right for the client</a>
                              </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                              <div class="panel-body">A few Case studies that cover client name,  industry  , problem statement,  agency solution, and results.</div>
                            </div>
                          </div>
                          <div class="panel">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"  class="pnl-font">
                                <b class="f-bold">7.</b>Your winning solution for the client</a>
                              </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                              <div class="panel-body">The problem statement as given in Digitek brief.  Your approach and methodology. Expected results. ( leads or clicks or website hits or creatives or media mentions etc. ) . Budget. and Timelines. </div>
                            </div>
                          </div>
                        </div>
                        <div class="row main-white-box"  >
                          <div class="white-box-p">
                            <p class="white-box-text-p">A stranger is going to spend a good amount of money with you. <br class="hidden-xs">
                            Show him you are worth it!.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
    
          <div class="section-12">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="section-2-subsection">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="heading-p text-center" style="margin-bottom:80px">How does it all work for you!<p>
                          <div class="row">
                            <div class="col-xs-12 col-md-7 col-sm-12">
                              <div class="col-xs-12 col-md-3 col-sm-12 margin-btm-30">
                                <p class="text-center margin-bottom"><img src="images/media/hdw-1.png"></p>
                                <p class="text-center steps-p">The Client fills a project brief describing what he needs</p>
                              </div>
                              <div class="col-xs-12 col-md-1 col-sm-12 margin-btm-30">
                               <p class="icon-color text-center hidden-xs hidden-sm"><i class="fa fa-angle-double-right fa-lg text-bold"></i></p>
                               <p class="icon-color text-center visible-xs visible-sm"><i class="fa fa-angle-double-down fa-lg text-bold"></i></p>
                              </div>
                              <div class="col-xs-12 col-md-3 col-sm-12 margin-btm-30">
                                <p class="text-center margin-bottom"><img src="images/media/hdw-2.png"></p>
                                <p class="text-center steps-p">Our algorithm shortlists 6 best fit agencies for that project brief</p>
                              </div>
                              <div class="col-xs-12 col-md-1 col-sm-12 margin-btm-30">
                                <p class="icon-color text-center hidden-xs hidden-sm"><i class="fa fa-angle-double-right fa-lg text-bold"></i></p>
                               <p class="icon-color text-center visible-xs visible-sm"><i class="fa fa-angle-double-down fa-lg text-bold"></i></p>
                              </div>
                              <div class="col-xs-12 col-md-4 col-sm-12 margin-btm-30">
                                <p class="text-center margin-bottom"><img src="images/media/hdw-3.png"></p>
                                <p class="text-center steps-p">Agency profiles reach client dashboard with full details as shared by the agency</p>
                              </div>
                            </div>
                            <div class="col-xs-12 col-md-5 col-sm-12">
                              <div class="col-xs-12 col-md-1 col-sm-12 margin-btm-30">
                                <p class="icon-color text-center hidden-xs hidden-sm"><i class="fa fa-angle-double-right fa-lg text-bold"></i></p>
                               <p class="icon-color text-center visible-xs visible-sm"><i class="fa fa-angle-double-down fa-lg text-bold"></i></p>
                              </div>
                              <div class="col-xs-12 col-md-5 col-sm-12 margin-btm-30">
                                <p class="text-center margin-bottom"><img src="images/media/hdw-4.png"></p>
                                <p class="text-center steps-p">Client decides to speak to an agency. Selects the agency on his dashboard</p>
                              </div>
                              <div class="col-xs-12 col-md-1 col-sm-12 margin-btm-30">
                                <p class="icon-color text-center hidden-xs hidden-sm"><i class="fa fa-angle-double-right fa-lg text-bold"></i></p>
                               <p class="icon-color text-center visible-xs visible-sm"><i class="fa fa-angle-double-down fa-lg text-bold"></i></p>
                              </div>
                              <div class="col-xs-12 col-md-5 col-sm-12 margin-btm-30">
                                <p class="text-center margin-bottom"><img src="images/media/hdw-5.png"></p>
                                <p class="text-center steps-p">Brief reaches agency. Call is set up.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
    
            <div class="section-11">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="section-2-subsection">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">                  
                          <style>
                            .section-11{background: black;padding:100px 0;}
                            .hero-buttons-p {margin-top: 0px !important;}
                            @media only screen and (max-width: 767px) {.hero-buttons-p { margin: 0px 0px !important;}}
                          </style>
                          <p class="footer-heading-2 text-center">Join Digitek now</p>
                          <div class="row">     
                            <p class="text-center">
                              <a href="#" data-toggle="modal"  data-user_type="vendor" data-target="#registrationModal" class="btn hero-buttons hero-buttons-p">Find New Business </a>
                            </p>
                            <p class="text-center">
                              <a href="/agency-stories/" target="_blank"  class="btn hero-buttons hero-buttons-p">Meet Our Agencies </a>
                            </p>
                            <!-- <br><br>
                            <p class="text-center" style="word-spacing: 10px;">
                              <a class="social"  target="_blank" href="https://www.linkedin.com/company/Digitek">
                                <i class="fa fa-linkedin"></i>
                              </a>
                              <a class="social"  target="_blank" href="https://twitter.com/Digitek">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                              <a class="social" style="color:white" href="https://Digitek.medium.com/" target="_blank">
                                <i class="fa fa-medium " aria-hidden="true"></i>
                              </a>
                              <a class="social"  target="_blank" href="https://www.youtube.com/channel/UCjf-GCNvHP8_08TGfIy9KVw">
                                <i class="fa fa-youtube-play"></i>
                              </a>
                            <p> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>          
            </div>
  
            <?php
              include("footer.php");
            ?>
  
<script src='https://js.sentry-cdn.com/7b83089348b140b89e62902103f8fc6d.min.js' crossorigin="anonymous"></script>
<script>
  Sentry.onLoad(function() {
    Sentry.init({
      //release: " ... ",
      environment: "prod"
    });
    //Sentry.configureScope(scope => {
    //  scope.setTag( ... );
    //});
  });
  DO_ANALYTICS = true;
</script>
<script src="js/intlTelInput.805b4f79b11a.js"></script>
<script src="js/utils.e8acf24eb57d.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" integrity="sha256-JklDYODbg0X+8sPiKkcFURb5z7RvlNMIaE3RA2z97vw=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="js/output.c472412ed191.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

<script src="js/owl.carousel.min.b7b9c97cd68e.js"></script>
<script src="js/jquery.carousel.1.41fb04f9ec2f.js"></script>
<script>
  $(document).ready(function() {
    $(".navbar-toggle").on("click", function () {
      $(this).toggleClass("active");
    });
  });
</script>

<script src="js/owl.carousel.min.b7b9c97cd68e.js"></script>
<script src="js/jquery.carousel.1.41fb04f9ec2f.js"></script>
<script>
  $(document).ready(function () {
    $(".navbar-toggle").on("click", function () {
      $(this).toggleClass("active");
    });
  });

  $( function() {
    $( "#schedule_date" ).datepicker();
  });

  $('.how-it-works').jCarousel({
    arrow: {isshow:true,arrowsize:24,showtop:false,showbottom:true},
    auto: {isauto:true,interval:4000},
    type: 'slidey-down',
    carsize: {carwidth:100+'%',carheight:500}
  });
</script>

</body>

</html>