@extends('layouts.auth')

@section('content')
<main class="login">
    <div class="container">
        <div class="row page-login">
            <div class="section-right col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1>Sign Up</h1>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group ">
                                <label for="name" >Name</label>
    
                                <div class="">
                                    <input id="name" placeholder="Masukan Nama..." type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
    
                                <div class="">
                                    <input id="email" type="email" placeholder="Masukan Email..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="password">Password</label>
    
                                <div class="">
                                    <input id="password" placeholder="Masukan Password.." type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="password-confirm">Repeat Password</label>
    
                                <div class="">
                                    <input id="password-confirm" placeholder="Confirmasi Password.." type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                                
                            <button type="submit"class="btn btn-login btn-block mt-4">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
