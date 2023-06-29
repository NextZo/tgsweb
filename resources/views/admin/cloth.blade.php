@extends('admin/template')
@section('dashboard')
    <div>
        <h1 class="h3 mb-3 text-gray-800">Update Pakaian ({{ $cloth->nama }})</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $cloth->nama }}">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" min="0" name="harga"
                    value="{{ $cloth->harga }}">
            </div>
            <div class="form-group">
                <label for="bahan">Bahan</label>
                <input type="text" class="form-control" id="bahan" name="bahan" value="{{ $cloth->bahan }}">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $cloth->kategori }}">
            </div>

            <div>
                <label for="s">
                    <input type="checkbox" id="s" name="s" {{ $cloth->s ? 'checked' : '' }}>
                    S
                </label>
                <label for="m">
                    <input type="checkbox" id="m" name="m" {{ $cloth->m ? 'checked' : '' }}>
                    M
                </label>
                <label for="l">
                    <input type="checkbox" id="l" name="l" {{ $cloth->l ? 'checked' : '' }}>
                    L
                </label>
                <label for="xl">
                    <input type="checkbox" id="XL" name="xl" {{ $cloth->xl ? 'checked' : '' }}>
                    XL
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
