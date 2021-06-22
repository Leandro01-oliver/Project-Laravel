@include('components.exibclientes.head')
<section class="alig_pages">
    <h1 class="text-center mt-5 exib_list_cad">Listgem dos Produtos Cadastrados</h1>
    <hr class="line_exib_cad">
    <div class="div1 ">
        <table class="table table-dark table-responsive table-hover table-striped div2 text-center ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Valor Unitário</th>
                    <th scope="col">Unidade de Medida</th>
                    <th scope="col">Descrição de Produto</th>
                    <th scope="col">Detalhe do Produto</th>
                    <th scope="col">Data e hora do Cadastro</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produto as $produtos)
                    <tr>
                        <th scope="row">{{ $produtos->id_produto }}</th>
                        <td> {{ $produtos->marca }}</td>
                        <td>{{ $produtos->valor_u }}</td>
                        <td>{{ $produtos->unidade_m }}</td>
                        <td>{{ $produtos->desc_produto }}</td>
                        <td>{{ $produtos->det_produto }}</td>
                        <td>{{ $produtos->created_at }}</td>
                        <td><a href="#" class="text-light">Editar</a> | <a href="#" class="text-light">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a class="btn btn_exib_cad d-block mt-4 mb-5 p-2" href="/produtos">Voltar a Cadastrar</a>
</section>

@include('components.exibclientes.footer')
