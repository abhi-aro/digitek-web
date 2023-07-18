<!DOCTYPE html>
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="
UAE's First B2B Services Procurement Platform | Digitek">
  <meta property="og:image" content="images/media/favicon.ico">
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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.min.css">
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
  <style>

    .confirm-overlay {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        padding: 18% 0;
        background: rgba(255,255,255,0.98);
    }
    label.error{
      font-size: 10px;
    }
    #email_otp-error, #mobile_otp-error{
      position: fixed;
    }
    .confirm-q {
        text-align: center;
    }
    .confirm-q h2 {
      font-family: 'Roboto', sans-serif;
      padding-bottom: 25px;
      font-size: 25px;
      padding-top: 30px;
      font-weight: 500;
    }
    .confirm-q button.btn {
        margin: 0 25px;
        padding: 12px 30px;
        font-size: 16px;
    }

  </style><!-- ==== MACROS ==== -->
  <!-- ==== login modal ==== -->
</head>
<body>
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="loginModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Welcome to Digitek</h2>
          <h4>Login into your account</h4><!-- login form start -->
          <div class="linkedin_btn">
            <a href="/social-auth/login/linkedin-oauth2/" id=
            "linkedin_login"><img src=
            "/static/images/signupwithlinkedin.43b7e1d2cd75.png"
            style="width: 100%"></a>
          </div>
          <div align="center" class="bottom_line_linkedin" style=
          "margin-bottom: 0px !important">
            <h3 class="">OR</h3>
          </div><small style="color:red" id=
          "existingusermsg"></small>
          <form method="post" id="loginModalForm" class=
          "needs-validation" action="" name="loginModalForm">
            <input type="hidden" name="csrfmiddlewaretoken" value=
            "SDIVU1IJOt1PuTMKXLvGZ9RZUykpRDAyiJ3XWD6SLxV4vy0OIcCub4SRAK5OOIcQ">
            <div class="form-group">
              <input type="email" name="email" id="login_email"
              class="form-control" placeholder="Email" value=""
              required="" autofocus="">
            </div>
            <div class="form-group">
              <input type="password" name="password" class=
              "form-control" placeholder="Password" pattern=
              ".{6,50}" title=
              "Password must be minimum 6 and maximum 50 character"
              required="">
              <p id="email-password-error" style=
              "color:red;display:none">Email or password is not
              valid</p>
            </div><input type="submit" class=
            "btn button fill-btn padded font16" value="Login">
            <p class="forget-pass"><a class="pull-left hidden"
            data-toggle="modal" data-target="#signupModal">Create a
            new account</a> <a data-toggle="modal" data-target=
            "#forgotpasswordModal" class="pull-left">Forgot
            Password?</a></p>
          </form><!-- login form end -->
        </div>
      </div>
    </div>
  </div><!-- ==== modal ==== -->
  <!-- ==== registration modal ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="registrationModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Welcome to Digitek</h2>
          <h4>Create a new account</h4>
          <form action="" method="post" id="registerModalForm"
          class="needs-validation" novalidate="" name=
          "registerModalForm">
            <div class="row signup_form">
              <div class="container linkedin_btn">
                <a data-href="/social-auth/login/linkedin-oauth2/"
                id="linkedin_signup" class="" style=""><img src=
                "/static/images/signupwithlinkedin.43b7e1d2cd75.png"
                class="linkedin-img"></a>
              </div>
              <div align="center" class="bottom_line_linkedin">
                <h3 class="">OR</h3>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" name="fullname" id="name"
                  value="" class="form-control form-control-lg"
                  placeholder="Name*" required="" autofocus="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="email" name="email" id="email"
                  value="" class="form-control form-control-lg"
                  placeholder=
                  "Email* (Please provide official email ID)"
                  required=""> <input type="hidden" name=
                  "user_type" id="user_type" value="client">
                  <input type="hidden" name="signup_type" id=
                  "signup_type" value="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused" style=
                "margin-bottom: 0px !important">
                  <input type="password" name="password" value=""
                  class="form-control form-control-lg" minlength=
                  "6" maxlength="15" placeholder=
                  "Password* (must be atleast 6 characters)" id=
                  "password" required=""> <i class="fa fa-eye" id=
                  "show-hidePassword"></i>
                </div>
              </div>
              <p align="center" id="signup_error_msg" style=
              "color:red; display:none"></p>
              <div class="col-lg-12">
                <button type="submit" id="submit-btn" class=
                "btn button fill-btn padded font16" value=
                "">Continue</button>
              </div>
            </div>
          </form>
          <form action="" method="post" id="emailotpModalForm"
          class="needs-validation" style="display:none;"
          novalidate="" name="emailotpModalForm">
            <div>
              <h4 style="color:green" align="center" id=
              "sent_emailotp_msg"></h4>
              <div class="form-group focused" style=
              "margin-bottom: -28px">
                <input type="tel" maxlength="6" minlength="6" name=
                "email_otp" id="email_otp" value="" class=
                "form-control form-control-lg" placeholder=
                "Enter Email OTP"> <button class="btn btn_in"
                title="Resend Email OTP" id="resend_email_otp"
                style="background: #FFCD2D !important;" value=
                ""></button>
              </div>
              <div class="row" style="margin-top: 8px">
                <p align="center" id="email-otp-error-msg" style=
                "color:red; display:none;"></p>
                <div class="col-lg-6 col-sm-6 col-xs-6" id="">
                  <button title="Edit Details" id="edit_email_form"
                  type="button" class="btn btn-link padded font16"
                  value="">Edit Details</button>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12" id="">
                  <button type="submit" id="submit_email_otp"
                  class="btn button fill-btn padded font16" style=
                  "margin: 2px 0px 10px" value="">Verify
                  Email</button>
                </div>
              </div>
            </div>
          </form>
          <p style="margin-top: 25px !important">Already
          Registered? <a data-toggle="modal" data-target=
          "#loginModal">Login here</a></p>
        </div>
      </div>
    </div>
  </div><!-- ==== registration modal end ==== -->
  <!-- ==== mobile signup modal ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="mobileSignupModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Digitek</h2>
          <form action="" method="post" id="mobileSignupModalForm"
          class="needs-validation" novalidate="" name=
          "mobileSignupModalForm">
            <div class="row" style="margin-bottom: -25px">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <select id="source" name="source" style=
                  "width: -webkit-fill-available;height: 46px !important;border: 1px solid #ddd;;border-radius: 4px; color: black !important"
                  required="">
                    <option value="" selected disabled>
                      How did you hear about us?
                    </option>
                    <option value="537">
                      via Google search for agency
                    </option>
                    <option value="538">
                      I saw your linkedIn post
                    </option>
                    <option value="539">
                      I read a News Article about you
                    </option>
                    <option value="540">
                      I participated in Digitek Webinar
                    </option>
                    <option value="541">
                      Digitek Team Reached Out
                    </option>
                    <option value="542">
                      I read your NewsLetter
                    </option>
                    <option value="543">
                      I was Referred by Someone
                    </option>
                    <option value="2874">
                      I saw your YouTube Ad
                    </option>
                    <option value="544">
                      Other
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-md-12 referer_details" style=
              "display: none;">
                <div class="form-group focused">
                  <textarea class="form-control" id=
                  "referee_details" name="referee_details" rows="2"
                  placeholder="Please share details of Referee..."
                  style="height: auto"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="tel" name="phone_no" id="phone_no"
                  value="" class=
                  "phone_no form-control form-control-lg"
                  placeholder="Phone Number*"> <input type="hidden"
                  id="logo_url" name="logo_url" value="">
                </div>
              </div>
              <div id="client_detail" style="display:none;">
                <div class="col-lg-12">
                  <div class="form-group focused">
                    <input type="text" id="client_company" name=
                    "company_name" value="" class=
                    "form-control ui-autocomplete-input"
                    autocomplete="off" placeholder="Company Name*">
                    <input type="hidden" id="client" value=
                    "client"> <input type="hidden" name="website"
                    value="">
                  </div>
                </div>
                <div class="col-lg-12 partner-referral">
                  <div class="form-group focused">
                    <label style="font-weight:400"><input type=
                    "checkbox" name="partner_refer"> I have a
                    referral code.</label>
                  </div>
                </div>
                <div class="col-md-12 partner_referral_code" style=
                "display: none;">
                  <div class="form-group focused">
                    <input type="text" name="partner_refer_code"
                    maxlength="5" class=
                    "form-control form-control-lg" placeholder=
                    "Enter your code here." required="">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group focused">
                    <label style="font-weight:400"><input type=
                    "checkbox" name="terms" title=
                    "Please check the Terms & Policy."
                    required=""> I agree to the <a href=
                    "/terms-of-use-client/" target="_blank">Terms
                    of Use</a> & <a href="/privacy-policy/" target=
                    "_blank">Privacy Policy</a></label>
                  </div>
                </div><input required="" type="radio" name=
                "user_type" value="client" style="display:none">
              </div>
              <div id="vendor_detail" style="display:none;">
                <div class="col-lg-12">
                  <div class="form-group focused">
                    <label style="font-weight:400"><input required=
                    "" type="radio" name="user_type" value=
                    "vendor"> I'm an Agency</label> <label style=
                    "font-weight:400"><input required="" type=
                    "radio" name="user_type" value="expert"> I'm an
                    individual Expert</label>
                  </div>
                </div>
                <div class="col-md-12 vendor-qs" style=
                "display:none">
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <input type="text" id="vendor_company" name=
                      "company_name" value="" class=
                      "form-control ui-autocomplete-input"
                      autocomplete="off" placeholder=
                      "Company Name*">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <input type="text" name="website" value=""
                      class="form-control form-control-lg website"
                      placeholder="Company Website*">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 referral" style=
                "display:none">
                  <div class="form-group focused">
                    <label style="font-weight:400"><input type=
                    "checkbox" name="refer"> I have a referral
                    code.</label>
                  </div>
                </div>
                <div class="col-md-12 referral_code" style=
                "display:none">
                  <div class="form-group focused">
                    <input type="text" name="refer_code" maxlength=
                    "5" class="form-control form-control-lg"
                    placeholder="Enter your code here." required=
                    "">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group focused">
                    <label style="font-weight:400"><input type=
                    "checkbox" name="terms" title=
                    "Please check the Terms & Policy."
                    required=""> I agree to the <a href=
                    "/terms-of-use-service-provider/" target=
                    "_blank">Terms of Use</a> & <a href=
                    "/privacy-policy/" target="_blank">Privacy
                    Policy</a></label>
                  </div>
                </div>
              </div>
              <p style="color:red" align="center" id=
              "mobile_signup_error_msg"></p>
              <div class="col-lg-12" id="">
                <button type="submit" id="send_mobile_otp" class=
                "btn button fill-btn padded font16" value="">Verify
                Mobile</button>
              </div>
            </div>
          </form>
          <form action="" method="post" id="mobileotpModalForm"
          style="display:none;" class="needs-validation"
          novalidate="" name="mobileotpModalForm">
            <div>
              <h4 style="color:green" align="center" id=
              "sent_mobileotp_msg"></h4>
              <div class="form-group focused">
                <input type="tel" maxlength="6" minlength="6" name=
                "mobile_otp" id="mobile_otp" value="" class=
                "form-control form-control-lg" placeholder=
                "Enter Mobile OTP"> <button class="btn btn_in" id=
                "resend_mobile_otp" style=
                "background: #FFCD2D !important;margin-right:15px;"
                value=""></button>
                <div class="row" style="margin-top:-35px">
                  <p align="center" style=
                  "color:red; display:none; margin-top: 10px" id=
                  "mobile_otp_error_msg"></p>
                  <div class="col-lg-6 col-sm-6 col-xs-6" id="">
                    <button id="edit_mobile_form" type="button"
                    class="btn btn-link padded font16" value=
                    "">Edit Details</button>
                  </div>
                  <div class="col-lg-12 col-sm-12 col-xs-12" id="">
                    <button type="submit" style=
                    "margin: 2px 0px 10px" id="submit_mobile_otp"
                    class="btn button fill-btn padded font16"
                    value="">Create Account</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- ==== mobile signup modal end ==== -->
  <!-- linkedin user asking modal -->
  <div class="modal fade login-modal-design" id=
  "linkedinUserAskingModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Welcome to Digitek</h2>
          <p class="" align="center" style="color:red;">Your
          linkedin profile is not registered at Digitek</p>
          <h4>Register here</h4>
          <div class="row" style="margin-bottom: 20px" id=
          'linkedin_usertype'>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="#" data-id="client" class=
              "btn btn-warning hero-buttons" style=
              "font-size: 14px !important; width:185px !important; padding:6px !important">
              I need a Service Provider</a><br>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="#" data-id="vendor" class=
              "btn btn-warning hero-buttons" style=
              "font-size: 14px !important; width:185px !important; padding:6px !important">
              I am a Service Provider</a><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- linkedin user asking modal end -->
  <!-- ==== for advocacy program modal ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="advocacyModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Welcome to Digitek</h2>
          <h4>Join the Advocacy Program</h4>
          <form action="" method="post" id="advocacyModalForm"
          class="needs-validation" novalidate="" name=
          "advocacyModalForm">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" name="name" value="" class=
                  "form-control form-control-lg" placeholder=
                  "Name*" required="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="email" name="email" value="" class=
                  "form-control form-control-lg" placeholder=
                  "Email*" required="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="tel" name="phone_no" value="" class=
                  "phone_no form-control form-control-lg"
                  placeholder="Phone Number*">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" name="linkedin_url" value=""
                  class="form-control form-control-lg linkedin-url"
                  placeholder="LinkedIn Profile*"> <input type=
                  "hidden" id="advocacy" name="advocacy" value=
                  "advocacy">
                </div>
              </div>
              <div class="col-lg-12">
                <small style="color:red; text-align:center;" id=
                "existingemailmsg"></small> <button type="submit"
                class="btn button fill-btn padded font16" id=
                "submit_btn_advocacy" value="">Join</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- ==== for advocacy program modal end ==== -->
  <!-- ==== forgot password modal ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="forgotpasswordModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Forgot Password?</h2>
          <h4>We will send you a reset link via email.</h4>
          <form action="" method="post" id="forgotPasswordForm"
          class="needs-validation" novalidate="" name=
          "forgotPasswordForm">
            <div class="form-group has-icon">
              <input type="email" name="email" class=
              "form-control form-control-lg" placeholder=
              "Enter Email Address" required="" id="id_email">
            </div>
            <div class="col-lg-12">
              <div class="form-group text-left">
                <p id="forgotpassword-error-msg" style=
                "color:red;display:none">Please enter the correct
                email-id</p>
              </div>
            </div><input type="submit" class=
            "btn button fill-btn padded font16" value=
            "Reset Password">
          </form>
        </div>
      </div>
    </div>
  </div><!-- ==== forgot password modal end ==== -->
  <!-- ==== reset password modal ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="resetPasswordModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Reset Password</h2>
          <h4>Please enter your new password</h4>
          <p>6 to 50 characters, numbers and symbols allowed</p>
          <form action="" method="post" id="resetPasswordForm"
          name="resetPasswordForm">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="password" name="new_password1"
                  class="form-control form-control-lg" placeholder=
                  "New Password" minlength="6" maxlength="50"
                  required="">
                </div>
                <div class="form-group focused">
                  <input type="password" name="new_password2"
                  class="form-control form-control-lg" placeholder=
                  "Confirm Password" minlength="6" maxlength="50"
                  required="">
                </div>
                <div class="form-group text-left">
                  <p id="resetpassword-error-msg" style=
                  "color:red;display:none">The two passwords
                  entered didn't match.</p>
                </div><input type="submit" class=
                "btn button fill-btn padded font16" value=
                "Change my password">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- ==== reset password modal end ==== -->
  <!-- ==== forgot password message ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="forgotpasswordmessage" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <div class="row">
            <div class="text-center">
              <img src=
              "/static/images/logo/logo_white.a718398d0f29.png"
              style="margin-bottom:20px" width="150" alt="">
              <p id="passowrdresetmsg"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- ==== forgot password message end ==== -->
  <!-- ==== otp modal for Advocacy  ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="advo-otpModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Digitek</h2>
          <h4 style="color:green" id="otptext"></h4>
          <form action="" method="post" id=
          "advo-mobileotpModalForm" class="needs-validation"
          novalidate="" name="advo-mobileotpModalForm">
            <div>
              <div class="form-group focused">
                <label for="mobile_otp" id="advo-mobiletext">Mobile
                Otp</label>
                <div class="row">
                  <div class="col-md-4">
                    <input type="tel" maxlength="6" minlength="6"
                    name="advo-mobile_otp" id="advo-mobile_otp"
                    value="" class="form-control form-control-lg">
                  </div>
                  <div class="col-md-8" style="margin-top:5px">
                    <button class="btn" id="advo-resend_mobile_otp"
                    style=
                    "background: #FFCD2D !important;margin-right:15px;"
                    value="">Resend</button> <button class="btn"
                    id="advo-submit_mobile_otp" style=
                    "background: #FFCD2D !important;">
                    Verify</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <form action="" method="post" id="advo-emailotpModalForm"
          class="needs-validation" novalidate="" name=
          "advo-emailotpModalForm">
            <div>
              <div class="form-group focused">
                <label for="email_otp" id="advo-emailtext">Email
                Otp</label>
                <div class="row">
                  <div class="col-md-4">
                    <input type="tel" maxlength="6" minlength="6"
                    name="advo-email_otp" id="advo-email_otp"
                    value="" class="form-control form-control-lg">
                  </div>
                  <div class="col-md-8" style="margin-top: 5px;">
                    <button class="btn" id="advo-resend_email_otp"
                    style=
                    "background: #FFCD2D !important;margin-right:15px;"
                    value="">Resend</button> <button class="btn"
                    id="advo-submit_email_otp" style=
                    "background: #FFCD2D !important;">
                    Verify</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group text-left">
                <p id="otp-error-msg" style=
                "color:red;display:none">Oops! Looks like our
                Engineers went to Sleep. Will wake them up and get
                this corrected.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <button id="advo-edit_details" type="button" class=
              "btn btn-link padded font16" value="">Edit
              Details</button>
            </div>
            <div class="col-lg-6">
              <button type="submit" id="submit-details" disabled
              class="btn button fill-btn padded font16" value=
              "">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- ==== otp modal (Advocacy) end ==== -->
  <!-- ==== subscribe newsletter modal ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="subscribeModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Welcome to Digitek</h2>
          <h4>Register here for our weekly Content Newsletter</h4>
          <form action="" method="post" id="subscribeModalForm"
          class="needs-validation" novalidate="" name=
          "subscribeModalForm">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" name="fullname" value=""
                  class="form-control form-control-lg" placeholder=
                  "Name*" required="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="email" name="email" id="subs_email"
                  value="" class="form-control form-control-lg"
                  placeholder=
                  "Email Id(Please provide official email ID)"
                  required=""> <input type="hidden" value="1"
                  formcheck="" id="subscriber_form" class="" name=
                  "subscriber_form">
                </div>
              </div>
              <p id="sub_msg"></p>
              <div class="col-lg-6">
                <button type="button" class=
                "btn button fill-btn padded font16" data-dismiss=
                "modal" value="">Not Interested</button>
              </div>
              <div class="col-lg-6">
                <button type="submit" id="submit-subscriber" class=
                "btn button fill-btn padded font16" value=
                "">Subscribe</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- ==== subscribe newsletter modal end ==== -->
  <!-- ==== schedule demo modal ==== -->
  <div class="modal fade login-modal-design bigDialogModal"
  data-backdrop="static" id="scheduleDemoModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Welcome to Digitek</h2>
          <h4>Schedule a Demo</h4>
          <form action="" method="post" id="scheduleDemoModalForm"
          class="needs-validation" novalidate="" name=
          "scheduleDemoModalForm">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group focused">
                  <input type="text" name="fullname" value=""
                  class="form-control form-control-lg" placeholder=
                  "Name*" required="">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group focused">
                  <input type="email" name="email" value="" class=
                  "form-control form-control-lg" placeholder=
                  "Email Id(Please provide official email ID)"
                  required="">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group focused">
                  <input type="text" name="company_name" class=
                  "form-control ui-autocomplete-input"
                  autocomplete="off" placeholder="Company Name*"
                  value="">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group focused">
                  <input type="tel" name="phone_no" value="" class=
                  "phone_no form-control form-control-lg"
                  placeholder="Phone Number*">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group focused">
                  <label class="date-time-lbl">Select Date</label>
                  <input type="text" name="date" value="" id=
                  "schedule_date" class=
                  "form-control form-control-lg" placeholder=
                  "Date*" required="">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="date-time-lbl">Select Time
                (IST)</label><br>
                <div class="form-group focused" style=
                "display:inline-flex;width: 100%;">
                  <select name="hour" id="hour" class=
                  "form-control form-control-lg" style=
                  "margin-right: 10px;" required="">
                    <option value="">
                      Hour
                    </option>
                    <option value="09">
                      09
                    </option>
                    <option value="10">
                      10
                    </option>
                    <option value="11">
                      11
                    </option>
                    <option value="12">
                      12
                    </option>
                    <option value="13">
                      13
                    </option>
                    <option value="14">
                      14
                    </option>
                    <option value="15">
                      15
                    </option>
                    <option value="16">
                      16
                    </option>
                    <option value="17">
                      17
                    </option>
                    <option value="18">
                      18
                    </option>
                    <option value="19">
                      19
                    </option>
                  </select> <select name="minute" id="minute"
                  class="form-control form-control-lg" style=
                  "margin-right: 10px;" required="">
                    <option value="">
                      Minute
                    </option>
                    <option value="00">
                      00
                    </option>
                    <option value="05">
                      05
                    </option>
                    <option value="10">
                      10
                    </option>
                    <option value="15">
                      15
                    </option>
                    <option value="20">
                      20
                    </option>
                    <option value="25">
                      25
                    </option>
                    <option value="30">
                      30
                    </option>
                    <option value="35">
                      35
                    </option>
                    <option value="40">
                      40
                    </option>
                    <option value="45">
                      45
                    </option>
                    <option value="50">
                      50
                    </option>
                    <option value="55">
                      55
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style=
              "margin-top:30px">
                <div class="form-group text-left">
                  <input type="hidden" id="demo-type" name=
                  "demo_type" value="">
                  <p class="privacy-policy">By submitting this
                  form, you agree to the terms of our <a href=
                  "/privacy-policy/" target="_blank">Privacy
                  Policy.</a></p>
                  <p id="demo_msg"></p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style=
              "margin-top:15px">
                <button type="submit" id="submit-demo" class=
                "btn button btn-demo" value="">Send
                Request</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- ==== schedule demo modal end ==== -->
  <!-- ==== Demo Success message ==== -->
  <div class="modal fade login-modal-design bigDialogModal"
  data-backdrop="static" id="scheduleDemoMessage" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <div class="row">
            <div class="text-center">
              <img src=
              "/static/images/logo/logo_white.a718398d0f29.png"
              style="margin-bottom:20px" width="150" alt="">
              <div id="demomessage" style=
              "margin: 0 0 20px;font-size: 16px;font-weight: 600;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- ==== Demo Success message end ==== -->
  <!-- ==== for jobApplication modal ==== -->
  <div class="modal fade login-modal-design" data-backdrop="static"
  id="jobApplicationModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <h2>Welcome to Digitek</h2>
          <h4>Apply now</h4>
          <form enctype="multipart/form-data" action="" method=
          "post" id="jobApplicationModalForm" class=
          "needs-validation" name="jobApplicationModalForm">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" name="name" value="" class=
                  "form-control form-control-lg" placeholder=
                  "Name*" required="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="email" name="email" value="" class=
                  "form-control form-control-lg" placeholder=
                  "Email*" required="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="tel" name="phone_no" value="" class=
                  "phone_no form-control form-control-lg"
                  placeholder="Phone Number*">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <label for="resume" style="text-align:center;"
                  id="">Upload Resume*</label> <input type="file"
                  name="resume" id="resume" value="" accept=
                  "application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                  class="form-control form-control-lg">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" name="linkedin_url" value=""
                  class="form-control form-control-lg linkedin-url"
                  placeholder="LinkedIn Profile"> <input type=
                  "hidden" id="job_title" name="job_title" value=
                  "">
                </div>
              </div>
              <div class="col-lg-12">
                <small style="color:red; text-align:center;" id=
                "jobapplication_error_msg"></small> <input type=
                "submit" class="btn button fill-btn padded font16"
                id="submit_btn_jobApplication" value="Apply">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- ==== for jobApplication modal end ==== -->
  <!-- ==== for contact agency modal ==== -->
  <div class="modal fade login-modal-design modal-dialog-centered"
  data-backdrop="static" id="contactAgencyModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="head-cross">
            <button type="button" class="close" data-dismiss=
            "modal">×</button>
          </div>
          <form enctype="multipart/form-data" action="" method=
          "post" id="contactAgencyModalForm" class=
          "needs-validation" name="contactAgencyModalForm">
            <input type="hidden" name="csrfmiddlewaretoken" value=
            "VOm4u126ikXUJjvaVplIMKgWNz55uujxlUH6wDqffoR9KYJeGQswYFhOtLQurzVP">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" name="fullname" value=""
                  class="form-control form-control-lg" placeholder=
                  "Name*" required="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="email" name="email" value="" class=
                  "form-control form-control-lg" placeholder=
                  "Email*" required="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="tel" name="phone_no" value="" class=
                  "phone_no form-control form-control-lg"
                  placeholder="Phone Number*">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <input type="text" name="company_name" class=
                  "form-control ui-autocomplete-input" placeholder=
                  "Company Name*" value="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group focused">
                  <textarea class="form-control" id="details" name=
                  "details" rows="2" placeholder=
                  "Enter your message here..." style="height: auto"
                  required=""></textarea> <input type="hidden"
                  value="" formcheck="" id="contact_agency_form"
                  class="" name="contact_agency_form">
                </div>
              </div>
              <div class="col-lg-12">
                <small style="color:red; text-align:center;" id=
                "contact_agency_error_msg"></small> <input type=
                "submit" class="btn button fill-btn padded font16"
                id="submit_btn_contact_agency" value="Send">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- ==== for contact agency modal end ==== -->
  <link rel="stylesheet" href=
  "css/owl.carousel.min.4668659fa96b.css">
  <link rel="stylesheet" href=
  "css/owl.theme.default.min.594b81805a98.css">
  <script async src=
  "https://www.googletagmanager.com/gtag/js?id=UA-132896942-1"></script>
  
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
  <script src=
  "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script>

  if (typeof jQuery == 'undefined') {
    document.write(unescape("%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
  }
  </script>
  <?php
    include("header.php");
  ?>
  <div class="main">
     
    <div class="search-bar text-center">
     <div class="autoComplete_wrapper">
       <input id="autoComplete" class="auto-input" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off" name="Search" placeholder="Search" required>
     </div>
    </div> 
    <div class="section-4 d-n-sm">
      <div class="container">         
        <div class="row">
          <div class="col-xs-12">
            <div class="section-4-subsection">
              <p class="section-heading">Digitek</p>
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">
                      Ideation | Prototyping
                    </div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/prototype-designer.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Bring your Ideas to life with our Prototyping services on the go with DIGITEK</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>                
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">
                      Digital Services
                    </div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Digital-Artist.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Avail of digital services on the go with DIGITEK</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">
                      New Business
                    </div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/New-business-partnership.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Commence your business in UAE at AED999!!</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">   
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">HRMS</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Interview.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Get the best of HRMS portals on the go with DIGITEK</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Taxation</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Men-with-Calculator.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Get assistance with taxation on the go</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Invoicing</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Invoices.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Avail the best of the invoicing systems with DIGITEK</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
              </div>
              <div class="row">                   
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Invest in UAE</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Financial-Graphs.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Invest in the most innovative ways in the most exciting prospects of UAE</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Driving License & Permits</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Senior-Woman-Driving.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Apply for driving license across the globe hassle free</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Banking Support & <br />Account Management</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Digital-wallet-on-phone.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Connect with UAE certified bankers and consultants to help you with banking and taxation</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
              </div>
              <div class="row">                   
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Logistics</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Organizing-Boxes.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Logistics should be easy. We provide the tools and support necessary to make it easy to do business in logistics. 
                        Our services are designed to streamline processes, improve efficiency, 
                        and reduce overall costs, making it simple to move goods from point A to point B.</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">FMCG</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/At-the-Grocery-Shop.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">We offer a full range of FMCG services to meet all your needs. From stocking shelves and ordering new products to providing expert advice and fresh, 
                        high-quality products, we have you covered. 
                        Our experienced staff will help you create the perfect shopping experience for your customers.</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Automobile</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Electric-Car.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Our Automobile services cover everything from routine maintenance to major repairs. 
                        We specialize in providing quality workmanship and quality parts, ensuring your vehicle is running safely and reliably. 
                        Our technicians are highly trained and certified, providing you with the peace of mind that your car is in the best hands.</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
              </div>
              <div class="row">   
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Investments / Trading</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Trading-Graphs-on-Computer-Monitor.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Our investment services give you access to a wide range of investment opportunities, from stocks and bonds to mutual funds and ETFs. 
                        With the expertise of our experienced team, we can help you achieve your financial goals and create a portfolio that fits your personal needs. 
                        We strive to provide superior customer service, ensuring that you receive the best possible advice and support.</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Government Services</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Political-Conference.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Govertment services provide essential resources to help businesses succeed. They offer a wide range of services, from tax and compliance advice to financial assistance and guidance. 
                        By connecting businesses with the right Govertment services, we make it easier to start and grow your business. 
                        With our help, you can access the resources and expertise you need to succeed in today's competitive market.</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                      </div>
                    </div>
                  </div>                                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                  
                  <div class="panel-body inner-bg">
                    <div class="section-card-heading">Medicinal Drugs</div>
                    <hr class="hr1"><br />
                    <div class="inner-box">
                      <img src="images/media/services/Sorting-Medicine.jpg" alt="">
                      <div class="caption full-width">
                        <p class="hero-caption">Our Medicinal Drug services provide you with access to a wide variety of medications to assist in managing your health. 
                        Our experienced pharmacists are available to answer any questions you may have and to provide you with the best advice and guidance. 
                        We strive to provide the highest quality of care and make sure you get the medications you need in a timely manner.</p>
                        <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
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
    <div class="section-4 d-b-sm">
      <div class="container">         
        <div class="row">
          <div class="col-xs-12">
            <div class="section-4-subsection">
              <p class="section-heading">Digitek</p>
              <div class="row">
                <div class="justify-content-md-center">
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">
                        Ideation | Prototyping
                      </div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/prototype-designer.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Bring your Ideas to life with our Prototyping services on the go with DIGITEK</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>                
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">
                        Digital Services
                      </div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Digital-Artist.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Avail of digital services on the go with DIGITEK</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">
                        New Business
                      </div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/New-business-partnership.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Commence your business in UAE at AED999!!</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="justify-content-md-center">   
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">HRMS</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Interview.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Get the best of HRMS portals on the go with DIGITEK</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Taxation</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Men-with-Calculator.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Get assistance with taxation on the go</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Invoicing</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Invoices.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Avail the best of the invoicing systems with DIGITEK</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                </div>  
              </div>
              <div class="row"> 
                <div class="justify-content-md-center">                  
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Invest in UAE</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Financial-Graphs.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Invest in the most innovative ways in the most exciting prospects of UAE</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Driving License & Permits</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Senior-Woman-Driving.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Apply for driving license across the globe hassle free</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Banking Support & <br />Account Management</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Digital-wallet-on-phone.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Connect with UAE certified bankers and consultants to help you with banking and taxation</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                </div>  
              </div>
              <div class="row"> 
                <div class="justify-content-md-center">                   
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Logistics</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Organizing-Boxes.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Logistics should be easy. We provide the tools and support necessary to make it easy to do business in logistics. 
                          Our services are designed to streamline processes, improve efficiency, 
                          and reduce overall costs, making it simple to move goods from point A to point B.</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">FMCG</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/At-the-Grocery-Shop.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">We offer a full range of FMCG services to meet all your needs. From stocking shelves and ordering new products to providing expert advice and fresh, 
                          high-quality products, we have you covered. 
                          Our experienced staff will help you create the perfect shopping experience for your customers.</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Automobile</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Electric-Car.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Our Automobile services cover everything from routine maintenance to major repairs. 
                          We specialize in providing quality workmanship and quality parts, ensuring your vehicle is running safely and reliably. 
                          Our technicians are highly trained and certified, providing you with the peace of mind that your car is in the best hands.</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                </div>  
              </div>
              <div class="row">
                <div class="justify-content-md-center">   
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Investments / Trading</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Trading-Graphs-on-Computer-Monitor.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Our investment services give you access to a wide range of investment opportunities, from stocks and bonds to mutual funds and ETFs. 
                          With the expertise of our experienced team, we can help you achieve your financial goals and create a portfolio that fits your personal needs. 
                          We strive to provide superior customer service, ensuring that you receive the best possible advice and support.</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Government Services</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Political-Conference.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Govertment services provide essential resources to help businesses succeed. They offer a wide range of services, from tax and compliance advice to financial assistance and guidance. 
                          By connecting businesses with the right Govertment services, we make it easier to start and grow your business. 
                          With our help, you can access the resources and expertise you need to succeed in today's competitive market.</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
                        </div>
                      </div>
                    </div>                                     
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">                  
                    <div class="panel-body inner-bg">
                      <div class="section-card-heading">Medicinal Drugs</div>
                      <hr class="hr1"><br />
                      <div class="inner-box">
                        <img src="images/media/services/Sorting-Medicine.jpg" alt="">
                        <div class="caption full-width">
                          <p class="hero-caption">Our Medicinal Drug services provide you with access to a wide variety of medications to assist in managing your health. 
                          Our experienced pharmacists are available to answer any questions you may have and to provide you with the best advice and guidance. 
                          We strive to provide the highest quality of care and make sure you get the medications you need in a timely manner.</p>
                          <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p>
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
    </div>
    <!-- <div class="row" style="font-size: 22px;"></div> -->
  </div>


    
  
  
  <!-- <hr class="hr2"> -->
  <script src=
  "js/owl.carousel.min.b7b9c97cd68e.js"></script> 
   
   
   
     
  <!-- <hr class="hr2"> -->
   
   
   
   
  </div>
  <?php
    include("footer.php");
  ?>
  <script src=
  'https://js.sentry-cdn.com/7b83089348b140b89e62902103f8fc6d.min.js'
  crossorigin="anonymous"></script> 
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
  <script src=
  "js/owl.carousel.min.b7b9c97cd68e.js"></script> 
  <script src=
  "js/jquery.carousel.1.41fb04f9ec2f.js"></script> 
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
                
                
              
              </div>
            </div>
          </header>
           
           
          
        </div>
      </div>
      <!-- <div id="SCROLL_TO_BOTTOM" class=
      "Vd6aQZ ignore-focus SCROLL_TO_BOTTOM" tabindex="-1" role=
      "region" aria-label="bottom of page">
        <span class="mHZSwn">bottom of page</span>
      </div> -->
    </div>
  </div>
  <script>
    window.firstPageId = 'ludfm'
    window.bi.sendBeat(12, 'Partially visible', {pageId: window.firstPageId})
    if (window.requestCloseWelcomeScreen) {
        window.requestCloseWelcomeScreen()
    }
        if (!window.__browser_deprecation__) {
                window.fedops.phaseStarted('partially_visible', {paramsOverrides: { pageId: firstPageId }})
        }
  </script> <!--pageHtmlEmbeds.bodyEnd start-->
   
  <script type="wix/htmlEmbeds" id=
  "pageHtmlEmbeds.bodyEnd start"></script> 
  <script type="wix/htmlEmbeds" id=
  "pageHtmlEmbeds.bodyEnd end"></script> 
  <!--pageHtmlEmbeds.bodyEnd end-->
   <!-- warmup data start -->
  <script type="text/javascript">
     const autoCompleteJS = new autoComplete({
     selector: "#autoComplete",
     placeHolder: "Search",
     data: {
         src: ["Sauce - Thousand Island", "Wild Boar - Tenderloin", "Goat - Whole Cut"],
         cache: true,
     },
     resultsList: {
         element: (list, data) => {
             if (!data.results.length) {
                 // Create "No Results" message element
                 const message = document.createElement("li");
                 // Add class to the created element
                 message.setAttribute("class", "no_result");
                 // Add message text content
                 message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
                 // Append message element to the results list
                 list.prepend(message);
             }
         },
         noResults: true,
     },
     resultItem: {
         highlight: true
     },
     events: {
         input: {
             selection: (event) => {
                 const selection = event.detail.selection.value;
                 autoCompleteJS.input.value = selection;
             }
         }
     }
   });
  </script> 
</body>
</html>