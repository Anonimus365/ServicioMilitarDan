<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies Form</title>
</head>

<style>

/* Estilos generales */
body {
    display: flex;
    flex-direction: column;
    height: 100vh;
    align-items: center;
    justify-content: center;
    background-color: #FAF3E0; /* Beige claro */
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
    background: #E3C6A5  ;
    box-shadow: 0 10px 16px rgba(0, 0, 0, 0.3);
    width: 320px;
    text-align: center;
}

/* Título */
.container .title {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #D17B0F; /* Naranja cálido */
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
    border: 1px solid #D17B0F; /* Naranja cálido */
    border-radius: 6px;
    background: #FAF3E0; /* Gris oscuro pero no tan fuerte */
    color: #fff;
    outline: none;
    font-size: 16px;
    transition: all 0.3s ease;
}

/* Efecto al enfocar los inputs */
.container input:focus {
    border-color: #D17B0F;
    box-shadow: 0 0 8px rgba(209, 123, 15, 0.5);
}

/* Botón */
.container button {
    border: none;
    border-radius: 6px;
    background: #D17B0F; /* Naranja cálido */
    padding: 10px;
    font-size: 18px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

/* Efecto hover en botón */
.container button:hover {
    background: #B3670B; /* Naranja más oscuro */
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
        <p class="title">Companies form</p>

        <p class="paragraph">Enter in the company activity:</p>
        <form action="{{route('company.saved')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="activity" placeholder="company activity..." required>
            <button type="submit">send</button>
        </form>
    </div>
    <footer>
        <p>By: Dan Muñoz</p>
    </footer>
</body>
</html>