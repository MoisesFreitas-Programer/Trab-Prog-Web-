@extends('layout.template')

@section('content')
    <div class="col-8 m-auto visualizar">
        @php
            $user = $book->find($book->id)->relUsers;
        @endphp
        Autor: {{$book->autor}}</br>
        Titulo: {{$book->title}}</br>
        Páginas: {{$book->pages}}</br>               
        Usuário: {{$user->name}}</br>
        Email: {{$user->email}}</br>
    </div>
    <div class="text-center">
        <a href="{{route('teste.livros')}}" tyep="button" class="btn btn-primary">Voltar</a>
    </div>

@endsection

