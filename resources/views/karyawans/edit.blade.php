<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Karyawan</title>

    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: rgb(42, 43, 43)">
    <div class="container mt-5">
        <div class="card border-0">
            <div class="card-body">

                <form action="{{ route('karyawans.update', $karyawan->id) }}"
                      method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text"
                               class="form-control @error('nama') is-invalid @enderror"
                               name="nama"
                               value="{{ old('nama', $karyawan->nama) }}">

                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Umur</label>
                        <input type="text"
                               class="form-control @error('umur') is-invalid @enderror"
                               name="umur"
                               value="{{ old('umur', $karyawan->umur) }}">

                        @error('umur')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Alamat</label>
                        <input type="text"
                               class="form-control @error('alamat') is-invalid @enderror"
                               name="alamat"
                               value="{{ old('alamat', $karyawan->alamat) }}">

                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">No. Telepon</label>
                        <input type="text"
                               class="form-control @error('telepon') is-invalid @enderror"
                               name="telepon"
                               value="{{ old('telepon', $karyawan->telepon) }}">

                        @error('telepon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">
                        Update
                    </button>
                    <button type="reset" class="btn btn-md btn-danger">
                        Cancel
                    </button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>

