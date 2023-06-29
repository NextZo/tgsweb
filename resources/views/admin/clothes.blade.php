@extends('admin/template')
@section('dashboard')
    <div>
        <h1 class="h3 mb-3 text-gray-800">Daftar Pakaian</h1>
        <div class="table-responsive mb-3">
            <table id="usersTable" class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clothes as $cloth)
                        <tr>
                            <td>{{ $cloth->id }}</td>
                            <td>{{ $cloth->nama }}</td>
                            <td>Rp{{ number_format($cloth->harga, 0, ',', '.') }}</td>
                            <td>{{ $cloth->kategori }}</td>
                            <td>
                                <a href="/dashboard/clothes/{{ $cloth->id }}">Update</a>
                                <a href="/dashboard/clothes/delete/{{ $cloth->id }}" class="text-danger"
                                    onclick="return confirm('Mau dihapus?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
