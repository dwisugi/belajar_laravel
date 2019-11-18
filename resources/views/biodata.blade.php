<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passing</title>
</head>
<body>
    <p>Passing data Conntroller ke view laravel</p>
    <h3>Nama : {{ $nama }}</h3>
    <p>Bidang Pekerjaan</p>
	<ul>
 
		@foreach($bidang as $b)
 
		<li>{{ $b }}</li>
 
		@endforeach
		
	</ul>
</body>
</html>