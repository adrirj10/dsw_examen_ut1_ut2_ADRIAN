<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mensaje</title>
</head>
<body>
    <h1>Editar Mensaje</h1>

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <form action="{{ route('messages.actualizar', $messages->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="message">Mensaje</label>
        <input type="message" name="message" value="{{ old('', $messages->message) }}" required><br>


        <button type="submit">Actualizar Duda</button>
    </form>
</body>
</html>