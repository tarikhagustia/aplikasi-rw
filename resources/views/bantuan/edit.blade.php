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
                    <h4>Form Data Bantuan</h4>
                </div>
                <div class="card-body table-responsive">
                    <livewire:form-bantuan :bantuan="$bantuan"></livewire:form-bantuan>
                </div>
            </div>
        </div>
    </section>
@endsection
