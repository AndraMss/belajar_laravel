<!-- <form action="{{ route('makanan.store') }}" method="post">
    @csrf
    <label for="">nama</label>
    <input type="text" name="nama" id="nama">
    <label for="">asal</label>
    <input type="text" name="asal" id="asal">
    <label for="">kategori</label>
    <input type="text" name="kategori" id="kategori">
    <label for="">harga</label>
    <input type="number" name="harga" id="harga">
    <button type="submit">Simpan</button>
</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Makanan</title>
    <style>
        :root {
            --primary-color: #4a90e2;
            --background-color: #f8f9fa;
            --card-color: #ffffff;
            --input-border: #ced4da;
            --input-focus: #4a90e2;
            --text-color: #333;
            --label-color: #555;
            --button-hover: #3a78c2;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 60px 20px;
            color: var(--text-color);
        }

        .form-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background-color: var(--card-color);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .form-wrapper h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: var(--primary-color);
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: var(--label-color);
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 25px;
            border: 1px solid var(--input-border);
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: var(--input-focus);
            box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
            outline: none;
        }

        button {
            width: 100%;
            background-color: var(--primary-color);
            color: #fff;
            padding: 14px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: var(--button-hover);
        }
    </style>
</head>
<body>

    <div class="form-wrapper">
        <h1>Tambah Data Makanan</h1>
        <form action="{{ route('makanan.store') }}" method="post">
            @csrf

            <label for="nama">Nama Makanan</label>
            <input type="text" name="nama" id="nama" required>

            <label for="asal">Asal Daerah</label>
            <input type="text" name="asal" id="asal" required>

            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" required>

            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" required>

            <button type="submit">Simpan Makanan</button>
        </form>
    </div>

</body>
</html>
