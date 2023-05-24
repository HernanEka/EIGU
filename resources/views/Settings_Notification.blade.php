@extends('Layout.Home_Layout')

@section('konten')
    <section id="Settings">
        <div class="container p-5 bg-white my-5 rounded">
            <h1 class="fw-bold">Settings</h1>
            <p>Supercharge your workflow and connect the tool you use everyday</p>
            <div class=" mb-5 round" style="background-color: #bbbbbb">
                <a href="/settings/integration" class="btn pe-5 ">All Integration</a>
                <a href="/settings/privacy" class="btn px-5">Privacy</a>
                <a href="/settings/security" class="btn px-5">Security</a>
                <a href="#" class="btn px-5">Visibility</a>
                <a href="#" class="btn px-5">Data Privacy</a>
                <a href="#" class="btn px-5">Ad Data</a>
                <a href="/settings/notification" class="btn btn-primary round px-5">Notification</a>
            </div>

            <div class="row border-bottom p-4">
                <div class="col">
                    Notification
                </div>
                <div class="col-md-1">
                    <div class="form-check form-switch">
                        @if (auth()->user()->notifikasi == 'False')
                            <input class="form-check-input" type="checkbox" id="behancecheck" data-bs-toggle="modal"
                                data-bs-target="#behanceintegration">
                        @endif
                        @if (auth()->user()->notifikasi == 'True')
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
                                    <h5 class="modal-title" id="behanceintegrationLabel">Enable Notification ?</h5>
                                    <label for="behancecheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </label>

                                </div>
                                <div class="modal-body text-center">

                                    <form action="/settings/enable-notif" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="btn round btn-primary px-5 mx-5 text-center">Yes</button>
                                            <label for="behancecheck" class="btn btn-secondary round mx-5 px-5"
                                            data-bs-dismiss="modal">
                                            No
                                        </label>
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
                                    <h5 class="modal-title" id="UncheckPrivasiLabel">Disable Notification ?</h5>
                                    <label for="behancecheck" class="btn-close" onclick="" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </label>

                                </div>
                                <div class="modal-body text-center">

                                    <form action="/settings/disable-notif" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="btn round btn-primary px-5 mx-5 text-center">Yes</button>
                                        <label for="behancecheck" class="btn btn-secondary round mx-5 px-5"
                                            data-bs-dismiss="modal">
                                            No
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
