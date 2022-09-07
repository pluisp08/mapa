@extends('app-login')
@section('content')
<main class="sesion p-y-1">
        <div class="formulario-sesion">
            <div class="login-page">
                <div class="form1">
                  <form class="register-form">
                    <input type="text" placeholder="name"/>
                    <input type="password" placeholder="password"/>
                    <input type="text" placeholder="email address"/>
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                  </form>
                  <form class="login-form">
                    <input type="text" placeholder="nombre de usuario"/>
                    <input type="password" placeholder="password"/>
                    <button>login</button>
                    <p class="message"> <a href="#">Olvido su Contraseña?</a></p>
                  </form>
                </div>
              </div>
        </div>
    </main>
    
    @endsection