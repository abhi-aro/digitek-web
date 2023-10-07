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
  <link rel="stylesheet" href="css/bliss-slider.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="css/intlTelInput.1c26c6693096.css">
  <script src="https://cdn.jsdelivr.net/npm/ua-parser-js@0.7.20/src/ua-parser.min.js"></script>
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
              <a href="https://dashboard.digitekservice.com?user_type=0" data-id="client" class=
              "btn btn-warning hero-buttons" style=
              "font-size: 14px !important; width:185px !important; padding:6px !important">
              I need a Service Provider</a><br>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="https://dashboard.digitekservice.com?user_type=1" data-id="vendor" class=
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
    <div class="top50 marquee" style="font-size: 20px;min-height:50px;">
      <center>
        <!-- <a style="" class="" target="_blank" href=
        "/blog/Digitek-features-in-yourstorys-tech50-startups-the-rising-stars-in-indias-constellation-of-startups-at-techsparks-2021/">
        <b>Digitek is selected as TechSparks - Top 50 emerging
        startups by YourStory!</b></a> -->
      </center>
    </div>
    <div class="section-1">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="section-2-subsection">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 sec-1-b1">
                  <style>
                  .section-1{
                  padding-top:30px;
                  padding-bottom:30px;
                  }
                  .responsive-object>iframe {
                  width: 100% !important;
                  height: 313px !important;
                  }
                  .rich-text {
                  overflow: unset !important;
                  }
                  .main .section-10{
                  padding: 50px 0 50px 0;
                  }
                  .main .section-4{
                  background:#CAF3FF;
                  padding: 50px 0 50px 0;
                  }
                  .left {
                  float: unset;
                  }
                  .right {
                  top:250px;
                  float: unset;
                  }
                  ul {
                  list-style: none;
                  }

                  .panel .panel-body ul li::before {
                  content: "\2022";
                  color: #0099FF;
                  font-weight: bold;
                  display: inline-block; 
                  width: 1em;
                  margin-left: -1em;
                  font-size:20px;
                  }
                  .main .section-2 {
                  padding: 50px 0 50px 0;
                  }
                  .main .section-7{
                  padding: 50px 0px 50px 0px;
                  }
                  .main .section-8{
                  background:#0099FF;
                  padding: 50px 0 50px 0;
                  }

                  @media only screen and (max-width: 767px) {
                  .section-1{
                  padding-top:60px;
                  padding-bottom:60px;
                  }
                  }
                  </style><br>
                  <div class="hero-info">
                    <h1 class="gradient-word">Sign up and get started</h1>
                  </div>  <br>
                    <p class="hero-sub-heading">Join the first ever B2B community and explore the world of business solutions on the go</p><br>
                  <div class="hero-info">
                    <h1 class="gradient-word"><!--Sales and Marketing<br />-->Services for SMBs.</h1>
                  </div><br>
                  <p class="hero-sub-heading">
