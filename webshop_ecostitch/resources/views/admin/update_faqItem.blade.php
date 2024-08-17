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

          <h2>Update FAQ</h2>

          <div class="div_deg">
            <form action="{{url('edit_faqItem',$data->id)}}" method="post">

            @csrf

            <div>
                <label for="">category</label>
                <select name="category">

                <option value="{{$data->category}}">{{$data->category}}</option>

                @foreach($faqCategory as $faqCategory)

                <option value="{{$faqCategory->faqCategory_name}}">{{$faqCategory->faqCategory_name}}</option>

                @endforeach

                </select>
            </div>

            <div>
                <label>Question</label>
                <textarea name="question">{{($data->question)}}</textarea>
            </div>

            <div>
                <label>Answer</label>
                <textarea name="answer">{{($data->answer)}}</textarea>
            </div>

            <div>
                <input class="btn btn-success" type="submit" value="Update Product">
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