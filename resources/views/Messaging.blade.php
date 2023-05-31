@extends('Layout.Home_Layout')

@section('konten')
    <section id="Pesan">
        <div class="container p-2">
            <div class="row">
                <div class="col round bg-white">
                    <div class="row">
                        <div class="col-md-4 border-end border-bottom p-3">
                            <div class="row p-2">
                                <div class="col">
                                    <h5 class="fw-bold">Messaging</h5>
                                </div>
                                <div class="col text-end"><i class="bi bi-gear"></i></div>
                            </div>
                        </div>
                        <div class="col border-bottom pt-3 ps-5">
                            <div class="row align-items-center">
                                @if (Request::is('messaging/admin'))
                                    <div class="col">
                                        <b>For Help</b>
                                        <p><i class="bi bi-record-circle-fill text-success"></i> Online</p>
                                    </div>
                                @endif
                                @if (Request::is('messaging/user*'))
                                    <div class="col">
                                        @foreach ($user as $users)
                                            @if ($users->id == $id)
                                                <b>{{ $users->firstname . ' ' . $users->lastname }}</b>
                                            @endif
                                        @endforeach
                                        <p><i class="bi bi-record-circle-fill text-success"></i> Online</p>
                                    </div>
                                @endif
                                <div class="col-md-4 text-secondary">
                                    <p class="fs-4"><i class="bi bi-three-dots mx-3"></i> <i
                                            class="bi bi-telephone mx-3"></i> <i class="bi bi-star mx-3"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 border-end p-3">
                            <div class="text-center mb-3">
                                <form action="/messaging/start" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" name="search" id="search" class="form-control"
                                            placeholder="Cari User" list="User">
                                        <datalist id="User">
                                            @foreach ($user as $users)
                                                @if ($users->role != 'Admin')
                                                    <option value="{{ $users->email }}">
                                                        {{ $users->firstname . ' ' . $users->lastname }}</option>
                                                @endif
                                            @endforeach
                                        </datalist>

                                        <button class="btn btn-primary" type="submit">Chat</button>
                                    </div>
                                </form>
                            </div>
                            <h6 class="fw-bold">Connection</h6>
                            <a href="/messaging/admin" class="text-decoration-none text-dark">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ asset('src/img/mail.png') }}" alt="" class="icon">
                                    </div>
                                    <div class="col">
                                        <b class="fw-bold">For Help</b>
                                        <p>Chat Admin System</p>
                                    </div>
                                </div>
                            </a>
                            @foreach ($koneksi as $connect)
                                @if ($connect->user_id_1 == auth()->user()->id)
                                    @foreach ($user as $users)
                                        @if ($users->id == $connect->user_id_2)
                                            <a href="/messaging/user/{{ $users->id }}"
                                                class="text-decoration-none text-dark">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="{{ asset('src/img/contoh.jpg') }}" alt=""
                                                            class="chat-icon">
                                                    </div>
                                                    <div class="col">
                                                        <b
                                                            class="fw-bold">{{ $users->firstname . ' ' . $users->lastname }}</b>
                                                        <p>Developer</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($connect->user_id_1 != auth()->user()->id)
                                    @foreach ($user as $users)
                                        @if ($users->id == $connect->user_id_1)
                                            <a href="/messaging/user/{{ $users->id }}"
                                                class="text-decoration-none text-dark">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="{{ asset('src/img/contoh.jpg') }}" alt=""
                                                            class="chat-icon">
                                                    </div>
                                                    <div class="col">
                                                        <b
                                                            class="fw-bold">{{ $users->firstname . ' ' . $users->lastname }}</b>
                                                        <p>Developer</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                        <div class="col">
                            @if (Request::is('messaging/admin'))
                                <div class="chat-box p-4 overflow-auto">
                                    @foreach ($pesan as $data_pesan)
                                        @if ($data_pesan->penerima_id == auth()->user()->id)
                                            <div class="row mb-2">
                                                <div class="col-md-1">
                                                    <img src="{{ asset('src/img/mail.png') }}" alt=""
                                                        width="40">
                                                </div>
                                                <div class="col">
                                                    <h6 class="fw-bold">For Help</h6>
                                                    <p class="text-sm">{{ $data_pesan->isi }}.</p>
                                                </div>
                                            </div>
                                        @endif
                                        @if (!$data_pesan->penerima_id)
                                            <div class="row">
                                                <div class="col text-end">
                                                    <h6 class="fw-bold">
                                                        {{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}
                                                    </h6>
                                                    <p class="text-sm">{{ $data_pesan->isi }}</p>
                                                </div>
                                                <div class="col-md-1">
                                                    <img src="{{ asset('src/img/contoh.jpg') }}" alt=""
                                                        class="chat-icon">
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="p-3 border-top">
                                    <form action="/admin/send" method="post">
                                        @csrf
                                        <textarea name="chat" id="chat" rows="4" class="form-control bg-abu border-none mb-3"
                                            placeholder="write a message ..."></textarea>
                                        <div class="row text-center">
                                            <div class="col-md-8 row">
                                                <div class="col round mx-2 border p-1 tombol">
                                                    <img src="{{ asset('src/img/photo.png') }}" alt=""
                                                        width="25"><i class="text-sm fst-normal"> Photo</i>
                                                </div>
                                                <div class="col round mx-2 border p-1 tombol">
                                                    <img src="{{ asset('src/img/video.png') }}" alt=""
                                                        width="25"><i class="text-sm fst-normal"> Video</i>
                                                </div>
                                                <div class="col round mx-2 border p-1 tombol">
                                                    <img src="{{ asset('src/img/emoji.png') }}" alt=""
                                                        width="25"><i class="text-sm fst-normal"> Emoticons</i>
                                                </div>
                                            </div>
                                            <div class="col text-end">
                                                <button type="submit" class="btn btn-primary px-5 round"><i
                                                        class="bi bi-send"></i><i
                                                        class="text-sm fst-normal">Send</i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif

                            @if (Request::is('messaging/user*'))
                                <div class="chat-box p-4 overflow-auto">
                                    @foreach ($pesan as $data_pesan)
                                        @if ($data_pesan->pengirim_id == $id)
                                            @foreach ($user as $users)
                                                @if ($users->id == $data_pesan->pengirim_id)
                                                    <div class="row mb-2">
                                                        <div class="col-md-1">
                                                            <img src="{{ asset('src/img/contoh.jpg') }}" alt=""
                                                                width="40" class="chat-icon">
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="fw-bold">
                                                                {{ $users->firstname . ' ' . $users->lastname }}</h6>
                                                            <p class="text-sm">{{ $data_pesan->isi }}</p>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @elseif ($data_pesan->pengirim_id == auth()->user()->id)
                                            <div class="row mb-2">
                                                <div class="col text-end">
                                                    <h6 class="fw-bold">
                                                        {{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}
                                                    </h6>
                                                    <p class="text-sm">{{ $data_pesan->isi }}</p>
                                                </div>
                                                <div class="col-md-1">
                                                    <img src="{{ asset('src/img/contoh.jpg') }}" alt=""
                                                        class="chat-icon">
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="p-3 border-top">
                                    <form action="/user/send/{{ $id }}" method="post">
                                        @csrf
                                        <textarea name="chat" id="chat" rows="4" class="form-control bg-abu border-none mb-3"
                                            placeholder="write a message ..."></textarea>
                                        <div class="row text-center">
                                            <div class="col-md-8 row">
                                                <div class="col round mx-2 border p-1 tombol">
                                                    <img src="{{ asset('src/img/photo.png') }}" alt=""
                                                        width="25"><i class="text-sm fst-normal"> Photo</i>
                                                </div>
                                                <div class="col round mx-2 border p-1 tombol">
                                                    <img src="{{ asset('src/img/video.png') }}" alt=""
                                                        width="25"><i class="text-sm fst-normal"> Video</i>
                                                </div>
                                                <div class="col round mx-2 border p-1 tombol">
                                                    <img src="{{ asset('src/img/emoji.png') }}" alt=""
                                                        width="25"><i class="text-sm fst-normal"> Emoticons</i>
                                                </div>
                                            </div>
                                            <div class="col text-end">
                                                <button type="submit" class="btn btn-primary px-5 round"><i
                                                        class="bi bi-send"></i><i
                                                        class="text-sm fst-normal">Send</i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif
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
