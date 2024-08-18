<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <a class="navbar-brand">
      <span>EcoStitch Creations</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home.index') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('news.index') }}">Nieuws</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('faq.index') }}">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About Page</a>
        </li>
      </ul>
      <div class="user_option">
        @auth
          <!-- Display when user is logged in -->
          <a href="{{ route('profile.update') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Profiel</span>
          </a>

          <a href="{{ route('logout') }}" class="logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span>Logout</span>
          </a>

          <a href="{{url('mycart')}}">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          {{$count}}
        </a>

          <!-- Hidden logout form -->
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        @else
          <!-- Display when user is not logged in -->
          <a href="{{ url('/login') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Login</span>
          </a>

          <a href="{{ url('/register') }}">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>Register</span>
          </a>

          <a href="#">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </a>
        @endauth

        
      </div>
    </div>
  </nav>
</header>
