
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
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
       
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <a style="border: 1px solid white; color:white;" class="btn" type="submit">Login</a>
        </form>
      </div>
    </div>
  </nav>