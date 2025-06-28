@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Tambah Mahasiswa</h4>
                <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">ISBN</label>
                        <input type="text" class="form-control" name="isbn" value="{{ @old('isbn') }}" />
                        @error('isbn')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="judul" value="{{ @old('judul') }}" />
                        @error('judul')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penulis</label>
                        <input type="text" class="form-control" name="penulis" value="{{ @old('penulis') }}" />
                        @error('penulis')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input type="text" class="form-control" name="tahun" value="{{ @old('tahun') }}" />
                        @error('tahun')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="{{ @old('penerbit') }}" />
                        @error('penerbit')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cover</label>
                        <input type="file" class="form-control" name="cover" value="{{ @old('cover') }}" />
                        @error('cover')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn
primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
