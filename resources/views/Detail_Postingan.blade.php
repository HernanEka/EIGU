@extends('Layout.Home_Layout')

@section('konten')
    <section id="Homepage">
        <div class="container my-5">
            <div class="row g-4">

                <!-- Postingan -->
                <div class="col">


                    <!-- Daftar Postingan -->
                    <div class="posting bg-white p-3 round">
                        <div class="posting bg-white p-3 mb-4 round">
                            <div class="row">
                                <div class="col-md-1 me-3">
                                    <a href="/profile/{{ $postingan->user_id }}" class="text-decoration-none text-dark">
                                        <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="/profile/1" class="text-decoration-none text-dark">
                                        <h3 class="mb-2">
                                            @foreach ($user as $users)
                                                @if ($users->id == $postingan->user_id)
                                                    {{ $users->firstname . ' ' . $users->lastname }}
                                                @endif
                                            @endforeach
                                        </h3>
                                    </a>
                                    <p>{{ $postingan->postingan }}</p>
                                    @if ($postingan->foto)
                                        <div class="text-cennter">
                                            <img src="{{ asset('upload/postingan/foto/' . $postingan->foto) }}"
                                                class="img-fluid mb-2" alt="">
                                        </div>
                                    @endif
                                    @if ($postingan->video)
                                        <div class="text-center">
                                            <iframe width="560" height="315"
                                                src="{{ asset('upload/postingan/video/' . $postingan->video) }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                    @endif
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
