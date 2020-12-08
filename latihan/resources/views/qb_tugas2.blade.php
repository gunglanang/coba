<!DOCTYPE html>
<html>
jumlah data{{$JRek}}
        <table border="1">
        	<thead>
        		<tr>
        			<th>NO</th>
        			<th>KODE JENIS</th>
        			<th>NAMA PRODUK</th>
        			<th>STOK</th>
        			<th>HARGA BELI</th>
        			<th>HARGA JUAL</th>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($PData as $i=>$p)
        		<tr>
        			<td>{{$i+1}}</td>
        			<td>{{$p->ID_KATEGORI}}</td>
        			<td>{{$p->NAMA}}</td>
                    <td>{{$p->stok}}</td>
        			<td>{{$p->HARGA_BELI}}</td>
        			<td>{{$p->HARGA_JUAL}}</td>

        		</tr>
        		@endforeach
        	</tbody>
        </table>
    </body>
</html>