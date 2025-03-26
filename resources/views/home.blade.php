<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .links {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            transition: background 0.3s;
        }
        a:hover {
            background: #0056b3;
        }
        footer{
            position: fixed;
            bottom: 0;
            margin-bottom: 15px;
            font-size: 20px;
            font-weight: 700;
        }
    </style>
</head>
<body>

    <h1>Welcome to the Main Page</h1>
    <div class="links">
        <a href="{{ route('corp.create') }}" style="background: #DFF6FF; color:black;">Go to Army corps Form</a>
        <a href="{{ route('barrack.create') }}" style="background: #323232;">Go to Barracks Form</a>
        <a href="{{ route('company.create') }}" style="background: #FAF3E0; color: black;">Go to Companies Form</a>
    </div>
    <footer>
        By: Dan Muñoz  -  2875721
    </footer>

</body>
</html>
