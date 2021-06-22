  @include('components.produtos.head')
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
                          <a href="/" class="btn link_page">
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
          <form action="cad_produto" method="POST" class="alig_form">
              @csrf
              <div class="card ">
                  <div class="card-body">
                      <div class="text-center mt-3 ">
                          <h1 class="tilte_cad">
                              Cadastro de Produtos
                          </h1>
                          <hr class="line_cad">
                      </div>
                      <div class="text-center mt-3">
                          <label for="marca" class="">
                              Marca do Produto:
                          </label>
                      </div>
                      <div class="text-center mt-2">
                          <input type="text" class="form-control forms text-center @error('marca') is-invalid @enderror"
                              id="marca" name="marca" placeholder="Informe a marca do seu produto" maxlength="100">
                          @error('marca')
                              <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="text-center mt-3">
                          <label for="valor_u" class="">Valor unitário do Produto :</label>
                      </div>
                      <div class="text-center mt-2">
                          <input type="text"
                              class="form-control forms text-center @error('valor_u') is-invalid @enderror" id="valor_u"
                              name="valor_u" placeholder="Informe o valor unitário do produto " maxlength="100">
                          @error('valor_u')
                              <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="text-center mt-3">
                          <label for="unidade_m" class="">Unidade de Medida :</label>
                      </div>
                      <div class="text-center mt-2">
                          <input type="text"
                              class="form-control forms text-center @error('unidade_m') is-invalid @enderror"
                              id="unidade_m" name="unidade_m" placeholder="Informe a unidade de medida do produto"
                              maxlength="100">
                          @error('unidade_m')
                              <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="text-center mt-3">
                          <label for="desc_produto" class="">Descrição do Produto :</label>
                      </div>
                      <div class="text-center mt-2">
                          <textarea type="text"
                              class="form-control forms_text @error('desc_produto') is-invalid @enderror"
                              id="desc_produto" name="desc_produto" placeholder="Descreva o seu produto"
                              maxlength="100"></textarea>
                          @error('desc_produto')
                              <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="text-center mt-3">
                          <label for="det_produto" class="">Detalhes do Produto :</label>
                      </div>
                      <div class="text-center mt-2">
                          <textarea type="text"
                              class="form-control forms_text @error('det_produto') is-invalid @enderror"
                              id="det_produto" name="det_produto""
                            placeholder=" Detalhe o seu produto" maxlength="100"></textarea>
                          @error('det_produto')
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

  @include('components.produtos.footer')
