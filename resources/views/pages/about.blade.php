@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')


<main>
<section class="header-about mt-1">
    <div class="container">
        <div class="row">
            <div class="col p-0">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><i class="fas fa-home"></i> Home Page</li >
                  <li class="breadcrumb-item active">About</li>
                </ol>
              </nav>
            </div>
          </div>
    </div>
</section>
<section class="section-about-content">
<div class="container">
    <div class="row">
        <div class="col-lg-6 pl-lg-0">
            <div class="section-about">    
                <h2>About us_____</h2>
                <div class="photo">
                    <img src="frontend/image/About2.png" alt="">
                    <img src="frontend/image/About.png" alt="" class="box">
                </div>
        </div>

        </div>
        <div class="col-lg-6">
            <div class="content-right">
                <h2>
                    We Are The Best in your Area
                </h2>
                <p>Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit. Leo eget vitae, <br>feugiat massa sit semper porta.

                </p>
                <div class="row">
                    <div class="btn-details mt-2 pl-3">
                        <div class="row">
                            <div class="shop-now">
                                <a href="{{route('home')}}"class="btn btn-shop mt-3 py-2">
                                    Shop Now
                                </a>
                            </div>
                            <div class="shop-now">
                                <a href="#"class="btn btn-more mt-3 py-2">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="team">
    <div class="container my-3 py-5 text-center">
        <div class="row-mb-5">
            <div class="col">
                <h1>Team</h1>
                <p class="">
                    Penyusun Team Web Delta Store
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img
                            src="{{url('frontend/image/profil.jpg')}}"
                            alt=""
                            class="img-fluid rounded-circle w-50 mb-3"
                        />
                        <h3>Sigit Riski</h3>
                        <h5>UI/UX Designer</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Tenetur ducimus impedit
                            sit quod, esse numquam?
                        </p>
                        <div
                            class="
                                d-flex
                                flex-row
                                justify-content-center
                            "
                        >
                            <div class="p-4">
                                <a href="#">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                        </div>
                        <div class="p-4">
                            <a href="#">
                                <i class="fab fa-instagram-square"></i>
                            </a>
                    </div>
                </div>
            </div>
            
        </div>
       
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <img
                    src="{{url('frontend/image/profil2.jpg')}}"
                    alt=""
                    class="img-fluid rounded-circle w-50 mb-3"
                />
                <h3>Syifa Alpiana</h3>
                <h5>Tester</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur ducimus impedit
                    sit quod, esse numquam?
                </p>
                <div
                    class="
                        d-flex
                        flex-row
                        justify-content-center
                    "
                >
                    <div class="p-4">
                        <a href="">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                    <div class="p-4">
                        <a href="">
                            <i class="fab fa-linkedin"></i>
                        </a>
                </div>
                <div class="p-4">
                    <a href="">
                        <i class="fab fa-instagram-square"></i>
                    </a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="card">
    <div class="card-body">
        <img
            src="{{url('frontend/image/profil2.jpg')}}"
            alt=""
            class="img-fluid rounded-circle w-50 mb-3"
        />
        <h3>Tevi Ivana</h3>
        <h5>Tester</h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Tenetur ducimus impedit
            sit quod, esse numquam?
        </p>
        <div
            class="
                d-flex
                flex-row
                justify-content-center
            "
        >
            <div class="p-4">
                <a href="">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </div>
            <div class="p-4">
                <a href="">
                    <i class="fab fa-linkedin"></i>
                </a>
        </div>
        <div class="p-4">
            <a href="">
                <i class="fab fa-instagram-square"></i>
            </a>
    </div>
</div>
</div>

</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="card">
<div class="card-body">
    <img
        src="{{url('frontend/image/yoko.jpg')}}"
        alt=""
        class="img-fluid rounded-circle w-50 mb-3"
    />
    <h3>Yoko Surya</h3>
    <h5>Full Stack Developer</h5>
    <p>
        Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Tenetur ducimus impedit
        sit quod, esse numquam?
    </p>
    <div
        class="
            d-flex
            flex-row
            justify-content-center
        "
    >
        <div class="p-4">
            <a href="">
                <i class="fab fa-facebook-square"></i>
            </a>
        </div>
        <div class="p-4">
            <a href="">
                <i class="fab fa-linkedin"></i>
            </a>
    </div>
    <div class="p-4">
        <a href="">
            <i class="fab fa-instagram-square"></i>
        </a>
</div>
</div>
</div>

</div>
</div>
</section>
</main>
@endsection