<!DOCTYPE html>
<html>

<head>
 
    @include('home.css')

    <style type="text/css">

        .div_center 
        {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .detail-box 
        {
            padding: 15px;
        }
    </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
  
  </div>
 

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Verken de collectie
        </h2>
      </div>
      <div>
        <p>Alles kan op maat gemaakt worden, uniek en met een persoonlijke touch. Contacteer ons vrijblijvend voor meer info.</h3>
      </div>
      <div class="row">

    

        <div class="col-md-12">
          <div class="box">

              <div class="div_center">
                <img width="400" src="/products/{{$data->image}}" alt="">
              </div>

              <div class="detail-box">
                <h6>
                  {{$data->title}}
                </h6>
                <h6>
                  Prijs
                  <span>
                    €{{$data->price}}
                  </span>
                </h6>
              </div>

              <div class="detail-box">
                <h6>
                  Categorie: {{$data->category}}
                </h6>
                <h6>
                  Nog 
                  <span>
                    {{$data->quantity}}
                  </span>
                   op voorraad
                </h6>
              </div>

              <div class="detail-box">
              
                  <p>
                    {{$data->description}}
                  </p>
                  
              </div>

          </div>
        </div>


      </div>
    </div>
  </section>


  @include('home.footer')

  <!-- info section -->

  

</body>

</html>