<!DOCTYPE html>
<html>

<head>
    <title>Cetak - Laporan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Transaksi Pelanggan</h5>
    </center>

    <div class="table-responsive">
        <table class="table table-bordered table-hovered" id="table">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>No Invoice</th>
                    <th>Pemesan</th>
                    <th>Subtotal</th>
                    <th>Metode Pembayaran</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orderbaru as $order)
                <tr>
                    <td align="center"></td>
                    <td>{{ $order->invoice }}</td>
                    <td>{{ $order->nama_pemesan }}</td>
                    <td>{{ $order->subtotal + $order->biaya_cod }}</td>
                    <td>{{ $order->metode_pembayaran }}</td>
                    <td>{{ $order->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>