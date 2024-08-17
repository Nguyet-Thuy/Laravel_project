<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admincss/img/logo.png')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">AdminEHB</h1>
            <p>EcoStitch Manager</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{ route('admin.index') }}"> <i class="icon-home"></i>Home </a></li>

                <li>
                    <a href="{{url('view_user')}}"> <i class="icon-grid"></i>Users</a>
                </li>
                <li>
                    <a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category </a>
                </li>

                <li><a href="#productdropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Products</a>
                  <ul id="productdropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Add Product</a></li>
                    <li><a href="{{url('view_product')}}">View Products</a></li>
                  </ul>
                </li>

                <li>
                    <a href="{{url('view_news')}}"> <i class="icon-grid"></i>News Posts </a>
                </li>

                <li>
                    <a href="{{url('view_contact')}}"> <i class="icon-grid"></i>Contact sheets </a>
                </li>

                <li>
                    <a href="{{url('view_faqCategory')}}"> <i class="icon-grid"></i>FAQ Categories </a>
                </li>

                <li><a href="#faqdropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>FAQ Question and Answers</a>
                  <ul id="faqdropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_faqItem')}}">Add Question and Answer</a></li>
                    <li><a href="{{url('view_faqItem')}}">View Questions and Answers</a></li>
                  </ul>
                </li>
               
                
                
        </ul>
      </nav>