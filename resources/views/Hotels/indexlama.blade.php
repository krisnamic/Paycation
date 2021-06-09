<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel 8 DataTables CRUD Tutorial From Scratch - Tutsmake.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 8 CRUD using DataTables Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('hotels.create') }}"> Create Hotel</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card-body">
            <table class="table table-bordered" id="datatable-crud">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>namaHotel</th>
                        <th>deskripsiHotel</th>
                        <th>hargaKamar</th>
                        <th>gambarHotel1</th>
                        <th>gambarHotel2</th>
                        <th>gambarHotel3</th>
                        <th>gambarHotel4</th>
                        <th>gambarHotel5</th>
                        <th>stokKamar</th>
                        <th>bintang</th>
                        <th>lokasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#datatable-crud').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('hotels') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'namaHotel',
                    name: 'namaHotel'
                },
                {
                    data: 'deskripsiHotel',
                    name: 'deskripsiHotel'
                },
                {
                    data: 'hargaKamar',
                    name: 'hargaKamar'
                },
                {
                    data: 'gambarHotel1',
                    name: 'gambarHotel1'
                },
                {
                    data: 'gambarHotel2',
                    name: 'gambarHotel2'
                },
                {
                    data: 'gambarHotel3',
                    name: 'gambarHotel3'
                },
                {
                    data: 'gambarHotel4',
                    name: 'gambarHotel4'
                },
                {
                    data: 'gambarHotel5',
                    name: 'gambarHotel5'
                },
                {
                    data: 'stokKamar',
                    name: 'stokKamar'
                },
                {
                    data: 'bintang',
                    name: 'bintang'
                },
                {
                    data: 'lokasi',
                    name: 'lokasi'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                },
            ],
            order: [
                [0, 'desc']
            ]
        });
        $('body').on('click', '.delete', function() {
            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');
                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('delete-hotel') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        var oTable = $('#datatable-crud').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</html>