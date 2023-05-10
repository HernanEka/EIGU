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
                <div class="col bg-white p-4 round">
                    <h4>Recomendation for you</h4>
                    <div class="accordion accordion-flush border" id="accordionFlushExample">
                        @for ($i = 0; $i < 2; $i++)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading{{ $i }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $i }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $i }}">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset('src/img/tiket.png') }}" alt="" width="50">
                                            </div>
                                            <div class="col">
                                                <b>Tiket.com</b>
                                                <p class="text-sm">UI / UX Designer <br>Jakarta, Indonesia</p>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $i }}" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading{{ $i }}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero veniam minima
                                            cupiditate aliquam ipsa aspernatur beatae doloribus doloremque ratione alias,
                                            dicta
                                            provident quo consectetur natus quas tempore. Rerum, repellat unde similique
                                            ratione
                                            rem, eaque voluptates voluptatem molestias voluptate nisi odio fugiat officiis,
                                            dicta eligendi labore dolorem vero ipsum sunt obcaecati?
                                        </p>

                                        <a href="https://www.tiket.com/" target="_blank" class="btn btn-primary">Apply</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card round">
                        <ul class="list-group list-group-flush round">
                            <li class="list-group-item mb-0">
                                <h5 class="fw-bold">Trending</h5>
                                <p class="text-sm text-secondary">Trend for you</p>
                            </li>
                            <li class="list-group-item">
                                <h6>#intership</h6>
                                <p class="text-sm text-secondary">27.9 K Tags</p>
                            </li>
                            <li class="list-group-item">
                                <h6>#Dribble</h6>
                                <p class="text-sm text-secondary">27.9 K Tags</p>
                            </li>
                            <li class="list-group-item">
                                <h6>#WFA</h6>
                                <p class="text-sm text-secondary">27.9 K Tags</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
