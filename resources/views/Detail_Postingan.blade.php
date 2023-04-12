@extends('Layout.Home_Layout')

@section('konten')
<section id="Homepage">
    <div class="container my-5">
        <div class="row g-4">

            <!-- Postingan -->
            <div class="col">


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
