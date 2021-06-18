@foreach ($tb_cliente as $tb_clientes)
    {{ $tb_cliente->nm }} -- {{ $tb_cliente->email }} -- {{ $tb_cliente->nm_pai }} --
    {{ $tb_cliente->nm_mae }} -- {{ $tb_cliente->dt_nascimento }} -- {{ $tb_cliente->telefone }} --
    {{ $tb_cliente->cpf }} -- {{ $tb_cliente->rg }} -- {{ $tb_cliente->cep }} --
    {{ $tb_cliente->rua }} -- {{ $tb_cliente->bairro }} -- {{ $tb_cliente->cidade }} --
    {{ $tb_cliente->rm }} -- {{ $tb_cliente->uf }}
@foreach
