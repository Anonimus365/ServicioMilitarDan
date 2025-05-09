<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Army Corps</title>
</head>

<style>
    body {
    display: flex;
    flex-direction: column;
    height: 100vh;
    align-items: center;
    justify-content: center;
    background-color: #DFF6FF; /* Celeste pastel */
    font-size: 18px;
    font-weight: 600;
    font-family: Arial, sans-serif;
    color: #333333; /* Negro suave */
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
    background: #A9D6E5; /* Celeste más oscuro */
    box-shadow: 0 10px 16px rgba(0, 0, 0, 0.3);
    width: 320px;
    text-align: center;
}

/* Título */
.container .title {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #FF7F50; /* Coral cálido */
}

/* Párrafo */
.container .paragraph {
    font-size: 15px;
    margin-bottom: 10px;
    width: 100%;
    text-align: left;
    color: #555555; /* Gris medio */
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
    border: 1px solid #FF7F50; /* Coral */
    border-radius: 6px;
    background: #F5F5F5; /* Gris claro */
    color: #333333;
    outline: none;
    font-size: 16px;
    transition: all 0.3s ease;
}

/* Efecto al enfocar los inputs */
.container input:focus {
    border-color: #FF7F50;
    box-shadow: 0 0 8px rgba(255, 127, 80, 0.5);
}

/* Botón */
.container button {
    border: none;
    border-radius: 6px;
    background: #FF7F50; /* Coral */
    padding: 10px;
    font-size: 18px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

/* Efecto hover en botón */
.container button:hover {
    background: #E66A3D; /* Coral más oscuro */
    transform: scale(1.05);
}

/* Efecto click en botón */
.container button:active {
    transform: scale(0.98);
}

footer {
    position: fixed;
    bottom: 0;
}
</style>

<body>
    <div class="container">
        <p class="title">Army Corps form</p>

        <p class="paragraph">Enter in the army corps's name:</p>
        <form action="{{route('corp.saved')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="designation" placeholder="Designation..." required>
            <button type="submit">send</button>
        </form>
    </div>
    <footer>
        <p>By: Dan Muñoz</p>
    </footer>
</body>
</html>
