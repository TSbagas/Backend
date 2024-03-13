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
                        <form action="{{ route('sejarah.create') }}" method="POST">
                            @csrf
                            <div class="alert-primary p-0 rounded-top-4" role="alert">
                                <div class="text-center">
                                    Create Sejarah Form
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Judul
                                </h4>
                                <input type="text" class="form-control" placeholder="Masukkan Judul" name="judul">
                                @error('judul')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Content</h5>
                                <div id="editor">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p><br></p>
                                </div>
                                @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-12 d-flex justify-content-end mt-3">
                                    <input type="hidden" name="content" id="quill-content">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <a href="{{ URL::previous() }}" class="btn btn-light-secondary me-1 mb-1">Back</a>
                                </div>
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
