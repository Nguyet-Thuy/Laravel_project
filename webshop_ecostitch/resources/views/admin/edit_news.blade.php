<!DOCTYPE html>
<html>
  <head> 

   @include('admin.css')

   <style type="text/css">
    .div_deg
{
    diplay: flex;
    justify-content: center;
    align-items: center;
}    

label 
{
    display: inline_block;
    width: 200px;
    padding: 20px;
}

input[type='text']
{
    width: 300px;
    heigth: 50px;
}

textarea
{
    width: 450px;
    height: 100px;
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

          <form action="{{ url('edit_news',$data->id) }}" method="post" enctype="multipart/form-data">

          @csrf
            <div>
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{$data->title}}">
            </div>
            <div>
            <label for="title">Cover Image:</label>
            <img width="150" src="/news/{{$data->cover_image}}">
            </div>
            <div>
              <label for="">New Image:</label>
              <input type="file" name="cover_image">
            </div>
            <div>
            <label for="title">Content:</label>
            <input type="text" name="content" value="{{$data->content}}">
            </div>
            <div>
            <label for="title">Publishing Date:</label>
            <input type="text" name="publishing_date" value="{{$data->publishing_date}}">
            </div>
            <div>
            <input class="btn btn-primary"type="submit" value="Edit News Post">
            </div>
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