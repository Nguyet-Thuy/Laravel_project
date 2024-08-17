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

    .table_deg
    {
        border: 2px solid greenyellow;
    }

    th
    {
        background-color: skyblue;
        color: white;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
    }

    td 
    {
        border: 1px solid skyblue;
        text-align: center;
        height: 80px;
        color: white;
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

         <table class="table_deg"> 
            <tr>
                <th width="200">Category</th>

                <th width="500">Question</th>

                <th width="500">Answer</th>

                <th width="150">Edit</th>

                <th width="150">Delete</th>

            </tr>

            @foreach($faqItem as $faqItems)
            <tr>
                <td>{{$faqItems->category}}</td>

                <td>{{$faqItems->question}}</td>

                <td>{{$faqItems->answer}}</td>

                <td>
                    <a class="btn btn-success" href="{{url('update_faqItem',$faqItems->id)}}">Edit</a>
                </td>

                <td>
                    <a class="btn btn-danger"  onclick="confirmation(event)" href="{{url('delete_faqItem',$faqItems->id)}}">Delete</a>
                </td>


            </tr>

            @endforeach

         </table>

         </div>

         <div class="div_deg">

             {{$faqItem->onEachSide(1)->links()}}

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