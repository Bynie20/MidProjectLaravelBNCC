<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Karyawan</title>

    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: rgb(42, 43, 43)">
    <div class="container card mt-5">
        <div class="card-body">

            <form action="{{ route('karyawans.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="font-weight-bold">Nama</label>
                    <input type="text" class="form-control"
                    name="nama" value="{{ old('nama') }}">

                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="font-weight-bold">Umur</label>
                    <input type="text" class="form-control"
                    name="umur" value="{{ old('umur') }}">

                    @error('umur')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="font-weight-bold">Alamat</label>
                    <input type="text" class="form-control"
                    name="alamat" value="{{ old('address') }}">

                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">No. Telepon</label>
                    <input type="text" class="form-control"
                    name="telepon" value="{{ old('telepon') }}">

                    @error('telepon')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-md btn-primary">
                    Save
                </button>
            </form>
        </div>
    </div>
</body>
</html>
