<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | DataTables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>

    @include('Template/userNavbar')
    <!-- Content Wrapper. Contains page content -->
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admin Hotel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="font-size: 14px;">
                                <div class="pull-right mb-2">
                                    <a class="btn btn-success" href="{{ route('hotels.create') }}"> Create Hotel</a>
                                </div>
                                <table id="datatable-crud" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>namaHotel</th>
                                            <!-- <th>deskripsiHotel</th> -->
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
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>namaHotel</th>
                                            <!-- <th>deskripsiHotel</th> -->
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
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('Template/footer')


    <!-- jQuery -->
    <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
    <!-- page script -->

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
                    // {
                    //     data: 'deskripsiHotel',
                    //     name: 'deskripsiHotel'
                    // },
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

</body>

</html>