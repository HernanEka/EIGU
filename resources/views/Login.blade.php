@extends('Layout.Login_Layout')

@section('konten')
    <img src="{{ asset('src/img/Logo.png') }}" class="mb-5 pb-5" alt="">
    <h1 class="display-5">Sign In</h1>
    <p class="text-sm px-2">Start your journey.</p>
    <form action="/login" method="post">
        @csrf
        <div class="row row-cols-1 px-2 g-4 mb-4">
            <div class="col">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror round py-4"
                    placeholder="Email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col">
                <input type="password" name="password"
                    class="form-control @error('password') is-invalid @enderror round py-4" placeholder="Password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col row px-4 mt-3">
                <div class="col form-check">
                    <input class="form-check-input" name="remember" type="checkbox" value="remember" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <div class="col w-100 text-end">
                    <a href="#!" class="">Forgot Password?</a>
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn bg-utama text-white round fw-bold py-4 w-100">Log in</button>
            </div>
        </div>
    </form>
    <div style="width: 100%; height: 15px; border-bottom: 1px solid rgb(156, 156, 156); text-align: center">
        <span style="font-size: 20px; background-color: #E8E8E8; padding: 10px 5px;">
            OR
            <!--Padding is optional-->
        </span>
    </div>
    <div class="px-2 my-4 text-center">
        <a href="#!" class="btn btn-light w-100 border py-3 round text-secondary">
            <img src="{{ asset('src/img/search.png') }}" class="google" alt=""> Sign In  with
            Google
        </a>
    </div>
    <div class="text-center">
        <p class="text-sm">Don't have an account ? <a href="/signup">Sign Up</a></p>
    </div>
@endsection
