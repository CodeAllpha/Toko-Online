@extends('layouts.app')

@section('title')
    Detail Product
@endsection

@section('content')
    <main>
      <div class="section-details-header">
        <div class="section-details-barang">
          <div class="container">
            <div class="row">
              <div class="col p-0">
                <nav>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i> Home Page</li >
                    <li class="breadcrumb-item active">Detail</li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-5 mt-3">
                <div class="card card-details">
                @if ($item->product_galleries->count())
                <div class="gallery">
                  <div class="xzoom-container">
                    <img src="{{url($item->product_galleries->first()->photo)}}" class="xzoom" id="xzoom-default" xoriginal="{{url($item->product_galleries->first()->photo)}}" />
                  </div>
                  <div class="xzoom-thumbs">
                    @foreach ($item->product_galleries as $productgallery)
                    <a href="{{url($productgallery->photo)}}">
                      <img src="{{url($productgallery->photo)}}" 
                      class="xzoom-gallery" 
                      xpreview="{{url($productgallery->photo)}}" />
                    </a>
                    @endforeach
                  </div>
                </div>
                @endif
                </div>
              </div>
              <div class="col-lg-6 mt-3">
                <div class="product-detail">
                  <div class="product-title">
                    <span>{{$item->type}}</span>
                    <h3>{{$item->name}}</h3>
                  </div>
                  <div class="product-desc">
                  <p>
                    {!!$item->description!!}
                  </p>
                    <h4>Rp {{$item->price}}</h4>
                  </div>
                  <div class="quintity">
                    @auth
                        <form action="{{route('checkout_process', $item->id)}}" method="POST">
                          @csrf
                          <button class="btn btn-add-to-cart mt-3 py-2">
                            Add To Cart
                          </button>
                        </form>
                    @endauth
                    @guest
                    <a href="{{route('login')}}" class="btn btn-add-to-cart mt-3">Login First</a>
                    @endguest
                  </div>
                </div>
              </div>
            </div>
            <section class="section-related" id="">
              <div class="container">
                <div class="row">
                  <div class="col text-center section-related-heading">
                    <h2>Most Popular Product</h2>
                  </div>
                </div>
              </div>

              <section class="section-related-content">
                <div class="container">
                  <div class="section-related-barang row justify-content-center">
                    <div class="col-7 col-sm-6 col-md-4 col-lg-3">
                      <div class="card-barang text-center d-flex flex-column" style="background-image: url('/frontend/image/Mikey.jpg')">
                        <div class="barang-button mt-auto">
                          <a href="#" class="btn btn-barang-details px-4"> View Details </a>
                        </div>
                      </div>
                      <div class="desc-barang text-center mt-3">
                        <div class="category-name">Clothes</div>
                        <h5>Gamis-Dusty Grey</h5>
                        <div class="desc-barang">$10,00</div>
                      </div>
                    </div>
                    <div class="col-7 col-sm-6 col-md-4 col-lg-3">
                      <div class="card-barang text-center d-flex flex-column" style="background-image: url('/frontend/image/Mikey.jpg')">
                        <div class="barang-button mt-auto">
                          <a href="#" class="btn btn-barang-details px-4"> View Details </a>
                        </div>
                      </div>
                      <div class="desc-barang text-center mt-3">
                        <div class="category-name">Clothes</div>
                        <h5>Gamis-Dusty Grey</h5>
                        <div class="desc-barang">$10,00</div>
                      </div>
                    </div>
                    <div class="col-7 col-sm-6 col-md-4 col-lg-3">
                      <div class="card-barang text-center d-flex flex-column"
                      style="background-image: url('/frontend/image/Mikey.jpg')">
                        <div class="barang-button mt-auto">
                          <a href="#" class="btn btn-barang-details px-4"> View Details </a>
                        </div>
                      </div>
                      <div class="desc-barang text-center mt-3">
                        <div class="category-name">Clothes</div>
                        <h5>Gamis-Dusty Grey</h5>
                        <div class="desc-barang">$10,00</div>
                      </div>
                    </div>
                    <div class="col-7 col-sm-6 col-md-4 col-lg-3">
                      <div class="card-barang text-center d-flex flex-column" style="background-image: url('/frontend/image/Mikey.jpg')">
                        <div class="barang-button mt-auto">
                          <a href="#" class="btn btn-barang-details px-4"> View Details </a>
                        </div>
                      </div>
                      <div class="desc-barang text-center mt-3">
                        <div class="category-name">Clothes</div>
                        <h5>Gamis-Dusty Grey</h5>
                        <div class="desc-barang">$10,00</div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </section>
          </div>
        </div>
      </div>
      <!--Section Product detail-->
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}" />
@endpush

@push('addon-script')
     <script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
     <script src="{{url('frontend/script/bootstrap.js')}}"></script>
     <script src="{{url('frontend/script/jquery-migrate-1.4.1.min.js')}}"></script>

    <script>
      $(document).ready(function () {
        $(".xzoom, .xzoom-gallery").xzoom({
          zoomWidth: 500,
          title: false,
          tint: "#333",
          xoffset: 15,
        });
      });
    </script>
@endpush