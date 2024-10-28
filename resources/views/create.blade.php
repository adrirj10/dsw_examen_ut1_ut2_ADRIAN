<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
            <p>{{ session('success') }}</p>
    @endif
    <h1>Crea y envia tu mensaje</h1>
    <form action="{{route('messages.store')}}" method="post">
        @csrf
        <label for="text">Mensaje</label>
        <textarea name="text" id="text" cols="30" rows="10" required></textarea>
        <div class="form-group">
            <label for="negrita">Negrita?</label>
            <select id="negrita" name="negrita">
                <option value="negrita">Negrita</option>
                <option value="normal">Normal</option>
            </select>
        </div>

        <div class="form-group">
            <label for="subrayado">Negrita?</label>
            <select id="subrayado" name="subrayado">
                <option value="subrayado">Subrayado</option>
                <option value="normal">Normal</option>
            </select>
        </div>
        <button type="submit">Enviar</button>
    </form>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>