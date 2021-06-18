@foreach ($tb_produto as $tb_produtos)
    {{ $tb_produto->marca }} -- {{ $tb_produto->valor_u }} -- {{ $tb_produto->unidade_m }}
    -- {{ $tb_produto->desc_produto }} -- {{ $tb_produto->det_produto }}
@foreach
