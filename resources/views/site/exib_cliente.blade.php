@include('components.exibclientes.head')
<section class="alig_pages ">
    <h1 class="text-center mt-3 exib_list_cad">Listgem dos Clientes Cadastrados</h1>
    <hr class="line_exib_cad">
    <div class=" div1 ">
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
                        <td><a href="#" class="text-light">Editar</a> | <a href="#" class="text-light">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a class="btn btn_exib_cad d-block mt-4 mb-5 p-2" href="/clientes">Voltar a Cadastrar</a>
</section>
@include('components.exibclientes.footer')
