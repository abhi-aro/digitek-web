<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];




  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login</a>';
}

?>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header col-sm-3 col-md-2 col-xs-12">
          <div class="logo-container">
            <a class="navbar-brand" href="index.php">
              <img src="images/media/logo.jpeg" alt="logo">
            </a>
          </div>
        </div>
        <div class="text-right col-md-10 col-sm-9 col-xs-12 header-nav">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#slide-navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="slide-navbar-collapse" class="navbar-collapse collapse text-right col-md-7 col-sm-9">
            <input type="hidden" name="is_authenticated" id="is_authenticated" value="False">
            <ul class="nav navbar-nav">
              <li>
                <a href="#" data-toggle="modal" data-target="#evisaModal" class="btn btn-primary header-join evisaModal">eVisa</a>
              </li>
              <li>
                <a href='index.php'>Home</a>
              </li>
              <li class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="agency-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
                <ul class="dropdown-menu" aria-labelledby="agency-dropdown">
                  <li>
                    <a class="dropdown-item" href="digitek-partners.php">How Digitek Works</a>
                  </li>
                  <li>
                    <a class="dropdown-item" target="_blank" href="services.php">Services</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href='digitek-enterprise.php'>Enterprise</a>
              </li>
              <li>
                <!-- <a href='/resources/'>Resources</a> -->
              </li>
              <li>
                <a href="https://dashboard.digitekservice.com/" class="btn btn-primary header-join">
                  I need a Service Provider &rarr;
                </a>
                <!-- <a href="#" data-toggle="modal" data-target="#registrationModal" class="btn btn-primary header-join">
                  I need a Service Provider &rarr;
                </a> -->
              </li>
              <li>
                <!-- <a href="" data-toggle="modal" data-target="#loginModal">Login</a> -->
                  <?php
                    if($login_button == '')
                      {
                        echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                        echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
                        echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
                        echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
                        echo '<h3><a href="logout.php">Logout</h3></div>';
                      }
                    else
                    {
                    echo '<div align="center">'.$login_button . '</div>';
                    }
                  ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>