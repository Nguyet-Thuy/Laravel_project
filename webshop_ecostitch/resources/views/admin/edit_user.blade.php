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

          <form action="{{ url('edit_user',$data->id) }}" method="post" enctype="multipart/form-data">

          @csrf
            <div>
            <label for="title">Name:</label>
            <input type="text" name="name" value="{{$data->name}}">
            </div>
            <div>
            <label for="title">E-mail:</label>
            <input type="email" name="email" value="{{$data->email}}">
            </div>
            <div>
            <label for="title">Short Bio:</label>
            <textarea name="bio" value="{{$data->bio}}"></textarea>
            </div>
            <div>
            <label for="title">Avatar:</label>
            <img width="150" src="/user/{{$data->avatar}}">
            </div>
            <div>
              <label for="">New Avatar:</label>
              <input type="file" name="avatar">
            </div>
            <div>
            <label>Role of User</label>
            <select name="usertype" required>

                <option value="user">User</option>
                <option value="admin">Admin</option>

            </select>
            </div>
            <div>
            <label for="title">Phone number:</label>
            <input type="text" name="phone" value="{{$data->phone}}">
            </div>
            <div>
            <label for="title">Address:</label>
            <input type="text" name="address" value="{{$data->address}}">
            </div>
            <div>
            <label for="title">Birthday:</label>
            <input type="date" name="birthday" value="{{$data->birthday}}">
            </div>
            <div>
            <label for="title">Password:</label>
            <input type="password" name="password" value="{{$data->password}}">
            </div>
            <div>
            <input class="btn btn-primary"type="submit" value="Edit User">
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