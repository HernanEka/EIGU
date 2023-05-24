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
                            <div class="border p-3 round posting-btn active mb-3"><i class="bi bi-briefcase"></i> Jobs</div>
                        </a>
                    </div>
                </div>

                <!-- Job -->
                <div class="col p-5 round bg-white">
                    <div class="text-end mb-4">
                        <button class="btn bg-abu round" data-bs-toggle="modal" data-bs-target="#Addjobs"><i
                                class="bi bi-pencil"></i></button>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @foreach ($jobs as $job)
                            <div class="accordion-item border">
                                <h2 class="accordion-header" id="flush-heading{{ $job->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $job->id }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $job->id }}">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset('upload/job/logo/' . $job->logo) }}" alt=""
                                                    width="50">
                                            </div>
                                            <div class="col">
                                                <b>{{ $job->company }}</b>
                                                <p class="text-sm">{{ $job->title }}
                                                    <br>{{ \Carbon\Carbon::parse($job->startdate)->format('j F Y') }} -
                                                    {{ \Carbon\Carbon::parse($job->enddate)->format('j F Y') }}</p>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $job->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading{{ $job->id }}"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            {{ $job->deskripsi }}
                                        </p>

                                        <a href="{{ $job->link }}" target="_blank" class="btn btn-primary">Apply</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="Addjobs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="AddjobsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="AddjobsLabel">Add Jobs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/dashboard/job/add" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control round">
                        </div>
                        <div class="mb-2">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" name="company" id="company" class="form-control round">
                        </div>
                        <div class="mb-2">
                            <label for="logo" class="form-label">Company Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control round" accept="image/*">
                        </div>
                        <div class="mb-2 row">
                            <div class="col">
                                <label for="startdate" class="form-label">Recruitment Start Date</label>
                                <input type="date" name="startdate" id="startdate" class="form-control round">
                            </div>
                            <div class="col">
                                <label for="enddate" class="form-label">End Date</label>
                                <input type="date" name="enddate" id="enddate" class="form-control round">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="link" class="form-label">Recruitment Link</label>
                            <input type="text" name="link" id="link" class="form-control round">
                        </div>
                        <div class="mb-2">
                            <label for="deskripsi" class="form-label">Description</label>
                            <textarea name="deskripsi" id="deskirpsi" rows="5" class="form-control round"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sumbit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
