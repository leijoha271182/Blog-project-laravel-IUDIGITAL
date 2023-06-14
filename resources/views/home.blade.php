@extends('layouts.app')

@section('content')
<<<<<<< HEAD
=======
<div class="container">
>>>>>>> 9e61870a5aec3bea5d5005803aa863e7be327ab8
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
</div>
>>>>>>> 9e61870a5aec3bea5d5005803aa863e7be327ab8
@endsection
