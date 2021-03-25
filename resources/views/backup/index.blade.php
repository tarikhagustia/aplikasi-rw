@extends('layouts.admin-master')

@section('title')
   Backup dan Restore
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Backup dan Restore</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Backup</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="alert alert-info">
                                Download data backup aplikasi
                            </div>
                            <form method="post" action="{{ route('backup.download') }}">
                                @csrf
                                <button class="btn btn-primary">Download Data</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Restore data</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-danger">
                               Restore data akan menghapus data yang ada
                            </div>
                            <form method="post" action="{{ route('backup.restore') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="db">
                                <br>
                                <button class="btn btn-danger mt-3">Restore Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
]
