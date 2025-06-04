<!-- <button type="button">
    <a href="{{ route('makanan.create') }}">
        tambah makanan
    </a>
</button>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Asal</th>
            <th>Kategori</th>
            <th>harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($makanans as $makanan)
            <tr>
                <td>{{$makanan->nama}}</td>
                <td>{{$makanan->asal}}</td>
                <td>{{$makanan->kategori}}</td>
                <td>{{$makanan->harga}}</td>
                <td>
                    <form action="{{ route('makanan.destroy', $makanan->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Data Makanan</title>
    <style>
        :root {
            --primary: #2C3E50;
            --accent: #3498DB;
            --danger: #E74C3C;
            --background: #f4f6f8;
            --text: #2c3e50;
            --white: #fff;
            --shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 50px;
            background-color: var(--background);
            color: var(--text);
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background-color: var(--white);
            padding: 40px;
            border-radius: 12px;
            box-shadow: var(--shadow);
        }

        h1 {
            font-size: 28px;
            margin-bottom: 30px;
            border-left: 6px solid var(--accent);
            padding-left: 15px;
            color: var(--primary);
        }

        .btn-add {
            display: inline-block;
            background-color: var(--accent);
            color: var(--white);
            padding: 12px 20px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            transition: background 0.3s ease;
            margin-bottom: 25px;
        }

        .btn-add:hover {
            background-color: #2980b9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        thead {
            background-color: var(--primary);
            color: white;
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn-delete {
            background-color: var(--danger);
            color: var(--white);
            padding: 8px 14px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        form {
            display: inline;
        }

        .price {
            color: #27ae60;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Daftar Makanan Tradisional</h1>

    <a href="{{ route('makanan.create') }}" class="btn-add">+ Tambah Makanan</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Asal</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($makanans as $makanan)
                <tr>
                    <td>{{ $makanan->nama }}</td>
                    <td>{{ $makanan->asal }}</td>
                    <td>{{ $makanan->kategori }}</td>
                    <td class="price">Rp{{ number_format($makanan->harga, 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('makanan.destroy', $makanan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus makanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
