<!DOCTYPE html>
<html>
    <head>
        <title>Layout</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
    	@extends('layout.layout')
    	@section('content')
    	<center>
			<table border="1">
				<thead>
					<td>No</td>
					<td>Kategori</td>
					<td>Keterangan</td>
					<td>Aksi</td>
				</thead>
				<tbody>
					@foreach ($kategori as $key => $value)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$value->KATEGORI}}</td>
						<td>{{$value->KETERANGAN}}</td>
						<td>
							<button type="button"><a href="">Edit</a></button>
							<button type="button"><a href="">Delete</a></button>
						</td>
					<tr/>
					@endforeach
				</tbody>
			</table>
		</center>
		@endsection
    </body>
</html>
