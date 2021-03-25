<div>
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label>Pilih Warga</label>
            <select wire:model="penduduk" class="form-control @error('penduduk') is-invalid @enderror">
                <option value="">Pilih</option>
                @foreach($warga as $row)
                    <option value="{{ $row->id }}">{{ $row->nama_lengkap }} ({{ $row->nik }})</option>
                @endforeach
            </select>
            @error('penduduk')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Nomor Peserta</label>
            <input type="text" wire:model="no_peserta" class="form-control @error('no_peserta') is-invalid @enderror">
            @error('no_peserta')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" wire:model="keterangan" class="form-control @error('keterangan') is-invalid @enderror">
            @error('keterangan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
