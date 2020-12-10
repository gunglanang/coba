<!DOCTYPE html>
<html>
<head>
        <title>Daftar Kategori</title>
</head>
<body>
    <h2>Daftar Kategori</h2>

    Jumlah Data : {{ $JRek }}
    <a href="http://localhost:8000/Prak10/create">Tambah Data</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Kategori</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($KData as $i=>$p)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$p->ID}}</td>
                <td>{{$p->KATEGORI}}</td>
                <td>{{$p->KETERANGAN}}</td>
                <td><a href="http://localhost:8000/Prak10/{{$p->ID}}/edit">Edit</a></td>
                
            </tr>
        @endforeach
        </tbody>
    </table>


</body>
</html>