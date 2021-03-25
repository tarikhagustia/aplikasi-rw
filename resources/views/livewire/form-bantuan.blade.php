<div>
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label>Nama Bantuan</label>
            <input wire:model="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Cth. Bansos Covid" required>
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input wire:model="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Cth. Bantuan dari pemerintah" required>
            @error('keterangan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Asal Dana</label>
            <select wire:model="asal_dana" class="form-control @error('asal_dana') is-invalid @enderror">
                <option value="">Pilih</option>
                <option>Pusat</option>
                <option>Provinsi</option>
                <option>Kab/Kota</option>
                <option>Dana Desa</option>
                <option>Lain - Lain (Hibah)</option>
            </select>
            @error('asal_dana')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input wire:model="tanggal_mulai" type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" placeholder="Cth. Bantuan dari pemerintah" required>
                        @error('tanggal_mulai')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input wire:model="tanggal_selesai" type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" placeholder="Cth. Bantuan dari pemerintah" required>
                        @error('tanggal_selesai')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        <div class="form-group">
            <label>Status</label>
            <select wire:model="status" class="form-control @error('status') is-invalid @enderror">
                <option value="">Pilih</option>
                <option>Aktif</option>
                <option>Tidak Aktif</option>
            </select>
            @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
