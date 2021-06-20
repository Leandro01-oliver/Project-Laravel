@foreach ($produto as $produto)
    {{ $produto->marca }} -- {{ $produto->valor_u }} -- {{ $produto->unidade_m }}
    -- {{ $produto->desc_produto }} -- {{ $produto->det_produto }}
    @foreach
