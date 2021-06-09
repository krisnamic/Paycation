<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paycation | View Invoice</title>
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

        table {
            font-size: medium;
        }

        tfoot tr td {
            font-weight: bold;
        }

        .invoice h3 {
            margin-left: 15px;
        }

        .information {
            background-color: #60A7A6;
            color: #fff;
        }

        .information .logo {
            margin: 5px;
        }

        .information table {
            padding: 10px;
        }

        svg {
            width: 200px;
        }

        .invoice table {
            border: 1px solid black;
            text-align: center;
            margin: 15px;
        }

        .invoice th {
            border: 1px solid black;
            padding: 10px;
        }

        .invoice td {
            padding: 10px;
            border: 1px solid black;
        }

        .invoice tfooot {
            text-align: center;
        }
    </style>
    @include('Template/head')
</head>

<body>


    <!-- navbar -->
    @include('Template/userNavbar')
    <!-- end of navbar -->

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header" style="font-size:xx-large;">Invoice <i style="font-size: xx-large;">#</i> {{$pesanan->id}}</h5>
            <div class="card-body">
                <div class="information">
                    <table width="100%">
                        <tr>
                            <td align="left" style="width: 40%;">
                                <!-- <img src="" alt=""> -->
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 922.87 234.91" style="margin-left: 15px; margin-bottom:20px;">
                                    <defs>
                                        <style>
                                            .cls-1,
                                            .cls-2 {
                                                fill: #fff;
                                            }

                                            .cls-2 {
                                                fill-rule: evenodd;
                                            }
                                        </style>
                                    </defs>
                                    <title>paycation-1</title>
                                    <path class="cls-1" d="M84.24,158.93c0,24.32-16,43.39-39.5,43.39-12.49,0-22.29-5.91-28.87-14.69v47.28H0V116.73H15.87v13.5c6.58-8.77,16.38-14.68,28.87-14.68C68.2,115.55,84.24,134.62,84.24,158.93Zm-16.37,0c0-15.53-10.64-28-25.83-28s-26.17,13.17-26.17,28,11,27.86,26.17,27.86S67.87,174.3,67.87,158.93Z" />
                                    <path class="cls-1" d="M183.17,116.73v84.41H167.3V187.63c-6.59,8.78-16.38,14.69-28.87,14.69-23.47,0-39.5-19.07-39.5-43.39s16-43.38,39.5-43.38c12.49,0,22.28,5.91,28.87,14.68v-13.5Zm-15.87,42.2c0-14.85-11-27.85-26.17-27.85s-25.83,12.49-25.83,27.85c0,15.54,10.64,28,25.83,28S167.3,173.79,167.3,158.93Z" />
                                    <path class="cls-1" d="M283.11,116.73,233.64,234.91H217.43l14.86-34.45-35.11-83.73H214.4l25.83,65.84,25.66-65.84Z" />
                                    <path class="cls-1" d="M287.49,158.93c0-23.46,16.89-43.55,43.05-43.55,11.65,0,19.76,3.21,26.34,8.44v18.4a34,34,0,0,0-25-11c-16.71,0-28.19,12.32-28.19,27.68,0,15.2,11.48,27.69,28.19,27.69a34,34,0,0,0,25-11v18.4c-6.58,5.23-14.69,8.44-26.34,8.44C304.38,202.49,287.49,182.4,287.49,158.93Z" />
                                    <path class="cls-1" d="M457.16,116.73v84.41H441.29V187.63c-6.59,8.78-16.38,14.69-28.87,14.69-23.47,0-39.5-19.07-39.5-43.39s16-43.38,39.5-43.38c12.49,0,22.28,5.91,28.87,14.68v-13.5Zm-15.87,42.2c0-14.85-11-27.85-26.17-27.85s-25.83,12.49-25.83,27.85c0,15.54,10.64,28,25.83,28S441.29,173.79,441.29,158.93Z" />
                                    <path class="cls-1" d="M518.94,131.92H501.55v69.22H485.68V131.92h-10.8V116.73h10.8V94.11h15.87v22.62h17.39Z" />
                                    <path class="cls-1" d="M534,89.89a10.81,10.81,0,1,1,10.8,11A10.52,10.52,0,0,1,534,89.89Zm2.87,26.84h15.87v84.41H536.84Z" />
                                    <path class="cls-1" d="M575.49,158.93c0-23.46,17.56-43.55,43-43.55s43.05,20.09,43.05,43.55S644,202.49,618.54,202.49,575.49,182.4,575.49,158.93Zm69.73-.16c0-14.86-10.47-27.52-26.68-27.52-15.87,0-26.84,12.66-26.84,27.52,0,15,11,27.85,26.84,27.85C634.75,186.62,645.22,173.79,645.22,158.77Z" />
                                    <path class="cls-1" d="M754.27,152.69v48.45H738.4V155.05c0-16.71-8.61-25.49-20.59-25.49-11.82,0-20.6,8.78-20.6,25.49v46.09H681.34V116.73h15.87v11.82c4.9-7.94,13.84-13.51,25.49-13.51C739.25,115,754.27,127.53,754.27,152.69Z" />
                                    <path class="cls-2" d="M855.38,126.75l.4-.25c-6.16-18.42,19.48-49.56,67-101.63Q865.13,32,833.58,54.16,836.66,99.42,855.38,126.75Z" />
                                    <path class="cls-2" d="M855.38,126.75l.4-.25a17.3,17.3,0,0,1-.51-1.91q-9-34.23-7.3-79.08a121,121,0,0,0-14.39,8.65Q836.66,99.42,855.38,126.75Z" />
                                    <path class="cls-2" d="M871.21,153.16c10.15,5.2,18.56,7.89,26,6.6Q822.07,130.3,834.83,0c-18,3.54-32.62,11.77-42.8,25.5-8.86,12-6,27.15,1.25,47.42,1,2.72,2.15,17.38-3.92,22.83-2.23,2-5.82.41-8.92-1.61q-16-9.08-26.56.18Q724.72,89.42,711.62,89c12.45,3.92,26.83,8,43,12.66,6.88,2,12.8,6.74,17.46,13.91,9.54,14.66,36.58,22.62,62.77,26.39A118.79,118.79,0,0,1,871.21,153.16Z" />
                                </svg>

                                <pre style="color: white; font-size:medium;">
