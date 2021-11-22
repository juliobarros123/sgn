@extends('layouts._includes.merge.site')
@section('titulo', 'Avea - Login')
@section('conteudo')

    <div class="main-container">
     

        <main class="login-body" data-vide-bg="assets/img/login-bg.mp4" style="position: relative;"><div style="position: absolute; z-index: -1; inset: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;"><video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; opacity: 1; width: auto; height: 532px;"><source src="assets/img/login-bg.mp4" type="video/mp4"><source src="assets/img/login-bg.webm" type="video/webm"><source src="assets/img/login-bg.ogv" type="video/ogg"></video></div>

            <form class="form-default" action="{{ route('login') }}" method="POST">
                @csrf
            <div class="login-form">
            
            <div class="logo-login">
            <a href="index.html"><img src="data:image/webp;base64,UklGRlQCAABXRUJQVlA4TEcCAAAvXcAIEAehsG3bhhn9H+i/rd9Q0EhSM0/Rg39NGOigoG0bKfvuwB2yI70wjm2rCQ3Av39FDitQy7QQW7OCVEKA0b8Fe6IyHE0JXQJaECjM+j6wifDqbu9l7rPutndLKZ90SEgkQoFRwJcE6kNFKF5v1XnG/SHbtt22jS5FdQlqriqQ9f+fmQCgqOnzFNF/Bm7bxpHb3YfXZNnegH9pfabjAm+Jd7hc4wgACzM/ox02RJRf8iAL81sN0c68H5iYmbdYt56+hQv0ZmZ+CAt3Zua3hH8WZtbjf2OhQ05+OsZN9FlY2e4/Gx/Zt4+y+pNxLLKP+EF4F0egP+b5PQLje56fOJ7zvJvxSdKqKryNL1siaksvXGRVVXYYaqoLp9nNPjIzryqLn6twtOhADa04tzFwJWnlADoioroSPgrFZu41LjSzqU2+ijkpaVxj+khlqLQq7V2dEQPPANBTmMr20SYG9kRdLQ6eANeGMIaoyeRl0wDJFazPpzSwAwOJaGZZrSl0JCDuUSqa3g95jwtW1gMqr1blvHaAqxXiBqWRCZUiUQMUdUi4NqngZgCQKiikLPwCnrjQKaYTDCdpk7NgNlo8tTNSFBDp1VZSZQdFVAWKIVWp0qv8NzNA6TQ4jOoZQ0IhGdk7eN8XbeMMzlf+JQpkYdDYPoowJ7zzEQWKMJ3to9ZEfHF3THb1vBv1dLMLXC2ySBSl1qJUtCf+FlR7AXh99XvA0WvjVVV/X9TUZMhbagZhJClave7kY9dD1J/Oj5D32eA9/hMJAA==" alt="" data-pagespeed-url-hash="853362567" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>

            
            <h2>Aceder a minha conta</h2>
            
            <div class="form-input">
            <label for="name">Email</label>
            <input type="email" name="vc_email" placeholder="Endereço de email">
            </div>
            <div class="form-input">
            <label for="name">Palavra passe</label>
            <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-input pt-30">
            <input type="submit" name="submit" value="Entrar">
            </div>
     
            <a href="{{ url('register') }}" class="registration">Registar</a>
            </div>
            </form>
            
            </main>
    </div>

@endsection
