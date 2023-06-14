<<<<<<< HEAD
@extends('dashboard.layout')
=======
@extends('layouts.app')
>>>>>>> 9e61870a5aec3bea5d5005803aa863e7be327ab8
@section('content')
    <div class="content-wrapper">
        <h1>Actualizar publicación {{ $post->title }}</h1>
        @include('dashboard.fragment._errors-form')
        <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @include('dashboard.post._form')
        </form>
    </div>
@endsection
