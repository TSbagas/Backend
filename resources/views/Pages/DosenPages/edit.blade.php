@extends('Layouts.Sidebar')

@section('Content')
<div id="main" class="layout-navbar navbar-fixed">
    @include('Layouts.HeaderNav')

    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <form action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="alert-primary p-2 rounded-top-4" role="alert">
                            <div class="text-center">
                                Create Dosen Form
                            </div>
                        </div>
                        <section id="multiple-column-form">
                            <div class="row match-height">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="first-name-column">Nama Dosen</label>
                                                                <input type="text" id="first-name-column" class="form-control" placeholder="Nama Dosen" name="nama_dosen" value="{{$dosen->nama_dosen}}">
                                                                @error('nama_dosen')
                                                                <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="tamatan_terakhir">Tamatan Terakhir</label>
                                                                <input type="text" id="tamatan_terakhir" class="form-control" placeholder="Tamatan Terakhir" name="tamatan_terakhir" value="{{$dosen->tamatan_terakhir}}">
                                                                @error('tamatan_terakhir')
                                                                <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="NIDN">Nomor Induk Dosen Nasional (NIDN) </label>
                                                                <input type="text" id="NIDN" class="form-control" placeholder="NIDN" name="NIDN" value="{{$dosen->nidn}}">
                                                                @error('NIDN')
                                                                <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="jurusan">Jurusan / Prodi</label>
                                                                <input type="text" id="jurusan" class="form-control" name="jurusan" placeholder="Jurusan" value="{{$dosen->jurusan}}">
                                                                @error('jurusan')
                                                                <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="foto_dosen">Ganti Foto
                                                                </label>
                                                                <div class="card">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <!-- File uploader with image preview -->
                                                                            <input type="file" class="image-preview-filepond" id="foto_dosen" name="dosen_foto">
                                                                            @error('dosen_foto')
                                                                            <p class="text-danger">{{ $message }}</p>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group" style="overflow: hidden;">
                                                                <label for="foto_dosen">Foto Dosen
                                                                </label>
                                                                <div class="card">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <!-- File uploader with image preview -->
                                                                            <img src="/images/{{$dosen->gambar}}" alt="" srcset="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="col-12 col-md-6">

                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2023 &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>
                    Crafted with
                    <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                    by <a href="https://saugi.me">Saugi</a>
                </p>
            </div>
        </div>
    </footer>
</div>

@endsection