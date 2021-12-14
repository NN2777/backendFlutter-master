<h1>EDIT NOTES</h1>
<form action="/notes/{{ $note->id }}" method="post">
    @method('PUT')
    @csrf
    Matkul : <input type="text" name="matkul" value="{{ $note->matkul }}"><br>
    Kelas : <input type="text" name="kelas" value="{{ $note->kelas }}"><br>
    hari : <input type="text" name="hari" value="{{ $note->kelas }}"><br>
    <input type="submit" value="save">
</form>