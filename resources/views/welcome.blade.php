<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>RECIPERE</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">RECIPERE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <section class="container">
        <form action="/cadastrar_visitante" method="POST">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" >
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Data Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" >
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep">
            </div>



            <button type="submit" class="btn btn-dark">Salvar</button>
          </form>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

