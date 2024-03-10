@extends('layouts.bars')
@section('bars')
    <link rel="stylesheet" href="{{asset('css/Login.css')}}">
<body>
<div class="login">
    <h1 class="log-header">Log in</h1>
    <form class="log-field" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="log-fields">
            <label class="log-label">Your email</label>
            <input class = "log-input @error('email') is-invalid @enderror" name="email" type = "text" placeholder="Enter email...">

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label class="log-label">Your password</label>
            <input class = "log-input @error('password') is-invalid @enderror" name="password" type = "password" placeholder="Confirm password...">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="buttons">
            <button class="but-log"><u>Log in</u></button>
            <a href="{{route('createAccount')}}" class="but-reg"><u>Create account</u></a>
        </div>
    </form>
</div>
</body>
@endsection
