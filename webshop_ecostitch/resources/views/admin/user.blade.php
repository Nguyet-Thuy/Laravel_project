<!DOCTYPE html>
<html>
  <head> 

   @include('admin.css')

   <style type="text/css">

    input[type='text']
    {
        width: 400px;
        height: 50px;
    }

    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px;
    }

    .table_deg
    {
        text-align: center;
        margin: auto;
        border: 2px solid yellowgreen;
        margin-top: 50px;
        width: 600px;

    }

    th
    {
        background-color: skyblue;
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
        color: white;

    }

    td
    {
        color: white;
        padding: 10px;
        border: 1px solid skyblue;
    }

    label
{
    display: inline-block;
    width: 200px;
    font-size: 18px!important;
    color: white!important;

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

          <h1 style="color:white">Users</h1>

          <div class="div_deg">

            
          <form action="{{url('add_user')}}" method="post">

          @csrf
            <div>
          <label for="title">Name: </label>
            <input type="text" name="name" id="name" required>
            </div>
            <hr>

            <div> <label for="content">E-mail:</label>
        <input type="text" name="email" id="email" required></div>
            <hr>

            <div> <label for="content">Short Bio:</label>
        <input type="text" name="bio" id="bio" required></div>
            <hr>

        <div> <label for="avatar">Avatar:</label>
        <input type="file" name="avatar" id="avatar" required>
        </div>
            <hr>

            <div>
            <label>Role of User</label>
            <select name="usertype" required>
                <option>Select a Option</option>

                <option value="user">User</option>
                <option value="admin">Admin</option>

            </select>
          </div>
            <hr>

        <div> <label for="content">Phone number:</label>
        <input type="text" name="phone" id="phone" required>
        </div>
            <hr>

        <div> <label for="content">Address:</label>
        <input type="text" name="address" id="address" required>
        </div>
            <hr>

            <div> <label for="content">Password:</label>
        <input type="password" name="password" id="password" required>
        </div>
            <hr>

        <div>
        <label for="content">Birthday:</label>
        <input type="date" name="birthday">

                    <input class="btn btn-primary" type="submit" value="Add User">
                </div>

          </form>
          </div>
            <div>
                <table class="table_deg">
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Short Bio</th>
                        <th>Avatar</th>
                        <th>Role of user</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Birthday</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @foreach($data as $data)

                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->bio}}</td>
                        <td>{{$data->avatar}}</td>
                        <td>{{$data->usertype}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->birthday}}</td>
                      
                        <td>
                            <a class="btn btn-success" href="{{url('edit_user',$data->id)}},">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_user',$data->id)}}">Delete</a>
                        </td>
                    </tr>
                    
                    @endforeach

                </table>
            
          </div>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->

    <script type="text/javascript">

        function confirmation(ev)
        {
            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({

                title:"Are you sure to delete this?",
                text: "This delete will be permanent",
                icon: "warning",
                buttons: true,
                dangerMode:true,

            })

            .then((willCancel)=>{

                if(willCancel)
            {
                window.location.href=urlToRedirect;
            }

            });
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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