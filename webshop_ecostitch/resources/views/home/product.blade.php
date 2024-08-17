<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Verken de collectie
        </h2>
      </div>
      <div>
        <p>Alles kan op maat gemaakt worden, uniek en met een persoonlijke touch.

Contacteer mij vrijblijvend voor meer info.</h3>
      </div>
      <div class="row">

      @foreach($product as $products)

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="products/{{$products->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  {{$products->title}}
                </h6>
                <h6>
                  Prijs
                  <span>
                    €{{$products->price}}
                  </span>
                </h6>
              </div>
            <div style="padding:15px">
              <a class="btn btn-success" href="{{url('product_details',$products->id)}}">Meer info</a>
            </div>
          </div>
        </div>

        @endforeach
      </div>
    </div>
  </section>