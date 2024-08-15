<section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Zit je met een vraag, stel ze hier.
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Markebekestraat+115+8510+Marke+Belgium" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
           </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
        <form action="{{ route('contact.store') }}" method="POST">
  @csrf
  <div>
    <input type="text" name="name" placeholder="Naam" />
  </div>
  <div>
    <input type="email" name="email" placeholder="Email" />
  </div>
  <div>
    <input type="text" name="phone" placeholder="Telefoonnummer" />
  </div>
  <div>
    <input type="text" name="message" class="message-box" placeholder="Bericht" />
  </div>
  <div class="d-flex">
    <button type="submit">ZEND</button>
  </div>
</form>
        </div>
      </div>
    </div>
  </section>

  <br><br><br>