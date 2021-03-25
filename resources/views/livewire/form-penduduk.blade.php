<div>
    <form wire:submit.prevent="submit">
        <p class="text-sm bg-primary p-2 text-white">Informasi Pribadi</p>
        <div class="row">
            <div class="col-sm-4">
                <label>No KK</label>
                <input wire:model="no_kk" type="text" class="form-control @error('no_kk') is-invalid @enderror" placeholder="contoh 32013322839929" required>
                @error('no_kk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>NIK</label>
                <input wire:model="nik" type="text" class="form-control @error('nik') is-invalid @enderror" placeholder="contoh 320123421" required>
                @error('nik')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Nama Lengkap</label>
                <input wire:model="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" placeholder="contoh Budi Handayano" required>
                @error('nama_lengkap')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                <label>Tempat Lahir</label>
                <input wire:model="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="contoh Sukabumi" required>
                @error('tempat_lahir')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Tanggal Lahir</label>
                <input wire:model="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" placeholder="2021-01-01" required>
                @error('tanggal_lahir')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Jenis Kelamin</label>
                <select wire:model="jenis_kelamin" type="date" class="form-control @error('jenis_kelamin') is-invalid @enderror" placeholder="2021-01-01" required>
                    <option value="">-- pilih --</option>
                    <option value="LAKI-LAKI">LAKI - LAKI</option>
                    <option value="PREMPUAN">PEREMPUAN</option>
                </select>
                @error('jenis_kelamin')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                <label>Status Kawin</label>
                <select wire:model="status_kawin" type="date" class="form-control @error('status_kawin') is-invalid @enderror" required>
                    <option value="">-- pilih --</option>
                    <option>BELUM KAWIN</option>
                    <option>KAWIN</option>
                    <option>CERAI HIDUP</option>
                    <option>CERAI MATI</option>
                </select>
                @error('status_kawin')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Golongan Darah</label>
                <select wire:model="gol_darah" class="form-control @error('gol_darah') is-invalid @enderror" required>
                    <option value="">-- pilih --</option>
                    <option>A</option>
                    <option>B</option>
                    <option>AB</option>
                    <option>O</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>TIDAK TAHU</option>
                </select>
                @error('status_kawin')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Agama</label>
                <select wire:model="agama" type="date" class="form-control @error('agama') is-invalid @enderror" required>
                    <option value="">-- pilih --</option>
                    <option>ISLAM</option>
                    <option>KRISTEN</option>
                    <option>KATHOLIK</option>
                    <option>HINDU</option>
                    <option>BUDHA</option>
                    <option>KHONGHUCU</option>
                    <option>KEPERCAYAAN TERHADAP TUHAN YME / LAINNYA</option>
                </select>
                @error('agama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <p class="text-sm bg-primary p-2 text-white mt-3">Informasi Alamat & Domisili</p>
        <div class="row">
            <div class="col-sm-4">
                <label>Alamat</label>
                <input wire:model="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="Kp. Cikupa" required>
                @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>RT</label>
                <input wire:model="rt" type="number" class="form-control @error('rt') is-invalid @enderror" placeholder="01" required>
                @error('rt')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>RW</label>
                <input wire:model="rw" type="number" class="form-control @error('rw') is-invalid @enderror" placeholder="02" required>
                @error('rw')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
                <label>Desa</label>
                <input wire:model="desa" type="text" class="form-control @error('desa') is-invalid @enderror" placeholder="Cirenghas" required>
                @error('desa')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-2">
                <label>Kecamatan</label>
                <input wire:model="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" placeholder="Cirenghas" required>
                @error('kecamatan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Kabupaten</label>
                <input wire:model="kabupaten" type="text" class="form-control @error('kabupaten') is-invalid @enderror" placeholder="Sukabumi" required>
                @error('kabupaten')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Provinsi</label>
                <input wire:model="provinsi" type="text" class="form-control @error('provinsi') is-invalid @enderror" placeholder="Contoh : Jawa barat" required>
                @error('provinsi')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <p class="text-sm bg-primary p-2 text-white mt-3">Data Orang Tua</p>
        <div class="row">
            <div class="col-sm-4">
                <label>NIK Ayah</label>
                <input wire:model="nik_ayah" type="number" class="form-control @error('nik_ayah') is-invalid @enderror" placeholder="Cth. 32000221231" required>
                @error('nik_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Nama Ayah</label>
                <input wire:model="nama_ayah" type="text" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Cth. SMK" required>
                @error('nama_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                <label>NIK Ibu</label>
                <input wire:model="nik_ibu" type="number" class="form-control @error('nik_ibu') is-invalid @enderror" placeholder="Cth. 32000221231" required>
                @error('nik_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Nama Ibu</label>
                <input wire:model="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Cth. SMK" required>
                @error('nama_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <p class="text-sm bg-primary p-2 text-white mt-3">Informasi Status, Pekerjaan dan Pendidikan</p>
        <div class="row">
            <div class="col-sm-4">
                <label>Pekerjaan</label>
                <input wire:model="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="Cth. MAHASISWA" required>
                @error('pekerjaan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Pendidikan</label>
                <input wire:model="pendidikan" type="text" class="form-control @error('pendidikan') is-invalid @enderror" placeholder="Cth. SMK" required>
                @error('pendidikan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label>Status Kependudukan</label>
                <select wire:model="status" type="date" class="form-control @error('status_kawin') is-invalid @enderror" required>
                    <option value="">-- pilih --</option>
                    <option>HIDUP</option>
                    <option>PINDAH</option>
                    <option>MENINGGAL</option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary mt-4">Simpan Data</button>
    </form>
</div>
