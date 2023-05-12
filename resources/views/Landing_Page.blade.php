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

                        @foreach ($connect as $koneksi)
                            @if ($koneksi->user_id_1 == auth()->user()->id)
                                @foreach ($user as $users)
                                    @if ($users->id == $koneksi->user_id_2)
                                        <div class="row posting">
                                            <div class="col-md-3">
                                                <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                                            </div>
                                            <div class="col">
                                                <h6>{{ $users->firstname . ' ' . $users->lastname }}</h6>
                                                <p class="text-sm text-secondary">Front End Developer</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            @if ($koneksi->user_id_2 == auth()->user()->id)
                                @foreach ($user as $users)
                                    @if ($users->id == $koneksi->user_id_1)
                                        <div class="row posting">
                                            <div class="col-md-3">
                                                <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                                            </div>
                                            <div class="col">
                                                <h6>{{ $users->firstname . ' ' . $users->lastname }}</h6>
                                                <p class="text-sm text-secondary">UI/UX Designer</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
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
                                <form action="/posting" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" id="Posting" name="posting"
                                        class="form-control mb-2 bg-abu border-0" placeholder="What's happening?">
                                    <div class="row g-3 px-3 text-center">
                                        <div class="col round mx-2 border posting-btn p-1">
                                            <label for="foto">
                                                <img src="{{ asset('src/img/photo.png') }}" width="30" alt="">
                                                <i class="text-sm fst-normal">Photo</i>
                                            </label>
                                            <input type="file" id="foto" name="foto" hidden accept="image/*">
                                        </div>
                                        <div class="col round mx-2 posting-btn border p-1">
                                            <label for="video">
                                                <img src="{{ asset('src/img/video.png') }}" width="30" alt="">
                                                <i class="text-sm fst-normal">Video</i>
                                            </label>
                                            <input type="file" id="video" name="video" accept="video/*" hidden>
                                        </div>
                                        {{-- <div class="col round mx-2 border posting-btn p-1">
                                            <label for="thread">
                                                <img src="{{ asset('src/img/thread.png') }}" width="30" alt="">
                                                <i class="text-sm fst-normal">Thread</i>
                                            </label>
                                            <input type="file" name="thread" accept=".doc, .docx, .pdf" id="thread"
                                                hidden>
                                        </div> --}}
                                        <button type="submit" class="col round mx-2 border text-center btn btn-primary">
                                            Post
                                        </button>
                                        {{-- <div class="col round mx-2 border text-center btn btn-primary">
                                            <i class="text-sm fst-normal">Schedule</i>
                                        </div> --}}
                                    </div>

                                    <button type="submit" hidden id="submitBtn">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Daftar Postingan -->
                    @foreach ($postingan as $data)
                        <div class="posting bg-white p-3 mb-4 round">
                            <div class="row">
                                <div class="col-md-1 me-3">
                                    <a href="/profile/{{ $data->user_id }}" class="text-decoration-none text-dark">
                                        <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="/profile/1" class="text-decoration-none text-dark">
                                        <h3 class="mb-2">
                                            @foreach ($user as $users)
                                                @if ($users->id == $data->user_id)
                                                    {{ $users->firstname . ' ' . $users->lastname }}
                                                @endif
                                            @endforeach
                                        </h3>
                                    </a>
                                    <p>{{ $data->postingan }}</p>
                                    @if ($data->foto)
                                        <img src="{{ asset('upload/postingan/foto/' . $data->foto) }}"
                                            class="img-fluid mb-2" alt="">
                                    @elseif ($data->video)
                                        <iframe width="560" height="315"
                                            src="{{ asset('upload/postingan/video/' . $data->video) }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    @endif
                                </div>
                                <div class="text-end">
                                    <a href="/postingan/detail/{{ $data->id }}" class=" text-dark">
                                        <p>Read More ...</p>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col">
                                    <div class="row text-center">
                                        <div class="col round mx-2 border p-1 tombol">
                                            <i class="bi bi-hand-thumbs-up"></i><i class="text-sm fst-normal">Like</i>
                                        </div>
                                        <div class="col round mx-2 border p-1 tombol">
                                            <i class="bi bi-chat-text"></i><i class="text-sm fst-normal">Comment</i>
                                        </div>
                                        <div class="col round mx-2 border p-1 tombol">
                                            <i class="bi bi-arrow-repeat"></i><i class="text-sm fst-normal">Share</i>
                                        </div>
                                        <div class="col round mx-2 border p-1 tombol">
                                            <i class="bi bi-send"></i><i class="text-sm fst-normal">Send</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

    <script>
        var input = document.getElementById("Posting");
        input.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById("submitBtn").click();
            }
        });
    </script>
@endsection
