<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Questa &egrave; la pagina di pippo</h1>
        <img src="https://upload.wikimedia.org/wikipedia/it/f/fc/Pippo_Disney.png" alt="pippo">
        <div>

            <a href="{{route('pluto')}}">Pluto</a>
            <a href="{{route('paperino')}}">Paperino</a>
            <a href="{{route('home')}}">Home</a>
        </div>

    </div>

</body>
<style>
    body {
        background-color: black;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        text-align: center;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
    }

    a {
        text-decoration: none;
        color: white;
        padding: 20px;
        font-size: 20px;
    }

    img {

        height: 300px;
        border-radius: 25px;
        width: 400px;
        margin-bottom: 20px;
    }
</style>

</html>