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
        margin-top: 60px;
    }
    h1{
        color: white;
    }
    label
    {
        display: inline-block;
        width: 200px;
        font-size: 18px!important;
        color: white!important;

    }

    input[type='text']
    {
        width: 350px;
        height: 50px;
    }

    textarea{
        width: 450px;
        height: 80px;
    }

    .input_deg
{
    padding: 15px;
    
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

          <h1>Add Question and answer</h1>
          <div class="div_deg">

          <form action="{{url('upload_faqItem')}}" method="post" enctype="multipart/form-data">

          @csrf

          <div class="input_deg">
            <label>FAQ Category</label>
            <select name="faqCategory" required>
            <option>Select a Option</option>

            @foreach($faqCategory as $faqCategory)

            <option value="{{$faqCategory->faqCategory_name}}">{{$faqCategory->faqCategory_name}}</option>

            @endforeach

            </select>
          </div>
          <div class="input_deg">
            <label>Question</label>
            <textarea name="question" required></textarea>
          </div>
          <div class="input_deg">
            <label>Answer</label>
            <textarea name="answer" required></textarea>
          </div>

          <div class="input_deg">
            <input class="btn btn-success" type="submit" value="Add Question">
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