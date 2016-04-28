<html>
<head>
	<title></title>
</head>
<body>
	<div style="width: 90%;margin:10px auto">
		<ul>
			<li><strong>Razon:</strong>{{ $razon }}</li>
			<li><strong>Nombres:</strong>{{ $name }}</li>
			<li><strong>Puesto:</strong>{{ $puesto }}</li>
			<li><strong>Correo:</strong>{{ $correo }}</li>
			<li><strong>Teléfono:</strong>{{ $telefono }}</li>
			<li><blockquote>{!! $message !!}</blockquote></li>
		</ul>
	</div>
</body>
</html>