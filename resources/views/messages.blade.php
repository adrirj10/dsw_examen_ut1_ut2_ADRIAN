<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Texto</th>
                    <th>Subrayado</th>
                    <th>Negrita</th>
                    <TH>ACCIONES</TH>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->text }}</></td>
                        <td>{{ $message->subrayado }}</td>
                        <td>{{ $message->negrita }}</td>
                        <TD> <a href="{{ route('messages.editar', $message->id) }}">Editar</a></TD>

                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</body>
</html>

