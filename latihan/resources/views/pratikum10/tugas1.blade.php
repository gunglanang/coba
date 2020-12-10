<!DOCTYPE html>
<html>
<head>
    <title>daftar kategori</title>
</head>
<body>
    <h3>data kategori</h3>
    Jumalah data: {{$JRek}}
    <a href="http://localhost:8000/prak10/create">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody> 
        @foreach($KData as $dt=>$nval )
            <tr>
              <td>{{$dt+1}}</td>
              <td>{{$nval->ID}}</td>
              <td>{{$nval->KATEGORI}}</td>
              <td>{{$nval->KETERANGAN}}</td>
              <td><a href="http://localhost:8000/prak10/{{$nval->ID}}/edit">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>