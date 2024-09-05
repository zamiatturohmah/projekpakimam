@extends('template')
@section('content')

    <h3>Data Pengguna</h3>
    @if (Session::get('pesan'))
        {{ Session::get('pesan') }}
    @endif <br>

    <div class="row">
        <div class="col-md-6">
            <a href="/user/create" class="btn btn-primary">Tambah Data</a><br>
        </div>
        <div class="col-md-6">
            <form action="/user" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="search" name="cari" id="" class="form-control" placeholder="Search">
                    <button class="btn btn-success" type="submit">CARI</button>
                </div>
            </form>
        </div>
    </div>
    Total data pengguna: {{ $total_user }}
    <br>
    <br>

    <table class="table">
        <tr class="table-dark">
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            {{-- <th>LEVEL</th>
            <th>AKSI</th> --}}
            <th>FOTO</th>
        </tr>
        @foreach ($user as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            {{-- <td>{{ $item->level->nama_level}}</td> --}}
            <td><img src="{{ asset('storage/foto/.$item->foto') }}" alt="" style="width: 50px"></td>
            <td>
                <a href="user/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                <a href="user/edit/{{ $item->id }}" class="btn btn-info">EDIT</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
@endsection
