<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice Booking Hotel</title>

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

        td {
            text-align: center;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .invoice .container {
            margin-left: 15px;
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

        .information .container {
            margin-left: 15px;
        }

        .information .logo {
            margin: 5px;
        }

        .information table {
            padding: 10px;
        }
    </style>

</head>

<body>

    <div class="information">
        <div class="container">
            <h3>paycation</h3>
            <img src="{{ public_path('img/hotel/aston-1.png') }}">
            https://company.com
            <br>
            <p>Date : {{$jamBooking}}</p>
            <p>Time : {{$tanggalBooking}}</p>
            <p>Status : Paid</p>
        </div>
    </div>


    <br />

    <div class="invoice">
        <div class="container">
            <p>Nama Pemesan : {{$namaPemesan}}</p>
            <p>Email : {{$emailTamu}}</p>
            <p>Nomor Telepon :{{$nomorTelepon}}</p>
            <p>Check In : {{$checkIn}}</p>
            <p>Check Out : {{$checkOut}}</p>
            <br /><br />
        </div>
        <h3>Invoice specification </h3>
        <table width=" 100%">
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
                    <!-- <td></td> -->
                    <td>{{$namaHotel}}</td>
                    <td>{{$jumlahKamar}}</td>
                    <td>{{$jumlahHari}}</td>
                    <td>Rp. {{$hargaPesanan}},-</td>
                </tr>
                <tr>
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
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td></td>
                    <td c></td>
                    <td>Total</td>
                    <td class="gray">Rp. {{$hargaPesanan}},-</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="information" style="position: absolute; bottom: 0;">
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
    </div>

</body>

</html>