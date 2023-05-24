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
                        </div>
                    </div>

                    <div class="bg-white round p-3" style="min-height: 200px">
                        <a href="/dashboard/user" class="text-decoration-none text-dark">
                            <div class="border p-3 round posting-btn active mb-3"><i class="bi bi-people"></i> Data User</div>
                        </a>
                        <a href="/dashboard/job" class="text-decoration-none text-dark">
                            <div class="border p-3 round posting-btn mb-3"><i class="bi bi-briefcase"></i> Jobs</div>
                        </a>
                    </div>
                </div>

                <!-- Job -->
                <div class="col p-5 round bg-white">
                    @foreach ($user as $data)
                        <div class="row bg-abu p-3 mb-3 round posting align-items-center">
                            <div class="col-lg-1">
                                <img src="{{ asset('src/img/contoh.jpg') }}" alt="" class="pics">
                            </div>
                            <div class="col">
                                <b>{{ $data->firstname.' '.$data->lastname }}</b>
                                <p>Front End Developer</p>
                            </div>
                            <div class="col-md-2">
                                <a href="/dashboard/user/delete/{{ $data->id }}" class="btn btn-danger w-100">Delete</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
