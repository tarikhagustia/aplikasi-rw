@extends('layouts.admin-master')

@section('title')
    Data Bantuan
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $bantuan->nama }}</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Bio Data Penduduk</h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('bantuan.tambah_peserta', $bantuan) }}" class="btn btn-primary mb-3">Tambah Peserta</a>
                    <br>
                    <strong>Rincian Program</strong>
                    <table class="table table-bordered table-striped table-hover tabel-rincian">
                        <tr>
                            <td width="20%">Nama Program</td>
                            <td width="5%">:</td>
                            <td>{{ $bantuan->nama }}</td>
                        </tr>
                        <tr>
                            <td width="20%">Tanggal Berlaku</td>
                            <td width="5%">:</td>
                            <td>{{ $bantuan->tanggal_mulai->format('d-m-Y') }} s/d {{ $bantuan->tanggal_selesai->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <td width="20%">Keterangan</td>
                            <td width="5%">:</td>
                            <td>{{ $bantuan->keterangan }}</td>
                        </tr>
                        <tr>
                            <td width="20%">Jumlah Peserta</td>
                            <td width="5%">:</td>
                            <td>{{ $bantuan->items()->count() }} Peserta</td>
                        </tr>
                    </table>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>AKSI</th>
                                <th>NIK</th>
                                <th>NO. KK</th>
                                <th>NO. PESERTA</th>
                                <th>NAMA LENGKAP</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($bantuan->items as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a class="btn btn-danger" href="{{ route('bantuan.hapus_data', $row->id) }}">Hapus</a></td>
                                    <td>{{ $row->penduduk->nik }}</td>
                                    <td>{{ $row->penduduk->no_kk }}</td>
                                    <td>{{ $row->no_peserta }}</td>
                                    <td>{{ $row->penduduk->nama_lengkap }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada peserta</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
