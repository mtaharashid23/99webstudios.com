<?php include 'include/header.php' ?>
   <section class="main-banner branding-bg-inner branding-banner" style="background-image: url(images/banner09.jpg);">
    <div class="container position-relative">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-12 p-0">
          <article>
            <h2 data-aos="flip-up" data-aos-duration="2000">Contact Us</h2>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12 col-12 d-flex">
          <div>
            <div class="contct-address">
              <p>We have your back. We are available 365x24x7 so leave us a line if you have any queries or wish to discuss a project. We will get back to you as soon as possible.</p>
              <address>
                <div class="media">
                  <img alt="John Doe" class="" src="images/contat-icon01.png">
                  <div class="media-body">
                    <h4>Call us at:</h4><a href="tel:(662) 317-7820">
                    <p>(662) 317-7820</p></a>
                  </div>
                </div>
                <div class="media">
                  <img alt="John Doe" class="" src="images/contat-icon02.png">
                  <div class="media-body">
                    <h4>Send Email:</h4><a href="mailto:info@digicraftlabllc.com">
                    <p>info@digicraftlabllc.com</p></a>
                  </div>
                </div>
                <div class="media">
                  <img alt="John Doe" class="" src="images/contat-icon03.png">
                  <div class="media-body">
                    <h4>Address:</h4>
                    <p>xyz street city country</p>
                  </div>
                </div>
              </address>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-sm-12 col-12 ml-5">
          <div class="contact-info" data-form-type="contact_form">
             <h2>We would like to hear from you</h2>
            <p>Fill in the form and we’ll analyze your website and get back to you with 100% specific recommendations on how to improve it</p>
             <form class="leadForm" method="post" enctype="multipart/form-data" action="javascript:void(0)">
                  <!--hidden required values-->
              <input type="hidden" id="formType" name="formType" />
              <input type="hidden" id="referer" name="referer" />
              <div class="row">
                <div class="col-lg-6 col-sm-12 col-12">
                  <input name="name" placeholder="Your Name" type="text" required="">
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                  <input name="email" placeholder="Email*" type="text" required="">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-12 col-12">
                  <input maxlength="10" name="phone" placeholder="Your Phone Number" type="text" required="">
                </div>
                <div class="col-lg-6 col-sm-12 col-12">
                  <input placeholder="Your Website URL" name="customers_meta[Website URL]" type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                  <textarea type="text" class="form-control w-100" cols="8" name="customers_meta[message]" placeholder="Massage (If you have something to ask or tell)" rows="3"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                  <div id="formResult"></div>
                  <div class="clearfix"></div>
                  <button type="submit" id="signupBtn">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include __DIR__ . '/include/footer.php'?>
