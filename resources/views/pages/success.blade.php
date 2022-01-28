@extends('layouts.success')
@section('title')
    Success Checkout
@endsection

@section('content')
    <main>
      <div class="section-success d-flex align-items-center">
        <div class="col text-center">
          <img src="{{url('frontend/image/cart-success.png')}}" alt="" />
          <h1>Suksess Terbayar</h1>
          <p>
            Silahkan Tunggu update dari via email
            <br />
            yang sudah anda daftarkan sebelumnya
          </p>
          <a href="{{route('home')}}" class="btn btn-back-to-home">Back to Home</a>
        </div>
      </div>
    </main>
@endsection