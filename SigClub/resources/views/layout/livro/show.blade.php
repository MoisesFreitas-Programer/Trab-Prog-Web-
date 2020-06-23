@extends('layout.template')

@section('content')
    <div class="col-8 m-auto visualizar">
        @php
            $user = $book->find($book->id)->relUsers;
        @endphp
        Titulo: {{$book->title}}</br>
        Nome: {{$book->name}}</br>
        Páginas: {{$book->pages}}</br>               
        Autor/Usuário: {{$user->name}}</br>
        Email: {{$user->email}}</br>
    </div>

@endsection