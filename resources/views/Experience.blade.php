@extends('Layout.Home_Layout')

@section('konten')
    <section id="Experience">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                    <h1 class="display-6">{{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}</h1>
                    <p class="fs-5">{{ auth()->user()->motto }}</p>
                </div>
                <div class="col">
                    <img src="https://images.unsplash.com/photo-1614850523011-8f49ffc73908?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGJhbm5lciUyMGJhY2tncm91bmR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                        class="card-img-top" alt="...">
                </div>
            </div>

            <div class="switch text-center mb-5 p-2 round">
                <a href="/experience" class="btn px-4 btn-primary round">Experience</a>
                <a href="/portofolio" class="btn px-4  round">Portofolio</a>
            </div>

            <!-- JOB -->
            <div class="bg-white p-3 round mb-4">
                <div class="row">
                    <div class="col">
                        <h1 class="display-6 fw-bold">Jobs</h1>
                    </div>
                    <div class="col text-end">
                        <button type="button" class="btn bg-abu round" data-bs-toggle="modal"
                            data-bs-target="#Jobs">+</button>
                        <button class="btn bg-abu round"><i class="bi bi-pencil"></i></button>
                    </div>
                </div>

                @foreach ($experience as $data)
                    @if ($data->kategori == 'Jobs')
                        <div class="row p-3 align-items-center">
                            <div class="col-md-1">
                                <i class="bi bi-briefcase display-1"></i>
                            </div>
                            <div class="col">
                                <h4>{{ $data->title }}</h4>
                                <h6>{{ $data->subtitle }}</h6>
                                <p class="fw-bold">{{ $data->start }} - {{ $data->end }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Jobs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="JobsLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title display-5 fw-bold" id="JobsLabel">Jobs</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/jobs" method="post">
                            @csrf
                            <div class="modal-body">
                                <h5 class="fw-bold">Your recent jobs</h5>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Company Name</label>
                                    <input type="text" name="title" id="title" class="form-control round">
                                </div>
                                <div class="mb-3">
                                    <label for="subtitle" class="form-label">Title</label>
                                    <input type="text" name="subtitle" id="subtitle" class="form-control round">
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="start" class="form-label">Start Date</label>
                                        <input type="text" name="start" id="start" class="form-control round">
                                    </div>
                                    <div class="col">
                                        <label for="end" class="form-label">End Date</label>
                                        <input type="text" name="end" id="end" class="form-control round">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Description</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control round"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="bg-white p-3 round mb-4">
                <div class="row">
                    <div class="col">
                        <h1 class="display-6 fw-bold">Education</h1>
                    </div>
                    <div class="col text-end">
                        <button type="button" class="btn bg-abu round" data-bs-toggle="modal"
                            data-bs-target="#Education">+</button>
                        <button class="btn bg-abu round"><i class="bi bi-pencil"></i></button>
                    </div>
                </div>

                @foreach ($experience as $data)
                    @if ($data->kategori == 'Education')
                        <div class="row p-3 align-items-center">
                            <div class="col-md-1">
                                <i class="bi bi-mortarboard display-1"></i>
                            </div>
                            <div class="col">
                                <h4>{{ $data->title }}</h4>
                                <h6>{{ $data->subtitle }}</h6>
                                <p class="fw-bold">{{ $data->start }} - {{ $data->end }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Education" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="EducationLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title display-5 fw-bold" id="EducationLabel">Education</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="/education" method="post">
                            @csrf
                            <div class="modal-body">
                                <h5 class="fw-bold">Your recent education</h5>
                                <div class="mb-3">
                                    <label for="title" class="form-label">University Name</label>
                                    <input type="text" name="title" id="title" class="form-control round">
                                </div>
                                <div class="mb-3">
                                    <label for="subtitle" class="form-label">Major</label>
                                    <input type="text" name="subtitle" id="subtitle" class="form-control round">
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="start" class="form-label">Start Date</label>
                                        <input type="text" name="start" id="start" class="form-control round">
                                    </div>
                                    <div class="col">
                                        <label for="end" class="form-label">End Date</label>
                                        <input type="text" name="end" id="end" class="form-control round">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Description</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control round"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="bg-white p-3 round mb-4">
                <div class="row">
                    <div class="col">
                        <h1 class="display-6 fw-bold">Certification</h1>
                    </div>
                    <div class="col text-end">
                        <button type="button" class="btn bg-abu round" data-bs-toggle="modal"
                            data-bs-target="#Certification">+</button>
                        <button class="btn bg-abu round"><i class="bi bi-pencil"></i></button>
                    </div>
                </div>

                @foreach ($experience as $data)
                    @if ($data->kategori == 'Certification')
                        <div class="row p-3 align-items-center">
                            <div class="col-md-1">
                                <i class="bi bi-book display-1"></i>
                            </div>
                            <div class="col">
                                <h4>{{ $data->title }}</h4>
                                <h6>{{ $data->subtitle }}</h6>
                                <p class="fw-bold">{{ $data->start }} - {{ $data->end }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Certification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="CertificationLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title display-5 fw-bold" id="CertificationLabel">Certification</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="/certification" method="post">
                            @csrf
                            <div class="modal-body">
                                <h5 class="fw-bold">Your recent certification</h5>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title" class="form-control round">
                                </div>
                                <div class="mb-3">
                                    <label for="subtitle" class="form-label">Released by</label>
                                    <input type="text" name="subtitle" id="subtitle" class="form-control round">
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="start" class="form-label">Start Date</label>
                                        <input type="text" name="start" id="start" class="form-control round">
                                    </div>
                                    <div class="col">
                                        <label for="end" class="form-label">End Date</label>
                                        <input type="text" name="end" id="end" class="form-control round">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Licensed</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control round"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
