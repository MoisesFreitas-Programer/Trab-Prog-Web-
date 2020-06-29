@extends('layout.template')

@section('content')
    <div class="boxLogin">
        			
        <div class="box">
            <h1>Entrar</h1>
            <form method="POST" action="{{route('home.login.do')}}"> 
                @csrf
                <input type="email" name="email" id="email" value="testar@gmail.com" placeholder="Email de Usuário" required>
                <input type="password" name="password" id="password" placeholder="Senha" required>
                <input class="btnAcessar" type="submit" placeholder="Enviar">
            </form>
            <a href="{{url("users/create")}}"> Ainda não possui cadastro?<strong>'Faça o seu!'</strong></a>
        </div>    
    </div>
@endsection