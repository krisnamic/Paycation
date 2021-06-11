<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Paycation | Invoice</title>

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

        .information td img {
            width: 250px;
        }
    </style>

</head>

<body>

    <div class="container mt-3">
        <div class="card">
            <!-- <h5 class="card-header" style="font-size:xx-large;">Invoice <i style="font-size: xx-large;">#</i></h5> -->
            <div class="card-body">
                <div class="information">
                    <table width="100%">
                        <tr>
                            <td align="left" style="width: 40%;">
                                <!-- <img src="" alt=""> -->
                                <img src="{{ public_path('img/paycation/paycation-1-light.png') }}" class="mr-3 mt-4 ml-3 mb-3" alt="...">

                                <pre style="color: white; font-size:medium;">
Nama Pemesan  : {{$namaPemesan}}
Email Tamu    : {{$emailTamu}}
Nomor Telepon : {{$nomorTelepon}}
<br />
Date          : {{$jamBooking}}
Time          : {{$tanggalBooking}}
</pre>
                            </td>
                            <!-- <td align="center">
                                <img src="/path/to/logo.png" alt="Logo" width="64" class="logo" />

                            </td> -->
                            <td align="right" style="width: 40%;">

                                <!-- <h3></h3> -->

                                <pre style="color: white; font-size:medium;" style="margin-top: 20px;">
                    <br /><br /><br /><br /><br />
                    Check In  : {{$checkIn}}
                    Check Out : {{$checkOut}}
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
                                <td>{{$jumlahKamar}}</td>
                                <td class="numOfDay">{{$jumlahHari}}</td>
                                <td>{{$hargaPesanan}}</td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="1"></td>
                                <td colspan="1"></td>
                                <td>Total</td>
                                <td class="gray">{{$hargaPesanan}}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="information" style="position: absolute; bottom: 0;">
                    <table width="100%">
                        <tr>
                            <td align="left" style="width: 50%;">
                                &copy; 2021 - paycation - All rights reserved.
                            </td>
                            <td align="right" style="width: 50%;">
                                Company Slogan
                            </td>
                        </tr>

                    </table>
                </div>

</body>

</html>