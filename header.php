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
                <a href="#" data-toggle="modal" data-target="#registrationModal" class="btn btn-primary header-join">
                  I need a Service Provider &rarr;
                </a>
              </li>
              <li>
                <a href="" data-toggle="modal" data-target="#loginModal">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>