@extends('Layout.Home_Layout')

@section('konten')
    <section id="Settings">
        <div class="container p-5 bg-white my-5 rounded">
            <h1 class="fw-bold">Settings</h1>
            <p>Supercharge your workflow and connect the tool you use everyday</p>
            <div class=" mb-5 round" style="background-color: #bbbbbb">
                <a href="/settings/integration" class="btn pe-5 ">All Integration</a>
                <a href="/settings/privacy" class="btn px-5">Privacy</a>
                <a href="/settings/security" class="btn px-5 btn-primary round">Security</a>
                <a href="#" class="btn px-5">Visibility</a>
                <a href="#" class="btn px-5">Data Privacy</a>
                <a href="#" class="btn px-5">Ad Data</a>
                <a href="#" class="btn px-5">Notification</a>
            </div>

            <div class="row border-bottom p-4">
                <div class="col">
                    Privasi
                </div>
                <div class="col-md-1">
                    <div class="form-check form-switch">
                        @if (auth()->user()->privasi == 'False')
                            <input class="form-check-input" type="checkbox" id="behancecheck" data-bs-toggle="modal"
                                data-bs-target="#behanceintegration">
                        @endif
                        @if (auth()->user()->privasi == 'True')
                            <input class="form-check-input" type="checkbox" id="behancecheck" data-bs-toggle="modal"
                                data-bs-target="#UncheckPrivasi" checked>
                        @endif
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="behanceintegration" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="behanceintegrationLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="behanceintegrationLabel">Make Account Private ?</h5>
                                    <label for="behancecheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </label>

                                </div>
                                <div class="modal-body text-center">

                                    <form action="/settings/privasi" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="btn round btn-primary px-5 mx-5 text-center">Yes</button>
                                        <button type="button" class="btn btn-secondary round mx-5 px-5"
                                            data-bs-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="UncheckPrivasi" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="UncheckPrivasiLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="UncheckPrivasiLabel">Make Account Publik ?</h5>
                                    <label for="behancecheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </label>

                                </div>
                                <div class="modal-body text-center">

                                    <form action="/settings/publik" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="btn round btn-primary px-5 mx-5 text-center">Yes</button>
                                        <button type="button" class="btn btn-secondary round mx-5 px-5"
                                            data-bs-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row border-bottom p-4">
                <div class="col">
                    Two Verification Account
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right-fill caret-hover" data-bs-toggle="modal" data-bs-target="#email"></i>

                    <!-- Modal -->
                    <div class="modal fade" id="email" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="emailLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="emailLabel">Two Verification Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/settings/2ndpassword" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="Email">Your 2nd Password</label>
                                            <input type="password" name="2ndpassword" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if (session('error'))
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="..." class="rounded me-2" alt="...">
                            <strong class="me-auto">Bootstrap</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif
    </section>
@endsection
