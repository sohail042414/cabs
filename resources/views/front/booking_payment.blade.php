@extends('front.layouts.master')
@push('scripts')
    <script src="https://www.paypal.com/sdk/js?client-id=AQOTbePyDEZHY3bVPTRIE5z-knULuprAqg9ocOsFcjIZlOsMexrfcybLB8IVg6vtUzd54pyJAqwE4762&currency=USD&intent=capture" data_source="integrationbuilder"></script>
    <script>
          const fundingSources = [
            paypal.FUNDING.PAYPAL,
              paypal.FUNDING.CARD
            ]

          for (const fundingSource of fundingSources) {
            const paypalButtonsComponent = paypal.Buttons({
              fundingSource: fundingSource,

              // optional styling for buttons
              // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
              style: {
                shape: 'rect',
                height: 40,
                layout: 'vertical',
              },

              // set up the transaction
              createOrder: (data, actions) => {
                // pass in any options from the v2 orders create call:
                // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                const createOrderPayload = {
                  purchase_units: [
                    {
                      amount: {
                        value: '88.44',
                      },
                    },
                  ],
                }

                return actions.order.create(createOrderPayload)
              },

              // finalize the transaction
              onApprove: (data, actions) => {
                const captureOrderHandler = (details) => {
                  const payerName = details.payer.name.given_name
                  console.log('Transaction completed!')
                }

                return actions.order.capture().then(captureOrderHandler)
              },

              // handle unrecoverable errors
              onError: (err) => {
                console.error(
                  'An error prevented the buyer from checking out with PayPal',
                )
              },
            })

            if (paypalButtonsComponent.isEligible()) {
                 paypalButtonsComponent
                .render('#paypal-button-container')
                .catch((err) => {
                  console.error('PayPal Buttons failed to render')
                })
            } else {
              console.log('The funding source is ineligible')
            }
          }

</script>
@endpush
@section('content')
<style>
    .custom-panel-head{
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
      width:100%;
      height:45px;
      background-color: #1F1F1F;
      color: #d1d1d1;
      margin-bottom:20px;
      font-weight: bold;
    }

</style>
<section class="page-header">
    <div class="container">
        <ul class="breadcrumbs">
            <li class="home">
            <a href="/">{{ config('app.name', 'UK Airport Cabs') }}</a>
            </li>
            <li class="current">
            // Booking Detail
            </li>
        </ul>
    <h1>Booking Detail</h1>
    </div>
  </section>

  <section class="tx-section" style="padding-top:10px;">
        <div class="container">
            @if(Session::has('booking_success'))
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="alert  alert-success">               
                        <div class="header"><b>Booking Almost Done!</b></div>
                          <p>Please review your details and select a method of payment.  
                        <br>For any queries contact us at <b>{{config('settings.phone')}}</b></p>   
                    </div>
                </div>
            </div>
            @endif            
            <div class="row">
                <div class=" col-sm-12 col-md-6 col-lg-6">
                   <div class="bookings-wrap">
                      <div class="table-responsive">
                          <table class="table color-table primary-table">
                              <thead>
                                  <tr>
                                      <th colspan="2">Bookig Details </th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($booking->showBookingFields() as $field => $data)
                                  <tr>
                                      <td>{{$data['title']}}</td>
                                      <td>{{ $data['value'] }}</td>
                                  </tr>   
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="bookings-wrap">          
                        <div class="custom-panel-head">    
                            Payment Methods
                        </div>
                        <div class="row" style="margin-bottom: 20px;">   
                            <div class="col-md-12 col-lg-12 col-sm-12">     
                                <a href="{{url('/cash-payment/'.$booking->id)}}"  class="btn btn-primary btn-lg btn-block">Cash Payment On Arrival</a>         
                            </div>
                        </div>
                        <div class="row">   
                            <div class="col-md-12 col-lg-12 col-sm-12"> 
                              <div id="paypal-button-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <section class="tx-section" style="padding-top:10px;">
        <div class="container">
          <div id="map"></div>
        </div>
    </section>
@endsection