@extends('layout.index')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pegawai</h3>
                <p class="text-subtitle text-muted">Multiple form layout you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Ini Judul</h4>
        </div>
        <div class="card-body">
            <section class="section">
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <!-- table bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        {{-- <tbody>
                                            @foreach ($users as $u)
                                                <tr>
                                                    <td>{{ $m->id }}</td>
                                                    <td>{{ $m->username }}</td>
                                                    <td>{{ $m->password }}</td>
                                                    <td>{{ $m->role }}</td>
                                                    <td>
                                                        <a href="/admin/menu/edit" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                                        <form action="/admin/menu/{{ $m->id }}" class="d-inline" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn icon btn-danger"><i class="bi bi-x"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
