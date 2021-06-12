<form action="{{ url('buku/' . $buku->id) }}" method="post">
    @csrf
    <input type="hidden" name= "_method" value="patch">
    Judul :<input type="text" name="judul" value="{{ $buku->judul }}">
    Tahun_terbit :<input type="text" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
    <button type="submit">Simpan</button>
</form>