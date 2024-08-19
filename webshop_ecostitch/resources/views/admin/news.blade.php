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

          <h1 style="color:white">Add News Post</h1>

          <div class="div_deg">

            
          <form action="{{url('upload_news')}}" method="post" enctype="multipart/form-data">

          @csrf
            <div>
          <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            </div>
            <hr>
        <div> <label for="cover_image">Cover Image:</label>
        <input type="file" name="cover_image" id="cover_image" required>
        </div>
            <hr>
        <div> <label for="content">Content:</label>
        <input type="text" name="content" id="content" required></div>

            <hr>
                <div>
                <label for="content">Publising date:</label>
                    <input type="date" name="publishing_date">
                    <input class="btn btn-primary" type="submit" value="Add News">
                </div>

          </form>
          </div>
            <div>
                <table class="table_deg">
                    <tr>
                        <th>News Post</th>
                        <th>Cover Image</th>
                        <th>Content</th>
                        <th>Publishing Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @foreach($news as $newss)

                    <tr>
                        <td>{{$newss->title}}</td>
                        <td>
                            <img width="150" height="150" src="nieuws/{{$newss->cover_image}}">
                        </td>
                        <td>{{$newss->content}}</td>
                        <td>{{$newss->publishing_date}}</td>
                      
                        <td>
                            <a class="btn btn-success" href="{{url('update_news',$newss->id)}},">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_news',$newss->id)}}">Delete</a>
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