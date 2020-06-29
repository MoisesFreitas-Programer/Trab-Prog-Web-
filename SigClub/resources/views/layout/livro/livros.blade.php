@extends('layout.template')

@section('content')
    <div class="text-center">
        <a href="{{url("books/create")}}" tyep="button" class="btn btn-sucess">Cadastrar </a>
    </div>
    <div class="col-8 m-auto">
        @csrf
        <table class="table table-dark text-center">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Usuário</th>
                <th scope="col">Autor</th>
                <th scope="col">Titulo</th>
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
                    <td>{{$user->name}}</td>
                    <td>{{$books->autor}}</td>
                    <td>{{$books->title}}</td>
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
        <a href="{{route('home.logout')}}" tyep="button" class="btn btn-light">Logout</a>
    </div>
@endsection