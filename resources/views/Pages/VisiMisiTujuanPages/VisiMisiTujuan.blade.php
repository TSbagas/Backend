@extends('Layouts.Sidebar')

@section('Content')
    <div id="main" class="layout-navbar navbar-fixed">
        @include('Layouts.HeaderNav')

        <div id="main-content">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Data Profil</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Dosen
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Tables start -->
                <section class="section">
                    <div class="card">
                    <div class="alert-primary p-2 rounded-top-4" role="alert">
                            <div class="text-center">
                            Data Visi Misi Dan Tujuan
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="/visi-misi-dan-tujuan/create" class="btn btn-success float-end ms-2 py-1"><i
                                        class="bi bi-person-fill-add"></i> Tambah</a>
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Terakhir di Update</th>
                                            <th>Tanggal Upload</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($visi as $vmt)
                                        <tr>
                                            <td>{{$vmt->judul}}</td>
                                            <td>{{$vmt->updated_at}}</td>
                                            <td>{{$vmt->created_at}}</td>    
                                            <td><a href="{{ route('visi-misi-dan-tujuan.edit', $vmt->id) }}" class="btn btn-primary"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <button onclick="confirmDelete('{{ route('visi-misi-dan-tujuan.destroy', $vmt->id) }}')" class="btn btn-danger"><i
                                                        class="bi bi-trash3-fill"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Tables end -->
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
