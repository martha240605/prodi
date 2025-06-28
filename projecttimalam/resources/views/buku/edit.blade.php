@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Ubah Mahasiswa</h4>
                <form action="{{ route('buku.update', $buku->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">ISBN</label>
                        <input type="text" class="form-control" name="isbn" value="{{ $buku->isbn }}" />
                        @error('isbn')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}" />
                        @error('judul')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penulis</label>
                        <input type="text" class="form-control" name="penulis" value="{{ $buku->penulis }}" />
                        @error('penulis')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input type="text" class="form-control" name="tahun" value="{{ $buku->tahun }}" />
                        @error('tahun')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}" />
                        @error('penerbit')
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
