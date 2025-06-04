<form action="{{ route('data.store') }}" method="post">
    @csrf
    <label for="">nama</label>
    <input type="text" name="nama" id="nama">
    <label for="">hobi</label>
    <input type="text" name="hobi" id="hobi">
    <label for="">umur</label>
    <input type="number" name="umur" id="umur">
    <button type="submit">Simpan</button>
</form>