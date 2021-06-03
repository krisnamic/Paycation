
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@include('Template/adminHead')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template/navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/paycation/paycation-1-light.svg')}}" alt="AdminLTE Logo">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      @auth
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('img/userProfile/admin.png')}}" alt="admin_image" width="40px" height="40px" style="border-radius:50%">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
      @endauth

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('Template/header')
    <!-- /.content-header -->

    <div class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                <div class="card-header">
                <h5 class="m-0">Manage Products</h5>
                </div>
                <div class="card-body">
                <div>
                    <div class="d-flex flex-row-reverse" style="margin-right: 1.3em;">
                        <a class="btn btn-primary" href="{{ route('barang.create') }}"><i class="fas fa-plus"></i> <i class="fas fa-gamepad"></i> &nbsp;Add Console</a>
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
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Room Price</th>
                                    <th>Room Stock</th>
                                    <th>Stars</th>
                                    <th>Location</th>
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                    <th>Image 3</th>
                                    <th>Image 4</th>
                                    <th>Image 5</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
            </div>
            </div>
            </div>
  </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template/script')
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
        <script type="text/javascript">
        $(document).ready( function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#datatable-crud').DataTable({
                processing: true,
                // serverSide: true,
                ajax: "{{ url('barang') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'namaHotel', name: 'namaHotel' },
                    { data: 'deskripsiHotel', name: 'deskripsiHotel' },
                    { data: 'hargaKamar', name: 'hargaKamar' },
                    { data: 'stokKamar', name: 'stokKamar' },
                    { data: 'bintang', name: 'bintang' },
                    { data: 'lokasi', name: 'lokasi' },
                    {   data: 'gambarHotel1', 
                        name: 'gambarHotel1',
                        render: function (data, type, full, meta) {
                            return "<img src=\"img/hotel/" + data + "\" height=\"60\"/>";
                        }
                    },
                    {   data: 'gambarHotel2', 
                        name: 'gambarHotel2',
                        render: function (data, type, full, meta) {
                            return "<img src=\"img/hotel/" + data + "\" height=\"60\"/>";
                        }
                    },
                    {   data: 'gambarHotel3', 
                        name: 'gambarHotel3',
                        render: function (data, type, full, meta) {
                            return "<img src=\"img/hotel/" + data + "\" height=\"60\"/>";
                        }
                    },
                    {   data: 'gambarHotel4', 
                        name: 'gambarHotel4',
                        render: function (data, type, full, meta) {
                            return "<img src=\"img/hotel/" + data + "\" height=\"60\"/>";
                        }
                    },
                    {   data: 'gambarHotel5', 
                        name: 'gambarHotel5',
                        render: function (data, type, full, meta) {
                            return "<img src=\"img/hotel/" + data + "\" height=\"60\"/>";
                        }
                    },
                    { data: 'action', orderable: false, targets: 0 }
                ]
            });
            $('body').on('click', '.delete', function () {
                if (confirm("Delete Hotel Record?") == true) {
                    var id = $(this).data('id');
                    // ajax
                    $.ajax({
                        type:"POST",
                        url: "{{ url('delete-barang') }}",
                        data: { id: id},
                        dataType: 'json',
                        success: function(res){
                            var oTable = $('#datatable-crud').dataTable();
                            oTable.fnDraw(false);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
