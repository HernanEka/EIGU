@extends('Layout.Home_Layout')

@section('konten')
    <section id="Settings">
        <div class="container p-5 bg-white my-5 rounded">
            <h1 class="fw-bold">Settings</h1>
            <p>Supercharge your workflow and connect the tool you use everyday</p>
            <div class=" mb-5 round" style="background-color: #bbbbbb">
                <a href="/settings/integration" class="btn pe-5 ">All Integration</a>
                <a href="/settings/privacy" class="btn px-5 btn-primary round">Privacy</a>
                <a href="/settings/security" class="btn px-5">Security</a>
                <a href="#" class="btn px-5">Visibility</a>
                <a href="#" class="btn px-5">Data Privacy</a>
                <a href="#" class="btn px-5">Ad Data</a>
                <a href="#" class="btn px-5">Notification</a>
            </div>

            <div class="row border-bottom p-4">
                <div class="col">
                    Email Address
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right-fill caret-hover" data-bs-toggle="modal" data-bs-target="#email"></i>

                    <!-- Modal -->
                    <div class="modal fade" id="email" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="emailLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="emailLabel">Email Address</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/settings/email" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="Email">Old Email Address</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ auth()->user()->email }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Email">New Email Address</label>
                                            <input type="email" name="emailbaru" class="form-control">
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
            <div class="row border-bottom p-4">
                <div class="col">
                    Phone Number
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right-fill caret-hover" data-bs-toggle="modal" data-bs-target="#PhoneModal"></i>

                    <!-- Modal -->
                    <div class="modal fade" id="PhoneModal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="PhoneModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="PhoneModalLabel">Change Phone Number</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/settings/phone" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="Email">Old No Handphone</label>
                                            <input type="text" name="nohp" class="form-control"
                                                value="{{ auth()->user()->nohp }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Email">New No Handphone</label>
                                            <input type="number" name="nohpbaru" class="form-control">
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
            <div class="row border-bottom p-4">
                <div class="col">
                    Change Password
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right-fill caret-hover" data-bs-toggle="modal"
                        data-bs-target="#PasswordModal"></i>

                    <!-- Modal -->
                    <div class="modal fade" id="PasswordModal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="PasswordModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="PasswordModalLabel">Change Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/settings/password" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="Email">New Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Email">Confirm Password</label>
                                            <input type="password" name="confirm" class="form-control">
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
