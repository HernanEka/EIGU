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
                            <div class="border p-3 round posting-btn mb-3"><i class="bi bi-people"></i> Data User</div>
                        </a>
                        <a href="/dashboard/job" class="text-decoration-none text-dark">
                            <div class="border p-3 round posting-btn mb-3"><i class="bi bi-briefcase"></i> Jobs</div>
                        </a>
                        <a href="/dashboard/chat" class="text-decoration-none text-dark">
                            <div class="border p-3 round posting-btn active mb-3"><i class="bi bi-chat-dots"></i> Chat</div>
                        </a>
                    </div>
                </div>

                <!-- Job -->
                <div class="col p-5 round bg-white">
                    @foreach ($chat as $data)
                        <a href="/dashboard/chat/{{ $data->pengirim_id }}" class="text-decoration-none text-dark">
                            <div class="row bg-abu p-3 mb-3 round posting align-items-center">
                                <div class="col-lg-1">
                                    <img src="{{ asset('src/img/contoh.jpg') }}" alt="" class="pics">
                                </div>
                                <div class="col">
                                    @foreach ($user as $users)
                                        @if ($users->id == $data->pengirim_id)
                                            <b>{{ $users->firstname . ' ' . $users->lastname }}</b>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
