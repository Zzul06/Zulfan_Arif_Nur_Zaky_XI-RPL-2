<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset ('css/style.css') }}"> 

        <title>Data Siswa</title>
    </head>
    <body>
        <div class="judul">
            <h2>Data Siswa</h2>
        </div>
        <div class="container">
        @include('sweetalert::alert')
            <div class="wrap">
                <a href="{{ route('siswa.create')}}"><button class="but-tambahdata">Tambah Data</button></a>
                <table>
                    <thead>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Ubah</th>
                        <th>Hapus</th>
                    </thead>
                    @foreach ($siswa as $data)
                    <tr>
                        <td>{{ $data->nis }}<br></td>
                        <td>{{ $data->nama }}<br></td>
                        <td>{{ $data->jenis_kelamin }}<br></td>
                        <td>{{ $data->tmpt_lahir }}<br></td>
                        <td>{{ $data->tgl_lahir }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->no_tlp }}</td>
                        <td>
                            <a href="{{ route('siswa.edit',$data->nis)}}"><button class="but-edit">Edit</button></a>
                        </td>
                        <td>
                            <form action="{{ route('siswa.destroy', $data->nis)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="but-delete" type="submit" onclick="return confirm ('Data ini akan di hapus!!, Anda yakin untuk menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach 
                </table>
            </div>   
        </div>
    </body>
</html>