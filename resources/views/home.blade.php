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
        <h1>
            Pippo Pluto Paperino
        </h1>
        <a href="{{route('pippo')}}"><img src="https://upload.wikimedia.org/wikipedia/it/f/fc/Pippo_Disney.png" alt="pippo"></a>
        <a href="{{route('pluto')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFM0bs2A_7dXQ9Yqj3j2gJDb4nc3vg722uLhQgvGPfoMXwo228obhMLtIueO8TiUE1ho0&usqp=CAU" alt="pluto"></a>
        <a href="{{route('paperino')}}"><img src="https://www.sapere.it/.imaging/mte/sapere/624x410/dam/pillole-di-sapere/costume-e-societa/donald-duck.jpg/jcr:content/donald-duck.jpg" alt="paperino"></a>




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
    }

    img {

        height: 300px;
        border-radius: 25px;
        width: 400px;
    }
</style>

</html>