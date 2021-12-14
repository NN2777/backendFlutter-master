<h1>CREATE NOTES</h1>
<form action="/notes" method="post">
    @csrf
    Matkul : <input type="text" name="matkul"><br>
    Kelas : <input type="text" name="kelas"><br>
    hari : <input type="text" name="hari"><br>
    <input type="submit" value="save">
</form>