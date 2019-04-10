<html>
<head>
<title>Pelanggan</title>
</head>
<body>
<h1>Mengakses View Pelanggan dari Controller</h1>
</body>

</html>
<html>
<head>
<title>Pelanggan</title>
</head>
<body>
<h1>Data Pelanggan</h1>
<table border="1">
<thead>
<tr>
</tr>
</thead>
<tbody>
<th>No</th>
<th>Nama</th>
@foreach ($pelanggan as $i => $v)
<tr>
<td>{{ $i+1 }}</td>
<td>{{ $v }}</td>
39
</tr>
@endforeach
</tbody>
</table>
</body>
</html>