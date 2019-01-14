<?php /* ?>
<section class="vc_section services-block">
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="heading  heading-large align-center" id="like_sc_header_915230290">
                        <h4>Welcome</h4>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-flex">
        @foreach ($services as $service)
        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="wpb_single_image wpb_content_element vc_align_center">

                        <figure class="wpb_wrapper vc_figure">
                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="71" height="71" src="/images/{{$service->image}}"
                                    class="vc_single_image-img attachment-thumbnail" alt=""></div>
                        </figure>
                    </div>

                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <h5>{{$service->title}}</h5>
                            <p>{{$service->short_description}}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<?php */ ?>

<section class="services-wrap">
    <div class="container">
      <div class="tx-heading center">
        <h4>Welcome</h4>
        <h2>Our Services</h2>
      </div>

      <div class="row">
      @foreach ($services as $service)
        <div class="col-md-3">
          <div class="services-block">
            <img src="theme/img/services-1.png" alt="services" />
            <h3>RAPID CITY TRANSFER</h3>
            <p>We will bring you quickly and comfortably to anywhere in your city</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>