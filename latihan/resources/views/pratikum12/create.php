<!DOCTYPE html>
<html>
<head>
        <title>Tambah Data Kategori</title>
</head>
<body>
    <h2>Menambahkan Data Kategori</h2>

    @if(count($errors) > 0)
        <div>
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach</ul>
        </div>
    @endif
    <form method="POST" action="http://localhost:8000/prak11">
        @csrf()
        @method('POST')
        <div class="txlabel">Kategori</div>
        <div class="inputtext"><input type="text" name="txkat">
        @if($errors->has("txkat"))
            <span>{{$error}}</span>
        @endif</div>
        <div class="txlabel">Deskripsi</div>
        <div class="inputtext"><input type="text" name="txdesk">
        @if($errors->has("txdesk"))
            <span>{{$error}}</span>
        @endif</div>
        <div class="tombol">
        <input type="submit" class="btn" name="btnkirim" value="Buat Data"></div>

    </form>


</body>
</html>