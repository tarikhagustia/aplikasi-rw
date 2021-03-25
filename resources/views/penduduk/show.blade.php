@extends('layouts.admin-master')

@section('title')
    {{ $penduduk->nama_lengkap }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profil {{ $penduduk->nama_lengkap }}</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Bio Data Penduduk</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                        <tr>
                            <td colspan="3" class="bg-primary text-white">Informasi Pribadi</td>
                        </tr>
                        <tr>
                            <td width="200px">Status Penduduk</td>
                            <td width="5%">:</td>
                            <td class="font-weight-bold">{{ $penduduk->status }}</td>
                        </tr>
                        <tr>
                            <td width="200px">No. KK</td>
                            <td>:</td>
                            <td >{{ $penduduk->no_kk }}</td>
                        </tr>
                        <tr>
                            <td width="200px">No. NIK</td>
                            <td>:</td>
                            <td >{{ $penduduk->nik }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Nama Lengkap</td>
                            <td>:</td>
                            <td >{{ $penduduk->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td >{{ $penduduk->tempat_lahir }}, {{ $penduduk->tanggal_lahir->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Jenis Kelamin</td>
                            <td>:</td>
                            <td >{{ $penduduk->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Agama</td>
                            <td>:</td>
                            <td >{{ $penduduk->agama }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Status Kawin</td>
                            <td>:</td>
                            <td >{{ $penduduk->status_kawin }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Golongan Darah</td>
                            <td>:</td>
                            <td >{{ $penduduk->status_kawin }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="bg-primary text-white">Informasi Alamat & Domisili</td>
                        </tr>
                        <tr>
                            <td width="200px">Alamat</td>
                            <td>:</td>
                            <td >{{ $penduduk->alamat }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Alamat</td>
                            <td>:</td>
                            <td >{{ $penduduk->alamat }}</td>
                        </tr>
                        <tr>
                            <td width="200px">RT / RW</td>
                            <td>:</td>
                            <td >{{ $penduduk->rt }} / {{ $penduduk->rw }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Desa</td>
                            <td>:</td>
                            <td >{{ $penduduk->desa }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Kecamatan</td>
                            <td>:</td>
                            <td >{{ $penduduk->kecamatan }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Kabupaten</td>
                            <td>:</td>
                            <td >{{ $penduduk->kabupaten }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Provinsi</td>
                            <td>:</td>
                            <td >{{ $penduduk->provinsi }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="bg-primary text-white">Data Orang Tua</td>
                        </tr>
                        <tr>
                            <td width="200px">NIK Ayah</td>
                            <td>:</td>
                            <td >{{ $penduduk->nik_ayah }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Nama Ayah</td>
                            <td>:</td>
                            <td >{{ $penduduk->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Nik Ibu</td>
                            <td>:</td>
                            <td >{{ $penduduk->nik_ibu }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Nama Ibu</td>
                            <td>:</td>
                            <td >{{ $penduduk->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="bg-primary text-white">Informasi Pekerjaan dan Pendidikan</td>
                        </tr>
                        <tr>
                            <td width="200px">Pekerjaan</td>
                            <td>:</td>
                            <td >{{ $penduduk->pekerjaan }}</td>
                        </tr>
                        <tr>
                            <td width="200px">Pendidikan</td>
                            <td>:</td>
                            <td >{{ $penduduk->pendidikan }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
