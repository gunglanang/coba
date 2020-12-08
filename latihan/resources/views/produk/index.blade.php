<!DOCTYPE>
<html>
    <head>
        <title>Latihan View 02</title>
    </head>
    <body>
        <h2>Isi variable Produk:</h2>

        Produk: {{ isset($produk)? $produk : "Variable Produk Tidak Ditemukan"}}
    </body>
</html>