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
     <title>Exibição de Produtos</title>
 </head>

 <body>
     <section class="exib_alig">
         <h1 class="text-center mt-5">Listgem dos Produtos Cadastrados</h1>
         <hr>
         <div class="div1 mb-5">
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
         <a class="btn btn_cad_produto d-block w-25 p-2" href="/produtos">Voltar a Cadastrar</a>
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
