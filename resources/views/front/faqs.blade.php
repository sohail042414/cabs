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
                            @foreach($faqs as $faq)
                            <div class="card">
                              <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="mb-0">
                                    {{$faq->question}}
                                </h5>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                {{$faq->answer}}
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
                    </div>

                </div>
            </div>

        </div>
  </section>
@endsection