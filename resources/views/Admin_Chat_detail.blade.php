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
                    <div class="chat-box p-4 overflow-auto">
                        @foreach ($chat as $data_pesan)
                            @if ($data_pesan->penerima_id == $user->id)
                                <div class="row mb-2">
                                    <div class="col text-end">
                                        <h6 class="fw-bold">For Help</h6>
                                        <p class="text-sm">{{ $data_pesan->isi }}</p>
                                    </div>
                                    <div class="col-md-1">
                                        <img src="{{ asset('src/img/mail.png') }}" alt=""
                                            width="40">
                                    </div>
                                </div>
                            @endif
                            @if (!$data_pesan->penerima_id)
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="{{ asset('src/img/contoh.jpg') }}" alt=""
                                            class="chat-icon">
                                    </div>
                                    <div class="col">
                                        <h6 class="fw-bold">
                                            {{ $user->firstname . ' ' . $user->lastname }}
                                        </h6>
                                        <p class="text-sm">{{ $data_pesan->isi }}</p>
                                    </div>

                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="p-3 border-top">
                        <form action="/admin/reply/{{ $user->id }}" method="post">
                            @csrf
                            <textarea name="chat" id="chat" rows="4" class="form-control bg-abu border-none mb-3"
                                placeholder="write a message ..."></textarea>
                            <div class="row text-center">
                                <div class="col-md-8 row">
                                    <div class="col round mx-2 border p-1 tombol">
                                        <img src="{{ asset('src/img/photo.png') }}" alt=""
                                            width="25"><i class="text-sm fst-normal"> Photo</i>
                                    </div>
                                    <div class="col round mx-2 border p-1 tombol">
                                        <img src="{{ asset('src/img/video.png') }}" alt=""
                                            width="25"><i class="text-sm fst-normal"> Video</i>
                                    </div>
                                    <div class="col round mx-2 border p-1 tombol">
                                        <img src="{{ asset('src/img/emoji.png') }}" alt=""
                                            width="25"><i class="text-sm fst-normal"> Emoticons</i>
                                    </div>
                                </div>
                                <div class="col text-end">
                                    <button type="submit" class="btn btn-primary px-5 round"><i
                                            class="bi bi-send"></i><i
                                            class="text-sm fst-normal">Send</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
