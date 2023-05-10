@extends('Layout.Home_Layout')

@section('konten')
    <section id="Homepage">
        <div class="container my-5">
            <div class="row g-4">

                <div class="col-md-3">

                    <!-- Profile -->
                    <div class="card round my-profile mb-3">
                        <img src="https://images.unsplash.com/photo-1614850523011-8f49ffc73908?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGJhbm5lciUyMGJhY2tncm91bmR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top" alt="...">
                        <div class="position-absolute top-0 start-50 translate-middle" style="padding-top: 200px">
                            <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                        </div>
                        <div class="card-body text-center" style="padding-top: 50px">
                            <h3 class="card-title">{{ auth()->user()->firstname }}</h3>
                            <p class="card-text text-sm text-secondary">
                                {{ '@' . substr(auth()->user()->email, 0, strrpos(auth()->user()->email, '@')) }} </p>
                            <p>Front End Developer</p>
                            <hr>
                            <div class="row">
                                <div class="col text-center border-end">
                                    <h4 class="fw-bold">5.812</h4>
                                    <p class="text-secondary text-sm">Following</p>
                                </div>
                                <div class="col text-center">
                                    <h4 class="fw-bold">10K</h4>
                                    <p class="text-secondary text-sm">Followers</p>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="/profile" class="text-decoration-none">My Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- Connection -->
                    <div class="card bg-white round p-3">
                        <div class="row mb-2">
                            <div class="col">
                                <h6 class="fw-bold">Connection</h6>
                            </div>
                            <div class=" col text-end">
                                <i class="bi bi-gear"></i>
                            </div>
                        </div>

                        @for ($i = 0; $i < 3; $i++)
                            <div class="row posting">
                                <div class="col-md-3">
                                    <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                                </div>
                                <div class="col">
                                    <h6>Dummy Person</h6>
                                    <p class="text-sm text-secondary">Dummy Pekerjaan</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Postingan -->
                <div class="col">
                    <div class="bg-white round p-4 mb-5">
                        <p class="text-secondary">There are no unanswered invitations</p>
                    </div>

                    <div class="bg-white round p-4">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            @foreach ($user as $users)
                                <div class="col">
                                    <div class="card h-100 round my-profile mb-3">
                                        <img src="https://images.unsplash.com/photo-1614850523011-8f49ffc73908?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGJhbm5lciUyMGJhY2tncm91bmR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top" alt="...">
                                        <div class="position-absolute top-0 start-50 translate-middle"
                                            style="padding-top: 200px">
                                            <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                                        </div>
                                        <div class="card-body text-center" style="padding-top: 50px">
                                            <h3 class="card-title">{{ $users->firstname }}</h3>
                                            <p class="card-text text-sm text-secondary">
                                                {{ '@' . substr($users->email, 0, strrpos($users->email, '@')) }}
                                            </p>
                                            <p>Front End Developer</p>
                                            <a href="/profile/{{ $users->id }}" class="btn btn-outline-primary w-100">Follow</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
