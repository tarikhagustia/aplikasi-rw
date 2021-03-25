@extends('layouts.admin-master')

@section('title')
    Kependudukan
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kependudukan</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Form Data Penduduk</h4>
                </div>
                <div class="card-body table-responsive">
                    <livewire:form-penduduk></livewire:form-penduduk>
                </div>
            </div>
        </div>
    </section>
@endsection
