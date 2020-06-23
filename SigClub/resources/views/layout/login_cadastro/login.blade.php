@extends('layout.template')

@section('content')
    <div class="boxLogin">
        			
        <div class="box">
            <h1>Entrar</h1>
            <form method="POST" action="processa.php"> 
                <input type="email" placeholder="Usuário" required>
                <input type="password" placeholder="Senha" required>
            </form>
            <input class="btnAcessar" type="submit" placeholder="Enviar">
            <a href="{{url('users/create')}}"> Ainda não possui cadastro?<strong>'Faça o seu!'</strong></a>
        </div>    
    </div>
@endsection