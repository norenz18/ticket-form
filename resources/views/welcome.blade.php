@extends('layouts.app')

@section('content')
    
        <div class="container-fluid col-lg-12 welcome-page ">

            <img src="img/hsiTitle.png" alt="" id="welcome-banner">
            <p><a href="{{ route('tickets.index') }}" class="btn btn-lg btn-dark">Explore more</a></p>
        </div>


@endsection