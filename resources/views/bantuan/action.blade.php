<div class="dropdown d-inline">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pilih Aksi
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item has-icon" href="{{ route('bantuan.show', $id) }}"><i class="far fa-eye"></i> Lihat Detail</a>
        <a class="dropdown-item has-icon" href="#" onclick="return confirm() ? document.getElementById('form-{{$id}}').submit() : null"><i class="fas fa-trash"></i> Hapus</a>
        <a class="dropdown-item has-icon" href="{{ route('bantuan.edit', $id) }}"><i class="fas fa-pencil-alt"></i> Ubah</a>
    </div>
    <form method="post" action="{{ route('bantuan.destroy', $id) }}" id="form-{{$id}}">
        @method('DELETE')
        @csrf
    </form>
</div>
