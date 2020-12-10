<!DOCTYPE html>
<html>
<head>
        <title>Edit Data Kategori</title>
</head>
<body>
    <h2>Edit Data Kategori ID:{{ $eDT->ID }} </h2>

    <form method="POST" action="http://localhost:8000/prak10/{{ $eDT->ID }}">
        @csrf()
        @method('PUT')
        <div class="txlabel">Kategori</div>
        <div class="inputtext"><input type="text" name="txkat" value="{{ $eDT->KATEGORI }}">
        </div>
        <div class="txlabel">Deskripsi</div>
        <div class="inputtext"><input type="text" name="txdesk" value="{{ $eDT->KETERANGAN }}">
        </div>
        <div class="tombol">
        <input type="submit" class="btn" name="btnkirim" value="Update Data"></div>

    </form>

    <form method="POST" action="http://localhost:8000/prak10/{{ $eDT->ID }}">
        @csrf()
        @method('DELETE')
        <div class="tombol">
        <input type="submit" class="btn" name="btnkirim" value="Delete Data"></div>

    </form>
</body>
</html>