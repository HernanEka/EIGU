<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}">

    <!-- Font Awesome for Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sign Up</title>
</head>

<body>
    <section id="Login">
        <div class="container-fluid my-3">
            <div class="row align-items-center">
                <div class="col-md-5 px-5">
                    <img src="{{ asset('src/img/Logo.png') }}" class="mb-5 pb-5" alt="">
                    <h1 class="display-5">Create an account</h1>
                    <p class="text-sm px-2">Start your journey.</p>
                    <form action="/signup" method="post">
                        @csrf
                        <div class="row row-cols-1 px-2 g-4 mb-4">
                            <div class="col">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror round py-4"
                                    placeholder="Email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror round py-4"
                                    placeholder="Password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <input type="password" name="confirm"
                                    class="form-control @error('confirm') is-invalid @enderror round py-4"
                                    placeholder="Confirmation Password">
                                @error('confirm')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <button type="submit" class="btn bg-utama text-white round fw-bold py-4 w-100">Create
                                    Account</button>
                            </div>
                        </div>
                    </form>
                    <div
                        style="width: 100%; height: 15px; border-bottom: 1px solid rgb(156, 156, 156); text-align: center">
                        <span style="font-size: 20px; background-color: #E8E8E8; padding: 10px 5px;">
                            OR
                            <!--Padding is optional-->
                        </span>
                    </div>
                    <div class="px-2 my-4 text-center">
                        <a href="#!" class="btn btn-light w-100 border py-3 round text-secondary">
                            <img src="{{ asset('src/img/search.png') }}" class="google" alt=""> Sign Up with
                            Google
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-sm">Already have an account ? <a href="/login">Log in</a></p>
                    </div>
                </div>
                <div class="col-md-7 overflow-hidden">
                    <img src="{{ asset('src/img/blabluble.png') }}" class="img-fuild" alt="...">
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
