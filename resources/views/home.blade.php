<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page - Calculadora</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-2">
            <div class="row  m-2">
                <a class="link-dark fs-2 text-decoration-none" href="{{ url('laravel') }}">Página inicial do laravel</a>
            </div>
            <div class="mb-3 ">
                <div class="row">
                    <a class="btn btn-primary mt-2" href="{{ url('somar') }}" role="button">Somar</a>
                    <a class="btn btn-primary mt-2" href="{{ url('subtrair') }}" role="button">Subtrair</a>
                    <a class="btn btn-primary mt-2" href="{{ url('multiplicar') }}" role="button">Multiplicar</a>
                    <a class="btn btn-primary mt-2" href="{{ url('dividir') }}" role="button">Dividir</a>
                </div>
            </div>
            <div class="row mt-2">
                <p class="fs-6">Todos os direitos reservados - Filipe Batista de Figueredo Lima</p>
            </div>
        </div>
    </div>
</body>
</html>