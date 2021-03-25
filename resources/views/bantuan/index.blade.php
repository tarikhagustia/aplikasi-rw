@extends('layouts.admin-master')

@section('title')
    Data Bantuan
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Bantuan</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Bantuan</h4>
                </div>
                <div class="card-body table-responsive">
                    {{$dataTable->table()}}
                </div>
                <div class="card-footer bg-whitesmoke">
                    This is card footer
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush
