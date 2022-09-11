
 <nav style="background-color: #0a4275;"  class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a style="color: white;" class="navbar-brand" href="{{route('front_index')}}">TÜRKMEN NEWS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div  class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul  style="margin-left:5%;" class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a style="color: white;" class="nav-link active" aria-current="page" href="{{route('front_index')}}">Esasy sahypa</a>
          </li>
          <li class="nav-item">
            <a style="color: white;"  class="nav-link" href="{{route('news')}}">Habarlar</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="{{route('makalalar')}}">Makalalar</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="{{route('about')}}">Biz barada</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="{{route('contact')}}">Habarlaşmak</a>
          </li>
       
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>

        @guest 
       
            @if(Route::has('login'))
            <a href="{{route('login')}}" style="border: 1px solid white; color:white;" class="btn" type="submit">Login</a>
          @endif 

          @else
          <div class="dropdown">
            <button style="background-color: #0a4275; border:1px solid white; color:white" class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{route('admin_index')}}">Admin Panel</a></li>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" >Logout</a>
                    
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </ul>
          </div>
          @endguest
      </div>
    </div>
  </nav>