<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Contacto</title>
</head>
<body>
    <h1> Pagina de inicio contacto</h1>
    <form action="/contact" method="POST" autocomplete="off">
        @method('PUT')
        @csrf
        <div>
            <label>Nombre</label>
            <input type="text" name="name" placeholder="Nombre" />
        </div>
        <div>
            <label>Correo Electronico</label>
            <input type="email" name="email" placeholder="Correo Electronico" />
        </div>
        <div>
            <label>Telefono</label>
            <input type="text" name="phone" placeholder="Telefono" maxlength="9" />
        </div>
        <div>
            <label>Consulta</label>
            <textarea name="consulta" placeholder="Consulta"> </textarea>
        </div>
        <div>
            <button>
                Enviar
            </button>
        </div>
    </form>
</body>
</html>
