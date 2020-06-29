@extends('layout.template')

@section('content')
    <div class="boxLogin">
        			
        <div class="box">
            <h1>@if(isset($book))Editar @else Cadastrar @endif</h1>
            
            @if (isset($errors) && count($errors)>0)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">
                    @foreach ($errors->all() as $erro)
                        {{$erro}}</br>
                    @endforeach
                </div>
            @endif
            
            @if (isset($book))
                <form method="POST" action="{{url("books/$book->id")}}">
                @method('PUT')
            @else
                <form method="POST" action="{{url("books")}}">
            @endif
                @csrf
                <input class="inputCadastro" type="string" name="title" id="title" placeholder="titulo:" value="{{$book->title ?? ''}}" required>
                <input class="inputCadastro" type="string" name="autor" id="autor" placeholder="autor:" value="{{$book->autor ?? ''}}" required>
                <input class="inputCadastro" type="integer" name="pages" id="pages" placeholder="paginas:" value="{{$book->pages ?? ''}}" required>
                <select class="inputCadastro" name="id_user" id="id_user" required>
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Usuário'}}</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                <input class="btnAcessarCad" type="submit" placeholder="Cadastrar" value="@if(isset($book))Editar @else Cadastrar @endif">
            </form>
            </div>    
    </div>
@endsection