<html>
<head>
	<title></title>
</head>
<body>
	<div style="width: 90%;margin:10px auto">
		<ul style="padding-left: 0;">
			<li><strong>Razon:</strong>{{ $razon }}</li>
			<li><strong>Nombres:</strong>{{ $name }}</li>
			<li><strong>Puesto:</strong>{{ $puesto }}</li>
			<li><strong>Correo:</strong>{{ $correo }}</li>
			<li><strong>Teléfono:</strong>{{ $telefono }}</li>
			<li><blockquote style="background-color: #F7F7F7;padding: 7px;border: 1px solid #ccc;margin-left: 0px;">{!! nl2br($mensaje) !!}</blockquote></li>
		</ul>
	</div>
</body>
</html>