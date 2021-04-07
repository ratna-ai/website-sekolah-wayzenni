@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Siswa</h2>
            <a href="/siswa/create" class="btn btn-primary my-3">+ Tambah Data</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $p)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->nis }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->gender }}</td>
                        <td>{{ $p->tgl_lahir }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->jurusan }}</td>
                        <td>
                            <a href="{{ $p->id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="{{ $p->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection