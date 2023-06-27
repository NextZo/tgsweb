@extends('admin/template')
@section('dashboard')
    <div>
        <h1 class="h3 mb-3 text-gray-800">Daftar Pengguna</h1>
        <div class="table-responsive">
            <table id="usersTable" class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id++ }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a href="/dashboard/users/{{ $user->username }}">Update</a>
                                <a href="/dashboard/users/delete/{{ $user->username }}" class="text-danger"
                                    onclick="return confirm('Mau dihapus?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