Nama Pemesan  : {{$pesanan->namaPemesan}}
Email Tamu    : {{$pesanan->emailTamu}}
Nomor Telepon : {{$pesanan->nomorTelepon}}
<br />
Date          : {{$pesanan->jamBooking}}
Time          : {{$pesanan->tanggalBooking}}
</pre>
                            </td>
                            <!-- <td align="center">
                                <img src="/path/to/logo.png" alt="Logo" width="64" class="logo" />

                            </td> -->
                            <td align="right" style="width: 40%;">

                                <!-- <h3></h3> -->

                                <pre style="color: white; font-size:medium;" style="margin-top: 20px;">
                    <br /><br /><br /><br /><br />
                    Check In  : {{$pesanan->checkIn}}
                    Check Out : {{$pesanan->checkOut}}
                    <br>
                    Status        : Paid
                </pre>
                            </td>
                        </tr>
                    </table>
                </div>
                <br />

                <div class="invoice">
                    <h3>Invoice specification</h3>
                    <table width="95%">
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
                                <td class="numOfDay">{{$jumlahHari}}</td>
                                <td>{{$pesanan->hargaPesanan}}</td>
                            </tr>
                            <!-- <tr>
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
                            </tr> -->
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td>Total</td>
                                <td class="gray">{{$pesanan->hargaPesanan}}</td>
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
                <br>
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
                        <input type="hidden" value="{{$pesanan->id}}" name="id">
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