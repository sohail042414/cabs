@extends('front.layouts.master')
@section('content')
<section class="page-header">
    <div class="container">
      <ul class="breadcrumbs">
        <li class="home"><a href="#">TaxiPark</a></li>
        <li class="current">// faq</li>
      </ul>
      <h1>Frequently Asked Questions</h1>
    </div>
  </section>


  <section class="tx-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tx-heading">
                        <!-- <h4>FAQ</h4> -->
                        <h2>FAQ</h2>
                        <!-- <p>Nam eu mi eget velit vulputate tempor gravida quis massa. In malesuada condimentum ultrices. Sed et mauris a purus fermentum elementum. Sed tristique semper enim, et gravida orci iaculis et. Nulla facilisi.</p> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="faq-wrap">
                        <div id="accordion">
                            <div class="card">
                              <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="mb-0">
                                    How do I update my theme?
                                </h5>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    If your theme is out of date, you will see a notice on your WordPress Dashboard. Click the notice to get more complete information about the update as well as further instructions on how to update. Note that updates are only available to active members.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="mb-0">
                                    Do memberships include the original PSD files?
                                </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header collapsed" id="headingThree"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="mb-0">
                                    How can I purchase a single theme?
                                </h5>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                </div>
            </div>

        </div>
  </section>
@include('front.common.section_tarrif')
@endsection