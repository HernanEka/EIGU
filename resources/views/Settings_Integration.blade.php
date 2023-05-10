@extends('Layout.Home_Layout')

@section('konten')
    <section id="Settings">
        <div class="container p-5 bg-white my-5 rounded">
            <h1 class="fw-bold">Settings</h1>
            <p>Supercharge your workflow and connect the tool you use everyday</p>
            <div class=" mb-5 round" style="background-color: #bbbbbb">
                <a href="/settings/integration" class="btn pe-5 btn-primary round">All Integration</a>
                <a href="/settings/privacy" class="btn px-5">Privacy</a>
                <a href="/settings/security" class="btn px-5">Security</a>
                <a href="#" class="btn px-5">Visibility</a>
                <a href="#" class="btn px-5">Data Privacy</a>
                <a href="#" class="btn px-5">Ad Data</a>
                <a href="#" class="btn px-5">Notification</a>
            </div>

            <h3>Integration and connected apps</h3>

            <div class="row row-cols-1 row-cols-md-5 g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="fw-bold">Behance</h5>
                                    <p>Supercharge</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('src/img/behance.png') }}" alt="" width="60">
                                </div>
                            </div>
                            <p class="card-text text-sm">platform media sosial untuk desainer yang memiliki fitur yang cukup
                                interaktif. </p>
                        </div>
                        <div class="card-footer d-flex align-items-center">


                            <!-- Button trigger modal -->

                            @if ($integration->behance != 'None')
                                <a href="https://www.behance.net/{{ $integration->behance }}" target="_blank"
                                    class="btn bg-white border text-sm ">View Integration</a>
                                <div class="form-check form-switch ms-4">
                                    <input class="form-check-input" type="checkbox" id="behancecheck" data-bs-toggle="modal"
                                        data-bs-target="#behanceintegrationuncheck" checked>
                                </div>
                            @else
                                <a href="#" class="btn bg-white border text-sm ">View Integration</a>
                                <div class="form-check form-switch ms-4">
                                    <input class="form-check-input" type="checkbox" id="behancecheck" data-bs-toggle="modal"
                                        data-bs-target="#behanceintegration">
                                </div>
                            @endif


                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="behanceintegration" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="behanceintegrationLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="behanceintegrationLabel">Integration with
                                    behance</h5>
                                <label for="behancecheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                    aria-label="Close">
                                </label>

                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ asset('src/img/behance.png') }}" alt="" width="200">
                                <form action="/integration/behance" method="post">
                                    @csrf
                                    <div class="">
                                        <label for="username" class="form-label"></label>
                                        <input type="text" name="username" id="username" class="form-control p-3 round"
                                            placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label"></label>
                                        <input type="password" name="password" id="password" class="form-control p-3 round"
                                            placeholder="Password">
                                    </div>

                                    <button type="submit"
                                        class="btn round bg-utama p-4 text-center text-white w-100 fw-bold">Log
                                        in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="behanceintegrationuncheck" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="behanceintegrationLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="behanceintegrationLabel">Integration with
                                    behance</h5>
                                <label for="behancecheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                    aria-label="Close">
                                </label>

                            </div>
                            <div class="modal-body text-center">
                                <h2 class="mb-5">Apakah anda yakin?</h2>
                                <div class="row">
                                    <div class="col">
                                        <a href="/integration/behance/uncheck" class="btn btn-warning">Yakin</a>
                                    </div>
                                    <div class="col">
                                        <label for="behancecheck" class="btn btn-secondary" onclick=""
                                            data-bs-dismiss="modal" aria-label="Close">Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="fw-bold">Dribbble</h5>
                                    <p>Supercharge</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('src/img/dribbble.png') }}" alt="" width="60">
                                </div>
                            </div>
                            <p class="card-text text-sm">web 2.0 yang ditujukan untuk para komunitas desain yang di mana
                                desainer.</p>
                        </div>
                        <div class="card-footer d-flex align-items-center">


                            <!-- Button trigger modal -->

                            @if ($integration->dribbble != 'None')
                                <a href="https://dribbble.com/{{ $integration->dribbble }}" target="_blank"
                                    class="btn bg-white border text-sm ">View Integration</a>
                                <div class="form-check form-switch ms-4">
                                    <input class="form-check-input" type="checkbox" id="dribblecheck"
                                        data-bs-toggle="modal" data-bs-target="#dribbleintegrationuncheck" checked>
                                </div>
                            @else
                                <a href="#" class="btn bg-white border text-sm ">View Integration</a>
                                <div class="form-check form-switch ms-4">
                                    <input class="form-check-input" type="checkbox" id="dribblecheck"
                                        data-bs-toggle="modal" data-bs-target="#dribbleintegration">
                                </div>
                            @endif


                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="dribbleintegration" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="dribbleintegrationLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dribbleintegrationLabel">Integration with
                                    Dribbble</h5>
                                <label for="dribblecheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                    aria-label="Close">
                                </label>

                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ asset('src/img/dribbble.png') }}" alt="" width="200">
                                <form action="/integration/dribbble" method="post">
                                    @csrf
                                    <div class="">
                                        <label for="username" class="form-label"></label>
                                        <input type="text" name="username" id="username"
                                            class="form-control p-3 round" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label"></label>
                                        <input type="password" name="password" id="password"
                                            class="form-control p-3 round" placeholder="Password">
                                    </div>

                                    <button type="submit"
                                        class="btn round bg-utama p-4 text-center text-white w-100 fw-bold">Log
                                        in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="dribbleintegrationuncheck" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="dribbleintegrationLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dribbleintegrationLabel">Integration with
                                    Dribbble</h5>
                                <label for="dribblecheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                    aria-label="Close">
                                </label>

                            </div>
                            <div class="modal-body text-center">
                                <h2 class="mb-5">Apakah anda yakin?</h2>
                                <div class="row">
                                    <div class="col">
                                        <a href="/integration/dribbble/uncheck" class="btn btn-warning">Yakin</a>
                                    </div>
                                    <div class="col">
                                        <label for="dribblecheck" class="btn btn-secondary" onclick=""
                                            data-bs-dismiss="modal" aria-label="Close">Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="fw-bold">Github</h5>
                                    <p>Supercharge</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('src/img/github.png') }}" alt="" width="60">
                                </div>
                            </div>
                            <p class="card-text text-sm">layanan hos web bersama untuk proyek pengembangan perangkat lunak.
                            </p>
                        </div>
                        <div class="card-footer d-flex align-items-center">


                            <!-- Button trigger modal -->

                            @if ($integration->github != 'None')
                                <a href="https://github.com/{{ $integration->github }}" target="_blank"
                                    class="btn bg-white border text-sm ">View Integration</a>
                                <div class="form-check form-switch ms-4">
                                    <input class="form-check-input" type="checkbox" id="githubcheck"
                                        data-bs-toggle="modal" data-bs-target="#githubintegrationuncheck" checked>
                                </div>
                            @else
                                <a href="#" class="btn bg-white border text-sm ">View Integration</a>
                                <div class="form-check form-switch ms-4">
                                    <input class="form-check-input" type="checkbox" id="githubcheck"
                                        data-bs-toggle="modal" data-bs-target="#githubintegration">
                                </div>
                            @endif


                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="githubintegration" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="githubintegrationLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="githubintegrationLabel">Integration with
                                    github</h5>
                                <label for="githubcheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                    aria-label="Close">
                                </label>

                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ asset('src/img/github.png') }}" alt="" width="200">
                                <form action="/integration/github" method="post">
                                    @csrf
                                    <div class="">
                                        <label for="username" class="form-label"></label>
                                        <input type="text" name="username" id="username"
                                            class="form-control p-3 round" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label"></label>
                                        <input type="password" name="password" id="password"
                                            class="form-control p-3 round" placeholder="Password">
                                    </div>

                                    <button type="submit"
                                        class="btn round bg-utama p-4 text-center text-white w-100 fw-bold">Log
                                        in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="githubintegrationuncheck" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="githubintegrationLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="githubintegrationLabel">Integration with
                                    github</h5>
                                <label for="githubcheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                    aria-label="Close">
                                </label>

                            </div>
                            <div class="modal-body text-center">
                                <h2 class="mb-5">Apakah anda yakin?</h2>
                                <div class="row">
                                    <div class="col">
                                        <a href="/integration/github/uncheck" class="btn btn-warning">Yakin</a>
                                    </div>
                                    <div class="col">
                                        <label for="githubcheck" class="btn btn-secondary" onclick=""
                                            data-bs-dismiss="modal" aria-label="Close">Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
