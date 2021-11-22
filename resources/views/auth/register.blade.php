@extends('layouts._includes.merge.site')

@section('titulo', 'Usuário/Cadastrar')

@section('conteudo')

    <div class="card shadow mb-4">
        <div class="card-body">


            <main class="login-body" data-vide-bg="assets/img/login-bg.mp4" style="position: relative;">
                <div
                    style="position: absolute; z-index: -1; inset: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;">
                    <video autoplay="" loop="" muted=""
                        style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; opacity: 1; width: auto; height: 532px;">
                        <source src="assets/img/login-bg.mp4" type="video/mp4">
                        <source src="assets/img/login-bg.webm" type="video/webm">
                        <source src="assets/img/login-bg.ogv" type="video/ogg">
                    </video></div>

                <form method="POST" action="{{ route('encarregado.salvar') }}" class="ml-3 d-flex justify-content-center" style="margin-top:10%"
                    enctype="multipart/form-data">
                    @csrf
                    <div class=" card" style="width: 70%!important;background: rgba(0,0,0,0.4);">
                        <div class="card-body">
                            {{-- <div class="logo-login">
                                <a href="index.html"><img
                                        src="data:image/webp;base64,UklGRlQCAABXRUJQVlA4TEcCAAAvXcAIEAehsG3bhhn9H+i/rd9Q0EhSM0/Rg39NGOigoG0bKfvuwB2yI70wjm2rCQ3Av39FDitQy7QQW7OCVEKA0b8Fe6IyHE0JXQJaECjM+j6wifDqbu9l7rPutndLKZ90SEgkQoFRwJcE6kNFKF5v1XnG/SHbtt22jS5FdQlqriqQ9f+fmQCgqOnzFNF/Bm7bxpHb3YfXZNnegH9pfabjAm+Jd7hc4wgACzM/ox02RJRf8iAL81sN0c68H5iYmbdYt56+hQv0ZmZ+CAt3Zua3hH8WZtbjf2OhQ05+OsZN9FlY2e4/Gx/Zt4+y+pNxLLKP+EF4F0egP+b5PQLje56fOJ7zvJvxSdKqKryNL1siaksvXGRVVXYYaqoLp9nNPjIzryqLn6twtOhADa04tzFwJWnlADoioroSPgrFZu41LjSzqU2+ijkpaVxj+khlqLQq7V2dEQPPANBTmMr20SYG9kRdLQ6eANeGMIaoyeRl0wDJFazPpzSwAwOJaGZZrSl0JCDuUSqa3g95jwtW1gMqr1blvHaAqxXiBqWRCZUiUQMUdUi4NqngZgCQKiikLPwCnrjQKaYTDCdpk7NgNlo8tTNSFBDp1VZSZQdFVAWKIVWp0qv8NzNA6TQ4jOoZQ0IhGdk7eN8XbeMMzlf+JQpkYdDYPoowJ7zzEQWKMJ3to9ZEfHF3THb1vBv1dLMLXC2ySBSl1qJUtCf+FlR7AXh99XvA0WvjVVV/X9TUZMhbagZhJClave7kY9dD1J/Oj5D32eA9/hMJAA=="
                                        alt="" data-pagespeed-url-hash="853362567"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            </div> --}}


                            <h2 class="text-center">Criar minha conta</h2>

                            <div class="form-input">

                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Carregue sua foto de Perfil</span>
                                    <input class="form-control" class="form-control" type="file" name="foto" required>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Primeiro Nome</span>
                                    <input class="form-control" class="" type="text"
                                        placeholder="Primeiro Nome" name="vc_primemiroNome" required>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Nomes do Meio</span>
                                    <input class="form-control" class="signup-name-field text-black" type="text"
                                        placeholder="Nomes do Meio">
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Apelido</span>
                                    <input class="form-control" class="signup-name-field text-black" name="vc_apelido"
                                        type="text" placeholder="Apelido" required autocomplete="off">
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Bilhete de Identidade</span>
                                    <input class="form-control" class="signup-name-field text-black" type="text"
                                        name="vc_BI" placeholder="Bilhete de Identidade" minlength="14" maxlength="14"
                                        required autocomplete="off">
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Gênero</span>
                                    <select class="text-black" name="vc_genero" required>
                                        <option disabled value="" selected>selecione o gênero</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                    </select>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Telefone</span>
                                    <input class="form-control" class="signup-number-field text-black" type="number"
                                        placeholder="Telefone" name="vc_telefone" required min="900000000" max="1000000000"
                                        maxlength="9" autocomplete="off">
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Data de Nascimento</span>
                                    <input class="form-control" class="signup-date-field text-black" type="date"
                                        placeholder="Data de Nascimento">
                                </div>

                                {{-- <div class="col-md-12">

                        <h4 class="text-white">
                            <b>Dados da Conta</b>
                            <hr>
                        </h4>
                    </div> --}}

                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Nome de Utilizador</span>
                                    <input class="form-control" class="signup-name-field text-black" type="text"
                                        placeholder="Nome de Utilizador" name="vc_nomeUtilizador" required
                                        autocomplete="off">
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Endereço de Email</span>
                                    <input class="form-control" class="form-email text-black" type="email"
                                        placeholder="Endereço de Email" name="vc_email" required autocomplete="off">
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Senha</span>
                                    <input class="form-control" class="form-password text-black" type="password"
                                        placeholder="Senha" name="password" required>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <span class="text-white">Confirmar a Senha</span>
                                    <input class="form-control" class="form-password2 text-black" type="password"
                                        placeholder="Confirmar a Senha" name="password_confirmation" required>
                                </div>

                                <div class="d-flex justify-content-center col-sm-12 pt-4 " style="margin-top:5%">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Criar conta">
                                </div>


                            </div>

                        </div>
                    </div>
                </form>

            </main>
        </div>
    </div>

@endsection