UAE's best agencies
                  are here, to help you grow.</p>
                  <p class="hero-sub-heading"></p><br>
                  <p class="hero-sub-heading">Handpicked to suit
                  your Industry and Budget.</p>
                  <p class="hero-sub-heading">Get Proposals.</p>
                  <p class="hero-sub-heading">Free Project
                  Monitoring.</p>
                  <p class="hero-sub-heading">Pay when milestones
                  are met.</p><br>
                  <div class="row">
                    <div class=
                    "col-lg-6 col-md-12 col-sm-12 col-xs-12">
                      <!-- <a href="#" data-toggle="modal" data-target=
                      "#registrationModal" class=
                      "btn btn-warning btn-primary">I need a
                      Service Provider</a> -->
                      <a href="https://dashboard.digitekservice.com/" class=
                      "btn btn-warning btn-primary">I need a
                      Service Provider</a>
                      <br>
                      <p class="hero-caption">Discover the perfect
                      agency</p>
                      <p class="hero-caption">or expert for your
                      project.</p><br>
                    </div>
                    <div class=
                    "col-lg-6 col-md-12 col-sm-12 col-xs-12">
                      <a href="https://dashboard.digitekservice.com?user_type=1" class=
                      "btn btn-warning btn-primary">Register as an
                      Agency</a><br>
                      <p class="hero-caption">Focus on qualified
                      opportunities</p>
                      <p class="hero-caption">across the
                      globe.</p><br>
                    </div>
                  </div>
                </div>
                <div class=
                "col-md-6 col-sm-6 col-xs-12 margin-video-top margin-video-top-p sec-1-b2">
                  <video id="Digitek-video" width="100%" height=
                  "100%" autoplay="" controls="" loop="" muted=
                  ""><source src=
                  "video/clideo_digitek-process.mp4"
                  type="video/mp4"> Your browser does not support
                  HTML5 video.</video><br>
                  <center>
                    <h4><strong>How Digitek Works</strong></h4>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-4">
      <div class="container">
        <!--<div class="big-vert-line-2"></div>-->
        <!--<div class="left-half-circle"></div>-->
        <div class="row">
          <div class="col-xs-12">
            <div class="section-4-subsection">
              <p class="section-heading">Agencies you can find on
              the Digitek Platform</p>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="panel panel-default gradient-col" style="min-height: 300px !important;">
                    <div class="section-card-heading">Online Marketing Agencies</div>
                    <hr class="hr1">
                    <div class="panel-body">                      
	                    <div class="col-md-6 col-sm-6 col-xs-6">
          							<ul style="padding:0">
          								<li class="section-card-li">
          							      <a href="/home/digital-strategy/" target=
          							      "_blank">Digital Strategy</a>
          							    </li>
          							    <li class="section-card-li">
          							      <a href="/home/performance-marketing/"
          							      target="_blank">Performance Marketing</a>
          							    </li>
          							    <li class="section-card-li">
          							      <a href="/home/social-media-marketing/"
          							      target="_blank">Social Media
          							      Marketing</a>
          							    </li>
          							    <li class="section-card-li">
          							      <a href="/home/content-marketing/"
          							      target="_blank">Content Marketing</a>
          							    </li>
          							    <li class="section-card-li">
          							      <a href="/home/influencer-marketing/"
          							      target="_blank">Influencer Marketing</a>
          							    </li>
          							</ul>
	                    </div>
	                    <div class="col-md-6 col-sm-6 col-xs-6">
	                      <ul>
	                        <li class="section-card-li">
	                          <a href=
	                          "/home/search-marketing-seo-and-sem/"
	                          target="_blank">Search Marketing- SEO and
	                          SEM</a>
	                        </li>
	                        <li class="section-card-li">
	                          <a href=
	                          "/home/websites-and-app-development/"
	                          target="_blank">Websites and App
	                          Development</a>
	                        </li>
	                        <li class="section-card-li">
	                          <a href=
	                          "/home/linkedin-marketing-and-lead-generation/"
	                          target="_blank">Linkedin Marketing and
	                          Lead Generation</a>
	                        </li>
	                        <li class="section-card-li">
	                          <a href="/home/marketplace-marketing/"
	                          target="_blank">Marketplace Marketing</a>
	                        </li>
	                      </ul>
	                    </div>                        
                    </div>                    
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
	                <div class="panel panel-default gradient-col" style="min-height: 300px !important;">
	                  <div class="section-card-heading">Offline Marketing Agencies</div>
	                  <hr class="hr1">
	                  <div class="panel-body">                    
	                      <div class="col-md-6 col-sm-6 col-xs-6">
	                      	<ul style="padding:0">
	                      		<li class="section-card-li">
		                        <a href="/home/pr/" target="_blank">PR</a>
		                      </li>
		                      <li class="section-card-li">
		                        <a href="/home/market-research/" target=
		                        "_blank">Market Research</a>
		                      </li>
		                      <li class="section-card-li">
		                        <a href="/home/consumer-insights/" target=
		                        "_blank">Consumer Insights</a>
		                      </li>
		                      <li class="section-card-li">
		                        <a href="/home/btl-activations-and-events/"
		                        target="_blank">BTL Activations and
		                        Events</a>
		                      </li>
		                    </ul>
	                      </div>
	                      <div class="col-md-6 col-sm-6 col-xs-6">
		                    <ul>
		                      <li class="section-card-li">
		                        <a href="/home/outdoors-and-ooh/" target=
		                        "_blank">Outdoors and OOH</a>
		                      </li>
		                      <li class="section-card-li">
		                        <a href="/home/packaging-design/" target=
		                        "_blank">Packaging Design</a>
		                      </li>
		                      <li class="section-card-li">
		                        <a href=
		                        "/home/creatives-for-offline-marketing-banners-posters/"
		                        target="_blank">Creatives for Offline
		                        Marketing- Banners/ Posters</a>
		                      </li>
		                    </ul>
		                  </div>                      
	                  </div>                  
	                </div>
	              </div>
	              <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="panel panel-default gradient-col" style="min-height: 300px !important;">
                    <div class="section-card-heading">Sales Agencies</div>
                    <hr class="hr1">
                    <div class="panel-body">                  
                        <div class="col-md-6 col-sm-6 col-xs-6">
                        	<ul style="padding:0">
    	                		<li class="section-card-li">
    		                      <a href="/home/outsourced-sales-head/"
    		                      target="_blank">Outsourced Sales Head</a>
    		                    </li>
    		                    <li class="section-card-li">
    		                      <a href="/home/sales-strategy/" target=
    		                      "_blank">Sales Strategy</a>
    		                    </li>
    		                    <li class="section-card-li">
    		                      <a href="/home/sales-training/" target=
    		                      "_blank">Sales Training</a>
    		                    </li>
    		                    <li class="section-card-li">
    		                      <a href=
    		                      "/home/lead-generation-digital-telecalling/"
    		                      target="_blank">Lead Generation -
    		                      Digital/TeleCalling</a>
    		                    </li>
    	                  	</ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
    	                  <ul>
    	                    <li class="section-card-li">
    	                      <a href="/home/b2b-sales/" target=
    	                      "_blank">B2B Sales</a>
    	                    </li>
    	                    <li class="section-card-li">
    	                      <a href="/home/sales-process-design/" target=
    	                      "_blank">Sales Process Design</a>
    	                    </li>
    	                    <li class="section-card-li">
    	                      <a href="/home/outsourced-sales-team/"
    	                      target="_blank">Outsourced Sales Team</a>
    	                    </li>
    	                  </ul>
    	                </div>                    
                    </div>                
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="panel panel-default gradient-col" style="min-height: 300px !important;">
                    <div class="section-card-heading">Branding and Design Agencies</div>
                    <hr class="hr1">
                    <div class="panel-body">
                      
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <ul style="padding:0">
                            <li class="section-card-li">
                              <a href="/home/branding-and-proposition/"
                              target="_blank">Branding and Proposition</a>
                          </li>
                          <li class="section-card-li">
                              <a href="/home/creative-strategy/" target=
                              "_blank">Creative Strategy</a>
                          </li>
                          <li class="section-card-li">
                              <a href="/home/video-production-and-marketing/"
                              target="_blank">Video Production and
                              Marketing</a>
                          </li>
                          <li class="section-card-li">
                              <a href="/home/animation-videos/" target=
                              "_blank">Animation Videos</a>
                          </li>
                          <li class="section-card-li">
                              <a href="/home/website-and-app-development/"
                              target="_blank">Website and App
                              UI/UX/Design</a>
                          </li>
                      </ul>
                      </div>                  
                    </div>
                  </div>
                </div>
              </div>              
            </div>            
          </div>          
        </div>
      </div><br>
      <div class="row" style="font-size: 22px;"></div>
    </div>
    <div class="section-4 truncate">
      <div class="container">
        <!--<div class="big-vert-line-2"></div>-->
        <!--<div class="left-half-circle"></div>-->
        <div class="row">
          <div class="col-xs-12">
            <div class="section-4-subsection">
              <p class="section-heading">Explore Services</p>
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
                        <!-- <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p> -->
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
                        <!-- <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p> -->
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
                        <!-- <p class="text-center"><a href="#" class="btn btn-warning btn-primary">Go</a></p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row read-more-sec">
                <div class="col-xs-12">
                  <p class="text-center"><a href="services.php" class="btn btn-warning btn-primary">Read More</a></p>
                </div>  
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div> 
  
  <hr class="hr2">
  <script src=
  "js/owl.carousel.min.b7b9c97cd68e.js"></script> 
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
        list2.getElementsByClassName("owl-next")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-right'><\/i>";
        list2.getElementsByClassName("owl-prev")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-left'><\/i>";
    }
    var l2= document.getElementsByClassName("team-slider")[1];
    if (l2){
        var list3= l2.getElementsByClassName("owl-nav")[0];
        list3.getElementsByClassName("owl-next")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-right'><\/i>";
        list3.getElementsByClassName("owl-prev")[0].innerHTML = "<i style='color:black' class='fa fa-chevron-circle-left'><\/i>";
    }
  </script>
  <div class="section-14">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-2-subsection">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-7">
                  <p class="section-heading">Who comes on
                  Digitek?</p>
                  <p class="sub-heading-p">Procurement teams, Marketing
                  teams, Founders, CXOs from thousands of companies
                  globally come to find agencies for Social Media,
                  Market Research, PR, Branding, Lead generation
                  and much more!</p>
                </div><span style="display: none;">Procurement
                teams, Marketing teams, Founders, CXOs from
                thousands of companies globally come to find
                agencies for Social Media, Market Research, PR,
                Branding, Lead generation and much more!</span>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12" style=
              "padding:unset !important">
                <!-- <div style="display: flex;flex-flow: row wrap;">
                      <div class="who-comes-img">                        
                        <img src="images/media/Pepsico.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/ecolab-full-png-png.max-165x165.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/DSM-logo.max-165x165.jpg" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/JoshTalks.max-165x165.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Orient_Bell_Logo-big.max-165x165.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Popsockets_logo.max-165x165.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Rhino.max-165x165.jpg" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Sureclaim_1VrofxA.max-165x165.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/swiggy.max-165x165.jpg" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Medtrail_logo.max-165x165.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/bio_resurge.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/blue.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/chandanalepa.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Chek-Hup-logo_web.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/clinikk.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/freightwalla.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/hem.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Grohe-Logo.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/i2e1.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Jabra_Logo.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/ks.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/kapiva.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/KAVYblackfinal.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/lepton.jpg" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Lixil_company_logo.svg.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/lohia.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/luxor2.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/market-excel-logo.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/mckinsey.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/themoms.original.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/mudra.jpg" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/Pidilite.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/shalimar.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/ssf.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/uolo.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/veeba.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/image42_1.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/image34_1.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/image45.png" alt="banner" class="who-image-p">                        
                      </div>
                      <div class="who-comes-img">                        
                        <img src="images/media/image35.png" alt="banner" class="who-image-p">                        
                      </div>
                      
                    </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-8">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p class="section-heading text-center">Our Client Story</p>
        </div>
        <div class="col-xs-12">
          <!-- <div class="col-md-4 col-sm-4 col-xs-4">
          </div>  --> 
          <!-- <div class="col-md-4 col-sm-4 col-xs-4"> -->
            <div id="slider" class="slider-container">
            <ul class="slider">
              <li class="slide">
                <div class="slide-bg masked">
                  <img src="images/media/our-client-1.jpg" alt="An Image" draggable="false">
                </div>
                <div class="slide-content">
                  <!-- <h2>Header 1</h2> -->
                  <p>"It's a One Stop Solution for all our Digital hurdles. Worry free & makes life simple."</p>
                  <a href="#">Robert Rose, CTO</a>
                </div>
              </li>
              <li class="slide">
                <div class="slide-bg masked">
                  <img src="images/media/our-client-2.png" alt="An Image" draggable="false">
                </div>
                <div class="slide-content">
                  <!-- <h2>Header 2</h2> -->
                  <p>“Have customers review you and share what they had to say. Click to edit and add their testimonial.”</p>
                  <a href="#">Alexa Young, Product Manager</a>
                </div>
              </li>
              <li class="slide">
                <div class="slide-bg masked">
                  <img src="images/media/our-client-3.jpeg" alt="An Image" draggable="false">
                </div>
                <div class="slide-content">
                  <!-- <h2>Header 3</h2> -->
                  <p>"A great testimonial can boost your brand’s image. Click to edit and add your own."</p>
                  <a href="#">Don Francis, Tech Lead</a>
                </div>
              </li>
            </ul>
            <div class="slider-controls">
              <div class="slide-nav">
                <a href="#" class="prev">&larr;</a>
                <a href="#" class="next">&rarr;</a>
              </div>
              <ul class="slide-list">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>
            </div>

            <div id="element"></div>
            <script type="text/javascript">
              $(function() {
                $("#slider").blissSlider({
                  auto: 1,
                      transitionTime: 500,
                      timeBetweenSlides: 4000
                });
              });
            </script>
            <!-- <div style="display:table;width:600px;border:1px solid red;">
              <div style="display:table-cell;vertical-align:middle;border:1px solid green;">
                kjfn jnv lk vlkv lvk lkv lkv  vlk vlk vlkv lkv lkv lkv lkv lkv lk vlask slk slk lsk sldk aslk slk sldk slk slk sld
              </div>
              <div style="display:table-cell;vertical-align:middle;border:1px solid blue;">
                kjfn jnv lk vlkv lvk lkv lkv  vlk vlk vlkv lkv 
              </div>
            </div> -->
          <!-- </div> -->
          <!-- <div class="col-md-4 col-sm-4 col-xs-4">
          </div>  -->           
          <!-- <div id="testimonial-slider" class=
          "testimonial-slider owl-carousel">
            <div class="item user-info wow bounceInDown" data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class="img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Saumya Lohia
                Agarwal</h3>
                <p class="testimonial-text">Co-Founder, Ekaanta</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="fijd5">Curated and competent
                    resources are easy to find on Digitek. The
                    platform does a good job of understanding the
                    needs of the client and identifying the best
                    partners. Instead of scrolling and checking
                    tens of agencies, the work is simplified via
                    the Digitek shortlisted options. Appreciate the
                    speed, transparency and reliability of partners
                    we are using.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Nikhil Rajmohan</h3>
                <p class="testimonial-text">Chief Operating
                Officer, IVF Access</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="x9jfe">Finding the right
                    partner in healthcare is not easy.
                    Recommendations of friends also did not work
                    out. That’s when we found Digitek. They make it
                    very simple to meet the most relevant 2-3
                    agencies, and set up the entire work flow so
                    you can be assured of delivery committed by the
                    agencies.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Pranay Anumula</h3>
                <p class="testimonial-text">Growth Marketing Head,
                KEKA</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="nec14">Digitek has done well
                    to bring the ease and reliability of
                    marketplace to marketing services. Very simple
                    process, no scrolling through hundreds of
                    agencies. And the best part is that the
                    platform is helping us monitor the project and
                    pay when monthly deliveries are met. We are
                    happy to be using Digitek.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Tarak Doddala</h3>
                <p class="testimonial-text">CBO, Positive
                Homeopathy</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="41mjz">Its been several
                    years that we are using the Digitek platform.
                    We found a very good agency partner here, and
                    the whole process was very simple, even for non
                    marketing people. Our agency has been working
                    with us for 2 years now, the Digitek process
                    makes it very smooth for both client and
                    agency.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Saket Agarwal</h3>
                <p class="testimonial-text">CEO,
                Ferrymill(ekapusta.com)</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="qc6s5">Agile is how I would
                    define Digitek. In a short span of a few days,
                    we found the right agency and we have been
                    enjoying a very good run with them. The
                    platform helps you monitor the agencies as
                    well, so it’s a very good feature especially
                    for young companies like ours.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Sathyaprakash
                Subramania</h3>
                <p class="testimonial-text">Founder, Finora.com</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="hp6s6">Looking to move our
                    business from offline to online, we were
                    looking for agencies and came across Digitek.
                    For non marketing people especially, the
                    transparency of the platform is great. We have
                    found several good agency partners to work with
                    and continue to expand our marketing journey
                    with Digitek.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Vivek Chadha</h3>
                <p class="testimonial-text">VP-Growth, State of
                Mind</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="ld5in">Digitek stays
                    connected with the client, even after a project
                    has begun and this accountability is a
                    wonderful feature of the platform. The agency
                    selection is very good, and the process is very
                    simple and disciplined.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Devi Prasad
                Biswal</h3>
                <p class="testimonial-text">Head-Strategy,
                Joshtalks</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="8hq97">As a young
                    organisation, we found it very easy to work
                    with Digitek. They do the difficult task of
                    finding the best 3 agencies for any
                    requirement, and their process is very
                    disciplined. We feel safe that our deliverables
                    are always met.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Shashank Saini</h3>
                <p class="testimonial-text">CEO, Medpho</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="u6otz">A fast growing
                    company needs marketing help. But this help
                    must be quick and reliable. This is where
                    Digitek helps. The platform stays with you
                    through the whole project, ensuring control
                    over deliverables, so you get exactly what you
                    pay for. We have been very happy with all the
                    agencies we have found here.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Arpit Agarwal</h3>
                <p class="testimonial-text">VP Marketing,
                Extramarks</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="zuq1u">Digitek technology
                    has been very useful in finding and working
                    with the best marketing agency partners. The
                    whole process is simple and time saving. And we
                    are in control of the delivery from the
                    agencies. Digitek helps us monitor each of our
                    projects very well and this gives us comfort
                    that we are getting the right results.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt=
                "banner" style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Sandeep Patel</h3>
                <p class="testimonial-text">CEO, Kant Fasteners</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="upxuk">Post Covid 1, as I
                    was exploring new ways of expanding business, I
                    tried online marketing. I came across
                    Digitek.com. This is a FREE to use marketplace
                    for services like SEO/ SEM/ Content etc.
                    Through Digitek I found an agency right for my
                    business and budget. They first helped me with
                    my website and then have been working with me
                    to get better online reach through SEO. I have
                    been getting quality leads and i am satisfied
                    with the experience.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt=
                "banner" style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Hassan Jamil</h3>
                <p class="testimonial-text">Strategic Business &
                Venture Building Manager, Dole Sunshine</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="dabbr">Digitek is a valuable
                    partner for us when we reach out for technical
                    skills for new lines of business. We have
                    worked with them on several projects and found
                    the quality of partners to be very
                    satisfactory. The platform has a quick
                    turnaround and manages all the necessary
                    conversations and compliances making it a very
                    convenient service for us.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt=
                "banner" style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Alok Agarwal</h3>
                <p class="testimonial-text">CMO, Orient Bell
                Tiles</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="y3rv8">Digitek is like an
                    extended Marketing Team for us. For any
                    marketing requirements, we put a query on the
                    platform. Relevant agency options with
                    credentials and case studies are shared within
                    hours. The Digitek system schedules call with
                    the agencies, gets proposals, and allows
                    project monitoring calls on the platform to
                    track deliverables. This makes the entire
                    experience, quick- transparent- reliable. We
                    can focus on more strategic objectives with the
                    agencies. We have used them for almost 2 years
                    now and are very satisfied with the
                    results.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt=
                "banner" style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Nawazesh Irani</h3>
                <p class="testimonial-text">CRM Lead, Tata Q
                SmartFoods</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="qk8n2">Quick and responsive
                    is how we have found the Digitek platform. For
                    our marketing requirement, we were able to get
                    a very good option quickly. Digitek becomes a
                    "marketing partner in the cloud" setting up
                    calls, proposals, project monitoring. We have
                    been scaling our work and found the platform
                    highly capable of supporting our growth.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg"
                alt="banner" style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Ameve Sharma</h3>
                <p class="testimonial-text">Co-Founder and MD,
                Kapiva Ayurveda</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="7xa78">We did a brand
                    proposition exercise over a month and a half
                    with Digitek. It culminated with a workshop to
                    build on and win alignment from all
                    stakeholders including investors, senior
                    leadership, and key influencers within the
                    company. We are more than delighted with the
                    output! We are now taking it forward with
                    service providers to build other elements of
                    the marketing mix in consonance with the new
                    proposition.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt=
                "banner" style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Rahul Shah</h3>
                <p class="testimonial-text">Head Sales & Marketing,
                HEM Corporation</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="hdhkj">Digitek has helped us
                    find the right Marketing partners for our
                    various requirements. Social media, strategy,
                    performance marketing. The quality of agencies
                    on the platform is very good and the whole
                    process of agency selection is quick and very
                    reliable.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Mohit Sadani</h3>
                <p class="testimonial-text">Founder, The Moms
                Co</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="jt8qz">Agile and
                    action-oriented, that's how we'd describe our
                    work with the Selected agency team. In a short
                    span of a few months, they helped us setup a
                    team, start a new line of business, and share
                    great insights about the industry. As they keep
                    on-boarding new agencies, we find it useful to
                    return for more services.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Manoj
                Saharsabudhe</h3>
                <p class="testimonial-text">CEO,
                Medtechinsights.com</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="cayxh">Digitek helped us
                    find the right Digital Marketing agency for our
                    International Business Development project. The
                    quality of agencies on the platform is very
                    good and we are very satisfied by the progress
                    in quick time.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Satyam Darmora</h3>
                <p class="testimonial-text">Founder, i2e1</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="p5sr0">Finding the right
                    agency on the platform is very quick. There is
                    a lot of transparency. The Selected agency
                    works very closely with the founding team. They
                    bring strategic insights along with deep
                    operational capabilities and expertise.
                    Milestone based payments is also a facility we
                    appreciate hugely.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item user-info wow bounceInDown"
            data-wow-delay="0.3s" style=
            "visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <div class="col-md-2 col-sm-2 col-xs-4">
                <div class="quote-img"><img class=
                "img-responsive img-circle member" src=
                "images/media/image001.jpg" alt="banner"
                style=
                "width: 100px; margin-top: 22px; height: 48px;"></div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-8">
                <h3 class="testimonial-text">Kashika Mishra</h3>
                <p class="testimonial-text">Marketing Head,
                Freightwala.com</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <br>
                <br>
                <div class="client-info">
                  <div class="testimonial-text">
                    <p data-block-key="o3zu5">Digitek helped us
                    find the right Digital Marketing agency for our
                    Social Media Marketing needs. The quality of
                    agencies on the platform is good and the whole
                    process of finding the right agency was very
                    quick and reliable for us.</p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->          
        </div>
      </div>
    </div>
  </div>
  <script>
    $('.testimonial-slider').owlCarousel({
      loop:true,
      margin:10,
      video:true,
      nav:true,
      dots:true,
      lazyLoad:true,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      multipleRows:true,
      rows:2,
        responsive:{
          0:{
              items:1
          },
          480:{
              items:1
          },
          560:{
              items:1
          },
          760:{
              items:1
          },
          990:{
              items:2
          },
          1200:{
              items:2
          },
          1500:{
              items:2
          }
       }
    });
    var l1 = document.getElementsByClassName("testimonial-slider")[0];
    if (l1){
      var list = l1.getElementsByClassName("owl-nav")[0];
      list.getElementsByClassName("owl-next")[0].innerHTML = "<i style='color:white' class='fa fa-chevron-circle-right'><\/i>";
      list.getElementsByClassName("owl-prev")[0].innerHTML = "<i style='color:white' class='fa fa-chevron-circle-left'><\/i>";
    }
    var l2 = document.getElementsByClassName("testimonial-slider")[1];
    if (l2){
        var list1 = l2.getElementsByClassName("owl-nav")[0];
        list1.getElementsByClassName("owl-next")[0].innerHTML = "<i style='color:white' class='fa fa-chevron-circle-right'><\/i>";
        list1.getElementsByClassName("owl-prev")[0].innerHTML = "<i style='color:white' class='fa fa-chevron-circle-left'><\/i>";
    }
  </script>
  <div class="section-10">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <style>
          .team-name{
          font-size: 20px;
          font-weight: 700;
          }
          .team-desig{
          font-size: 20px;
          font-weight: 700;
          margin-top: -12px;
          }
          .rich-text>p, .rich-text>ol, .rich-text>ul {
          font-size: 15px !important;
          margin-bottom: 0px;
          }
          .team-pic{
          width: 65%;
          border: 3px solid #666;
          margin: -130px auto 0;
          overflow: hidden;
          transition: all 0.20s ease 0s;
          }
          .panel:hover .team-pic{
          border-radius: 80px 0;
          border-color: #666;
          }
          </style>
          <p class="section-heading">Our Team</p>
        </div>
        <div class="col-xs-12">
          <div class="justify-content-md-center">
            <div class="col-xs-auto col-sm-auto col-md-auto">
              <div class="panel" style=
              "background: #FFCD2D;padding: 10px;height: 296px;margin-top: 100px;">
                <div class="panel-body" style=
                "text-align: center !important;">
                  <div class="team-pic"><img class="img-responsive" src="images/media/shubham-kakodkar.jpeg" alt="banner"></div>
                  <p class="team-name">SHUBHAM KAKODKAR</p>
                  <p class="team-desig">Founder</p>
                  <p data-block-key="dnl61" class="team-info">Ex | Nielsen, Dream 11, Fancoda, zepto and sugar cosmetics</p>
                  <p data-block-key="ewhmj" class="team-info">Current - Product Manger at SUGAR COSMETICS</p>
                  <p data-block-key="7nm7s"><!--Operations – India--></p>
                  <p data-block-key="hcfgi"><!--Michelin, HUL, Airtel,Shuttl--></p>
                  <!--<div class="soc-link"><a href="https://www.linkedin.com/in/venkatesh-rangachari/" target="_blank"><i class="fa fa-linkedin"></i></a></div>-->
                </div>
              </div>
            </div>
            <div class="col-xs-auto col-sm-auto col-md-auto">
              <div class="panel" style=
              "background: #FFCD2D;padding: 10px;height: 296px;margin-top: 100px;">
                <div class="panel-body" style=
                "text-align: center !important;">
                  <div class="team-pic"><img class="img-responsive"
                  src="images/media/dipika-valva.jpeg" alt=
                  "banner"></div>
                  <p class="team-name">DIPIKA VALVA</p>
                  <p class="team-desig">Co-Founder</p>
                  <p data-block-key="hx0oo" class="team-info">Ex | EXA, Skarma, Zapak, i-prospect, Cox and Kings,Remit to India, Sugar Cosmetics, VFS Global</p>
                  <p data-block-key="31itu" class="team-info">Current - Global Online Business Lead at VFS Global</p>
                  <p data-block-key="91dbj"><!--India and SE Asia<br>
                  PepsiCo, Practo, Qikwell, Airtel--></p>
                  <!--<div class="soc-link"><a href="https://www.linkedin.com/in/venkatesh-rangachari/" target="_blank"><i class="fa fa-linkedin"></i></a></div>-->
                </div>
              </div>
            </div>
            <div class="col-xs-auto col-sm-auto col-md-auto">
              <div class="panel" style=
              "background: #FFCD2D;padding: 10px;height: 296px;margin-top: 100px;">
                <div class="panel-body" style=
                "text-align: center !important;">
                  <div class="team-pic"><img class="img-responsive"
                  src="images/media/mahesh-jadhav.jpeg" alt=
                  "banner"></div>
                  <p class="team-name">MAHESH JADHAV</p>
                  <p class="team-desig">CTO</p>
                  <p data-block-key="f42pa" class="team-info">Ex | STP - Pune, Capegemini, Pitney Bowes, Schlumberger, Dream 11, Zepto, MPL<br>
                  <p data-block-key="xquf3" class="team-info">Current - Engineering Leadership at MPL</p>
                  <p data-block-key="wxmjk"><!--Brillgen – IT
                  Services</p>--><!--<div class="soc-link"><a href="https://www.linkedin.com/in/venkatesh-rangachari/" target="_blank"><i class="fa fa-linkedin"></i></a></div>-->
                </div>
              </div>
            </div>
            <div class="col-xs-auto col-sm-auto col-md-auto">
              <div class="panel" style=
              "background: #FFCD2D;padding: 10px;height: 296px;margin-top: 100px;">
                <div class="panel-body" style=
                "text-align: center !important;">
                  <div class="team-pic"><img class="img-responsive"
                  src="images/media/nilesh-joshi.jpeg" alt=
                  "banner"></div>
                  <p class="team-name">NILESH JOSHI</p>
                  <p class="team-desig">PROJECT MANAGER</p>
                  <p data-block-key="f42pa" class="team-info">Ex | Web1, Bitebank (Canada), Mobius, The Good Glamm, Sugar Cosmetics<br>
                  <p data-block-key="xquf3" class="team-info">Current - Project Manager at SUGAR COSMETICS</p>
                  <p data-block-key="wxmjk"><!--Brillgen – IT
                  Services</p>--><!--<div class="soc-link"><a href="https://www.linkedin.com/in/venkatesh-rangachari/" target="_blank"><i class="fa fa-linkedin"></i></a></div>-->
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <hr class="hr2">
  <div class="section-5" style="padding:50px 0 50px 0">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-9 col-sm-9">
          <p class="section-heading">Why Digitek</p>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
              <p class="font-22"><span style=
              "color:#333 !important;">To solve your business
              problems any agency will not do. You want the agency
              right for your <b>industry</b>, your <b>business</b>,
              your <b>size</b>, your <b>budget</b>, your
              <b>geography</b>. You want transparency, reliability,
              no-bias.</span></p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="panel" style=
              "background: #FFCD2D;padding: 10px; min-height: 296px;">
                <div class="panel-body">
                  <span class="badge">1</span>
                  <h3 class="why-heading">4500+ Projects</h3>
                  <p class="why-text">Across industries, in B2C and
                  B2B. Over 20 service lines used.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="panel" style=
              "background: #FFCD2D;padding: 10px; min-height: 296px;">
                <div class="panel-body">
                  <span class="badge">2</span>
                  <h3 class="why-heading">1000+ Agencies</h3>
                  <p class="why-text">So you're always presented
                  with the agency that's the best fit for you.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="panel" style=
              "background: #FFCD2D;padding: 10px; min-height: 296px;">
                <div class="panel-body">
                  <span class="badge">3</span>
                  <h3 class="why-heading">Pay when milestones are
                  met.</h3>
                  <p class="why-text">Digitek takes client payment
                  into an escrow and pays the agency when
                  milestones are met.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="hr2">
  <style>
    body {
        margin-top: 0rem !important;
    }
    header {
        position: unset !important;
        padding: 0px !important;
    }
    .discover_img {
        padding-top: 110px;
    }
    .offset-md-1{
        margin-left: 8.33%;
    }
    header .logo img {
        max-width: 150px !important;
    }
    @media only screen and (max-width: 767px) {
        .main {
            padding-top: 0px;
        }
    }
  </style>
  <style>

  .sec_cta {
        padding-top: 50px;
  }

  .sec_cta a {
        margin: 0px auto;
  }

  .sub_title {
        font-weight: 700;
        font-size: 36px;
        line-height: 50px;
        color: #333;
        margin-bottom: 20px;
        background: url(../static/digital-marketing-agencies/images/divider.png) no-repeat center bottom;
        padding-bottom: 12px;
  }

  .small_title {
        text-align: center;
        color: #F2C94C;
        font-size: 20px;
        font-weight: 600;
        font-style: italic;
  }

  .step-class img {
        padding: 20px 20px 0px;
  }

  .step-class h3 {
        color: #0099FF;
        font-size: 18px;
        line-height: 26px;
        font-weight: 600;
  }

  .step-class p {
        padding: 0px 20px;
        color: #333;
  }

  .step-class {
        text-align: center;
        padding-top: 22px;
  }

  .cta_click {
        background: #F2C94C;
        color: #333;
        display: table;
        padding: 12px 20px;
        border-radius: 5px;
        font-size: 20px;
        font-weight: bold;
  }

  .cta_click:hover {
        background: #eb9316;
        color: #fff;
        text-decoration: none;
  }

  .cta_click i {
        font-size: 18px;
        font-weight: bold;
        margin-left: 10px;
  }
  </style>
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="sub_title text-center" style=
          "margin-bottom: 10px;">Digitek Service Procurement
          Model</h2>
          <p class="small_title">Quick. Transparent. Reliable.</p>
        </div>
      </div>
      <div class="row step-class">
        <div class="col-md-3">
          <div class="box_step">
            <img src="images/media/images/step1_VZimEUy.max-165x165.png"
            class="img-fluid">
            <h3>Create<br>
            a Digitek brief</h3>
            <p>Tell us a little about yourselfand your specific
            business challenge.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box_step">
            <img src="images/media/images/step2_xJESIlZ.max-165x165.png"
            class="img-fluid">
            <h3>Choose<br>
            the agency or expert</h3>
            <p>Our algorithm will curate and present best service
            providers suited to you.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box_step">
            <img src="images/media/images/step3_CWv4EYy.max-165x165.png"
            class="img-fluid">
            <h3>Partner with<br>
            the right service provider</h3>
            <p>Talk to service providers free of cost. Choose one.
            Get started!</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box_step">
            <img src="images/media/images/step4_r8O1DkV.max-165x165.png"
            class="img-fluid">
            <h3>Get<br>
            work done</h3>
            <p>Share final scope of work and contract, Digitek will
            facilitate ontime delivery.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
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
  <script src="js/bliss-slider.js"></script> 
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