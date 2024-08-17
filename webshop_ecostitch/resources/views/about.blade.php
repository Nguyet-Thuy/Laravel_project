<!DOCTYPE html>
<html>

<head>
 
    @include('home.css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
body{
   
    color: black;
}
p{
    font-size: 18px;
    margin: 40px 100px 100px 100px;
    
}
</style>
</head>

<body>
  <div class="hero_area">

    @include('home.header')
    
  </div>
 
  <h1>About Page</h1>


    <!-- Voeg Bootstrap JS en jQuery toe voor de andere functionaliteiten -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
  @include('home.footer')

  <!-- info section -->

  

</body>

</html>





