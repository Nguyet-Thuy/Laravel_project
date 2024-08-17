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

          <h1 style="color: white">Edit User</h1>

          <form action="{{ url('update_user',$data->id) }}" method="post">

          @csrf

            <label for="title">Name:</label>
            <input type="text" name="name" value="{{$data->name}}">
            <hr>
            <label for="title">E-mail:</label>
            <input type="text" name="email" value="{{$data->email}}">
            <hr>
            <label for="title">Short Bio:</label>
            <input type="text" name="bio" value="{{$data->bio}}">
            <hr>
            <label for="title">Avatar:</label>
            <input type="text" name="avatar" value="{{$data->avatar}}">
            <hr>
            <label>Role of User</label>
            <select name="usertype" required>
                <option>Select a Option</option>

                <option value="user">User</option>
                <option value="admin">Admin</option>

            </select>
            <hr>
            <label for="title">Phone number:</label>
            <input type="text" name="phone" value="{{$data->phone}}">
            <hr>
            <label for="title">Address:</label>
            <input type="text" name="address" value="{{$data->address}}">
            <hr>
            <label for="title">Birthday:</label>
            <input type="text" name="birthday" value="{{$data->birthday}}">
            <hr>
            <label for="password" style="display: none;">Password:</label>
            <input type="password" id="password" name="password" style="display: none;" required>
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