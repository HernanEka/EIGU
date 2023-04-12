@extends('Layout.Home_Layout')

@section('konten')
    <section id="Profile">
        <div class="container my-5">
            <div class="row">
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
                            <div class="row">
                                <div class="col" style="padding-top: 80px">
                                    <h3 class="display-5 card-title">{{ auth()->user()->firstname.' '.auth()->user()->lastname }} <b
                                            class="text-sm fw-light text-secondary">(He/Him)</b> </h3>
                                    <p class="card-text"><b>Front End Developer</b></p>
                                    <b class="fw-light text-sm text-secondary">{{ auth()->user()->city.', '.auth()->user()->region }}</b> <a href="#"
                                        class="text-decoration-none">Contact Information</a><br>
                                    <p><a href="#" class="text-decoration-none mb-3">5.802 Connection</a></p>
                                    <a href="#" class="btn bg-abu round">+ Add Account</a>
                                </div>
                                <div class="col text-end">
                                    <div class="portofolio mb-3">
                                        <a href="/portofolio" class="btn btn-primary round">Portofolio acces</a>
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


        <!-- Modal -->
        <div class="modal fade" id="UpdateProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="UpdateProfileLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UpdateProfileLabel">Basic Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/profile/update" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-2">
                                <label for="firstname" class="form-label">Firstname*</label>
                                <input type="text" name="firstname" id="firstname" class="form-control round">
                            </div>
                            <div class="mb-2">
                                <label for="lastname" class="form-label">Lastname*</label>
                                <input type="text" name="lastname" id="lastname" class="form-control round">
                            </div>
                            <div class="mb-2">
                                <label for="motto" class="form-label">Professional Motto*</label>
                                <input type="text" name="motto" id="motto" class="form-control round">
                            </div>
                            <h4>Location</h4>
                            <div class="mb-2">
                                <label for="region" class="form-label">Country/Region*</label>
                                <input type="text" name="region" id="region" class="form-control round">
                            </div>
                            <div class="mb-2">
                                <label for="city" class="form-label">City*</label>
                                <input type="text" name="city" id="city" class="form-control round">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
