<html>
<head></head>
<body>
<h3> Nuevo usuario registrado</h3>
<p>Una persona acaba de registrase como usuario en nuestro sistema. A {{ utf8_encode('continuaci�n') }} se muestran sus datos:</p>
<p>Nombre de usuario: {{$username}}</p>
<p>Email: {{$email}}</p>
<p>{{ utf8_encode('Tel�fono) }}: {{$telefono}}</p>
</body>
</html>