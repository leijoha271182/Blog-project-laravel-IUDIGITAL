<<<<<<< HEAD
@extends('dashboard.layout')
=======
@extends('layouts.app')
>>>>>>> 9e61870a5aec3bea5d5005803aa863e7be327ab8

@section('content')
    <a class="btn btn-success my-3" href="{{ route('posts.create') }}">Crear publicación</a>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Categoría</th>
                <th>Posted</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>{{ $p->title }}</td>
                    <td>{{ $p->category->title }}</td>
                    <td>{{ $p->posted }}</td>
                    <td width="10px">
                        <a class="btn btn-primary" href="{{ route('posts.edit', $p) }}">Editar</a>
                        <a class="btn btn-primary" href="{{ route('posts.show', $p) }}">Ver</a>
                        <form action="{{ route('posts.destroy', $p) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
