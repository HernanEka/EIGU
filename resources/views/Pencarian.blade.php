@extends('Layout.Home_Layout')

@section('konten')
    <section id="Homepage">
        <div class="bg-white container round my-5 p-5">
            <div class="text-center mb-3">
                <h1 class="display-5">Search For <b class="fw-bold">{{ request('search') }}</b></h1>
            </div>

            <div class="mb-5">
                <a href="/filter?search={{ request('search') }}&user=yes" class="text-decoration-none text-dark">
                    <h1><i class="bi bi-people-fill"></i> User</h1>
                </a>
                <hr>
                @if (count($user) == 0)
                    Tidak Ada User dengan nama <b>{{ request('search') }}</b>
                @endif
                @foreach ($user as $users)
                    <div class="row posting">
                        <div class="col-md-1">
                            <img src="{{ asset('src/img/contoh.jpg') }}" class="pics" alt="">
                        </div>
                        <div class="col">
                            <h6>{{ $users->firstname . ' ' . $users->lastname }}</h6>
                            <p class="text-sm text-secondary">Front End Developer</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mb-5">
                <a href="/filter?search={{ request('search') }}&job=yes" class="text-decoration-none text-dark">
                    <h1><i class="bi bi-briefcase-fill"></i> Job</h1>
                </a>
                <hr>
                @if (count($job) == 0)
                    Tidak Ada Pekerjaan <b>{{ request('search') }}</b>
                @endif
                @foreach ($job as $jobs)
                    <div class="accordion-item border">
                        <h2 class="accordion-header" id="flush-heading{{ $jobs->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse{{ $jobs->id }}" aria-expanded="false"
                                aria-controls="flush-collapse{{ $jobs->id }}">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ asset('upload/job/logo/' . $jobs->logo) }}" alt=""
                                            width="50">
                                    </div>
                                    <div class="col">
                                        <b>{{ $jobs->company }}</b>
                                        <p class="text-sm">{{ $jobs->title }}
                                            <br>{{ \Carbon\Carbon::parse($jobs->startdate)->format('j F Y') }} -
                                            {{ \Carbon\Carbon::parse($jobs->enddate)->format('j F Y') }}</p>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapse{{ $jobs->id }}" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading{{ $jobs->id }}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    {{ $jobs->deskripsi }}
                                </p>

                                <a href="{{ $jobs->link }}" target="_blank" class="btn btn-primary">Apply</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
