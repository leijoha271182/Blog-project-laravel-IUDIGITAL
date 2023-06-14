<<<<<<< HEAD
@extends('dashboard.layout')
=======
@extends('layouts.app')
>>>>>>> 9e61870a5aec3bea5d5005803aa863e7be327ab8

@section('content')
    <h1>Crear de Categoría de publicaciones</h1>
    @include('dashboard.fragment._errors-form')
    <form action="{{ route('categories.store') }}" method="post">
        @include('dashboard.category._form')
    </form>
@endsection
