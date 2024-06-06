<!DOCTYPE html>
<html>
<head>
    <title>List Data Bank Rekening</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>List Data Bank Rekening</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Bank Rekening</th>
                <th>Nama Bank Rekening</th>
                <th>Nomor Rekening</th>
                <th>Nama Pemilik Rekening</th>
                <th>Cabang Bank</th>
                <th>Mata Uang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->kode_bank_rekening }}</td>
                    <td>{{ $product->nama_bank_rekening }}</td>
                    <td>{{ $product->nomor_rekening }}</td>
                    <td>{{ $product->nama_pemilik_rekening }}</td>
                    <td>{{ $product->cabang_bank }}</td>
                    <td>{{ $product->mata_uang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
