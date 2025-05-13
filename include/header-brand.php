<?php
?>
<!DOCTYPE html>
<html>

<head>
  <title>Digi Craft Lab LLC</title>
  <meta name="description" content="Logo Designs Eden is one of the leading design agencies based in the United States. We offer Logo design, Web Design, Video animation, SEO, Branding, Mobile Apps and Social Media services to clients around the globe." />
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <link rel="icon" href="images/fav.png" sizes="16x16">
  <link href="css/plugin.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,800&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header-sec">
    <div class="top-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-12">
            <div class="d-flex">
              <div class="addsec">
                <ul>
                  <li>
                    <a href="javascript:;" class="chat livechat-header">
                      <blink><img src="images\blinkimg.png" alt=""></blink>
                      <p>Live Chat</p>
                    </a>
                  </li>
                  <li>
                    <a href="tel:(662) 317-7820"><i class="fas fa-phone-alt"></i>
                      <p>
                        (662) 317-7820</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="social-links">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-nav">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand logo_anch" href="index.php">
                <img src="images/logo.png" alt="Brand Logo" class="img-fluid" /></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                      <span class="" data-hover="Services">Services</span>
                    </a>
                    <ul class="dropdown-menu" data-aos="fade-down">
                      <li><a href="logo-designs.php">Logo Designs</a></li>
                      <li><a href="branding.php">Branding</a></li>
                      <li><a href="digital-marketing.php">Digital Marketing</a></li>
                      <li><a href="print.php">Print</a></li>
                      <li><a href="videoanimation.php">Video Animation</a></li>
                      <li><a href="webdesign.php">Web Design</a></li>
                      <li><a href="seo.php">SEO</a></li>
                      <li><a href="smm.php">SMM</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="packages.php"><span data-hover="Packages">Packages</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"><span data-hover="About us">About us</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="portfolio.php"><span data-hover="Our Portfolio">Our Portfolio</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php"><span data-hover="Contact Us">Contact Us</span></a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link pro-btn" data-toggle="modal" data-target=".bd-example-modal-lg"><span data-hover="Start Your Project">Start Your Project</span></a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>




  <div class="popup_form">
    <div class="container">
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="row no-gutters">
              <div class="col-lg-6">
                <div class="popup_left">
                  <div class="popup_form_box" data-form-type="popup_form">
                    <form class="leadForm" id="regForm" method="post" enctype="multipart/form-data" action="javascript:void(0)">
                      <!--hidden required values-->
                      <input type="hidden" id="formType" name="formType">
                      <input type="hidden" id="referer" name="referer">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" data-validation="required">
                        <i class="fas fa-user"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Enter Your Email" data-validation="required">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="phone" maxlength="12" placeholder="Phone Number" data-validation="required">
                        <i class="fas fa-phone-alt"></i>
                      </div>
                      <!-- <div class="form-group">
                      <div class="g-recaptcha leadCaptcha" id="mainFormCaptcha" data-sitekey=6LfJLP8UAAAAAHEWwT0kMD0ZcSJ4wiIy8D0NX2kF data-validation="required"></div>
                      <span id="mainFormCaptchaError"></span>
                    </div> -->
                      <div class="popup_btn">
                        <h3>Seal The Limited Time Offer <br>Before It Expires</h3>
                        <div id="formResult"></div>
                        <div class="clearfix"></div>
                        <button type="submit" id="signupBtn">Get Free Web Design</button>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 d-none d-lg-block d-xl-block">
                <div class="popup_right">
                </div>
              </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>