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
                <h2>FAQ</h2>
            </div>
        </div>
        <div class="container px-0">
            @php
                // Groeperen FAQ-items op categorie
                $faqByCategory = $faqItem->groupBy('category');
            @endphp

            @foreach ($faqByCategory as $category => $items)
                <div class="category_box mt-4">
                    <h3>{{ $category }}</h3>
                    @foreach ($items as $article)
                        <div class="box mb-4">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>{{ $article->question }}</h5>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>{{ $article->answer }}</p>
                            @if($article->cover_image)
                                <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}" class="img-fluid">
                            @endif
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
    </div>

    <!-- Voeg Bootstrap JS en jQuery toe voor de andere functionaliteiten -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @include('home.footer')

</body>

</html>
