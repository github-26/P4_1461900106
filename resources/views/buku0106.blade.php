<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Perpustakaan</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
</style>
</head>
<body>
    <div style="overflow-x:auto;">
    <a class="tambah" href="{{route( 'buku.create')}}">
    Tambah Data </a>
    <a href="/buku/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
    <table>
        <thead>
        <tr>
        <th>No</th>
        <th>id</th>
        <th>judul</th>
        <th>tahun_terbit</th>
        <th>Aksi</th>
        </tr>
        </thead>
            <tbody>
            <?php $no=1; ?>
            @foreach ($buku as $buku)
            <tr>
            <td>{{$no++}}</td>
            <td>{{$buku->id}}</td>
            <td>{{$buku->judul}}</td>
            <td>{{$buku->tahun_terbit}}</td>
            <td>
                <a href="{{ url('buku/' . $buku->id . "/edit") }}">Edit </a>
                |
                <form action="{{ url('buku/' . $buku->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value "delete">
                <button type="submit">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>