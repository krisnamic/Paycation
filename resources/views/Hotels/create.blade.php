<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Hotel Form - Laravel 8 Datatable CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #footer-transition {
            background-color: #343A40;
        }
        #beach {
            z-index: 998;
            position: relative;
        }

        #transition {
            z-index: 999;
            position: absolute;
        }
    </style>
</head>

<body>
    @include('Template/userNavbar')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Hotel</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('hotels.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <!-- <div class="form-group">
                            <strong>ID :</strong>
                            <input type="text" name="id" class="form-control" placeholder="id">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div> -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Hotel:</strong>
                        <input type="text" name="namaHotel" class="form-control" placeholder="Nama Hotel">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Deskripsi Hotel:</strong>
                        <input type="text" name="deskripsiHotel" class="form-control" placeholder="Deskripsi Hotel">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga Kamar:</strong>
                        <input type="text" name="hargaKamar" class="form-control" placeholder="Harga Kamar">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 1:</strong>
                        <input type="file" name="gambarHotel1" class="form-control" placeholder="Gambar Hotel 1">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 2:</strong>
                        <input type="file" name="gambarHotel2" class="form-control" placeholder="Gambar Hotel 2">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 3:</strong>
                        <input type="file" name="gambarHotel3" class="form-control" placeholder="Gambar Hotel 3">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 4:</strong>
                        <input type="file" name="gambarHotel4" class="form-control" placeholder="Gambar Hotel 4">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 5:</strong>
                        <input type="file" name="gambarHotel5" class="form-control" placeholder="Gambar Hotel 5">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Stok Kamar:</strong>
                        <input type="text" name="stokKamar" class="form-control" placeholder="Stok Kamar">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bintang:</strong>
                        <input type="text" name="bintang" class="form-control" placeholder="Bintang">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Lokasi:</strong>
                        <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
    @include('Template/footer')
</body>


</html>