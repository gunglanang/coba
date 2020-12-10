<!DOCTYPE html>
<html>
<head>
    <title>daftar kategori</title>
</head>
<body>
    <h3>data kategori</h3>
    Jumalah data: {{$JRek}}
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>ID kategori</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody> 
        @foreach($KData as $dt->$nval)
            <tr>
              <td>{{$dt+1}}</td>
              <td>{{$nval->idkat}}</td>
              <td>{{$nval->kategori}}</td>
              <td>{{$nval->keterangan}}</td>
              <td><a href="http://localhost:8000/prak10/{{$nval->idkat}}/Edit">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>