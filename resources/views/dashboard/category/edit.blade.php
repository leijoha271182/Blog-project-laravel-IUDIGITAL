<<<<<<< HEAD
@extends('dashboard.layout')
=======
@extends('layouts.app')
>>>>>>> 9e61870a5aec3bea5d5005803aa863e7be327ab8
@section('content')
    <div class="content-wrapper">
        <h1>Actualizar categoría {{ $category->title }}</h1>
        @include('dashboard.fragment._errors-form')
        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @method('PATCH')
            @include('dashboard.category._form')
        </form>
    </div>
@endsection
