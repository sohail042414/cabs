<section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="contact-block">
            <h3>{{ config('settings.phone', '800-44-3232') }}</h3>
            <span class="icon-default fa fa-phone"></span>
          </div>
        </div>

        <div class="col-md-2">
          <div class="contact-block ft1">
            <h3>{{ config('settings.skype', 'getaiporttaxi') }}</h3>
            <span class="icon-default fa fa-skype"></span>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-block ft1">
            <h3> {{ config('settings.address', 'MAIN-ND AVENUE, MAIN City, 29004') }}</h3>
            <span class="icon-default fa fa-map-marker"></span>
          </div>
        </div>

        <div class="col-md-3">
          <div class="contact-block">
            <button onclick="location.href='/tarrif'" class="contact-btn">Our Tarrifs</button>
          </div>
        </div>

      </div>
    </div>
  </section>
