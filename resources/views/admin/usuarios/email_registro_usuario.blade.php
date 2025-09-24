<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 650px;
            margin: 40px auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
        }

        strong {
            color: #e74c3c;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin: 20px 0;
            padding: 12px 25px;
            font-size: 16px;
            background: #3498db;
            color: #fff !important;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #2c80b4;
        }

        .footer {
            font-size: 13px;
            color: #888;
            margin-top: 30px;
            text-align: center;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BIENVENIDO, {{$usuario->nombres}} {{$usuario->apellidos}}</h1>

        <p>Tu cuenta de usuario ha sido creada exitosamente.</p>
        <p>Tu contraseña temporal es: <strong>{{$passwordTemporal}}</strong></p>
        <p>Por favor, cambia esta contraseña después de iniciar sesión por primera vez.</p>
        <p>Gracias por unirte a nuestro sistema de parqueo.</p>
        <p>Atentamente,</p>
        <p><strong>El equipo de Sistema de Parqueo</strong></p>

        <a href="{{url('/login')}}" class="btn">Iniciar Sesión</a>

        <div class="footer">
            <p>Este es un correo automático, por favor no respondas a este mensaje.</p>
        </div>
    </div>
</body>
</html>
