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
                    </div>
                </div>

                <!-- Basic Tables start -->
                <section class="section">
                    <div class="card">
                        <div class="alert-primary p-2 rounded-top-4" role="alert">
                            <div class="text-center">
                                Data Users
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="/users/addusers" class="btn btn-success float-end ms-2 py-1"><i
                                        class="bi bi-person-fill-add"></i> Tambah</a>

                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $no => $u)
                                            <tr>
                                                <td>{{ ++$no }}</td>
                                                <td>{{ $u->nama }}</td>
                                                <td>
                                                    <span class="badge bg-success">Active</span>
                                                </td>
                                                <td><a href="/users/{{ $u->id }}/edit" class="btn btn-primary"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <button onclick="confirmDelete('{{ route('users.destroy', $u->id) }}')"
                                                        class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
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

@push('scripts')
    
@endpush
