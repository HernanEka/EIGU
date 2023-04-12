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

                    <!-- Memposting -->
                    <div class="posting bg-white p-3 mb-3 round">
                        <div class="row align-items-center">
                            <div class="col-md-1 me-3">
                                <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control mb-2 bg-abu border-0"
                                    placeholder="What's happening?">
                                <div class="row g-3 px-3 text-center">
                                    <div class="col round mx-2 border p-1">
                                        <img src="{{ asset('src/img/photo.png') }}" width="30" alt=""> <i
                                            class="text-sm fst-normal">Photo</i>
                                    </div>
                                    <div class="col round mx-2 border p-1">
                                        <img src="{{ asset('src/img/video.png') }}" width="30" alt=""> <i
                                            class="text-sm fst-normal">Video</i>
                                    </div>
                                    <div class="col round mx-2 border p-1">
                                        <img src="{{ asset('src/img/thread.png') }}" width="30" alt=""> <i
                                            class="text-sm fst-normal">Thread</i>
                                    </div>
                                    <div class="col round mx-2 border p-1">
                                        <img src="{{ asset('src/img/calendar.png') }}" width="30" alt=""> <i
                                            class="text-sm fst-normal">Schedule</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Daftar Postingan -->
                    <div class="posting bg-white p-3 round">
                        <div class="row">
                            <div class="col-md-1 me-3">
                                <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                            </div>
                            <div class="col">
                                <h3 class="mb-2">Alif Fajar Maulana</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, rerum numquam quis quaerat
                                    hic officia deleniti accusantium voluptatem similique, soluta, voluptatum architecto
                                    dolores nihil eaque odit quas! Fugit, amet repellat.</p>
                                <img src="{{ asset('src/img/Rectangle 96.png') }}" class="img-fluid mb-2" alt="">
                                <div class="row text-center">
                                    <div class="col round mx-2 border p-1">
                                        <i class="bi bi-hand-thumbs-up text-primary"></i><i
                                            class="text-sm fst-normal">Like</i>
                                    </div>
                                    <div class="col round mx-2 border p-1">
                                        <i class="bi bi-chat-text text-primary"></i><i
                                            class="text-sm fst-normal">Comment</i>
                                    </div>
                                    <div class="col round mx-2 border p-1">
                                        <i class="bi bi-arrow-repeat text-primary"></i><i
                                            class="text-sm fst-normal">Share</i>
                                    </div>
                                    <div class="col round mx-2 border p-1">
                                        <i class="bi bi-send text-primary"></i><i class="text-sm fst-normal">Send</i>
                                    </div>
                                </div>
                            </div>
                        </div>
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
