@extends('template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Halaman Buku</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ISBN</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Cover</th>
                            <th>
                                Proses
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->isbn }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->penulis }}</td>
                                <td>{{ $data->penerbit }}</td>
                                <td>{{ $data->tahun }}</td>
                                <td>
                                    <img src="{{ asset('cover/' . $data->cover) }}" class="img-fluid rounded"
                                        style="width:200px;" />
                                </td>
                                <td>
                                    <form action="{{ route('buku.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn 
btn-danger">Hapus</button>
                                        <a href="{{ route('buku.edit', $data->id) }}" class="btn btn-info">Ubah</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('buku.create') }}" class="btn btn
primary">Tambah</a>
            </div>
        </div>
    </div>
@endsection
