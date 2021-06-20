@foreach ($cliente as $cliente)
    {{ $cliente->nm }} -- {{ $cliente->email }} -- {{ $cliente->nm_pai }} --
    {{ $cliente->nm_mae }} -- {{ $cliente->dt_nascimento }} -- {{ $cliente->telefone }} --
    {{ $cliente->cpf }} -- {{ $cliente->rg }} -- {{ $cliente->cep }} --
    {{ $cliente->rua }} -- {{ $cliente->bairro }} -- {{ $cliente->cidade }} --
    {{ $cliente->rm }} -- {{ $cliente->uf }}
    @foreach
