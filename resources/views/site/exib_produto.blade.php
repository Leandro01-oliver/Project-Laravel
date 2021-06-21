    <h1>Produtos</h1>



    @foreach ($produto as $produtos)

        {{ $produtos->marca }}
        <br>
        {{ $produtos->valor_u }}
        <br>
        {{ $produtos->unidade_m }}
        <br>
        {{ $produtos->desc_produto }}
        <br>
        {{ $produtos->det_produto }}

    @endforeach
