<section class="tariffs-wrap tx-section bg">
    <div class="container">
      <div class="tx-heading center">
        <h4>SEE OUR</h4>
        <h2>TARIFFS</h2>
      </div>

      <div class="row">
      @foreach ($tarrifs as $tarrif)
         @php($vip_class = ($tarrif->type =='vip') ? 'active' : '')
        <div class="col-md-3">
          <div class="tariffs-block {{$vip_class}}">
            <div class="image">
              <img src="/images/{{$tarrif->image}}" alt="tariff" />
            </div>
            <h4>{{$tarrif->title}}</h4>
            <p>{{$tarrif->desription}}</p>
            <div class="price">${{$tarrif->rate}} <span>/km</span> </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    </div>
  </section>
