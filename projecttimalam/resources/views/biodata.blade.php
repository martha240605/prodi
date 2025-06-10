<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Halaman Formulir Biodata</h2>
    <form action="/biodata" method="POST">
        @csrf
        Nama : <br>
        <input type="text" name="nama" id="" value="{{old('nama')}}">
        @error ('nama')
            <br><label style="color: red">{{$message}}</label>
        @enderror
        <br>
        Jenis Kelamin : <br>
        <select name="gender" id="">
            <option value="">--Pilih</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        @error('gender')
            <br><label style="color: red">{{$message}}</label>
        @enderror
        <br>
        Email : <br>
        <input type="text" name="email" id="" value="{{old('email')}}">
        @error('email')
            <br><label style="color: red">{{$message}}</label>
        @enderror
        <br>
        Nomor Ponsel : <br>
        <input type="text" name="ponsel" id="" value="{{old('ponsel')}}">
        @error('ponsel')
            <br><label style="color: red">{{$message}}</label>
        @enderror
        <br>
        <button type="submit">Kirim</button>
    </form>
    <a href="/mahasiswa">Mahasiswa</a>
</body>
</html>
