<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/styleform.css') }}"> 

        <title>Tambah Data</title>
    </head>
    <body>
        <div class="judul">
            <h2>Tambah Data</h2>
        </div>
        <div class="container">
            <div class="wrap-form">
                <a href="{{ route('siswa.index')}}"><button class="but-kembali">Kembali</button></a>
                <form method="POST" action="{{ route('siswa.store')}}">
                    @csrf
                    <label for="nis">Nis:</label>
                        <input type="number" name="nis" id="nis" required>
                        @error('nis')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror

                    <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" required>
                        @error('nama')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror

                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" required>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        @error('jenis_kelamin')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror

                    <label for="tmpt_lahir">Tempat Lahir:</label>
                        <input type="text" name="tmpt_lahir" id="tmpt_lahir" required>
                        @error('tmpt_lahir')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror

                    <label for="tgl_lahir">Tanggal Lahir:</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" required>
                        @error('tgl_lahir')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror

                    <label for="alamat">Alamat:</label>
                        <textarea name="alamat" id="alamat"  cols="30" rows="5"required></textarea>
                        @error('alamat')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror

                    <label for="no_tlp">No Telepon:</label>
                        <input type="number" name="no_tlp" id="no_tlp" required>
                        @error('no_tlp')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror

                    <button type="submit" class="but-simpan" onclick="return confirm ('Data ini akan disimpan!, Anda yakin  untuk menambahkan data ?')">Tambah</button>
                </form>
            </div>
        </div>
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
    </body>
</html>