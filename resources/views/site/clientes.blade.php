 @include('components.clientes.head')
 <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
         <div class="container-fluid">
             <a href="" class=""></a>
             <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                 aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse justify-content-center" id="navbarScroll">
                 <ul class="navbar-nav   navbar-nav-scroll redirection_page ">
                     <li class="nav-item">
                         <a href="/" class="btn  link_page">
                             Voltar
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </header>

 <main>
     <section class="container-fluid alig_custom_form">
         <form action="/cad_cliente" method="POST" class="alig_form">
             @csrf
             <div class="card ">
                 <div class="card-body">
                     <div class="text-center mt-3 ">
                         <h1 class="tilte_cad">
                             Cadastro de Clientes
                         </h1>
                     </div>
                     <hr class="line_cad">
                     <div class="text-center mt-3">
                         <label for="nm" class="">
                             Nome :
                         </label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center  @error('nm') is-invalid @enderror"
                             id="nm" name="nm" placeholder="Informe seu nome completo" maxlength="100">
                         @error('nm')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="email" class="">Email :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="email" class="form-control forms text-center @error('email') is-invalid @enderror"
                             id="email" name="email" placeholder="Informe o seu email" maxlength="60">
                         @error('email')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="nm_pai" class="">Nome do pai :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('nm_pai') is-invalid @enderror"
                             id="nm_pai" name="nm_pai" placeholder="Informe o nome do seu pai" maxlength="60">
                         @error('nm_pai')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="nm_mae" class="">Nome da mãe :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('nm_mae') is-invalid @enderror"
                             id="nm_mae" name="nm_mae" placeholder="Informe o nome da sua mãe" maxlength="60">
                         @error('nm_mae')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="dt_nascimento" class="">Data de Nascimento :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="date"
                             class="form-control forms text-center @error('dt_nascimento') is-invalid @enderror"
                             id="dt_nascimento" name="dt_nascimento" placeholder="Informe o nome da sua mãe">
                         @error('dt_nascimento')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="telefone" class="">Telefone :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="tel"
                             class="form-control forms text-center  @error('telefone') is-invalid @enderror"
                             id="telefone" name="telefone" placeholder="Informe o seu telefone" maxlength="15">
                         @error('telefone')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="cpf" class="">CPF :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('cpf') is-invalid @enderror"
                             id="cpf" name="cpf" placeholder="Informe o seu CPF" maxlength="14">
                         @error('cpf')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="rg" class="">RG :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('rg') is-invalid @enderror"
                             id="rg" name="rg" placeholder="Informe o seu RG">
                         @error('rg')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="cep" class="">CEP :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('cep') is-invalid @enderror"
                             id="cep" name="cep" placeholder="Informe o seu CEP" maxlength="25">
                         @error('cep')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="rua" class="">Rua :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('rua') is-invalid @enderror"
                             id="rua" name="rua" placeholder="Informe a sua rua" maxlength="100">
                         @error('rua')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="bairro" class="">Bairro :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('bairro') is-invalid @enderror"
                             id="bairro" name="bairro" placeholder="Informe o seu bairro" maxlength="100">
                         @error('bairro')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="cidade" class="">Cidade :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('cidade') is-invalid @enderror"
                             id="cidade" name="cidade" placeholder="Informe a sua cidade" maxlength="50">
                         @error('cidade')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="uf" class="">UF :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('uf') is-invalid @enderror"
                             id="uf" name="uf" placeholder="Informe o seu estado ex. Rondônia - (RO)" maxlength="50">
                         @error('uf')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-3">
                         <label for="rm" class="">Renda Mensal :</label>
                     </div>
                     <div class="text-center mt-2">
                         <input type="text" class="form-control forms text-center @error('rm') is-invalid @enderror"
                             id="rm" name="rm" placeholder="Informe a sua renda mensal" maxlength="100">
                         @error('rm')
                             <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                 {{ $message }}
                             </div>
                         @enderror
                     </div>
                     <div class="text-center mt-4 mb-3">
                         <button type="submit" class="btn btn_cad">Cadastrar</button>
                         <input type="text" name="created_at" id="created_at" hidden
                             value="<?php echo date('d-m-Y H:s'); ?>">
                     </div>
                 </div>
             </div>
         </form>
     </section>
 </main>
 @include('components.clientes.footer')
