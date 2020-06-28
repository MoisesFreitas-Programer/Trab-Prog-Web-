@extends('layout.template')

@section('content')
    <div class="boxLogin">
        			
        <div class="box">
            <h1>@if(isset($users))Editar @else Cadastrar @endif</h1>

            @if (isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}</br>
                @endforeach
            </div>
            @endif
            
            @if (isset($users))
                <form method="POST" action="{{url("users/$users->id")}}">
                @method('PUT')
            @else
                <form method="post" action="{{url('users')}}">
            @endif
                @csrf
                <input class="inputCadastro" type="text" name="name" id="name" placeholder="Nome" required>
                <input class="inputCadastro" type="text" name="email" id="email" placeholder="Email" required>
                <input class="inputCadastro" type="text" name="password" id="password" placeholder="Senha" required>
                <input class="inputCadastro" type="text" name="celular" id="celular" placeholder="celular" required>
                <input class="btnAcessarCad" type="submit" placeholder="Cadastrar" value="@if(isset($users))Editar @else Cadastrar @endif">
            </form>
            <a href="../login"> Já possui cadastro? <strong> Login!</strong></a>
        </div>    
    </div>
@endsection