<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Karyawan</title>

    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet"
    href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: rgb(42, 43, 43)">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($karyawans as $karyawan)
                        <tr>
                            <td>{{ $karyawan->nama }}</td>
                            <td>{{ $karyawan->umur }}</td>
                            <td>{{ $karyawan->alamat }}</td>
                            <td>{{ $karyawan->telepon }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('karyawans.edit', $karyawan->id) }}"
                                    class="btn btn-sm btn-warning mr-2">Edit</a>
                                

                                    <form action="{{ route('karyawans.destroy', $karyawan->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>

                <a href="{{ route('karyawans.create') }}"
                   class="btn btn-success">
                    Tambah Karyawan
                </a>
                {{  $karyawans->links() }}
            </div>
        </div>
    </div>
</body>
</html>
