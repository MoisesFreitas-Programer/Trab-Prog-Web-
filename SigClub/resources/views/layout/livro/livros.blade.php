@extends('layout.template')

@section('content')
    <div class="col-8 m-auto">
        @csrf
        <table class="table table-dark text-center">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor/Usuário</th>
                <th scope="col">Paginas</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($book as $books)
                @php
                    $user = $books->find($books->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$books->id}}</th>
                    <td>{{$books->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$books->pages}}</td>
                    <td>
                        <a href="{{url("books/$books->id")}}" class="btn btn-dark">Visualizar</a>
                        <a href="{{url("books/$books->id/edit")}}" class="btn btn-primary">Editar</a>
                        <a href="{{url("books/$books->id")}}" class="js-del btn btn-danger">Deletar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center">
    <a href="{{url("books/create")}}" class="btn btn-sucess">Cadastrar </a>
    </div>
@endsection