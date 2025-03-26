<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

/* Estilos generales */
body {
    display: flex;
    flex-direction: column;
    height: 100vh;
    align-items: center;
    justify-content: center;
    background-color: #171717; /* Negro con tono más suave */
    font-size: 18px;
    font-weight: 600;
    font-family: Arial, sans-serif;
    color: #fff; /* Color del texto */
    margin: 0;
}

/* Contenedor principal */
.container {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 25px;
    border-radius: 12px;
    background: #1e1e1e; /* Gris oscuro */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    width: 320px;
    text-align: center;
}

/* Título */
.container p {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #00aaff;
}

/* Estilo del formulario */
form {
    display: flex;
    flex-direction: column;
    width: 100%;
}

/* Inputs */
.container input {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #444;
    border-radius: 6px;
    background: #262626;
    color: #fff;
    outline: none;
    font-size: 16px;
    transition: all 0.3s ease;
}

/* Efecto al enfocar los inputs */
.container input:focus {
    border-color: #00aaff;
    box-shadow: 0 0 8px rgba(0, 170, 255, 0.5);
}

/* Botón */
.container button {
    border: none;
    border-radius: 6px;
    background: #00aaff;
    padding: 10px;
    font-size: 18px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

/* Efecto hover en botón */
.container button:hover {
    background: #0088cc;
    transform: scale(1.05);
}

/* Efecto click en botón */
.container button:active {
    transform: scale(0.98);
}

footer{
    position: fixed;
    bottom: 0;
}
</style>

<body>
    <div class="container">
        <p>Barracks form</p>

        <form action="{{route('barrack.saved')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <input type="text" name="name" placeholder="barrack name..." required>
            <input type="text" name="location" placeholder="barrack location..." required>
            <button type="submit">send</button>
        </form>
    </div>
    <footer>
        <p>By: Dan Muñoz</p>
    </footer>
</body>
</html>