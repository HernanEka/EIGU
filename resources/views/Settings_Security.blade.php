@extends('Layout.Home_Layout')

@section('konten')
    <section id="Settings">
        <div class="container p-5 bg-white my-5 rounded">
            <h1 class="fw-bold">Settings</h1>
            <p>Supercharge your workflow and connect the tool you use everyday</p>
            <div class=" mb-5 round" style="background-color: #bbbbbb">
                <a href="/settings/integration" class="btn pe-5 ">All Integration</a>
                <a href="/settings/privacy" class="btn px-5 ">Privacy</a>
                <a href="/settings/security" class="btn px-5 btn-primary round">Security</a>
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
                    <i class="bi bi-caret-right"></i>
                </div>
            </div>
            <div class="row border-bottom p-4">
                <div class="col">
                    Phone Number
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right"></i>
                </div>
            </div>
            <div class="row border-bottom p-4">
                <div class="col">
                    Change Password
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right"></i>
                </div>
            </div>
            <div class="row border-bottom p-4">
                <div class="col">
                    Where you're logged in
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right"></i>
                </div>
            </div>
            <div class="row border-bottom p-4">
                <div class="col">
                    Devices that remember your passwords
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right"></i>
                </div>
            </div>
            <div class="row border-bottom p-4">
                <div class="col">
                    Two-Step Verification
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right"></i>
                </div>
            </div>
            <div class="row border-bottom p-4">
                <div class="col">
                    Cookies
                </div>
                <div class="col-md-1">
                    <i class="bi bi-caret-right"></i>
                </div>
            </div>
        </div>
    </section>
@endsection
