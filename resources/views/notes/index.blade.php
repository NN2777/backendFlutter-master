<h1>List Notes</h1>
<table>
    <thead>
        <tr>
            <th>Matkul</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notes as $note)
            <tr>
                <td>{{ $note->matkul }}</td>
                <td>{{ $note->kelas }}</td>
                <td>{{ $note->hari }}</td>
                <td>
                    <a href="/notes/{{ $note->id }}/edit">edit</a>
                    <form action="/notes/{{ $note->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
