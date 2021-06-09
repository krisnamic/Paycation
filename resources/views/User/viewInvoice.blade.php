<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        @page {
            margin: 0px;
        }

        body {
            margin: 0px;
        }

        * {
            font-family: Verdana, Arial, sans-serif;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .invoice table {
            margin: 15px;
        }

        .invoice h3 {
            margin-left: 15px;
        }

        .information {
            background-color: #60A7A6;
            color: #FFF;
        }

        .information .logo {
            margin: 5px;
        }

        .information table {
            padding: 10px;
        }
    </style>
    @include('Template/head')
</head>

<body>


    <!-- navbar -->
    @include('Template/userNavbar')
    <!-- end of navbar -->

    <!-- content -->
    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header">Invoice</h5>
            <div class="card-body">
                <div class="information">
                    <table width="100%">
                        <tr>
                            <td align="left" style="width: 40%;">
                                <h3></h3>
<pre>
{{$pesanan->namaPemesan}}
{{$pesanan->emailTamu}}
{{$pesanan->nomorTelepon}}
<br /><br />
Date: {{$pesanan->jamBooking}}
Time: {{$pesanan->tanggalBooking}}
Status: Paid
</pre>


                            </td>
                            <td align="center">
                                <img src="/path/to/logo.png" alt="Logo" width="64" class="logo" />
                            </td>
                            <td align="right" style="width: 40%;">

                                <h3>PayCation</h3>
                                <pre>
                    https://company.com

                    Check In  : {{$pesanan->checkIn}}
                    Check Out : {{$pesanan->checkOut}}
                </pre>
                            </td>
                        </tr>

                    </table>
                </div>


                <br />

                <div class="invoice">
                    <h3>Invoice specification #123</h3>
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Amount of Rooms</th>
                                <th>Duration</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$namaHotel}}</td>
                                <td>{{$pesanan->jumlahKamar}}</td>
                                <td>{{$jumlahHari}}</td>
                                <td align="left">{{$pesanan->hargaPesanan}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td align="left">Total</td>
                                <td align="left" class="gray">{{$pesanan->hargaPesanan}}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- <div class="information" style="position: absolute; bottom: 0;">
                    <table width="100%">
                        <tr>
                            <td align="left" style="width: 50%;">
                                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
                            </td>
                            <td align="right" style="width: 50%;">
                                Company Slogan
                            </td>
                        </tr>

                    </table>
                </div> -->
                <div class="tombol" style="display: flex; justify-content:space-between;">
                    <form action="{{route('generatePDF')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$pesanan->namaPemesan}}" name="namaPemesan">
                        <input type="hidden" value="{{$pesanan->emailTamu}}" name="emailTamu">
                        <input type="hidden" value="{{$pesanan->nomorTelepon}}" name="nomorTelepon">
                        <input type="hidden" value="{{$pesanan->jamBooking}}" name="jamBooking">
                        <input type="hidden" value="{{$pesanan->tanggalBooking}}" name="tanggalBooking">
                        <input type="hidden" value="{{$pesanan->jumlahKamar}}" name="jumlahKamar">
                        <input type="hidden" value="{{$pesanan->hargaPesanan}}" name="hargaPesanan">
                        <input type="hidden" value="{{$pesanan->checkIn}}" name="checkIn">
                        <input type="hidden" value="{{$pesanan->checkOut}}" name="checkOut">
                        <input type="hidden" value="{{$namaHotel}}" name="namaHotel">
                        <input type="hidden" value="{{$jumlahHari}}" name="jumlahHari">
                        <button class="btn btn-primary" type="submit" formtarget="_blank">View In PDF</button>
                    </form>
                    <form action="{{route('viewBookingDetail')}}" method="GET">
                        <button class="btn btn-primary">View Booking Details</button>
                    </form>
                </div>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
    </div>

    <!-- end of content -->

    @include('Template/script')
</body>

</html>