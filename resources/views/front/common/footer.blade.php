<footer>
    <section class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <h3 class="ft-label">ABOUT US</h3>
            <p class="ft-txt">We provide cab services for airports, Call us or make a booking online. Contact us If you want to join us as a partner/driver. </p>

            <ul class="social-small">
              <li><a href="javascript:void();" class="fa fa-twitter"></a></li>
              <li><a href="javascript:void();" class="fa fa-facebook"></a></li>
              <li><a href="javascript:void();" class="fa fa-pinterest-square"></a></li>
              <li><a href="javascript:void();" class="fa fa-skype"></a></li>
              <li><a href="javascript:void();" class="fa fa-google-plus"></a></li>
            </ul>

          </div>

          <div class="col-md-5">
            <h3 class="ft-label">EXPLORE</h3>
            <ul class="ft-list">
              <li><a href="/home">Home</a></li>
              <li><a href="/terms-conditions">Terms & conditions</a></li>
              <li><a href="/contact-us">Contact us</a></li>
              <li><a href="/get-taxi">Get Taxi</a></li>              
              <li><a href="/tarrif">Tarrif</a></li>
              <li><a href="/questions-answers">Faqs</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="ft-label">ABOUT US</h3>
            <p class="ft-txt">
              <b>Address:</b> {{ config('settings.address', 'MAIN-ND AVENUE, MAIN City, 29004') }}
            </p>

            <ul class="social-icons-list">
              <li><a href="javascript:void();"><span class="fa fa-phone"></span>{{ config('settings.phone', '0800-1-212') }}</a></li>
              <li><a href="javascript:void();"><span class="fa fa-envelope"></span>{{ config('settings.email', 'taxiservice@gmail.com') }}</a></li>
              <li><a href="javascript:void();"><span class="fa fa-skype"></span>{{ config('settings.skype', 'getaiporttaxi') }}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="footer-block">
      <div class="container">
        <p>
          <a href="/terms-conditions">{{ config('app.name', 'UK Airport Cabs') }}</a> 2017 © All Rights Reserved <a href="/terms-conditions">Terms of use</a>
        </p>
        <a href="#" class="go-top hidden-xs hidden-ms"></a>
      </div>
    </section>
  </footer>