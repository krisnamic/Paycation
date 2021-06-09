<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Hotel Form - Laravel 8 Datatable CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    @include('Template/userNavbar')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Hotel</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('hotels.index') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('hotels.update',$id, $hotel) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Hotel:</strong>
                        <input type="text" name="namaHotel" value="{{$hotel[0]->namaHotel}}" class="form-control" placeholder="Nama Hotel">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Deskripsi Hotel:</strong>
                        <input type="text" name="deskripsiHotel" value="{{$hotel[0]->deskripsiHotel}}" class="form-control" placeholder="Deskripsi Hotel">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga Kamar:</strong>
                        <input type="text" name="hargaKamar" value="{{$hotel[0]->hargaKamar}}" class="form-control" placeholder="Harga Kamar">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 1:</strong>
                        <input type="file" name="gambarHotel1" class="form-control" placeholder="Gambar Hotel 1">
                        <input type="hidden" name="hotelPicture1" value="{{$hotel[0]->gambarHotel1}}">
                        <img src="{{ asset('img/hotel/' . $hotel[0]->gambarHotel1) }}" alt=".." width="150px" height="150px">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 2:</strong>
                        <input type="file" name="gambarHotel2" class="form-control" placeholder="Gambar Hotel 2">
                        <input type="hidden" name="hotelPicture2" value="{{$hotel[0]->gambarHotel2}}">
                        <img src="{{ asset('img/hotel/' . $hotel[0]->gambarHotel2) }}" alt=".." width="150px" height="150px">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 3:</strong>
                        <input type="file" name="gambarHotel3" class="form-control" placeholder="Gambar Hotel 3">
                        <input type="hidden" name="hotelPicture3" value="{{$hotel[0]->gambarHotel3}}">
                        <img src="{{ asset('img/hotel/' . $hotel[0]->gambarHotel3) }}" alt=".." width="150px" height="150px">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 4:</strong>
                        <input type="file" name="gambarHotel4" class="form-control" placeholder="Gambar Hotel 4">
                        <input type="hidden" name="hotelPicture4" value="{{$hotel[0]->gambarHotel4}}">
                        <img src="{{ asset('img/hotel/' . $hotel[0]->gambarHotel4) }}" alt=".." width="150px" height="150px">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar Hotel 5:</strong>
                        <input type="file" name="gambarHotel5" class="form-control" placeholder="Gambar Hotel 5">
                        <input type="hidden" name="hotelPicture5" value="{{$hotel[0]->gambarHotel5}}">
                        <img src="{{ asset('img/hotel/' . $hotel[0]->gambarHotel5) }}" alt=".." width="150px" height="150px">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Stok Kamar:</strong>
                        <input type="text" name="stokKamar" value="{{$hotel[0]->stokKamar}}" class="form-control" placeholder="Stok Kamar">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bintang:</strong>
                        <input type="text" name="bintang" value="{{$hotel[0]->bintang}}" class="form-control" placeholder="Bintang">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Lokasi:</strong>
                        <input type="text" name="lokasi" value="{{$hotel[0]->lokasi}}" class="form-control" placeholder="Lokasi">
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