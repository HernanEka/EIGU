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
                            <h3 class="card-title">{{ auth()->user()->firstname.' '.auth()->user()->lastname }}</h3>
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

                <div class="col">
                    <div class="card round my-profile mb-3">
                        <img src="https://images.unsplash.com/photo-1614850523011-8f49ffc73908?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGJhbm5lciUyMGJhY2tncm91bmR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top" alt="...">
                        <div class="position-absolute top-0 end-0 m-3">
                            <button class="btn bg-abu round" data-bs-toggle="modal" data-bs-target="#UpdateProfile"><i
                                    class="bi bi-pencil"></i></button>
                        </div>
                        <div class="position-absolute top-0 start-0 translate-middle-y"
                            style="padding-top: 300px; padding-left: 15px;">
                            <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                        </div>
                        <div class="card-body text-start px-4">
                            <div class="row mb-3">
                                <div class="col" style="padding-top: 80px">
                                    <h3 class="display-5 card-title">
                                        {{ $user->firstname . ' ' . $user->lastname }} <b
                                            class="text-sm fw-light text-secondary">(He/Him)</b> </h3>
                                    <p class="card-text"><b>Front End Developer</b></p>
                                    <b
                                        class="fw-light text-sm text-secondary">{{ $user->city . ', ' . $user->region }}</b>
                                    <a href="#" class="text-decoration-none">Contact Information</a><br>
                                    <p><a href="#" class="text-decoration-none mb-3">5.802 Connection</a></p>
                                </div>
                                <div class="col text-end">
                                    <div class="portofolio mb-3">
                                        <a href="/experience" class="btn btn-primary round">Portofolio acces</a>
                                    </div>
                                    <div class="shopee">
                                        <a href="#"><img src="{{ asset('src/img/shopee-logo.png') }}" width="60"
                                                alt=""></a>
                                        Shopee
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mx-2 p-2 border round">
                                    <h1 class="fs-6">Role-appropriate work recommendations</h1>
                                    <p class="text-sm text-secondary">It takes a lot of work in the IT field</p>
                                    <a href="#" class="text-decoration-none">See more</a>
                                </div>
                                <div class="col mx-2  p-2 border round">
                                    <h1 class="fs-6">Role-appropriate work recommendations</h1>
                                    <p class="text-sm text-secondary">It takes a lot of work in the IT field</p>
                                    <a href="#" class="text-decoration-none">See more</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="posting bg-white p-3 round">
                        <h3 class="display-6 mb-2">Activity</h3>
                        <div class="col border round p-3">
                            <div class="row">
                                <div class="col">
                                    <h4>Judul</h4>
                                </div>
                                <div class="col text-end">
                                    <i class="bi bi-pencil bg-abu p-2 round"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, rerum numquam quis quaerat
                                hic officia deleniti accusantium voluptatem similique, soluta, voluptatum architecto
                                dolores nihil eaque odit quas! Fugit, amet repellat.</p>
                            <img src="{{ asset('src/img/Rectangle 96.png') }}" class="img-fluid mb-2" alt="">
                            <div class="row text-center">
                                <div class="col round mx-2 border p-1">
                                    <i class="bi bi-hand-thumbs-up text-primary"></i><i class="text-sm fst-normal">Like</i>
                                </div>
                                <div class="col round mx-2 border p-1">
                                    <i class="bi bi-chat-text text-primary"></i><i class="text-sm fst-normal">Comment</i>
                                </div>
                                <div class="col round mx-2 border p-1">
                                    <i class="bi bi-arrow-repeat text-primary"></i><i class="text-sm fst-normal">Share</i>
                                </div>
                                <div class="col round mx-2 border p-1">
                                    <i class="bi bi-send text-primary"></i><i class="text-sm fst-normal">Send</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
