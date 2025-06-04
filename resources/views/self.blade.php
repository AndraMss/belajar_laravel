<button type="button">
    <a href="{{ route('data.create') }}">
        tambah data
    </a>
</button>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Hobi</th>
            <th>Umur</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{$data->nama}}</td>
            <td>{{$data->hobi}}</td>
            <td>{{$data->umur}}</td>
            <td>
                <form action="{{ route('data.destroy', $data->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>