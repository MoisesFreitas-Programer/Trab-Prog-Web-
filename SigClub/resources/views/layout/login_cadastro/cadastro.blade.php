@extends('layout.template')

@section('content')
    <div class="boxLogin">
        			
        <div class="box">
            <h1>Cadastro</h1>
            <form method="POST" action="{{url('users')}}">
                @csrf
                <input class="inputCadastro" type="nome" placeholder="Nome" required>
                <input class="inputCadastro" type="email" placeholder="Email" required>
                <input class="inputCadastro" type="password" placeholder="Senha" required>
                <input class="inputCadastro" type="integer" placeholder="celular" required>
            </form>
            <a href="{{url('')}}">
                <input class="btnAcessarCad" type="submit" placeholder="Cadastrar" value="Cadastrar">
            </a> 
            <a href="../login"> Já possui cadastro? <strong> Login!</strong></a>
        </div>    
    </div>
@endsection