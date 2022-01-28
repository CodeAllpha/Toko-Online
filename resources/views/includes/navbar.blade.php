 <!--Navbar-->
    
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
          <img src="{{url('frontend/image/Delta Store.png')}}" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Produk </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Kaos Distro</a>
                <a class="dropdown-item" href="#">Baju Wanita</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">Cart</a>
            </li>
              <form action="" class="d-flex ">
                <div class="input-group">
                  <input name="search"  type="search" class="form-control bg-light border-0 small" placeholder="Search Product" aria-label="Search"  aria-describedat="basic-addon2"/>
                  <div class="input-group-append">
                    <button class="btn btn-search" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
               </form> 
               
               @guest
               <!--Mobile Button-->
               <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0 px-3 mt-3" type="button"
                onclick="event.preventDefault(); location.href='{{url('login')}}';">
                  Masuk
                </button>
              </form>
              <!--Dekstop Button-->
              <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{url('login')}}';">
                  Masuk
                </button>
              </form>
               @endguest

              @auth
                  <!--Mobile Button-->
               <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0 px-3 mt-3" type="submit">
                  Keluar
                </button>
              </form>
              <!--Dekstop Button-->
              <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                  Keluar
                </button>
              </form>
              @endauth
          </div>
          </ul>
        </div>
      </div>
    </nav>