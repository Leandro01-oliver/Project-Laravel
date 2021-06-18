<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Cadastro de Clientes</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
            <div class="container-fluid">
                <a href="" class=""></a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarScroll">
                    <ul class="navbar-nav   navbar-nav-scroll redirection_page ">
                        <li class="nav-item">
                            <a href="/cad_cliente" class="btn   w-100 btn-primary link_cad_clientes">
                                Cadastrar Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cad_produto" class="btn  w-100 btn-primary link_cad_produtos">
                                Cadastrar Produtos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="btn  w-100 btn-primary link_page">
                                Voltar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <section class="container-fluid alig_custom_form">
            <form action="save_cliente" method="POST" class="alig_form">
                <div class="card ">
                    <div class="card-body">
                        <div class="text-center mt-3 ">
                            <h1>
                                Cadastro de Clientes
                            </h1>
                            <hr>
                        </div>
                        <div class="text-center mt-3">
                            <label for="nm" class="">
                                Nome :
                            </label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="nm" name="nm"
                                placeholder="Informe seu nome completo">
                        </div>
                        <div class="text-center mt-3">
                            <label for="email" class="">Email :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="email" class="form-control forms text-center" id="email" name="email"
                                placeholder="Informe o seu email">
                        </div>
                        <div class="text-center mt-3">
                            <label for="nm_pai" class="">Nome do pai :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="nm_pai" name="nm_pai"
                                placeholder="Informe o nome do seu pai">
                        </div>
                        <div class="text-center mt-3">
                            <label for="nm_mae" class="">Nome da mãe :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="nm_mae" name="nm_mae"
                                placeholder="Informe o nome da sua mãe">
                        </div>
                        <div class="text-center mt-3">
                            <label for="dt_nascimento" class="">Data de Nascimento :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="date" class="form-control forms text-center" id="dt_nascimento"
                                name="dt_nascimento" placeholder="Informe o nome da sua mãe">
                        </div>
                        <div class="text-center mt-3">
                            <label for="telefone" class="">Telefone :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="tel" class="form-control forms text-center" id="telefone" name="telefone"
                                placeholder="Informe o seu telefone">
                        </div>
                        <div class="text-center mt-3">
                            <label for="cpf" class="">CPF :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="cpf" name="cpf"
                                placeholder="Informe o seu CPF">
                        </div>
                        <div class="text-center mt-3">
                            <label for="rg" class="">RG :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="rg" name="rg"
                                placeholder="Informe o seu CPF">
                        </div>
                        <div class="text-center mt-3">
                            <label for="cep" class="">CEP :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="cep" name="cep"
                                placeholder="Informe o seu CEP">
                        </div>
                        <div class="text-center mt-3">
                            <label for="rua" class="">Rua :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="rua" name="rua"
                                placeholder="Informe a sua rua">
                        </div>
                        <div class="text-center mt-3">
                            <label for="bairro" class="">Bairro :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="bairro" name="bairro"
                                placeholder="Informe o seu bairro">
                        </div>
                        <div class="text-center mt-3">
                            <label for="cidade" class="">Cidade :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="cidade" name="cidade"
                                placeholder="Informe a sua cidade">
                        </div>
                        <div class="text-center mt-3">
                            <label for="uf" class="">UF :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="uf" name="uf"
                                placeholder="Informe o seu estado ex. Rondônia - (RO)">
                        </div>
                        <div class="text-center mt-3">
                            <label for="rm" class="">Renda Mensal :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="rm" name="rm"
                                placeholder="Informe a sua renda mensal">
                        </div>
                        <div class="text-center mt-4 mb-3">
                            <button type="submit" class="btn btn_cad_produto">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
