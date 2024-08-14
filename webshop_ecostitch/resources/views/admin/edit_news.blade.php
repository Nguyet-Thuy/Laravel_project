<!DOCTYPE html>
<html>
  <head> 

   @include('admin.css')

   <style type="text/css">
    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    input[type='text']
    {
        width: 400px;
        height: 50px;
    }
   </style>

  </head>
  <body>

   @include('admin.header')

   @include('admin.sidebar') 

      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <div class="div_deg">

          <h1 style="color: white">Edit News Post</h1>

          <form action="{{ url('update_news',$data->id) }}" method="post">

          @csrf

            <label for="title">Title:</label>
            <input type="text" name="title" value="{{$data->title}}">
            <hr>
            <label for="title">Cover Image:</label>
            <input type="text" name="cover_image" value="{{$data->cover_image}}">
            <hr>
            <label for="title">Content:</label>
            <input type="text" name="content" value="{{$data->content}}">
            <hr>
            <label for="title">Publishing Date:</label>
            <input type="text" name="publishing_date" value="{{$data->publishing_date}}">
            <hr>
            <input class="btn btn-primary"type="submit" value="Edit News Post">
          </form>

          </div>
         
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>