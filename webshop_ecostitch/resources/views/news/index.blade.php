<!DOCTYPE html>
<html>

<head>
 
    @include('home.css')
   
</head>

<body>
  <div class="hero_area">

    @include('home.header')
    
  </div>
  
  <div>
  <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>News</h2>
            </div>
        </div>
        <div class="container px-0">
            @foreach ($news as $article)
                <div class="box mb-4">
                    <div class="client_info">
                        <div class="client_name">
                            <h5>{{ $article->title }}</h5>
                            <h6>{{ $article->publishing_date->format('d-m-Y') }}</h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <div>
                    <p>{{ $article->content }}</p>
                    @if($article->cover_image)
                        <img width="150" src="{{ asset('nieuws/' . $article->cover_image) }}" alt="{{ $article->title }}" class="img-fluid">
                    @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
  @include('home.footer')


  

</body>

</html>