@extends('layouts.main')

@section('container')
 <div class="row justify-content-center">
    <div class="col-md-4">

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
       
        <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
          <p>contact the developer to login as an administrator: Abd.Latif (087824982707/wa)</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    
     

      

        <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email"  @error('email') is-invalid @enderror required>
                <label for="floatingInput">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"  @error('name') is-invalid @enderror">
                <label for="floatingPassword">Password</label>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-3">Not Registered? <a href="/register" class="text-decoration-none">Register Now</a></small>
          </main>
    </div>
 </div>
@endsection


