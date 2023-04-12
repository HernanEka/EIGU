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
                <a href="/experience" class="btn px-4 round">Experience</a>
                <a href="/portofolio" class="btn px-4 btn-primary round">Portofolio</a>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card bg-abu border-0 button-tambah">
                        <div class="card-body">
                            <button class="btn btn-outline-primary w-100 h-100 text-center" data-bs-toggle="modal"
                                data-bs-target="#Portofolio">
                                <h1 class="display-4">+</h1>
                            </button>
                        </div>
                    </div>
                </div>
                @foreach ($portofolio as $foto)
                    <div class="col">
                        <div class="card bg-abu border-0 h-100 pt-3">
                            <img src="{{ asset('upload/portofolio/'. $foto->foto) }}"
                                class="card-img" style="object-fit: cover" alt="...">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="Portofolio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="PortofolioLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title display-5 fw-bold" id="PortofolioLabel">Add Portofolio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/portofolio" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <h4>Your recent gallery</h4>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label w-100">
                                    Image
                                    <div id="button" class="btn btn-outline-secondary w-100" style="height: 300">
                                        <h1 class="display-3">+</h1>
                                    </div>
                                    <img src="" alt="" id="preview" class="img-fluid">
                                </label>
                                <input type="file" name="foto" id="foto" hidden>
                            </div>
                            <div class="mb-2">
                                <label for="deskripsi" class="form-label">Description</label>
                                <textarea name="deskripsi" id="deskirpsi" class="form-control"></textarea>
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
    </section>

    <script>
        foto.onchange = evt => {
            const [file] = foto.files
            if (file) {
                preview.src = URL.createObjectURL(file);
                button.style.display = 'none';
                // ubah.style.display = 'block';
            }
        }
    </script>
@endsection
