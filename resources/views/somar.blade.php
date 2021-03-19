<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
            <div class="row  m-2 fs-2">
                Soma com dois números
            </div>
            <div class="mb-3 ">
                <div class="row">
                    <form method="POST" action="{{ route('resultadoSoma') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="primeiroValor" class="form-label">Insira o primeiro valor abaixo:</label>
                            <input type="number" class="form-control" id="primeiroValor" name="valor1">
                        </div>
                        <div class="mb-3">
                            <label for="segundoValor" class="form-label">Insira o segundo valor abaixo:</label>
                            <input type="number" class="form-control" id="segundoValor" name="valor2">
                        </div>
                        <button type="submit" class="btn btn-primary">Somar</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="row mt-2">
                <p class="fs-6">Todos os direitos reservados - Filipe Batista de Figueredo Lima</p>
            </div>
        </div>
    </div>
</body>
</html>