@extends('layouts.app')

@section('content')

        <div class="container-fluid col-lg-12 welcome-page" >

            <div class="container col-lg-12 justify-content-center">
                <div class="container d-flex justify-content-center mt-3">
                    <img src="img/hsi-img.png" alt="hsi-img" id="hsi-img">
                </div>

                <h1 class="text-center text-muted font-weight-bold">LOGIN</h1>
                <form action="{{ route('login')}}" method="POST">

                    @csrf
                        {{-- <div class="col-md-4 mx-auto">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" class="form-control @error('name') border border-danger @enderror" placeholder="name" value="{{ old('name') }}" >

                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="col-md-4 mx-auto">
                            <label for="name">Username</label>
                            <input id="username" name="username" type="text" class="form-control @error('username') border border-danger @enderror" placeholder="username" value="{{ old('username') }}" >

                            @error('username')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- <div class="col-md-4 mx-auto">
                            <label for="exampleInputEmail1">Email address</label>
                            <input id="email" name="email" type="email" class="form-control @error('email') border border-danger @enderror"  aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">

                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="col-md-4 mx-auto">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="form-control @error('password') border border-danger @enderror" id="password" name="password" placeholder="Password">

                        @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>

                        {{-- <div class="col-md-4 mx-auto">
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password" name="password_confirmation" type="password" class="form-control @error('password_confirmation') border border-danger @enderror" id="password" name="password" placeholder="Repeat password">

                            @error('password_confirmation')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="col-md-4 mx-auto mt-3 mb-3">
                            <button type="submit" class="btn btn-md btn-block" id="form-btn">Login</button>
                        </div>

                </form>
            </div>
        </div>


@endsection
