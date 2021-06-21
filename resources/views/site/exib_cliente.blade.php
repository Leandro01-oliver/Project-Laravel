   <h1>Clientes</h1>



   @foreach ($cliente as $clientes)

       {{ $clientes->nm }}
       <br>
       {{ $clientes->email }}
       <br>
       {{ $clientes->nm_pai }}
       <br>
       {{ $clientes->nm_mae }}
       <br>
       {{ $clientes->dt_nascimento }}
       <br>
       {{ $clientes->telefone }}
       <br>
       {{ $clientes->cpf }}
       <br>
       {{ $clientes->rg }}
       <br>
       {{ $clientes->cep }}
       <br>
       {{ $clientes->rua }}
       <br>
       {{ $clientes->bairro }}
       <br>
       {{ $clientes->cidade }}
       <br>
       {{ $clientes->rm }}
       <br>
       {{ $clientes->uf }}

   @endforeach
