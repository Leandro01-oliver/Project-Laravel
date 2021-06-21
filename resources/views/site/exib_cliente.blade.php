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
    <title>Exibição de Clientes</title>
</head>

<body>
    <section class="alig_pages ">
        <h1 class="text-center mt-5">Listgem dos Clientes Cadastrados</h1>
        <hr>
        <div class=" div1 mb-5">
            <table class="table table-dark table-responsive table-hover table-striped div2 text-center">
                <thead>
                    <tr>
                        <th scope="col">#
                        </th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nome do Pai</th>
                        <th scope="col">Nome do Mãe</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">CPF</th>
                        <th scope="col">RG</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Rua</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Renda Mensal</th>
                        <th scope="col">Unidade Federativa-(UF)</th>
                        <th scope="col">Data e hora do Cadastro</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cliente as $clientes)
                    <tr>
                        <th scope=" row">{{ $clientes->id_cliente }}</th>
                        <td>{{ $clientes->nm }}</td>
                        <td>{{ $clientes->email }}</td>
                        <td>{{ $clientes->nm_pai }}</td>
                        <td>{{ $clientes->nm_mae }}</td>
                        <td>{{ $clientes->dt_nascimento }}</td>
                        <td>{{ $clientes->telefone }}</td>
                        <td>{{ $clientes->cpf }}</td>
                        <td>{{ $clientes->rg }}</td>
                        <td>{{ $clientes->cep }}</td>
                        <td>{{ $clientes->rua }}</td>
                        <td>{{ $clientes->bairro }}</td>
                        <td>{{ $clientes->cidade }}</td>
                        <td>{{ $clientes->rm }}</td>
                        <td>{{ $clientes->uf }}</td>
                        <td>{{ $clientes->created_at }}</td>
                        <td><a href="#" class="text-light">Editar</a> | <a href="#" class="text-light">Excluir</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a class="btn btn_cad_produto d-block mb-5 w-25 p-2" href="/clientes">Voltar a Cadastrar</a>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
