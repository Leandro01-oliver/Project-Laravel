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
    <title>Cadastro de Produtos</title>
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
            <form action="save_produto" method="POST" class="alig_form">
                <div class="card ">
                    <div class="card-body">
                        <div class="text-center mt-3 ">
                            <h1>
                                Cadastro de Produtos
                            </h1>
                            <hr>
                        </div>
                        <div class="text-center mt-3">
                            <label for="form_m" class="">
                                Marca do Produto:
                            </label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="marca" name="marca"
                                placeholder="Informe a marca do seu produto">
                        </div>
                        <div class="text-center mt-3">
                            <label for="form_vu" class="">Valor unitário do Produto :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="valor_u" name="valor_u"
                                placeholder="Informe o valor unitário do produto ">
                        </div>
                        <div class="text-center mt-3">
                            <label for="form_um" class="">Unidade de Medida :</label>
                        </div>
                        <div class="text-center mt-2">
                            <input type="text" class="form-control forms text-center" id="unidade_m" name="unidade_m"
                                placeholder="Informe a unidade de medida do produto">
                        </div>
                        <div class="text-center mt-3">
                            <label for="form_dp" class="">Descrição do Produto :</label>
                        </div>
                        <div class="text-center mt-2">
                            <textarea type="text" class="form-control forms_text" id="desc_produto" name="desc_produto"
                                placeholder="Descreva o seu produto"></textarea>
                        </div>
                        <div class="text-center mt-3">
                            <label for="form_d" class="">Detalhes do Produto :</label>
                        </div>
                        <div class="text-center mt-2">
                            <textarea type="text" class="form-control forms_text" id="det_produto" name="det_produto""
                            placeholder=" Detalhe o seu produto"></textarea>
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
